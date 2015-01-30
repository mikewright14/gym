
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>


    @include('includes.nav')
    @include('includes.sidebar')


       <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEAD -->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Dashboard <small>statistics & reports</small></h1>
                </div>
                <!-- END PAGE TITLE -->
              
                <!-- END PAGE TOOLBAR -->
            </div>
            <!-- END PAGE HEAD -->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb hide">
                <li>
                    <a href="#">Home</a><i class="fa fa-circle"></i>
                </li>
                <li class="active">
                     Dashboard
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row margin-top-10">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-green-sharp">14<small class="font-green-sharp">lbs</small></h3>
                                <small>Weight Lost</small>
                            </div>
                            <div class="icon">
                                <i class="icon-pie-chart"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                <span class="sr-only">76% progress</span>
                                </span>
                            </div>
                            <div class="status">
                                <div class="status-title">
                                     progress
                                </div>
                                <div class="status-number">
                                     76%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-red-haze">847</h3>
                                <small>Calories left.</small>
                            </div>
                            <div class="icon">
                                <i class="icon-like"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                <span class="sr-only">85% change</span>
                                </span>
                            </div>
                            <div class="status">
                                <div class="status-title">
                                     daily intake
                                </div>
                                <div class="status-number">
                                     85%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-blue-sharp">2</h3>
                                <small>Work outs done this week</small>
                            </div>
                            <div class="icon">
                                <i class="icon-basket"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                <span class="sr-only">45% exercise for the week</span>
                                </span>
                            </div>
                            <div class="status">
                                <div class="status-title">
                                     grow
                                </div>
                                <div class="status-number">
                                     45%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-purple-soft">1.2lbs</h3>
                                <small>Projected weight loss for the week.</small>
                            </div>
                            <div class="icon">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                <span class="sr-only">95% almost there </span>
                                </span>
                            </div>
                            <div class="status">
                                <div class="status-title">
                                     weigh in
                                </div>
                                <div class="status-number">
                                     57%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
       <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font-color hide"></i>
                                <span class="caption-subject theme-font-color bold uppercase">Your Goals</span>
                                <span class="caption-helper hide"></span>
                            </div>
                         
                        </div>
                        <div class="portlet-body">
                            <div class="row number-stats margin-bottom-30">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="stat-left">
                                        <div class="stat-chart">
                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                            <div id="sparkline_bar"></div>
                                        </div>
                                        <div class="stat-number">
                                            <div class="title">
                                                 Goals Completed
                                            </div>
                                            <div class="number">
                                                 3
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="stat-right">
                                        <div class="stat-chart">
                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                            <div id="sparkline_bar2"></div>
                                        </div>
                                        <div class="stat-number">
                                            <div class="title">
                                                 Goals Active
                                            </div>
                                            <div class="number">
                                                 4
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                <thead>
                                <tr class="uppercase">
                                    <th>
                                         Goal Name
                                    </th>
                                     <th>
                                         Goal Type
                                    </th>
                                    <th>
                                         Starting Value
                                    </th>
                                    <th>
                                         End Value
                                    </th>
                                    <th>
                                         Current Value
                                    </th>
                                       <th>
                                         Progress
                                    </th>
                                   
                                </tr>
                                </thead>

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

                             
                               

                                <td>   <a href="javascript:;" class="primary-link">{{$user['goalName']}}</a></td>

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
                                
                               

                            </tr>

                            <?php } ?>

                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
        
            
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font-color hide"></i>
                                <span class="caption-subject theme-font-color bold uppercase">Food Diary</span>
                                <span class="caption-helper hide">Daily intake</span>
                            </div>
                         
                        </div>
                        <div class="portlet-body">
                            <div class="row number-stats margin-bottom-30">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="stat-left">
                                        <div class="stat-chart">
                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                            <div id="sparkline_bar"></div>
                                        </div>
                                        <div class="stat-number">
                                            <div class="title">
                                                 Total Calories
                                            </div>
                                            <div class="number">
                                                 2260
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="stat-right">
                                        <div class="stat-chart">
                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                            <div id="sparkline_bar2"></div>
                                        </div>
                                        <div class="stat-number">
                                            <div class="title">
                                                 Remaining Calories
                                            </div>
                                            <div class="number">
                                                 719
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                <thead>
                                <tr class="uppercase">
                                    <th colspan="2">
                                         Food Name
                                    </th>
                                     <th>
                                         Amount(g)
                                    </th>
                                    <th>
                                         Calories
                                    </th>
                                    <th>
                                         Protein
                                    </th>
                                    <th>
                                         Carbs
                                    </th>
                                       <th>
                                         Fats
                                    </th>
                                   
                                </tr>
                                </thead>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" >
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Chicken Legs</a>
                                    </td>
                                    <td>
                                         200g
                                    </td>
                                     <td>
                                         440g
                                    </td>
                                    <td>
                                         45g
                                    </td>
                                    <td>
                                         5g
                                    </td>
                                    <td>
                                       12g
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" >
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Chicken Legs</a>
                                    </td>
                                    <td>
                                         200g
                                    </td>
                                     <td>
                                         440g
                                    </td>
                                    <td>
                                         45g
                                    </td>
                                    <td>
                                         5g
                                    </td>
                                    <td>
                                       12g
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" >
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Chicken Legs</a>
                                    </td>
                                    <td>
                                         200g
                                    </td>
                                     <td>
                                         440g
                                    </td>
                                    <td>
                                         45g
                                    </td>
                                    <td>
                                         5g
                                    </td>
                                    <td>
                                       12g
                                    </td>
                                </tr>
                                <tr>
                                   <td class="fit">
                                        <img class="user-pic" >
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Chicken Legs</a>
                                    </td>
                                    <td>
                                         200g
                                    </td>
                                     <td>
                                         440g
                                    </td>
                                    <td>
                                         45g
                                    </td>
                                    <td>
                                         5g
                                    </td>
                                    <td>
                                       12g
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                            <!-- BEGIN CHART PORTLET-->
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bar-chart font-green-haze"></i>
                                        <span class="caption-subject bold uppercase font-green-haze"> Bar Charts</span>
                                        <span class="caption-helper">column and line mix</span>
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config">
                                        </a>
                                        <a href="javascript:;" class="reload">
                                        </a>
                                        <a href="javascript:;" class="fullscreen">
                                        </a>
                                        <a href="javascript:;" class="remove">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="chart_1" class="chart" style="height: 500px;">
                                    </div>
                                </div>
                            </div>
                            <!-- END CHART PORTLET-->
                        </div>
                    </div>

                    <div class="row">
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light tasks-widget">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font-color hide"></i>
                                <span class="caption-subject theme-font-color bold uppercase">things</span>
                                <span class="caption-helper">16 pending</span>
                            </div>
                            <div class="inputs">
                                <div class="portlet-input input-small input-inline">
                                    <div class="input-icon right">
                                        <i class="icon-magnifier"></i>
                                        <input type="text" class="form-control form-control-solid" placeholder="search...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="task-content">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 282px;"><div class="scroller" style="height: 282px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2" data-initialized="1">
                                  
                                    <!-- END START TASK LIST -->
                                </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 227.211428571429px; background: rgb(215, 220, 226);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
                            </div>
                            <div class="task-footer">
                                <div class="btn-arrow-link pull-right">
                                    <a href="javascript:;">See All Things that i don't know whats going here yet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font-color hide"></i>
                                <span class="caption-subject theme-font-color bold uppercase">Friends Activity</span>
                                <span class="caption-helper">22 Updates</span>
                            </div>
                            <div class="inputs">
                                <div class="portlet-input input-inline input-small ">
                             
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                                <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                <div class="general-item-list">
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="{{public_path()}}/images/people/real-50/chris.png">
                                                <a href="" class="item-name primary-link">Chris Morris</a>
                                                <span class="item-label">3 hrs ago</span>
                                            </div>
                                           
                                        </div>
                                        <div class="item-body">
                                             Chris has just recorded his weight and lost 3lbs since the last weigh in!
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="{{public_path()}}/images/people/real-50/curt.png">
                                                <a href="" class="item-name primary-link">Curtis Radford</a>
                                                <span class="item-label">5 hrs ago</span>
                                            </div>
                                           
                                        </div>
                                        <div class="item-body">
                                            Unfortunately, Curtis has made a 2lb gain since last weigh in, for fuck sake Curt.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="{{public_path()}}/images/people/real-50/carl.png">
                                                <a href="" class="item-name primary-link">Carl Rigby</a>
                                                <span class="item-label">8 hrs ago</span>
                                            </div>
                                           
                                        </div>
                                        <div class="item-body">
                                            Carl Rigby has attended the gym 5 times this week.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="{{public_path()}}/images/people/real-50/curt.png">
                                                <a href="" class="item-name primary-link">Curtis Radford</a>
                                                <span class="item-label">12 hrs ago</span>
                                            </div>
                                           
                                        </div>
                                        <div class="item-body">
                                            Curtis Radford has just ordered a dominoes, click <a href="lolz">here</a> to send him a hateful message.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="{{public_path()}}/images/people/real-50/chris.png">
                                                <a href="" class="item-name primary-link">Chris Morris</a>
                                                <span class="item-label">2 days ago</span>
                                            </div>
                                           
                                        </div>
                                        <div class="item-body">
                                            Chris burned 500 calories walking.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="{{public_path()}}/images/people/real-50/carl.png">
                                                <a href="" class="item-name primary-link">Carl Rigby</a>
                                                <span class="item-label">3 days ago</span>
                                            </div>
                                           
                                        </div>
                                        <div class="item-body">
                                            Carl has just benched 100kg, the beast.
                                        </div>
                                    </div>
                                   
                            </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 163.201754385965px; background: rgb(215, 220, 226);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
        


    <footer class="row">
        {{ HTML::script('plugins/amcharts/amcharts/amcharts.js') }}
        {{ HTML::script('plugins/amcharts/amcharts/serial.js') }}
        {{ HTML::script('plugins/amcharts/amcharts/pie.js') }}
        {{ HTML::script('plugins/amcharts/amcharts/radar.js') }}
        {{ HTML::script('plugins/amcharts/amcharts/themes/light.js') }}
        {{ HTML::script('plugins/amcharts/amcharts/themes/patterns.js') }}
        {{ HTML::script('plugins/amcharts/amcharts/themes/chalk.js') }}
        {{ HTML::script('plugins/amcharts/ammap/ammap.js') }}
        {{ HTML::script('plugins/amcharts/ammap/maps/js/worldLow.js') }}
        {{ HTML::script('pages/scripts/tasks.js') }}


        @include('includes.footer')
    </footer>

</div>
</body>
</html>