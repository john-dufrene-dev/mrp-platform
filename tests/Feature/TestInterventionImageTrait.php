<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestInterventionImageTrait extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Create model record
     *
     * @param array $input
     *
     * @return Model
     */
    public function createWithImage($request)
    {
        $originalImage = $request->file('image');

        $thumbnailPath = storage_path('app').'/public/thumbnail/';
        $originalPath = storage_path('app').'/public/images/';
        if(!File::exists($thumbnailPath)) File::makeDirectory($thumbnailPath, 755);
        if(!File::exists($originalPath)) File::makeDirectory($originalPath, 755);

        $thumbnailImage = Image::make($originalImage);
        
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

        $model = $this->model->newInstance($request->all());
        $model->image = time().$originalImage->getClientOriginalName();

        $model->save();

        return $model;
    }
}
