<div class="row">

    <div class="col-6">
        <h4>Mes Parrains <span class="badge badge-info right">{{ $user->parentCount() }}</span></h4>

        <div class="info-box bg-light">
            <div class="info-box-content">
                <span class="info-box-text text-center text-muted">Soit</span>
                <span class="info-box-number text-center text-muted mb-0">{{ $user->valueParentsPayment() }} €</span>
            </div>
        </div>

        @if( null != $user->getAllParentsLimit() )

            @foreach($user->getAllParentsLimit() as $parent)
            <div class="post">  
                <a href="#">{{ $parent->name }}</a>
                <p> <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> {{ $parent->created_at }}</a> </p>
            </div>
            @endforeach

            <button type="button" class="btn btn-block bg-gradient-info btn-lg">Voir tout</button>

        @else
            <div class="post">  
                <a href="#">Aucun parrains</a>
            </div>
        @endif


    </div>

    <div class="col-6">
        <h4>Mes Filleuls <span class="badge badge-info right">{{ $user->parentCount() }}</span></h4>

        <div class="info-box bg-light">
            <div class="info-box-content">
                <span class="info-box-text text-center text-muted">Soit</span>
                <span class="info-box-number text-center text-muted mb-0">{{ $user->valueSonsPayment() }} €</span>
            </div>
        </div>

        @if( null != $user->getAllSonsLimit() )

            @foreach($user->getAllSonsLimit() as $sons)
            <div class="post">  
                <a href="#">{{ $sons->name }}</a>
                <p> <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> {{ $sons->created_at }}</a> </p>
            </div>
            @endforeach

            <button type="button" class="btn btn-block bg-gradient-info btn-lg">Voir tout</button>

        @else
            <div class="post">  
                <a href="#">Aucun filleuls</a>
            </div>
        @endif
        
    </div>

</div>