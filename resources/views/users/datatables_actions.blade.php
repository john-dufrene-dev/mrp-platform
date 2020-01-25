{!! Form::open(['route' => ['users.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('users.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="far fa-eye"></i>
    </a>
    <a href="{{ route('users.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="fas fa-fw fa-edit "></i>
    </a>
    {!! Form::button('<i class="fas fa-trash-alt"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}