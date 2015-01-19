
<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>



	@include('includes.sidebar')

	<div class="container">

		 {{ Form::open(array('url' => 'Food')) }}
		<h1>Enter stats</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('brandName') }}
			{{ $errors->first('foodName') }}
			
			{{ $errors->first('dateOfBirth') }}
			{{ $errors->first('sex') }}
		</p>

		<p>
			{{ Form::label('brandName', 'Brand Name ') }}
			{{ Form::text('brandName', Input::old('brandName'), array('placeholder' => 'In inches', 'class' => 'form-control')) }}
		</p>

			<p>
			{{ Form::label('foodName', 'Food Name ') }}
			{{ Form::text('foodName', Input::old('foodName'), array('placeholder' => 'In pounds', 'class' => 'form-control')) }}
		</p>



			

				<p>
			{{ Form::label('Calories', 'Calories') }}
			{{ Form::text('Calories', Input::old('Calories'), array('placeholder' => '', 'class' => 'form-control')) }}		</p>


				<p>
			{{ Form::label('Protein', 'Protein') }}
			{{ Form::text('Protein', Input::old('Protein'), array('placeholder' => '', 'class' => 'form-control')) }}		</p>


				<p>
			{{ Form::label('Carbs', 'Carbs') }}
			{{ Form::text('Carbs', Input::old('Carbs'), array('placeholder' => '', 'class' => 'form-control')) }}		</p>


				<p>
			{{ Form::label('Fats', 'Fats') }}
			{{ Form::text('Fats', Input::old('Fats'), array('placeholder' => '', 'class' => 'form-control')) }}		</p>



		

		<p>{{ Form::submit('Submit!', array( 'class' => 'btn btn-primary')) }}</p>
	{{ Form::close() }} 


	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>
