
<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">


	@include('includes.sidebar')

		 {{ Form::model($userStat, array('route' => array('userStat.update', $userStat->user_id), 'method' => 'put')) }}
		<h1>Enter stats</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('height') }}
			{{ $errors->first('weight') }}
			{{ $errors->first('activity') }}
			{{ $errors->first('dateOfBirth') }}
			{{ $errors->first('sex') }}
		</p>

		<p>
			{{ Form::label('height', 'Height (Inches)') }}
			{{ Form::text('height', Input::old('height'), array('placeholder' => 'In inches', 'class' => 'form-control')) }}
		</p>

			<p>
			{{ Form::label('weight', 'Weight (Lbs)') }}
			{{ Form::text('weight', Input::old('weight'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>


			<p>
			{{ Form::radio('activity', '1') }} 
			{{ Form::label('activity', 'Sedentary : Little or no exercise.') }}
			</br>
		
			{{ Form::radio('activity', '2') }}
			{{ Form::label('activity', 'Lightly Active: Light exercise/sports 1-2 days a week') }}
			 </br>

			{{ Form::radio('activity', '3') }} 
			{{ Form::label('activity', 'Moderately Active: Moderate exercise/sports 3-5 days a week') }}
			</br>

			{{ Form::radio('activity', '4') }}
			{{ Form::label('activity', 'Very Active: Heavy exercise/sports 6-7 days a week') }}
			</br>

			{{ Form::radio('activity', '5') }} 
			{{ Form::label('activity', 'Extremely Active: Very heavy exercise/physical job/training 2 times a day') }}
			

			<p>
			{{ Form::label('age', 'Age') }}
			{{ Form::text('age', Input::old('age'), array('placeholder' => 'Age', 'class' => 'form-control')) }}

			
			<!-- {{ Form::label('day', 'Day') }}
			{{ Form::selectRange('day', 01, 31) }}

			{{ Form::label('month', 'Month') }}
			{{ Form::selectMonth('month') }}

			{{ Form::label('year', 'Year') }}
			{{ Form::selectYear('year', 2000, 1930) }} -->

		</p>

				<p>
			{{ Form::label('sex', 'Sex') }}
			{{ Form::select('sex', array('Male' => 'Male', 'Female' => 'Female')) }}
		</p>

		

		<p>{{ Form::submit('Submit!', array( 'class' => 'btn btn-primary')) }}</p>
	{{ Form::close() }} 


	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>