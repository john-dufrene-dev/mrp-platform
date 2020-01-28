@extends('adminlte::page')

@section('content')
    
    @include('account.methods.create')
    @include('account.methods.table')

@endsection

@section('js')

    @parent
    @include('account.methods.stripe_js')

@endsection