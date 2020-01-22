<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom du rôle') !!}
    {!! Form::text('name', null, ['placeholder' => 'Name','class' => 'form-control']) !!}
</div>

<!-- Roles type Field -->
<div class="form-group col-sm-12">
    <div class="form-group">
        <strong>Permission :</strong>
        <br/>

        @foreach($permission as $value)
            <label>{{ Form::checkbox('permission[]', $value->id, 
            in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
            {{ $value->name }}</label><br/>
        @endforeach
        
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
</div>
