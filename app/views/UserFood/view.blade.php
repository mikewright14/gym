 
<!doctype html>
<html>
<head>
    @include('includes.head')

<script>
function myFunction() { 
  // We should always name our variables descriptively
  // Then when we come back to them, we know what they are without too much effort
  var datepickerValue = document.getElementById('input-datepick').value;
  if (datepickerValue != '') {
    // If we're here then we know the datepicker has a value
    // As they're both d-m-Y format, we dont need to do anything. If we did, we'd do that now

datepickerTmp = datepickerValue.split('/');
datepickerValue = datepickerTmp[2] + '-' + datepickerTmp[0]+ '-' + datepickerTmp[1];

    // Lets assign the route URL
    var route = "UserFood/List/"; 

    // Now we'll do the redirect
    top.location.href = route + datepickerValue;
  } else {
    console.log("nah bro");
  }
}
</script>

</head>
<body>
<div class="container">


    @include('includes.nav')
    @include('includes.sidebar')
    @include('includes.sidebar-right')



  



   
                           
        <div class="timeline-block">
            <div class ="userfood-center">
            <a href="{{$prev}}"><button class="left-button btn btn-primary btn-circle"> < </button> </a>
             {{ Form::open(array('url' => 'UserFood', 'id'=> 'datepick')) }}
            
            <div class="form-group">
                                   
                                    <div class="col-sm-2">
                                        <input id="input-datepick" onchange="myFunction()" type="text" class="form-control datepicker">
                                    </div>
                                </div>
             {{ Form::close() }} 
            <a href="{{$next}}"><button class="right-button btn btn-primary btn-circle"> > </button></a>
             </div>
                    <div class="panel panel-default event">
                        <div class="panel-heading title">
                            Breakfast
                        </div>
                       
                           <!-- Progress table -->
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr>
                                <th width="20">
                                    <input type="checkbox" name="checkbox" id="checkAll" />
                                </th>
                                <th>Food Name</th>
                                <th>Calories</th>
                                <th>Protein</th>
                                <th>Carbs</th>
                                <th>Fats</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            


                             <?php 
                            $calorieSum = array();
                            $proteinSum = array();
                            $carbSum = array();
                            $fatSum = array();
                            
                            foreach($users  as $user){ 
                          
                            if ($user->mealType == 1) {
                            
                            $calorieSum[] = $user->Calories;
                            $proteinSum[] = $user->Protein;
                            $carbSum[]    = $user->Carbs;
                            $fatSum[]     = $user->Fats;

                            ?>

                            <tr>
                                <td>
                                    <input type="checkbox" />
                                </td>
                                <td>{{ $user->foodName }}</span>
                                </td>
                                <td>{{ $user->Calories }}</td>
                                   
                                <td>{{ $user->Protein }}
                                </td>
                                <td>{{ $user->Carbs }}</i></a>
                                </td>
                                <td>
                                   {{ $user->Fats }}
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        


                             <tr>
                                <td>
                                   
                                </td>
                                <?php  } ?>
                                 <?php  } ?>
                                <td> <strong>Total: </strong>
                                </td>
                                <td>{{array_sum($calorieSum)}}</td>
                                    
                                <td> {{array_sum($proteinSum)}}</td>
                                
                                <td>{{array_sum($carbSum)}}</td>
                                <td>{{array_sum($fatSum)}}</td>
                                <td>
                                      <a href="/UserFood/create/{{$date}}"><button style ="float:right;" class="btn btn-success"><i class="fa fa-check-circle"></i> Add to diary</button></a>
                                </td>
                            </tr>
                        </tbody>
                      
                    </table>
                </div>

            </div>       

                        </br></br></br>      






          <div class="timeline-block">
                    <div class="panel panel-default event">
                        <div class="panel-heading title">
                            Breakfast
                        </div>
                       
                           <!-- Progress table -->
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr>
                                <th width="20">
                                    <input type="checkbox" name="checkbox" id="checkAll" />
                                </th>
                                <th>Food Name</th>
                                <th>Calories</th>
                                <th>Protein</th>
                                <th>Carbs</th>
                                <th>Fats</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            


                             <?php 
                            $calorieSum = array();
                            $proteinSum = array();
                            $carbSum = array();
                            $fatSum = array();
                            
                            foreach($users  as $user){ 
                          
                            if ($user->mealType == 2) {
                            
                            $calorieSum[] = $user->Calories;
                            $proteinSum[] = $user->Protein;
                            $carbSum[]    = $user->Carbs;
                            $fatSum[]     = $user->Fats;

                            ?>

                            <tr>
                                <td>
                                    <input type="checkbox" />
                                </td>
                                <td>{{ $user->foodName }}</span>
                                </td>
                                <td>{{ $user->Calories }}</td>
                                   
                                <td>{{ $user->Protein }}
                                </td>
                                <td>{{ $user->Carbs }}</i></a>
                                </td>
                                <td>
                                   {{ $user->Fats }}
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        


                             <tr>
                                <td>
                                   
                                </td>
                                <?php  } ?>
                                 <?php  } ?>
                                <td> <strong>Total: </strong>
                                </td>
                                <td>{{array_sum($calorieSum)}}</td>
                                    
                                <td> {{array_sum($proteinSum)}}</td>
                                
                                <td>{{array_sum($carbSum)}}</td>
                                <td>{{array_sum($fatSum)}}</td>
                                <td>
                                      <a href="UserFood/create/{{$date}}"><button style ="float:right;" class="btn btn-success"><i class="fa fa-check-circle"></i> Add to diary</button></a>
                                </td>
                            </tr>
                        </tbody>
                      
                    </table>
                </div>

            </div>       

                        </br></br></br>  



                       
         <div class="timeline-block">
                    <div class="panel panel-default event">
                        <div class="panel-heading title">
                            Breakfast
                        </div>
                       
                           <!-- Progress table -->
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr>
                                <th width="20">
                                    <input type="checkbox" name="checkbox" id="checkAll" />
                                </th>
                                <th>Food Name</th>
                                <th>Calories</th>
                                <th>Protein</th>
                                <th>Carbs</th>
                                <th>Fats</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            


                             <?php 
                            $calorieSum = array();
                            $proteinSum = array();
                            $carbSum = array();
                            $fatSum = array();
                            
                            foreach($users  as $user){ 
                          
                            if ($user->mealType == 3) {
                            
                            $calorieSum[] = $user->Calories;
                            $proteinSum[] = $user->Protein;
                            $carbSum[]    = $user->Carbs;
                            $fatSum[]     = $user->Fats;

                            ?>

                            <tr>
                                <td>
                                    <input type="checkbox" />
                                </td>
                                <td>{{ $user->foodName }}</span>
                                </td>
                                <td>{{ $user->Calories }}</td>
                                   
                                <td>{{ $user->Protein }}
                                </td>
                                <td>{{ $user->Carbs }}</i></a>
                                </td>
                                <td>
                                   {{ $user->Fats }}
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        


                             <tr>
                                <td>
                                   
                                </td>
                                <?php  } ?>
                                 <?php  } ?>
                                <td> <strong>Total: </strong>
                                </td>
                                <td>{{array_sum($calorieSum)}}</td>
                                    
                                <td> {{array_sum($proteinSum)}}</td>
                                
                                <td>{{array_sum($carbSum)}}</td>
                                <td>{{array_sum($fatSum)}}</td>
                                <td>
                                      <a href="UserFood/create/{{$date}}"><button style ="float:right;" class="btn btn-success"><i class="fa fa-check-circle"></i> Add to diary</button></a>
                                </td>
                            </tr>
                        </tbody>
                      
                    </table>
                </div>

            </div>       

                        </br></br></br>  
                           


    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>


