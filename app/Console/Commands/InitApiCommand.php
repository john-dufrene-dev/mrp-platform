<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Yajra\DataTables\ButtonsServiceProvider;
use Symfony\Component\Console\Input\InputOption;
use Appointer\Swaggervel\SwaggervelServiceProvider;

class InitApiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api-product:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to init api-product-platform Project';

    protected function getOptions()
    {
        return [
            ['production', null, InputOption::VALUE_NONE, 
            'Yarn must be install in your environnement you can alternatively change to npm', null],
        ];
    }

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Installation api-product-platform');

        $this->info('Publish Datatables Dummy');
        $this->call('vendor:publish', ['--provider' => ButtonsServiceProvider::class]);

        $this->call('migrate');

        $this->call('db:seed');

        $this->info('Generate jwt token secret');
        $this->call('jwt:secret');

        // if ($this->option('prod')) {
        //     $this->info('Compiling assets in production');
        //     $process = new Process('yarn prod');
        //     $process->setTimeout(null); // Setting timeout to null to prevent installation from stopping at a certain point in time
        //     $process->setWorkingDirectory(base_path())->run();
        // }

        $this->info('Successfully installed Platform! Enjoy');
    }
}
