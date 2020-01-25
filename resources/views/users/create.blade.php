@extends('adminlte::page')

@section('content')

<div class="card card-default">
    <div class="card-header">

        <h3 class="card-title">Users</h3>

    </div>

    {!! Form::open(['route' => 'users.store']) !!}

    <div class="card-body">
        <div class="row">
            @include('users.fields')
        </div>
    </div>

    {!! Form::close() !!}

@endsection