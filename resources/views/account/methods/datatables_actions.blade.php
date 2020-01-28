{!! Form::open(['route' => ['methods.destroy', 'id' => $method['id']], 'method' => 'delete']) !!}
<div class='btn-group'>
    {!! Form::button('<i class="fas fa-trash-alt"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Êtes-vous sur de vouloir supprimer cette méthode de paiement ?')"
    ]) !!}
</div>
{!! Form::close() !!}
