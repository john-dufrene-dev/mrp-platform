@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1 class="float-left">Roles</h1>

        @can('role-create')
        <h2 class="float-right">
           <a class="btn btn-primary float-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('roles.create') !!}">Add New</a>
        </h2>
        @endcan
        
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('roles.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


