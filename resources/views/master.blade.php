<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ secure_asset('favicon.ico') }}">
    <title>www.svetliy.com</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ secure_asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ secure_asset('css/jumbotron-narrow.css') }}" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="header clearfix">
        @yield('header')
    </div>

    <div class="jumbotron">
        @yield('sidebar-up')
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            @yield('sidebar-left')
        </div>

        <div class="col-lg-6">
            @yield('sidebar-right')
        </div>
    </div>

    <footer class="footer">
        @yield('footer')
    </footer>

</div> <!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ secure_asset('js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>