@extends('layouts.fontend')
@section('content')
<div class="alert alert-warning fade in block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="icon-info"></i> {{ Session::get('message') }}
                </div>
<div>
	{{ Form::open(array('url' => 'users')) }}

	<div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', Input::old('password'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Register', array('class' => 'btn')) }}
</div>
@stop