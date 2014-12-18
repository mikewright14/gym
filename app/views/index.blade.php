
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>


    @include('includes.nav')
    @include('includes.sidebar')
    @include('includes.sidebar-right')

        <div id="content">
        <div class="container-fluid">
            <div class="cover profile">
                <div class="wrapper">
                    <div class="image">
                        <img src="images/blood.png" alt="people" />
                    </div>
                    <ul class="friends">
                        <li>
                            <a href="#">
                                <img src="images/people/real/chris.png" alt="people" class="img-responsive">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                 <img src="images/people/real/carl.png" alt="people" class="img-responsive">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                 <img src="images/people/real/walker.png" alt="people" class="img-responsive">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/people/real/curt.png" alt="people" class="img-responsive">
                            </a>
                        </li>
                       
                        <li><a href="#" class="group"><i class="fa fa-group"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="cover-info">
                    <div class="avatar">
                        <img src="images/people/real/mike.png" alt="people" />
                    </div>
                    <div class="name">
                        <a href="#">
                Mike Wright
            </a>
                    </div>
                    <ul class="cover-nav">
                        <li class="active"><a href=""><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a>
                        </li>
                        <li><a href=""><i class="fa fa-fw icon-user-1"></i> About</a>
                        </li>
                        <li><a href=""><i class="fa fa-fw fa-users"></i> Friends</a>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="timeline row" data-toggle="gridalicious">
                <div class="timeline-block">
                    <div class="panel panel-default share">
                        <div class="panel-heading panel-heading-gray title">
                            What&acute;s new
                        </div>
                        <div class="panel-body">
                            <textarea name="status" class="form-control share-text" rows="3" placeholder="Share your status..."></textarea>
                        </div>
                        <div class="panel-footer share-buttons">
                            <a href="#">
                                <i class="fa fa-map-marker"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-photo"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <button type="submit" class="btn btn-primary btn-xs pull-right display-none" href="#">Post</button>
                        </div>
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/real-50/chris.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Chris</a>
                                    <span>on 4th December, 2014</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p> How many carbs is there in a Sainsbury's burger?</p>
                        </div>
                        <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                        <ul class="comments">
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/mike.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Mike</a>
                                        <span>Google it you fuck.</span>
                                        <div class="comment-date">2 minutes</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/curt.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Curt</a>
                                        <span>Posh cunt.</span>
                                        <div class="comment-date">14 min</div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/real-50/chris.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Chris</a>
                                    <span>on 4th December, 2014</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p> How many carbs is there in a Waitrose burger?</p>
                        </div>
                        <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                        <ul class="comments">
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/mike.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Mike</a>
                                        <span>Google it you fuck.</span>
                                        <div class="comment-date">2 minutes</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/curt.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Curt</a>
                                        <span>Posh cunt.</span>
                                        <div class="comment-date">14 min</div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/real-50/carl.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Carl</a>
                                    <span>on 8th December, 2014</span>
                                </div>
                            </div>
                        </div>
                        <img src="images/place1-full.jpg" class="img-responsive">
                        <ul class="comments">
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/walker.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Walker</a>
                                        <span>Codtarded.</span>
                                        <div class="comment-date">2 days</div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/real-50/curt.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Curt</a>
                                    <span>on 10th January, 2014</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body text-muted">
                            <i class="fa fa-map-marker"></i> Was in <a href="#">Ben's House, Liverpool</a>
                        </div>
                        <img src="http://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=370x300&scale=2&maptype=roadmap
&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:green%7Clabel:G%7C40.711614,-74.012318
&markers=color:red%7Clabel:C%7C40.718217,-73.998284" class="img-responsive">
                        <div class="view-all-comments"><i class="fa fa-comments-o"></i> Be the first to comment</div>
                        <ul class="comments">
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/real-50/chris.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Chris</a>
                                    <span>on 15th November, 2014</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            I want his penis.
                        </div>
                        <div class="videoWrapper">
                            <iframe src="//player.vimeo.com/video/50522981?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="271" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="view-all-comments"><i class="fa fa-comments-o"></i> Be the first to comment</div>
                        <ul class="comments">
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
               <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/real-50/walker.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Walker</a>
                                    <span>on 4th December, 2014</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p> I love subway fridays!!!</p>
                        </div>
                        <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                        <ul class="comments">
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/mike.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Mike</a>
                                        <span>Fuck you.</span>
                                        <div class="comment-date">2 minutes</div>
                                    </div>
                                </div>
                            </li>
                     
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
               <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/real-50/mike.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Mike</a>
                                    <span>on 4th December, 2014</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p> I hate my life.</p>
                        </div>
                        <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                        <ul class="comments">
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/chris.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Chris</a>
                                        <span>Me too.</span>
                                        <div class="comment-date">2 minutes</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/curt.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Curt</a>
                                        <span>I'm fat.</span>
                                        <div class="comment-date">14 min</div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default event">
                        <div class="panel-heading title">
                            LAN PARTY
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-globe"></i> Liverpool</li>
                            <li class="list-group-item"><i class="fa fa-calendar-o"></i> 1st Jan 2015</li>
                            <li class="list-group-item"><i class="fa fa-clock-o"></i> 5:50 PM</li>
                            <li class="list-group-item"><i class="fa fa-users"></i> 4 Attendees <a href="#" class="btn btn-primary btn-xs pull-right">Attend</a>
                            </li>
                        </ul>
                        <ul class="list-unstyled attendees">
                            <li>
                                <a href="#">
                                    <img src="images/people/real/mike.png" alt="people" class="img-responsive" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/people/real/chris.png" alt="people" class="img-responsive" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/people/real/curt.png" alt="people" class="img-responsive" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/people/real/carl.png" alt="people" class="img-responsive" />
                                </a>
                            </li>
                          
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
               <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/real-50/carl.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Carl</a>
                                    <span>on 9th December, 2014</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p> My beard is shit.</p>
                        </div>
                        <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                        <ul class="comments">
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/curt.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Curt</a>
                                        <span>lol</span>
                                        <div class="comment-date">2 minutes</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/carl.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Carl</a>
                                        <span>Fat cunt.</span>
                                        <div class="comment-date">14 min</div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/real-50/mike.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Mike</a>
                                    <span>on 15th December, 2014</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p>CARB UPPPPPPP</p>
                        </div>
                        <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                        <ul class="comments">
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/curt.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Curt</a>
                                        <span>We carbing up ?</span>
                                        <div class="comment-date">2 minutes ago</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/mike.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Mike</a>
                                        <span>...</span>
                                        <div class="comment-date">14 min</div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/real-50/walker.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Walker</a>
                                    <span>on 15th December, 2014</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="boxed">
                                <a href="#" class="h4 margin-none">Keto Pizza!</a>
                                <div class="rating text-left">
                                    <span class="star"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                </div>
                                <div class="media">
                                    <a href="#" class="media-object pull-left">
                                        <img src="images/food1.jpg" alt="" width="80" />
                                    </a>
                                    <div class="media-body">
                                        <p>Pepperoni and ham keto pizza.</p>
                                    </div>
                                </div>
                                <ul class="icon-list">
                                    <li><i class="fa fa-star fa-fw"></i> 4.8</li>
                                    <li><i class="fa fa-clock-o fa-fw"></i> 20 min</li>
                                    <li><i class="fa fa-graduation-cap fa-fw"></i> Beginner</li>
                                </ul>
                            </div>
                        </div>
                        <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                        <ul class="comments">
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/mike.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Mike</a>
                                        <span>!!!</span>
                                        <div class="comment-date">13 minutes ago</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/carl.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Carl</a>
                                        <span>No anchovies?</span>
                                        <div class="comment-date">22 minutes</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/real-50/walker.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Walker</a>
                                        <span>lol</span>
                                        <div class="comment-date">24 min</div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>