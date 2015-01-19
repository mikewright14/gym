

<!doctype html>

<html>

<head>

	@include('includes.head')

</head>

<body>

<div class="container">





	@include('includes.sidebar')



		{{ Form::model($userGoal, array('route' => array('userGoal.update', $userGoal->goalID), 'method' => 'put')) }}
		<h1>Enter stats</h1>



		<!-- if there are login errors, show them here -->

		<p>

			{{ $errors->first('goalName') }}

			{{ $errors->first('goalType') }}

			{{ $errors->first('startingValue') }}

			{{ $errors->first('endingValue') }}

			{{ $errors->first('currentValue') }}

		</p>



		<p>

			{{ Form::label('goalName', 'Goal Name') }}

			{{ Form::text('goalName', Input::old('goalName'), array('placeholder' => 'In inches', 'class' => 'form-control')) }}

		</p>



			<p>

			{{ Form::label('goalType', 'Goal Type (Lbs)') }}

			{{ Form::select('goalType', array('1' => 'Weight Loss', '2' => 'Weight Gain', '3' => 'Lifting', '4' => 'Running')) }}



		<p>

			{{ Form::label('startingValue', 'Starting Value (Your goals starting point)') }}

			{{ Form::text('startingValue', Input::old('startingValue'), array('placeholder' => '140lbs', 'class' => 'form-control')) }}

		</p>



			<p>

			{{ Form::label('endingValue', 'Ending Value (When you have reached your goal)') }}

			{{ Form::text('endingValue', Input::old('endingValue'), array('placeholder' => '160lbs', 'class' => 'form-control')) }}

		</p>



		<p>

			{{ Form::label('currentValue', 'Current Value') }}

			{{ Form::text('currentValue', Input::old('currentValue'), array('placeholder' => '160lbs', 'class' => 'form-control')) }}

		</p>





		



		



		<p>{{ Form::submit('Submit!', array( 'class' => 'btn btn-primary')) }}</p>

	{{ Form::close() }} 





	<footer class="row">

		@include('includes.footer')

	</footer>



</div>

</body>

</html>