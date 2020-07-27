<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" /> 

    <title>CMS Using Laravel</title>
    <link rel="icon" href="/Images/LogoGit.png" type="image/gif" sizes="16x16">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/myStyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mybladeTemplate.css') }}">
    @if(request()->route()->getName() == "post.show")
        <link rel="stylesheet" type="text/css" href="{{ asset('css/showbladeTemplate.css') }}">
    @endif

    @if(request()->route()->getName() == "brand.create" or request()->route()->getName() == "brand.edit"
    or request()->route()->getName() == "topnavmenu.create" or request()->route()->getName() == "topnavmenu.edit"
    or request()->route()->getName() == "maincontent.create" or request()->route()->getName() == "maincontent.edit"
    or request()->route()->getName() == "post.create" or request()->route()->getName() == "post.edit"
    )
        <link rel="stylesheet" type="text/css" href="{{ asset('css/formbladeTemplate.css') }}">
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
    <div id="app">
        @guest

        @else
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                
                    <div>
                        <img src="/Images/LogoGit.png" alt="" class="pr-3" style="height: 25px; border-right: 1px solid black;">
                    </div>
                    <div class="pl-3 ">CMS Using Laravel</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
        @endguest
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-2">
            @yield('content')
        </main>
    </div>

    <script src="{{asset('js/carousel.js')}}"></script>
</body>
</html>
