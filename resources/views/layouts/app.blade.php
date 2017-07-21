<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap-------------------------------------------------------------------------------------->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme ------------------------------------------------------------------------------>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript ------------------------------------------------------>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- CSRF Token ----------------------------------------------------------------------->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SoGood') }}</title>

    <!-- Styles ------------------------------------------------------------------------------->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    {{--font awesome--}}
    <script src="https://use.fontawesome.com/4c5677d783.js"></script>

    {{--css styling---------------------------------------------------------------------------}}

    <style>
         body {
            background-color: grey;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            margin: 0;
        }

        /*.nav {*/
            /*background-color: #E77607;*/

        /*}*/

        .jumbotron {
            background-color: #ff9933;

        }

        .p1 {
            color: grey;
            /*font-family: 'Lobster', cursive;*/
            font-size: 16px;
            text-align: center;
        }

        .logo {
            color: grey;
            font-family: 'Lobster', cursive;
            font-size: 100px;
            text-align: center;

        }




        .links > a {
            color: B25800;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

         #social {
             padding-top: 15px;
             padding-bottom: 15px;
             background-color:;
             /*float: left;*/
         }

         #social i {
             font-size: 50px;
             color: #4a4a4a
         }

         #social i:hover {
             color:#ff9933;
         }




    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-fixed-top ">
            <div class="container nav">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Sogood') }}
                    </a>
                    <a class="navbar-brand" href={{url("/about")}}>
                        About
                    </a>
                    <a class="navbar-brand" href={{url("/contact")}}>
                        Contact
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>

                        @else






                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>




                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!--jumbotron--------------------------------------------------------------------------------->
        <div class="jumbotron">
            <h1 class="logo">So Good!</h1>
            <p class="p1">Your place to find recipes as unique as you! </p>
            <div class="container">
                <div class="row">

                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="  search-query form-control" placeholder="Search something delicious!" />
                            <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @yield('content')
    </div>




    <nav class="navbar navbar-inverse navbar-static-bottom">
        <div id="social">
            <div class="container">
                <div class="row centered">

                    <div class="col-lg-3">

                    </div>

                    <div class="col-lg-3">
                        <a href="https://www.facebook.com/poncej10"><i class="fa fa-facebook"></i></a>
                    </div>



                    <div class="col-lg-3">
                        <a href="https://twitter.com/AFC__1886"><i class="fa fa-twitter"></i></a>
                    </div>

                    <div class="col-lg-3">

                    </div>


                </div><! --/row -->
            </div><! --/container -->
        </div><! --/social -->


    </nav>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



</body>
</html>
