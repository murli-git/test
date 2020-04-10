<!DOCTYPE html>
<html>
<body>

<h2>Validation Forms</h2>
	

{!! Form::open(array('url' => 'form-submit')) !!}

	{{ Form::label('name','First Name') }}
		{{ Form::input('fname','') }}
		@error('fname')
			<div class="error">{{ $message }}</div>
		@enderror
	{{ Form::label('name', 'Last Name') }}
		{{ Form::input('lname','') }}
		@if($errors->has('lname'))
			<div class="error">{{ $errors->first('lname') }}</div>
		@endif
		
			{{ Form::submit('Submit') }}
{!! Form::close() !!}
