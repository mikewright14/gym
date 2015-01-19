<div class="sidebar left hidden-xs">
        <a id="brand" href="index.html">Keto Web App</a>
        <div id="menu" data-scrollable>
            <ul>
                
                <li class="category">Navigation</li>
                <li class="hasSubmenu  ">
                    <li class="">
                        <?php $date = date("Y-m-d"); ?>
                    <a href="/user/food/{{$date}}"><i class="icon-lock-fill"></i> Food Diary</a>
                </li>
                </li>
                <li class="">
                    <a href="#"><i class="icon-user-1"></i> Profile</a>
                </li>
                <li class="">
                    <a href="#"><i class="fa fa-group"></i> Users</a>
                </li>
                <li class="">
                    <a href="#"><i class="icon-comment-fill-1"></i> Messages</a>
                </li>
                       <li class="">
                    <a href="#"><i class="icon-comment-fill-1"></i> News Feed</a>
                </li>
                       <li class="">
                    <a href="#"><i class="icon-comment-fill-1"></i> Your Progress</a>
                </li>
                </li>
                       <li class="">
                    <a href="/user/stats"><i class="fa fa-area-chart"></i> Your Stats</a>
                </li>
                <li class="">
                    <a href="/user/goals"><i class="fa fa-area-chart"></i> Your Goals</a>
                </li>
             
                

                <!-- Sample 2 Level Collapse -->
                <li class="hasSubmenu">
                  
                    <ul class="collapse" id="collapse">
                        <li class="hasSubmenu">
                            <a href="#collapse-1" data-toggle="collapse"><i class="fa fa-circle-o"></i> Submenu</a>
                            <ul class="collapse" id="collapse-1">
                                <li><a href="#">Regular Link</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Regular Link</a>
                        </li>
                    </ul>
                </li>
                <li class="category border top">Friends Updates</li>
                <li class="reset">
                    <ul>
                        <li class="media news-item">
                            <span class="news-item-success pull-right "></i></span>
                            <span class="pull-left media-object">
                            <i class="fa fa-fw fa-bell"></i>
                        </span>
                            <div class="media-body">
                                <a href="" class="text-white">Walker</a> just logged in
                                <span class="time">2 min ago</span>
                            </div>
                        </li>
                        <li class="media news-item">
                            <span class="news-item-success pull-right "></span>
                            <span class="pull-left media-object">
                            <i class="fa fa-fw fa-bell"></i>
                        </span>
                            <div class="media-body">
                                <a href="" class="text-white">Chris</a> just added <a href="" class="text-white">Curt</a> as a friend
                                <span class="time">5 min ago</span>
                            </div>
                        </li>
                        <li class="media news-item">
                            <span class="pull-left media-object">
                            <i class="fa fa-fw fa-bell"></i>
                        </span>
                            <div class="media-body">
                                <a href="" class="text-white">Carl</a> just logged in
                                <span class="time">8 min ago</span>
                            </div>
                        </li>
                        <li class="media news-item">
                            <span class="pull-left media-object">
                            <i class="fa fa-fw fa-bell"></i>
                        </span>
                            <div class="media-body">
                                <a href="" class="text-white">Curt</a> just logged in
                                <span class="time">12 min ago</span>
                            </div>
                        </li>
                        <li class="media news-item">
                            <span class="pull-left media-object">
                            <i class="fa fa-fw fa-bell"></i>
                        </span>
                            <div class="media-body">
                                <a href="" class="text-white">Mike</a> just logged in
                                <span class="time">15 min ago</span>
                            </div>
                        </li>
                    </ul>
                </li>

                  <li class="category border top">Chat</li>
                <li class="reset">
                    <ul>
                        <li class="media news-item">
                            <span class="news-item-success pull-right "><i class="fa fa-circle"></i></span>
                            <span class="pull-left media-object">
                            <i class="fa fa-fw fa-wechat"></i>
                        </span>
                            <div class="media-body">
                                <a href="" class="text-white">Walker</a> 
                               
                            </div>
                        </li>
                          <li class="media news-item">
                            <span class="news-item-success pull-right "><i class="fa fa-circle"></i></span>
                            <span class="pull-left media-object">
                            <i class="fa fa-fw fa-wechat"></i>
                        </span>
                            <div class="media-body">
                                <a href="" class="text-white">Chris</a> 
                               
                            </div>
                        </li>  <li class="media news-item">
                            <span class="news-item-success pull-right "><i class="fa fa-circle"></i></span>
                            <span class="pull-left media-object">
                            <i class="fa fa-fw fa-wechat"></i>
                        </span>
                            <div class="media-body">
                                <a href="" class="text-white">Curt</a> 
                               
                            </div>
                        </li>  <li class="media news-item">
                            <span class="news-item-success pull-right "><i class="fa fa-circle"></i></span>
                            <span class="pull-left media-object">
                            <i class="fa fa-fw fa-wechat"></i>
                        </span>
                            <div class="media-body">
                                <a href="" class="text-white">Carl</a> 
                               
                            </div>
                     
    
                
            </ul>
                <!-- LOGOUT BUTTON -->
    <a href="{{ URL::to('logout') }}">Logout</a>
        </div>
    </div>