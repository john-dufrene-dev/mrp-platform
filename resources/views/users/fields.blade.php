<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['autocomplete' => 'on', 'class' => 'form-control']) !!}
</div>

<!-- Confirmation Password Field -->
<div class="form-group col-sm-6">
      {!! Form::label('password', 'Password Confirmation') !!}
      {!! Form::password('password_confirmation', ['autocomplete' => 'on', 'class' => 'form-control']) !!}
</div>

<!-- Roles Field -->
<div class="form-group col-sm-12">
    {{Route::is('users.edit')}}
    {!! Form::label('roles', 'Roles') !!}
    {!! Form::select('roles[]', $roles, $choice = (Route::is('users.edit')) 
        ? $userRole 
        : false, ['class' => 'form-control', 'multiple']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
