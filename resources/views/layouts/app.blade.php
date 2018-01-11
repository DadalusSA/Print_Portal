<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EY Portal') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
</head>
<body class="fixed-nav sticky-footer bg-light" id="page-top">

@guest
<div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <br>
                    <img src="{{ asset('img/image002.gif') }}">
                </div>
@else
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#fcfc9c">
  <a class="navbar-brand" href="#">Home</a>
  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" style="margin-top:1px;" href="#">Order History</a>
      </li>
    </ul>
     <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>
</nav>

    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <br>
                    <img src="{{ asset('img/image002.gif') }}">
                </div>
@endguest
        
        @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="https://momentjs.com/downloads/moment.min.js" 
    ></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>



    @yield('script')

</body>
</html>