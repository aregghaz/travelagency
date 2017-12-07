<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Demo | Find All Together</title>

    <link href="{{ asset('css/adminPost.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<div class="container">


    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                    <h2>@yield('title')</h2>
                    @yield('title-meta')

                <div class="panel-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="{{ URL::to('js/jquery.js')}}"></script>
<script src="{{ asset('js/bootstrap.min-3.3.1.js') }}"></script>
</body>
</html>