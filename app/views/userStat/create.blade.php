
<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
@include('includes.nav')
@include('includes.sidebar')
<body class="page-header-fixed page-sidebar-closed-hide-logo ">



	{{ Form::open(array('url' => 'users/stats/create')) }}
	<h1>Ente1r stats</h1>

	<div class="container">
<!-- BEGIN FORM-->
										<div class="row">
									<div class="col-md-12">
										<div class="tab-pane" id="tab_2">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Sample
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="form-body">
												<h3 class="form-section">Person Info</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">First Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
																<span class="help-block">
																This is inline help </span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-4">
									<h4>Angle offset and arc</h4>
									<div style="display: inline; width: 200px; height: 200px;"><canvas width="200" height="200"></canvas><input class="knob" data-angleoffset="-125" data-anglearc="250" data-fgcolor="#66EE66" value="35" style="width: 104px; height: 66px; position: absolute; vertical-align: middle; margin-top: 66px; margin-left: -152px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 40px; line-height: normal; font-family: Arial; text-align: center; color: rgb(102, 238, 102); padding: 0px; -webkit-appearance: none; background: none;"></div>
								</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gender</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Male</option>
																	<option value="">Female</option>
																</select>
																<span class="help-block">
																Select your gender. </span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Date of Birth</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="dd/mm/yyyy">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Category</label>
															<div class="col-md-9">
																<select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
																	<option value="Category 1">Category 1</option>
																	<option value="Category 2">Category 2</option>
																	<option value="Category 3">Category 5</option>
																	<option value="Category 4">Category 4</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Membership</label>
															<div class="col-md-9">
																<div class="radio-list">
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option1"/>
																	Free </label>
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option2" checked/>
																	Professional </label>
																</div>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<h3 class="form-section">Address</h3>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address 1</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address 2</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">City</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">State</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Post Code</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Country</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option>Country 1</option>
																	<option>Country 2</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green">Submit</button>
																<button type="button" class="btn default">Cancel</button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								</div>
							</div>

				<!-- if there are login errors, show them here -->
	<!-- 	<p>
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

		<div class="form-group">
										<label class="col-md-3 control-label">Vertical</label>
										<div class="col-md-4">
											<div class="slider-vertical-value">
												 Value: <span class="slider-value" id="slider-vertical-amount">60</span>
											</div>
											<div id="slider-vertical" class="slider bg-green ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all" style="height: 200px;" aria-disabled="false">
											<div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="height: 60%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="bottom: 60%;"></a></div>
										</div>
									</div>

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
			{{ Form::text('age', Input::old('age'), array('placeholder' => 'Age', 'class' => 'form-control')) }} -->

			
			<!-- {{ Form::label('day', 'Day') }}
			{{ Form::selectRange('day', 01, 31) }}

			{{ Form::label('month', 'Month') }}
			{{ Form::selectMonth('month') }}

			{{ Form::label('year', 'Year') }}
			{{ Form::selectYear('year', 2000, 1930) }} -->

<!-- 		</p>

				<p>
			{{ Form::label('sex', 'Sex') }}
			{{ Form::select('sex', array('Male' => 'Male', 'Female' => 'Female')) }}
		</p>

		

		<p>{{ Form::submit('Submit!', array( 'class' => 'btn btn-primary')) }}</p>
		{{ Form::close() }}  -->


		<footer class="row">


{{ HTML::script('plugins/jquery-knob/js/jquery.knob.js') }}
{{ HTML::script('pages/scripts/components-knob-dials.js') }}
			@include('includes.footer')
		</footer>

	</div>
</body>
</html>