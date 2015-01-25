

<!doctype html>

<html>

<head>

	@include('includes.head')

</head>

<body>

<div class="container">





	@include('includes.sidebar')



		 {{ Form::open(array('url' => 'recipe/create')) }}

		<h1>Enter stats</h1>



		<!-- if there are login errors, show them here -->

		<p>

			{{ $errors->first('recipeName') }}

			{{ $errors->first('recipeDesc') }}

			{{ $errors->first('proteinPerServing') }}

			{{ $errors->first('fatsPerServing') }}

			{{ $errors->first('carbsPerServing') }}

			{{ $errors->first('calsPerServing') }}

		</p>



		<p>

			{{ Form::label('recipeName', 'Recipe Name') }}

			{{ Form::text('recipeName', Input::old('recipeName'), array('placeholder' => 'In inches', 'class' => 'form-control')) }}

		</p>



					<p>

			{{ Form::label('recipeDesc', 'Recipe Instructions') }}

			{{ Form::textarea('recipeDesc', Input::old('recipeDesc'), array('placeholder' => 'In inches', 'class' => 'form-control')) }}

		</p>

		{{ Form::label('proteinPerServing', 'Per serving') }}

		<p>

			{{ Form::label('proteinPerServing', 'Amount of protein per serving') }}

			{{ Form::text('proteinPerServing', Input::old('proteinPerServing'), array('placeholder' => '140lbs', 'class' => 'form-control')) }}

		</p>



			<p>

			{{ Form::label('fatsPerServing', 'Amount of fats per serving') }}

			{{ Form::text('fatsPerServing', Input::old('fatsPerServing'), array('placeholder' => '140lbs', 'class' => 'form-control')) }}

		</p>


		<p>

			{{ Form::label('carbsPerServing', 'Amount of carbs per serving') }}

			{{ Form::text('carbsPerServing', Input::old('carbsPerServing'), array('placeholder' => '140lbs', 'class' => 'form-control')) }}

		</p>

		<p>

			{{ Form::label('calsPerServing', 'Amount of cals per serving') }}

			{{ Form::text('calsPerServing', Input::old('calsPerServing'), array('placeholder' => '140lbs', 'class' => 'form-control')) }}

		</p>





		



		



		<p>{{ Form::submit('Submit!', array( 'class' => 'btn btn-primary')) }}</p>

	{{ Form::close() }} 





	<footer class="row">

		@include('includes.footer')

	</footer>



</div>

</body>

</html>