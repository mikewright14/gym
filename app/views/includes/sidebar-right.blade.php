<div class="sidebar right">
        <div class="chat-search">
            <input type="text" class="form-control" placeholder="Search" />
        </div>
        <ul class="chat-filter nav nav-pills ">
            <li class="active"><a href="#" data-target="li">All</a>
            </li>
            <li><a href="#" data-target=".online">Online</a>
            </li>
            <li><a href="#" data-target=".offline">Offline</a>
            </li>
        </ul>
        <ul class="chat-contacts">
            <li class="online" data-user-id="1">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                            <span class="status"></span>
                            <img src="images/people/real/walker.png" width="40" class="img-circle" />
                        </div>
                        <div class="media-body">
                            <div class="contact-name">Walker</div>
                            <small>"Baguette Saturdays!!"</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="online away" data-user-id="2">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                            <span class="status"></span>
                            <img src="images/people/real/chris.png" width="40" class="img-circle" />
                        </div>
                        <div class="media-body">
                            <div class="contact-name">Chris</div>
                            <small>"No longer jobless."</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="online" data-user-id="3">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                            <span class="status"></span>
                            <img src="images/people/real/carl.png" width="40" class="img-circle" />
                        </div>
                        <div class="media-body">
                            <div class="contact-name">Carl</div>
                            <small>Fuck you.</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="offline" data-user-id="4">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                            <img src="images/people/real/curt.png" width="40" class="img-circle" />
                        </div>
                        <div class="media-body">
                            <div class="contact-name">Curt</div>
                            <small>Offline</small>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <script id="chat-window-template" type="text/x-handlebars-template">
        <div class="panel panel-default">
            <div class="panel-heading" data-toggle="chat-collapse" data-target="#chat-bill">
                <a href="#" class="close"><i class="fa fa-times"></i></a>
                <a href="#">
                    <img src="images/people/real-50/curt.png" width="40" class="pull-left">
                    <span class="contact-name">Curt</span>
                </a>
            </div>
            <div class="panel-body" id="chat-bill">
                <div class="media">
                    <div class="pull-left">
                        <img src="images/people/real-50/mike.png" width="25" class="img-circle" alt="people" />
                    </div>
                    <div class="media-body">
                        <span class="message">What you want?</span>
                    </div>
                </div>
                <div class="media right">
                    <div class="pull-right">
                        <img src="images/people/real-50/curt.png" width="25" class="img-circle" alt="people" />
                    </div>
                    <div class="media-body">
                        <span class="message">A friend..</span>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img src="images/people/real-50/mike.png" width="25" class="img-circle" alt="people" />
                    </div>
                    <div class="media-body">
                        <span class="message">What about ben? :))))</span>
                    </div>
                </div>
                <div class="media right">
                    <div class="pull-right">
                        <img src="images/people/real-50/curt.png" width="25" class="img-circle" alt="people" />
                    </div>
                    <div class="media-body">
                        <span class="message">...</span>
                    </div>
                </div>
            </div>
            <input type="text" class="form-control" placeholder="Type message..." />
        </div>
    </script>
    <div class="chat-window-container"></div>
    