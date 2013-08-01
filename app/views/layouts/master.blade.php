
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        @section('title')
        Capisso
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"/>
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        select, textarea, input[type="text"], input[type="password"],
        input[type="datetime"], input[type="datetime-local"], input[type="date"],
        input[type="month"], input[type="time"], input[type="week"],
        input[type="number"], input[type="email"], input[type="url"],
        input[type="search"], input[type="tel"], input[type="color"],
        .uneditable-input {
            color: #2C3E50;
        }
    </style>
    <link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css"/>
</head>

<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/">Capisso</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="{{(Request::is('/') ? 'active' : '')}}"><a href="/">Home</a></li>
                    <li><a href="http://blog.capisso.org/">Blog</a></li>
                    <li class="dropdown {{(Request::is('vmpanel*') ? 'active' : '')}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">VMPanel <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="{{(Request::is('vmpanel/overview') ? 'active' : '')}}"><a href="/vmpanel/overview">Overview</a></li>
                            <li class="{{(Request::is('vmpanel/features') ? 'active' : '')}}"><a href="/vmpanel/features">Features</a></li>
                            <li class="{{(Request::is('vmpanel/screenshots') ? 'active' : '')}}"><a href="/vmpanel/screenshots">Screenshots</a></li>
                        </ul>
                    </li>
                    <li class="{{(Request::is('irc') ? 'active' : '')}}"><a href="/irc">IRC</a></li>
                    <li class="{{(Request::is('contact') ? 'active' : '')}}"><a href="/contact">Contact</a></li>

                </ul>
                <ul class="nav pull-right">
                    @if(Sentry::check())
                    <li><a href="/panel">Welcome {{{Sentry::getUser()->username}}}!</a></li>
                    <li><a href="/account/logout">Logout</a></li>
                    @else
                    <li class="{{(Request::is('account/login') ? 'active' : '')}}"><a href="/account/login">Login</a></li>
                    <li class="{{(Request::is('account/register') ? 'active' : '')}}"><a href="/account/register">Register</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    @yield('content')

    <hr>

    <footer>
        <p>&copy; Capisso 2013</p>
    </footer>

</div> <!-- /container -->

<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.githubRepoWidget.min.js"></script>

</body>
</html>
