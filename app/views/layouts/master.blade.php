
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
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
    </style>
    <link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css"/>

    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
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
            <a class="brand" href="#">Capisso</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="{{(Request::is('/') ? 'active' : '')}}"><a href="/">Home</a></li>
                    <li><a href="http://blog.capisso.org/">Blog</a></li>
                    <li class="dropdown {{(Request::is('vmpanel*') ? 'active' : '')}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">VMPanel <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="{{(Request::is('vmpanel/overview') ? 'active' : '')}}"><a href="/vmpanel/overview">Overview</a></li>
                            <li class="{{(Request::is('vmpanel/licensing') ? 'active' : '')}}"><a href="/vmpanel/licensing">Licensing</a></li>
                            <li class="{{(Request::is('vmpanel/features') ? 'active' : '')}}"><a href="/vmpanel/features">Features</a></li>
                            <li class="{{(Request::is('vmpanel/screenshots') ? 'active' : '')}}"><a href="/vmpanel/screenshots">Screenshots</a></li>
                        </ul>
                    </li>
                    <li class="{{(Request::is('company') ? 'active' : '')}}"><a href="/company">Company</a></li>
                    <li class="{{(Request::is('irc') ? 'active' : '')}}"><a href="/irc">IRC</a></li>

                </ul>
                <ul class="nav pull-right">
                    <li><a href="">Login</a></li>
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

</body>
</html>