
<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">


	@include('includes.sidebar')

	 {{ Form::open(array('url' => 'user/create/')) }}
		<h1>Register</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('firstName') }}
			{{ $errors->first('lastName') }}
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
			{{ $errors->first('confirmPassword') }}
		</p>

		<p>
			{{ Form::label('firstName', 'First Name') }}
			{{ Form::text('firstName', Input::old('firstName'), array('placeholder' => 'Mike', 'class' => 'form-control')) }}
		</p>

			<p>
			{{ Form::label('lastName', 'Last Name') }}
			{{ Form::text('lastName', Input::old('lastName'), array('placeholder' => 'Wright', 'class' => 'form-control')) }}
		</p>


			<p>
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', Input::old('username'), array('placeholder' => 'Wright', 'class' => 'form-control')) }}
		</p>

			<p>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class' => 'form-control')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', array( 'class' => 'form-control')) }}
		</p>

			<p>
			{{ Form::label('confirmPassword', 'Confirm Password') }}
			{{ Form::password('confirmPassword', array( 'class' => 'form-control')) }}
		</p>

		<p>{{ Form::submit('Submit!', array( 'class' => 'btn btn-primary')) }}</p>
	{{ Form::close() }} 


	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>