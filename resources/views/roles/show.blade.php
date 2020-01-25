@extends('adminlte::page')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User</h3>
            <div class="card-tools">

            <a href="{!! route('roles.index') !!}" class="btn btn-infos">Back</a>
        </div>
    </div>

    <div class="card-body">
        @include('roles.show_fields')
    </div>
       
@endsection
