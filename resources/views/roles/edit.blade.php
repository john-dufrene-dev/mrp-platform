@extends('adminlte::page')

@section('content')

<div class="card card-default">
    <div class="card-header">

        <h3 class="card-title">Roles</h3>

    </div>

    {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}

    <div class="card-body">
        <div class="row">
            @include('roles.fields')
        </div>
    </div>

    {!! Form::close() !!}

@endsection