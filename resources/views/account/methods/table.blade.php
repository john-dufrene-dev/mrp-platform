<div class="card card-default">

    <div class="card-header">
        <h3 class="card-title">Méthode de paiements</h3>
    </div>

    <div class="card-body">
        <div class="row">
            @if($methods)
            <div class="col-12 table-responsive">
                <table class="table table-striped">
        
                    <thead>
                        <tr>
                            <th>Brand</th>
                            <th>Carte</th>
                            <th>Expiration</th>
                            <th>Défaut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        @foreach($methods as $method)
                        <tr>
                            <td>{{$method['brand']}}</td>
                            <td>**** **** **** {{$method['last_four']}}</td>
                            <td>{{$method['exp_month']}} / {{$method['exp_year']}}</td>
                            <td>IN PROGRESS</td>
                            <td>@include('account.methods.datatables_actions')</td>
                        </tr>
                        @endforeach
                    </tbody>
        
                </table>
              </div>
                
            @else
                <!-- No payment method Field -->
                <div class="form-group">
                    {!! Form::label('payment-method', 'Méthodes de paiement :') !!}
                    <p>Aucune méthodes de paiement enregistrées</p>
                </div>
            @endif
        </div>
    </div> 

</div>
