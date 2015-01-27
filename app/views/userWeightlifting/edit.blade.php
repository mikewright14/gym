
<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">


	 @include('includes.nav')
    @include('includes.sidebar')
    @include('includes.sidebar-right')

		  {{ Form::model($userWeightlifting, array('route' => array('UserWeightliftingEdit', $userWeightlifting->user_id), 'method' => 'put')) }}
		<h1>Enter stats</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('maxBenchPressWeight') }}
			{{ $errors->first('repBenchPressWeight') }}
			{{ $errors->first('repBenchPressReps') }}

			{{ $errors->first('maxSquatWeight') }}
			{{ $errors->first('repSquatWeight') }}
			{{ $errors->first('repSquatReps') }}

			{{ $errors->first('maxDeadliftWeight') }}
			{{ $errors->first('repDeadliftWeight') }}
			{{ $errors->first('repDeadliftReps') }}

			{{ $errors->first('maxOverheadPressWeight') }}
			{{ $errors->first('repOverheadPressWeight') }}
			{{ $errors->first('repOverheadPressReps') }}

			
		</p>
			<h2>Bench Press</h2>
			<h4>One rep max</h4>
		<p>
			{{ Form::label('maxBenchPressWeight', 'Max Bench Press (Lbs)') }}
			{{ Form::text('maxBenchPressWeight', null, array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>
			<h4> Repping bench press</h4>
		<p>
			{{ Form::label('repBenchPressWeight', 'Bench Press Weight  (Lbs)') }}
			{{ Form::text('repBenchPressWeight', Input::old('repBenchPressWeight'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>

		<p>
			{{ Form::label('repBenchPressReps', 'Bench Press Reps  (Number of reps)') }}
			{{ Form::text('repBenchPressReps', Input::old('repBenchPressReps'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>
		
			<h2>Squat</h2>
			<h4>One rep max</h4>
		<p>
			{{ Form::label('maxSquatWeight', 'Max Squat (Lbs)') }}
			{{ Form::text('maxSquatWeight', Input::old('maxSquatWeight'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>
			<h4> Repping Squat</h4>
		<p>
			{{ Form::label('repSquatWeight', 'Squat Weight  (Lbs)') }}
			{{ Form::text('repSquatWeight', Input::old('repSquatWeight'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>

		<p>
			{{ Form::label('repSquatReps', 'Squat Reps  (Number of reps)') }}
			{{ Form::text('repSquatReps', Input::old('repSquatReps'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>


				<h2>Deadlift</h2>
			<h4>One rep max</h4>
		<p>
			{{ Form::label('maxDeadliftWeight', 'Max Deadlift (Lbs)') }}
			{{ Form::text('maxDeadliftWeight', Input::old('maxDeadliftWeight'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>
			<h4> Repping Deadlift</h4>
		<p>
			{{ Form::label('repDeadliftWeight', 'Deadlift Weight  (Lbs)') }}
			{{ Form::text('repDeadliftWeight', Input::old('repDeadliftWeight'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>

		<p>
			{{ Form::label('repDeadliftReps', 'Deadlift Reps  (Number of reps)') }}
			{{ Form::text('repDeadliftReps', Input::old('repDeadliftReps'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>

		<h2>Overhead Press</h2>
			<h4>One rep max</h4>
		<p>
			{{ Form::label('maxOverheadPressWeight', 'Max Overhead Press (Lbs)') }}
			{{ Form::text('maxOverheadPressWeight', Input::old('maxOverheadPressWeight'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>
			<h4> Repping Overhead Press</h4>
		<p>
			{{ Form::label('repOverheadPressWeight', 'Overhead Press Weight  (Lbs)') }}
			{{ Form::text('repOverheadPressWeight', Input::old('repOverheadPressWeight'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>

		<p>
			{{ Form::label('repOverheadPressReps', 'Overhead Press Reps  (Number of reps)') }}
			{{ Form::text('repOverheadPressReps', Input::old('repOverheadPressReps'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>

		

		<p>{{ Form::submit('Submit!', array( 'class' => 'btn btn-primary')) }}</p>
	{{ Form::close() }} 


	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>