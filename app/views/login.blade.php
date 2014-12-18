<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
	<title>Look at me Login</title>
	<link rel="stylesheet" href="{{ URL::asset('css/default.css') }}" type="text/css"> 
</head>
<body>




<body class="login">
    <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <h1>Account Access</h1>
                <div class="panel panel-default text-center">
                   
                    <div class="panel-body">
                        {{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class' => 'form-control')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', array( 'class' => 'form-control')) }}
		</p>

		<p>{{ Form::submit('Submit!', array( 'class' => 'btn btn-primary')) }}</p>
	{{ Form::close() }} 

                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Vendor Scripts Bundle -->
<script src="js/vendor.min.js"></script>

<!-- App Scripts Bundle -->
<script src="js/scripts.min.js"></script>
</body>
</html>