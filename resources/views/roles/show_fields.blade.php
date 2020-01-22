<div class="form-group">
    <strong>Name :</strong>
    {{ $role->name }}
</div>

<div class="form-group">
    <strong>Permissions :</strong>
    @if(!empty($rolePermissions))
        @foreach($rolePermissions as $v)
            <label class="label label-success">{{ $v->name }},</label>
        @endforeach
    @endif
</div>

