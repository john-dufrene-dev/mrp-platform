@extends('adminlte::page')

@section('content')

<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                @include('account.partials.infos')

            </div>

            <div class="col-md-9">
                <div class="card">

                    @if( auth()->check() )
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-content">

                            <div class="tab-pane active" id="activity">
                                @include('account.partials.items.activities')
                            </div>
                        
                            <div class="tab-pane" id="settings">
                                @include('account.partials.items.settings')
                            </div>

                        </div>
                    </div>
                    @else
                        In progress
                    @endif

                </div>
            </div>

        </div>

    </div>

</section>

@endsection
