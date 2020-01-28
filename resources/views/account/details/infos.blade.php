<div class="card card-info card-outline">
    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="https://placehold.it/150x150" alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">{{ $user->username() }}</h3>

        <p class="text-muted text-center">{{ $user->sponsor() }}</p>

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <b>Parrains <span class="badge badge-info right">{{ $user->parentCount() }}</span></b> <a class="float-right"> soit {{ $user->valueParentsPayment() }} €</a>
            </li>
            <li class="list-group-item">
                <b>Filleuls <span class="badge badge-info right">{{ $user->sonCount() }}</span></b> <a class="float-right"> soit {{ $user->valueSonsPayment() }} €</a>
            </li>
            <li class="list-group-item">
                <b>Total</b> <a class="float-right">{{ $user->totalPayment() }} €</a>
            </li>
        </ul>

    </div>
</div>

<div class="card card-info">

    <div class="card-header">
        <h3 class="card-title">Informations</h3>
    </div>

    <div class="card-body">
        <strong><i class="fas fa-book mr-1"></i> Subscription</strong>
        <p class="text-muted">Lorem ipsum dolor velit dolor sunt harum maxime.</p>
        <hr> 
        <strong><i class="fas fa-book mr-1"></i> Payment method</strong>
        <p class="text-muted">Lorem ipsum dolor velit dolor sunt harum maxime.</p>
        <hr>  
    </div>
</div>