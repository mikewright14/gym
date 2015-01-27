 

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



  



<div class="panel panel-default">

                <div class="panel-heading panel-heading-gray">

                   User Goal

                </div>



                <!-- Progress table -->

                <div class="table-responsive">

                    <table class="table v-middle">

                        <thead>

                            <tr>

                                <th width="20">

                                    <input type="checkbox" name="checkbox" id="checkAll">

                                </th>

                                <th>Date</th>

                                <th>Goal Name</th>

                                <th>Goal Type</th>

                                <th>Starting</th>

                                <th>Current</th>

                                <th>Ending</th>

                                <th>Progress</th>

                                <th class="text-right">Action</th>

                            </tr>

                        </thead>

                        <tbody>

                           
                           
                           <?php foreach ($users['UserGoal'] as $user){


                            if ($user['goalType'] == 1){
                            $userEnding = $user['startingValue'] - $user['endingValue'];

                            $userCurrent = $user['startingValue'] - $user['currentValue'];

                            $userPercentage = ($userCurrent / $userEnding) * 100;
                        }else{
                            $userEnding =  $user['endingValue'] - $user['startingValue'];

                            $userCurrent =  $user['currentValue'] - $user['startingValue'];

                            $userPercentage = ($userCurrent / $userEnding) * 100;


                        }

                         switch($user['goalType'])
                        {
            case "1":
            $measurement = "lbs";
            $name = "Weight Loss";
            break;

            case "2":
            $measurement = "lbs";
            $name = "Weight Gain";
            break;

            case "3":
            $measurement = "lbs";
            $name = "Lifting";
            break;

            case "4":
            $measurement = " Miles";
            $name = "Running";
            break;

            case "5":
            $activityLevel = "Extremely Active";
            break;
        }

                             

                           

                            ?>

                            <tr>

                                <td>

                                    <input type="checkbox">

                                </td>

                                <td> <span class="label label-gray">19/09/2014</span>

                                </td>

                                <td>{{$user['goalName']}}</td>

                                <td>{{$name}}</td>

                                <td>{{$user['startingValue']}}{{$measurement}}</td>

                                <td>{{$user['currentValue']}}{{$measurement}}</td>

                                <td>{{$user['endingValue']}}{{$measurement}}</td>

                                <td>

                                    <div class="progress">

                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $userPercentage; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $userPercentage; ?>%;">

                                        </div>

                                    </div>

                                </td>
                                
                                <td class="text-right">

                                    <a href="/user/goals/{{ $user['goalID'] }}/edit" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>

                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>

                                </td>

                            </tr>

                            <?php } ?>

                          

                        </tbody>

                    </table>

                </div>

                 <a href="/user/goals/create" class="btn btn-primary btn-xs pull-right">Create Goal</a>



                <!-- // Progress table -->

                <!-- <div class="panel-footer padding-none text-center">

                    <ul class="pagination">

                        <li><a href="#">«</a>

                        </li>

                        <li class="active"><a href="#">1</a>

                        </li>

                        <li><a href="#">2</a>

                        </li>

                        <li><a href="#">3</a>

                        </li>

                        <li><a href="#">4</a>

                        </li>

                        <li><a href="#">5</a>

                        </li>

                        <li><a href="#">»</a>

                        </li>

                    </ul>

                </div> -->

            </div>





    <footer class="row">

        @include('includes.footer')

    </footer>



</div>

</body>

</html>

