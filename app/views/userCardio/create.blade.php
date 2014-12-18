
<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">


	@include('includes.sidebar')

		 {{ Form::open(array('url' => 'userCardio')) }}
		<h1>Enter stats</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('cardioType') }}
			{{ $errors->first('cardioDuration') }}
			{{ $errors->first('cardioLength') }}
			{{ $errors->first('cardioCaloriesBurnt') }}
			
		</p>

		<p>
			{{ Form::label('cardioType', 'Cardio Type') }}
			{{ Form::text('cardioType', Input::old('cardioType'), array('placeholder' => 'It better be a lot!', 'class' => 'form-control')) }}
		</p>

			<p>
			{{ Form::label('cardioDuration', 'Cardio Duration (Minutes)') }}
			{{ Form::text('cardioDuration', Input::old('cardioDuration'), array('placeholder' => 'Christmas period or not.', 'class' => 'form-control')) }}
		</p>

			<p>
			{{ Form::label('cardioLength', 'How many miles of cardio?') }}
			{{ Form::text('cardioLength', Input::old('cardioLength'), array('placeholder' => 'Slobs.', 'class' => 'form-control')) }}
		</p>

			<p>
			{{ Form::label('cardioCaloriesBurnt', 'Calories Burnt') }}
			{{ Form::text('cardioCaloriesBurnt', Input::old('cardioCaloriesBurnt'), array('placeholder' => 'Impressive.', 'class' => 'form-control')) }}
		</p>


		

			

		

		<p>{{ Form::submit('Submit!', array( 'class' => 'btn btn-primary')) }}</p>
	{{ Form::close() }} 


	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>