<!doctype html>

<html>

<head>

    @include('includes.head')

    <script type="text/javascript">

        function submitform() {

            $('#thumbs-up').click(function () {
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

                @foreach ($recipes as $recipe)
                    <?php
                        $user = $recipe->User;
                        $vote = RecipeVote::where('recipe_id', '=', $recipe->recipeID)->where('user_id', '=', $user->id)->first();
                    ?>
                    <tr>


                        <td><span class="label label-gray">19/09/2014</span>

                        </td>

                        <td>{{$recipe->recipeName}}</td>

                        <td>{{$user->firstName}} {{$user->lastName}}</td>

                        <td>{{$recipe->carbsPerServing}}</td>

                        <td>{{$recipe->calsPerServing}}</td>

                        <td>
                            @if ($vote)
                                {{ Form::open(array('url' => 'recipe/vote/edit')) }}
                            @else
                                {{ Form::open(array('url' => 'recipe/vote')) }}
                            @endif

                            {{ Form::hidden('recipeID', $recipe->recipeID) }}
                            <button name="thumb-up" id="thumb-up" value="1" class="btn btn-default {{ isset($vote->vote) && $vote->vote == 1 ? 'btn-success' : '' }}">
                                <i class="fa fa-thumbs-up fa-3"></i>
                            </button>
                            <button name="thumb-down" id="thumb-down" value=
                            "2" class="btn btn-default {{ isset($vote->vote) && $vote->vote != 1 ? 'btn-success' : '' }}">
                                <i class="fa fa-thumbs-down fa-3"></i>
                            </button>

                            {{ Form::close() }}
                        </td>


                    </tr>

                @endforeach


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

