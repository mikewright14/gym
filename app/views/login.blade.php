<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
	<title>Look at me Login</title>
	@include('includes.head')


@if( Session::get('registered') )
<script type="text/javascript">
	$(function(){

toastr.options = {
  "closeButton": true,
  "debug": false,
  "positionClass": "toast-top-center",
  "onclick": null,
  "showDuration": "1000",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
    toastr.info('You successfully registered.'); 
	});
</script>
@endif 
	
	
</head>


	

	<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">

</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->

<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">



			<!-- BEGIN LOGIN FORM -->
			{{ Form::open(array('url' => 'login', 'class' => 'login-form')) }}
			<h3 class="form-title">Sign In</h3>
			<div class="alert alert-danger display-hide">
				<button class="close" data-close="alert"></button>
				<span>
					Enter any username and password. </span>
			</div>
		

				
				<div class="form-group">
					{{ Form::label('email', 'Email Address', array('class' =>'control-label visible-ie8 visible-ie9')) }}
					{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class' => 'form-control form-control-solid placeholder-no-fix')) }}
				</div>

				<div class="form-group">
							{{ Form::label('password', 'Password', array('class' =>'control-label visible-ie8 visible-ie9')) }}
							{{ Form::password('password', array( 'class' => 'form-control form-control-solid placeholder-no-fix')) }}
				</div>



				<div class="form-actions">
							{{ Form::submit('Log In', array( 'class' => 'btn btn-success uppercase')) }}

							<label class="rememberme check">
			<input type="checkbox" name="remember" value="1"/>Remember </label>
			<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
		</div>
		
		<div class="create-account">
			<p>
				<a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="index.html" method="post">
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn btn-default">Back</button>
			<button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	
		 {{ Form::open(array('url' => 'user/create/', 'class' => 'register-form')) }}
		<h3>Sign Up</h3>
		<p class="hint">
			 Enter your personal details below:
		</p>
		<div class="form-group">
			
			{{ Form::label('firstName', 'firstName Address', array('class' =>'control-label visible-ie8 visible-ie9')) }}
			{{ Form::text('firstName', Input::old('firstName'), array('placeholder' => 'First Name', 'class' => 'form-control form-control-solid placeholder-no-fix')) }}
		</div>

				<div class="form-group">
			{{ Form::label('lastName', 'lastName Address', array('class' =>'control-label visible-ie8 visible-ie9')) }}
			{{ Form::text('lastName', Input::old('lastName'), array('placeholder' => 'Last Name', 'class' => 'form-control form-control-solid placeholder-no-fix')) }}
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			{{ Form::label('email', 'Email Address', array('class' =>'control-label visible-ie8 visible-ie9')) }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'Email', 'class' => 'form-control form-control-solid placeholder-no-fix')) }}
		</div>

		
		<p class="hint">
			 Enter your account details below:
		</p>
		<div class="form-group">
			{{ Form::label('username', 'Username ', array('class' =>'control-label visible-ie8 visible-ie9')) }}
			{{ Form::text('username', Input::old('username'), array('placeholder' => 'Username', 'class' => 'form-control form-control-solid placeholder-no-fix')) }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Password', array('class' =>'control-label visible-ie8 visible-ie9')) }}
							{{ Form::password('password', array( 'placeholder' => 'Password','class' => 'form-control form-control-solid placeholder-no-fix')) }}
				</div>
		
		<div class="form-group">
			{{ Form::label('password', 'Password', array('class' =>'control-label visible-ie8 visible-ie9')) }}
			{{ Form::password('password', array( 'placeholder' => 'Repeat Password','class' => 'form-control form-control-solid placeholder-no-fix')) }}
				</div>
		
		<div class="form-actions">
		

			<p>{{ Form::button('Back', array( 'id' =>'register-back-btn', 'class' => 'btn btn-default')) }}
			{{ Form::submit('Submit', array( 'id' =>'register-submit-btn', 'class' => 'btn btn-success uppercase pull-right')) }}</p>
				{{ Form::close() }} 
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
</div>
				<footer class="row">
					@include('includes.footer')
				</footer>





