 
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

         {{ Form::open(array('url' => 'UserFood.create')) }}
        <h1>Enter stats</h1>

        <!-- if there are login errors, show them here -->
        <p>
            {{ $errors->first('height') }}
            {{ $errors->first('weight') }}
            {{ $errors->first('activity') }}
            {{ $errors->first('dateOfBirth') }}
            {{ $errors->first('sex') }}
        </p>

        <div class="col-md-6">

            <!-- Tabbable Widget -->
            <div class="tabbable tabs-primary">

                <!-- Tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#recent" data-toggle="tab"><i class="fa fa-fw fa-home"></i> Most Recent</a>
                    </li>
                    <li><a href="#color-profile" data-toggle="tab"><i class="fa fa-fw fa-user"></i> Most Frequent</a>
                    </li>
                    <li><a href="#color-messages" data-toggle="tab"><i class="fa fa-fw fa-envelope"></i> Favourites</a>
                    </li>
                    <li><a href="#color-settings" data-toggle="tab"><i class="fa fa-fw fa-cog"></i> My Food</a>
                    </li>
                </ul>

                <!-- // END Tabs -->

                <!-- Panes --><div class="tab-content">
                <div id="recent" class="tab-pane active">
                    <h3>Recent Food</h3>
                    <!-- Progress table -->

                    <div class="table-responsive">

                        <table class="table v-middle">

                            <thead>

                                <tr>

                                    <th width="20">

                                        <input type="checkbox" name="checkbox" id="checkAll">

                                    </th>

                                    <th>Food Name</th>

                                    <th>Food Amount</th>

                            
                           <?php foreach ($recents as $recent){
                           ?>

                            <tr>

                                <td>

                                    <input type="checkbox">

                                </td>

                                <td> {{$recent->foodName}}</td>

                                <td>
                                    {{ Form::text('foodAmount', Input::old('foodAmount'), array('placeholder' => 'In Grams', 'class' => 'form-control')) }}</td>


                            </tr>

                            <?php } ?>

                          

                        </tbody>

                    </table>


                          </div>
                            </div>
                            <div id="color-profile" class="tab-pane">
 <h3>Recent Food</h3>
                    <!-- Progress table -->

                    <div class="table-responsive">

                        <table class="table v-middle">

                            <thead>

                                <tr>

                                    <th width="20">

                                        <input type="checkbox" name="checkbox" id="checkAll">

                                    </th>

                                    <th>Food Name</th>

                                    <th>Food Amount</th>

                            
                           <?php foreach ($frequents as $frequent){
                           ?>

                            <tr>

                                <td>

                                    <input type="checkbox">

                                </td>

                                <td> {{$frequent->foodName}}</td>

                                <td>
                                    {{ Form::text('foodAmount', Input::old('foodAmount'), array('placeholder' => 'In Grams', 'class' => 'form-control')) }}</td>


                            </tr>

                            <?php } ?>

                          

                        </tbody>

                    </table>


                          </div>                            </div>
                            <div id="color-messages" class="tab-pane">
                                <h3>Icon + Text Regular</h3>
                                Ab accusamus aperiam consequatur ducimus ea eos est, non omnis porro possimus praesentium, provident quam quibusdam quidem quo suscipit voluptate? Aperiam, dolorum eaque labore natus placeat sint totam. Cupiditate eos explicabo fugiat labore natus officia quidem sed ullam veniam voluptatibus. Consequatur, ducimus id, iste modi nesciunt nostrum obcaecati odit porro quaerat quibusdam quisquam, sequi similique vero. Adipisci aliquid at aut culpa cumque distinctio earum esse eveniet excepturi exercitationem harum illum in iste laudantium mollitia, nulla numquam perferendis perspiciatis porro qui, quo quod ratione similique suscipit temporibus ullam voluptas voluptates! Aperiam atque dolor excepturi illum in, magnam nemo quidem tempora vitae.
                            </div>
                            <div id="color-settings" class="tab-pane">
                                <h3>Icon + Text Regular</h3>
                                Aliquam distinctio eligendi eos iure maiores molestiae praesentium. Aliquam aliquid architecto at blanditiis dignissimos doloremque esse et eveniet ex excepturi expedita ipsam itaque iusto minima nisi nobis, numquam, odit omnis quae quaerat quas quisquam ratione sapiente, sint sit suscipit voluptas! Illum libero tempora velit. Accusamus animi aut beatae cupiditate dignissimos dolore eligendi exercitationem id maiores maxime necessitatibus, nisi non omnis quis quos reiciendis repellat vel. Aperiam asperiores at aut blanditiis consequatur consequuntur cumque ex exercitationem explicabo fuga impedit incidunt ipsam iusto libero minus nostrum nulla obcaecati omnis optio provident quae quaerat, quia quibusdam reiciendis sed, sunt tenetur? Hic tempora, vel!
                            </div>
                        </div>

                        <!-- // END Panes -->
                    </div>

                    <!-- // END Tabbable Widget -->
                </div>
                        <p>{{ Form::submit('Submit!', array( 'class' => 'btn btn-primary')) }}</p>
                             {{ Form::close() }} 



                <footer class="row">
                    @include('includes.footer')
                </footer>

            </div>
        </body>
        </html>
