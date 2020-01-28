<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('card-holder-name', 'Name') !!}
    {!! Form::text('card-holder-name', null, ['required', 'class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('card-holder-email', 'Email') !!}
    {!! Form::email('card-holder-email', null, ['required', 'class' => 'form-control']) !!}
</div>

<!-- Stripe Elements Placeholder -->
<div class="form-group col-sm-12">
    {!! Form::label('card-holder-name', 'Renseigner votre carte') !!}
    <div id="card-element"></div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Ajouter une méthode de paiement', [
        'data-secret' => $intent->client_secret,
        'id' => 'card-button', 
        'class' => 'btn btn-info btn-block',
    ]) !!}
</div>