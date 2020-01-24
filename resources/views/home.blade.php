@extends('layouts.app')

@section('content')

<section class="content-header">

    <h1 class="pull-left">Account</h1>
    
</section>

<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">

            <h3> Bienvenue <span> {{ $user->username() }} </span> </h3>

            <div>
                <h4>Votre numéro de parainage : {{ $user->sponsor() }} </h4>
            </div><hr>

            <div>
                <h4>@if($user->getParent()) Vous avez été parrainé par {{ $user->getParent()->name }}  
                @else Vous n'avez pas de parrain @endif </h4>
            </div><br>

            @if(!$user->getAllParents())
                <p>Vous n'avez pas de parrains <span class="badge"> {{ $user->parentCount() }} </span> </p><hr>
            @else
                <p>Félicitation vous êtes parrain ! <span class="badge"> {{ $user->parentCount() }} </span> </p>
                <ul>
                    @foreach($user->getAllParents() as $parent)
                    <li>{{ $parent->name }}</li>
                    @endforeach
                </ul>
                <p>Vos parrains vous rapportent {{ $user->valueParentsPayment() }} € </p><hr>
            @endif

            <div>
                <h4>@if($user->getParent()) Vous êtes le filleul de {{ $user->getParent()->name }}  
                @else Vous n'avez pas de filleuls @endif </h4>
            </div><br>

            @if(!$user->getAllParents())
                <p>Vous n'avez pas de filleuls <span class="badge"> {{ $user->sonCount() }} </span> </p><hr>
            @else
                <p>Félicitation vous êtes filleul ! <span class="badge"> {{ $user->sonCount() }} </span> </p>
                <ul>
                    @foreach($user->getAllSons() as $parent)
                    <li>{{ $parent->name }}</li>
                    @endforeach
                </ul>
                <p>Vos filleuls vous rapportent {{ $user->valueSonsPayment() }} € </p><hr>
            @endif

            <div>
                <h4>Total : {{ $user->totalPayment() }} € </h4>
            </div>

        </div>
    </div>
    <div class="text-center">
    
    </div>
</div>

@endsection
