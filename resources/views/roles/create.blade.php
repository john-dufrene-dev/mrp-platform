@extends('adminlte::page')

@section('content')

<div class="card card-default">
    <div class="card-header">

        <h3 class="card-title">Roles</h3>
        @include('adminlte-templates::common.errors')

    </div>

    {!! Form::open(['route' => 'roles.store']) !!}

    <div class="card-body">
        <div class="row">
            @include('roles.fields')
        </div>
    </div>

    {!! Form::close() !!}

</div>

@endsection