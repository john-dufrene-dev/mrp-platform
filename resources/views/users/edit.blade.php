@extends('adminlte::page')

@section('content')

<div class="card card-default">
    <div class="card-header">

        <h3 class="card-title">Users</h3>

    </div>

    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

    <div class="card-body">
        <div class="row">
            @include('users.fields')
        </div>
    </div>

    {!! Form::close() !!}

</div>

@endsection