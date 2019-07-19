<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Human Resource Information System') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('/lte/plugins/sweetalert2/sweetalert2.min.css') }}">    
    <style>
    .position{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .imagecontainer{
       text-align:center;
       margin:24px 0 12px 0; 
    }
    img.avatar{
        width: 25%;
        border-radius: 50%;
        border: 2px solid;
    }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body style="background-image:url(bg2.png)">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" >
                        {{ config('app.name', 'JCM - HRIS') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @else
                            <li><a href="/home" style="text-transform: capaitalize">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                    aria-expanded="false" style="text-transform: capitalize">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                     <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    @include('sweet::alert')
    @yield('sweet')
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- SweetAlert -->
    <script src="{{ asset('/lte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
</body>
</html>
