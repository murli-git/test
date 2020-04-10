<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="form-submit" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>

{!! Form::open(array('url' => 'form-submit')) !!}
	{{ Form::label('name','First Name') }}
		{{ Form::input('fname','') }}
	{{ Form::label('name', 'Last Name') }}
		{{ Form::input('lname','') }}
			{{ Form::submit('Submit') }}
{!! Form::close() !!}
