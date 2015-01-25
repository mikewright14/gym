 

<!doctype html>

<html>

<head>

    @include('includes.head')

    <script type="text/javascript">

    function submitform(){

   $('#thumbs-up').click(function(){
    console.log("hi there");
    });

    }
    </script>

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

                           

                                <th>Date</th>

                                <th>Recipe Name</th>

                                <th>Recipe User</th>

                                <th>Carbs Per Serving</th>

                                <th>Cals Per Serving</th>

                                <th>Vote</th>

                               
                            </tr>

                        </thead>

                        <tbody>

                           
                        
                           <?php 
                            

                            
                            foreach ($users as $user){
                               
                               $userRep = $user->UserRecipe;
                               $vote = $user->RecipeVote;
                               echo "<pre>";
                               dd($user);
                               
                        
                                foreach ($userRep as $u){
                                
                             
                                
                          ?>
                            <tr>

                              

                                <td> <span class="label label-gray">19/09/2014</span>

                                </td>

                                <td>{{$user->recipeName}}</td>

                                <td>{{$u->firstName}} {{$u->lastName}}</td>

                                <td>{{$user->recipeName}}</td>

                                <td>{{$user->recipeName}}</td>

                                <td>
                    {{$vote->vote}}
                    <?php if ($vote->recipeVoteID){ ?>
                        {{ Form::open(array('url' => 'recipe/vote/edit')) }}
                    <?php }else{ ?>
                          {{ Form::open(array('url' => 'recipe/vote')) }}
                   <?php  } ?>
                    ?>
               
                 {{ Form::hidden('recipeID', $vote->recipeID) }}
                <button name ="thumb-up" id = "thumb-up" value="1" class="btn btn-default">
               <i class="fa fa-thumbs-up fa-3"></i>  
            </button>
              <button name ="thumb-down" id = "thumb-down" value"2" class="btn btn-default">
                <i class="fa fa-thumbs-down fa-3"></i> 
            </button>

            {{ Form::close() }} 
            </td>

                                
                                
                               

                            </tr>

                            <?php }  }?>

                          

                        </tbody>

                    </table>

                </div>

                 <a href="userGoal/create" class="btn btn-primary btn-xs pull-right">Create Goal</a>




            </div>





    <footer class="row">

        @include('includes.footer')

    </footer>



</div>

</body>

</html>

