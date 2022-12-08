<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empty Classroom</title>
   
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="frontend/base.css">
    <link rel="stylesheet" href="frontend/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript">
        $(document).ready(function () {
            //Inline DateTimePicker Example
            $('#datetimepicker').datetimepicker({
                minDate:0,
                allowTimes:[
                    '09:00',
                    '10:00',
                    '11:00',
                    '12:00',
                    '01:00',
                    '02:00',
                    '03:00',
                    '04:00'],
                format:'Y-m-d H:i',
                inline:true
                
            });
        });
    </script>
</head>


<body class="jquery single single-jquery_plugin postid-2555 single-author singular">
    <header>
        <section id="global-nav">
            <nav>
                <div class="constrain">
                    <!--
                    <ul class="projects">
                        <li class="project jquery"><a href="https://jquery.com/" title="jQuery">jQuery</a></li>
                        <li class="project jquery-ui"><a href="https://jqueryui.com/" title="jQuery UI">jQuery UI</a>
                        </li>
                        <li class="project jquery-mobile"><a href="https://jquerymobile.com/"
                                title="jQuery Mobile">jQuery Mobile</a></li>
                        <li class="project sizzlejs"><a href="https://sizzlejs.com/" title="Sizzle">Sizzle</a></li>
                        <li class="project qunitjs"><a href="https://qunitjs.com/" title="QUnit">QUnit</a></li>
                    </ul>
                    <ul class="links l_tinynav1">
                        <li><a href="https://plugins.jquery.com/">Plugins</a></li>
                        <li class="dropdown"><a href="https://contribute.jquery.org/">Contribute</a>
                            <ul>
                                <li><a href="https://js.foundation/CLA">CLA</a></li>
                                <li><a href="https://contribute.jquery.org/style-guide/">Style Guides</a></li>
                                <li><a href="https://contribute.jquery.org/triage/">Bug Triage</a></li>
                                <li><a href="https://contribute.jquery.org/code/">Code</a></li>
                                <li><a href="https://contribute.jquery.org/documentation/">Documentation</a></li>
                                <li><a href="https://contribute.jquery.org/web-sites/">Web Sites</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="https://js.foundation/events">Events</a>
                            <ul class="wide">
                            </ul>
                        </li>
                        <li class="dropdown"><a href="https://jquery.org/support/">Support</a>
                            <ul>
                                <li><a href="https://learn.jquery.com/">Learning Center</a></li>
                                <li><a href="https://irc.jquery.org/">IRC/Chat</a></li>
                                <li><a href="https://forum.jquery.com/">Forums</a></li>
                                <li><a href="https://stackoverflow.com/tags/jquery/info">Stack Overflow</a></li>
                                <li><a href="https://jquery.org/support/">Commercial Support</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="https://js.foundation/">JS Foundation</a>
                            <ul>
                                <li><a href="https://js.foundation/about/join">Join</a></li>
                                <li><a href="https://js.foundation/about/members">Members</a></li>
                                <li><a href="https://js.foundation/about/leadership">Leadership</a></li>
                                <li><a href="https://js.foundation/community/code-of-conduct">Conduct</a></li>
                                <li><a href="https://js.foundation/about/donate">Donate</a></li>
                            </ul>
                        </li>
                    </ul>
                -->
                </div>
            </nav>
        </section>
    </header>

    <div id="container">
        <div id="logo-events" class="constrain clearfix">
            
        </div>

        <nav id="main" class="constrain clearfix">
            <div class="menu-top-container">
                <ul id="menu-top" class="menu l_tinynav2">
                </ul><select id="tinynav2" class="tinynav tinynav2">
                    <option selected="selected">Navigate...</option>
                </select>
            </div>
        </nav>

        <div id="content-wrapper" class="clearfix row">

            <div class="content-left twelve columns jquery-plugin">
                <div id="content" class="jquery-plugin">

                    <article id="post-2555"
                        class="post-2555 jquery_plugin type-jquery_plugin status-publish hentry tag-dropdown tag-form tag-input tag-multiselect tag-select tag-ui">
                        <h1 class="entry-title">Empty Classroom</h1>
                        <p class="attribution">by <a href="http://greedycoders.com/">greedyCoders</a></p>
                        <div class="block description">Empty classroom is a simple web application, it helps students and teachers to find Empty Classrooms in Metropolitan University. All the user has to do is input a date and time, and the app will search for the empty classrooms available at that time.</div>

                        <hr><br>
                        
                        <div class="block version">
                            @if (!isset($rooms))
                            <h2>Select Time and Date</h2>
                                <div id="date_picker">
                                    <form action="rooms" method="POST">
                                        @csrf
                                        <input id="datetimepicker" type="text" name="time"><br>
                                        <button type="submit" style="background: #0769ad" class="btn btn-primary">Find Empty Classroom</button><br><br>
                                    </form> 
                                </div>
                            @endif

                            @isset($rooms)
                            <h2>Available Empty Classrooms on {{$day}} at {{$time}}</h2><br>
                                
                                    <table style="width:100%" class="table-classroom">
                                        <tr>
                                            <th >Room Number</th>
                                            <th>Floor Number</th>
                                            <th>Seats</th>
                                        </tr>
                                        @foreach ($rooms as $room)
                                        <tr>
                                            <td>{{$room->room_number}}</td>
                                            <td>{{$room->floor_number}}</td>
                                            <td>{{$room->seats}}</td>
                                        </tr>
                                        @endforeach

                                    </table>
                                    <br>
                            @endisset
                        </div>
                    </article>
                </div>
                <div id="sidebar" class="widget-area" role="complementary">
                    <aside class="widget toolbox">
                        <div class="inner">
                            <header class="clearfix">
                                <div class="version-info">
                                    <p class="version-number">1.0.0</p>
                                    <p class="caption">Version(beta)</p>
                                </div>
                                <div class="release-info">
                                    <p class="date">December 5, 2022</p>
                                    <p class="caption">Released</p>
                                </div>
                            </header>
                            <div class="body">
                                <a class="download" href="http://127.0.0.1:8000/login">
                                    <span class="inner-wrapper"><span class="icon-user"></span>Sign in</span>
                                </a>
                                <a class="other-link gh-fork" href=""><span
                                        class="icon-github"></span>Fork on GitHub</a>
                                <a class="other-link view-homepage" href=""><span
                                        class="icon-external-link"></span>View Homepage</a>
                                <a class="other-link read-docs" href=""><span
                                        class="icon-file"></span>Read the Docs</a>
                                <a class="other-link bugs" href=""><span
                                        class="icon-flag"></span>Bug Reports</a>
                            </div>
                        </div>
                    </aside>

                    <aside class="widget github-activity group">
                        <h3 class="widget-title"><span class="icon-github"></span>GitHub Activity</h3>
                        <div class="info-block watchers">
                            <div class="number">00002</div>
                            <div class="caption">Watchers</div>
                        </div>
                        <div class="info-block forks">
                            <div class="number">00001</div>
                            <div class="caption">Forks</div>
                        </div>
                    </aside>

                    <aside class="widget author-info">
                        <h3><span class="icon-user"></span>Author</h3>
                        <ul>
                            <li><a href="https://github.com/tawhidmonowar/"><img alt="Tawhid"
                                        src="frontend/profile.jpeg"
                                        class="avatar avatar-80 photo avatar-default" width="80" height="80">Tawhid Monowar</a>
                            </li>
                        </ul>
                    </aside>

                    <aside class="widget maintainer-info">
                        <h3><span class="icon-wrench"></span>Maintainers</h3>
                        <ul>
                            <li><a href="https://github.com/tawhidmonowar/"><img alt=""
                                        src="frontend/profile.jpeg"
                                        class="avatar avatar-48 photo avatar-default" width="48" height="48">Tawhid Monowar</a></li>
                        </ul>
                    </aside>

                    <aside class="widget licenses">
                        <h3><span class="icon-book"></span>Licenses</h3>
                        <ul>
                            <li><a href="">MIT License</a></li>
                        </ul>
                    </aside>
                    <h3><span class=" "></span> </h3>
                </div>
            </div>

        </div>
    </div>




    <footer class="clearfix simple">
        <div class="constrain">
            <div class="rowBooks">
                <!--
                <div class="six columns offset-by-three">
                    <h3><span>Books</span></h3>
                    <ul class="books">
                        <li>
                            <a href="https://www.packtpub.com/web-development/learning-jquery-fourth-edition">
                                <img src="Chosen%20jQuery%20Plugin%20Registry_files/learning-jquery-4th-ed.jpg"
                                    alt="Learning jQuery 4th Edition by Karl Swedberg and Jonathan Chaffer" width="92"
                                    height="114">
                                Learning jQuery Fourth Edition
                                <cite>Karl Swedberg and Jonathan Chaffer</cite>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.manning.com/books/jquery-in-action-third-edition">
                                <img src="Chosen%20jQuery%20Plugin%20Registry_files/jquery-in-action.jpg"
                                    alt="jQuery in Action by Bear Bibeault, Yehuda Katz, and Aurelio De Rosa" width="92"
                                    height="114">
                                jQuery in Action
                                <cite>Bear Bibeault, Yehuda Katz, and Aurelio De Rosa</cite>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.syncfusion.com/ebooks/jquery">
                                <img src="Chosen%20jQuery%20Plugin%20Registry_files/jquery-succinctly.jpg"
                                    alt="jQuery Succinctly by Cody Lindley" width="92" height="114">
                                jQuery Succinctly
                                <cite>Cody Lindley</cite>
                            </a>
                        </li>
                    </ul>
                </div>
            -->
            </div>


            <div id="legal">
                <!--
                <ul class="footer-site-links">
                    <li><a class="icon-pencil" href="https://learn.jquery.com/">Learning Center</a></li>
                    <li><a class="icon-group" href="https://forum.jquery.com/">Forum</a></li>
                    <li><a class="icon-wrench" href="https://api.jquery.com/">API</a></li>
                    <li><a class="icon-twitter" href="https://twitter.com/jquery">Twitter</a></li>
                    <li><a class="icon-comments" href="https://irc.jquery.org/">IRC</a></li>
                    <li><a class="icon-github" href="https://github.com/jquery">GitHub</a></li>
                </ul>
                -->
            </div>
        </div>
    </footer>


<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.min.css"/>
<script src="js/jquery.datetimepicker.js"></script>
</body>
</html>