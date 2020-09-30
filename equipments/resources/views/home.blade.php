<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Personal Equipment Manager</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>


        <div class="nav">
            <h1>Equipment Manager</h1>
            <a href="{{ url('/') }}" class="toTop">TOP</a>

            <a href="{{ route('logout') }}" class="toLogout"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
            >
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @extends('layouts.app')

        @section('content')

        <div class="container">
            <example-component></example-component>
        </div>

        <script src="/js/manifest.js"></script>
        <script src="/js/vendor.js"></script>
        <script src="/js/app.js"></script>
        <script src="{{ mix('js/app.js') }}"></script>
        @endsection
    </body>
</html>

<style>
.nav {
    display: flex;
    background-color: #80DEEA;
}

h1 {
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
}

.toTop {
    margin-left: auto;
    margin-top: 18px;
    color: #636b6f;
    font-size: 20px;
    font-weight: 600;
    font-family: 'Nunito', sans-serif;
}

.toLogout {
    margin-left: 20px;
    margin-right: 40px;
    margin-top: 18px;
    color: #636b6f;
    font-size: 20px;
    font-weight: 600;
    font-family: 'Nunito', sans-serif;
}

@media(max-width: 767px) {
    h1 {
        margin-right: 30px;
    }

    .toTop {
      margin-left: 20px;
  }
}

@media(max-width: 280px) {
    .nav {
        width: 260px;
    }
}
</style>