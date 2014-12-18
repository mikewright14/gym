 
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

    <?php
    switch($users['UserStat']['activity'])
                        {
            case "1":
            $activityLevel = "Sedentary";
            break;

            case "2":
            $activityLevel = "Lightly Active";
            break;

            case "3":
            $activityLevel = "Moderately Active";
            break;

            case "4":
            $activityLevel = "Very Active";
            break;

            case "5":
            $activityLevel = "Extremely Active";
            break;
        }
    ?>
    

        <div class="timeline-block">
                    <div class="panel panel-default event">
                        <div class="panel-heading title">
                            Nutritional Information
                        </div>
                       
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-globe"></i> Calories: {{ $users['UserNutrition']['calories'] }}</li>
                            <li class="list-group-item"><i class="fa fa-calendar-o"></i>Protein: {{ $users['UserNutrition']['protein'] }} </li>
                            <li class="list-group-item"><i class="fa fa-clock-o"></i> Carbs: {{ $users['UserNutrition']['carbs'] }}</li>
                            <li class="list-group-item"><i class="fa fa-users"></i> Fats: {{ $users['UserNutrition']['fats'] }}
                            <a href="userStat/{{ $users['id'] }}/edit" class="btn btn-primary btn-xs pull-right">Change</a>
                            </li>
                        </ul>
                       
                        <div class="clearfix"></div>
                    </div>
                </div>


                 <div class="timeline-block">
                    <div class="panel panel-default event">
                        <div class="panel-heading title">
                            Physical Information
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-globe"></i> Weight: {{ $users['UserStat']['weight'] }} </li>
                            <li class="list-group-item"><i class="fa fa-calendar-o"></i>Height:  {{ $users['UserStat']['height'] }} </li>
                            <li class="list-group-item"><i class="fa fa-clock-o"></i> Age:  {{ $users['UserStat']['age'] }} </li>
                            <li class="list-group-item"><i class="fa fa-clock-o"></i> Sex:  {{ $users['UserStat']['sex'] }} </li>
                            <li class="list-group-item"><i class="fa fa-users"></i> Activity Level:  {{ $activityLevel }}
                            <a href="#" class="btn btn-primary btn-xs pull-right">Change</a>
                            </li>
                        </ul>
                       
                        <div class="clearfix"></div>
                    </div>
                </div>



                            <div class="timeline-block">
                    <div class="panel panel-default event">
                        <div class="panel-heading title">
                            Weight Lifting Information
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-globe"></i> Max Bench Press: {{ $users['userWeightlifting']['maxBenchPressWeight'] }} </li>
                            <li class="list-group-item"><i class="fa fa-globe"></i> Reps Bench Press: {{ $users['userWeightlifting']['repBenchPressWeight'] }} x {{ $users['userWeightlifting']['repBenchPressReps'] }} </li>
                            <li class="list-group-item"><i class="fa fa-calendar-o"></i>Max Squat:  {{ $users['userWeightlifting']['maxSquatWeight'] }} </li>
                            <li class="list-group-item"><i class="fa fa-calendar-o"></i>Reps Squat:  {{ $users['userWeightlifting']['repSquatWeight'] }} x  {{ $users['userWeightlifting']['repSquatReps'] }} </li>
                            <li class="list-group-item"><i class="fa fa-clock-o"></i> Max Deadlift:  {{ $users['userWeightlifting']['maxDeadliftWeight'] }} </li>
                            <li class="list-group-item"><i class="fa fa-clock-o"></i> Reps Deadlift:  {{ $users['userWeightlifting']['repDeadliftWeight'] }} x {{ $users['userWeightlifting']['repDeadliftReps'] }} </li>
                            <li class="list-group-item"><i class="fa fa-clock-o"></i> Max Overhead Press:  {{ $users['userWeightlifting']['maxOverheadPressWeight'] }} </li>
                            <li class="list-group-item"><i class="fa fa-users"></i> Reps Overhead Press:  {{ $users['userWeightlifting']['repOverheadPressWeight'] }} x {{ $users['userWeightlifting']['repOverheadPressReps'] }}
                            <a href="#" class="btn btn-primary btn-xs pull-right">Change</a>
                            </li>
                        </ul>
                       
                        <div class="clearfix"></div>
                    </div>
                </div>

                  <?php 
                    
                            $caloriesBurnt = array();
                            

                            foreach ($cardios as $cardio){
                            $caloriesBurnt[] = $cardio['cardioCaloriesBurnt'];
                         }
                        
                       $caloriesBurntTotal = array_sum($caloriesBurnt);


                        ?>

                <div class="timeline-block">
                    <div class="panel panel-default event">
                        <div class="panel-heading title">
                            Cardio Information
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-globe"></i> Miles this week: {{ $users['UserStat']['weight'] }} </li>
                            <li class="list-group-item"><i class="fa fa-globe"></i> Miles this month: {{ $users['UserStat']['weight'] }} </li>
                            <li class="list-group-item"><i class="fa fa-calendar-o"></i>Miles this year:  {{ $users['UserStat']['height'] }} </li>
                            <li class="list-group-item"><i class="fa fa-calendar-o"></i>Most miles in one cardio:  {{ $users['UserStat']['height'] }} </li>
                            <li class="list-group-item"><i class="fa fa-clock-o"></i> Total calories burnt from running:  {{ $caloriesBurntTotal }} 
                            <a href="#" class="btn btn-primary btn-xs pull-right">Change</a>
                            </li>
                        </ul>
                       
                        <div class="clearfix"></div>
                    </div>
                </div>

                  

                     <div class="timeline-block">
                    <div class="panel panel-default event">
                        <div class="panel-heading title">
                            Weekly Information
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-globe"></i> Calories burnt from exercise: {{ $users['UserStat']['weight'] }} </li>
                            <li class="list-group-item"><i class="fa fa-globe"></i> Weekly deficited calories: {{ $users['UserStat']['weight'] }} </li>
                            <li class="list-group-item"><i class="fa fa-calendar-o"></i>Projected weight loss:  {{ $users['UserStat']['height'] }}
                            <a href="#" class="btn btn-primary btn-xs pull-right">Change</a>
                            </li>
                        </ul>
                       
                        <div class="clearfix"></div>
                    </div>
                </div>




    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
