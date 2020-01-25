<div class="form-group">
    <strong>Name :</strong>
    {{ $role->name }}
</div>

<div class="form-group">
    <strong>Permissions :</strong>
    @if(!empty($rolePermissions))
        @foreach($rolePermissions as $v)
            <span class="badge badge-pill badge-info"> {{ $v->name }} </span>
        @endforeach
    @endif
</div>

