<div class="card card-default col-md-6">

    <div class="card-header">
        <h3 class="card-title">Méthode de paiements</h3>
    </div>

    {!! Form::open([ 'id' => 'form-method-payment' ,'route' => 'methods.store']) !!}

    <div class="card-body">

        <div class="row">
            <div class="form-group col-sm-12" id="error-method-payment"></div>
            @include('account.methods.fields')
        </div>   
        
    </div>

    {!! Form::close() !!}

</div>