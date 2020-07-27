<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CMS Application Using Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="icon" href="/Images/LogoGit.png" type="image/gif" sizes="16x16">

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="/css/myStyle.css">
        <link rel="stylesheet" type="text/css" href="/css/homeStyle.css">
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        
    </head>
    <body>
        
        <div class="wrapping">
            <div class="navmenu">
                <div class="logo">
                </div>
                <div class="topnav">

                    @if (Route::has('login'))
                        @auth
                            <a class="contact" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="contact" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a class="contact" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>	

            <div class="maincont">
                <div class="box" id="box1">
                    <img id="content1" src="/Images/1.png">
                </div>

            </div>
    </body>
</html>
