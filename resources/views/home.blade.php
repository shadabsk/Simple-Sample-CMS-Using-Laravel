@extends('layouts.app')

@section('content')
        <div class="wrapping">
            <div class="navmenu">
                <div class="logo">
                    <div>
                        <img src="/storage/{{ $user->trademark->logo ?? 'Profile/nofound.png'}}" class="logoimg" alt="logo">
                        <a class="logtext" href="https://github.com/shadabsk/">{{ $user->trademark->brandname1 ?? "" }}
                            <span>{{ $user->trademark->brandname2 ?? ""  }}</span>
                        </a>
                        
                    </div>
                    <div class="editDiv">
                        <div class="editAdmin">
                            <a href="/brand/create" class="contact">Create</a>
                            <a href="/brand/{{ $user->id }}/edit" class="contact">Edit</a>
                        </div>
                        <div class="delBut">
                            <form action="/brand/{{ $user->id ?? '' }} " method="post">
                                @method('DELETE')
                                @csrf
                                
                                    <button class="contact" style="">Delete</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <i class="fas fa-bars" id="showResMen"></i>
                <div class="topnav">
                    <div>
                        @foreach($user->topnavmenus as $topnavmenu)
                            <a class="active" href="#home">{{ $topnavmenu->navmenutext }}</a>
                            <a href="/topnavmenu/{{ $topnavmenu->id }}/edit" class="contact editnav">Edit</a>  
                            <a href="#"
                                onclick="event.preventDefault();
                                document.getElementById('deleteTopNav-{{ $topnavmenu->id }}').submit();"
                                class="contact editnavdel">Delete
                            </a>    
                        @endforeach
                        @if (Route::has('login'))
                            @auth
                                <a class="contact bladingtemp" href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="contact bladingtemp" href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a class="contact bladingtemp" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                    <div class="editDiv">
                        <div class="editAdmin bladingtemp">
                            <a href="/topnavmenu/create" class="contact">Create</a>
                           
                        </div>
                    </div>
                </div>
                
            </div>	
            <div class="maincont">
                @foreach(  $user->maincontents as $maincontent )
                    <div class="box" id="box{{ $maincontent->id }}">
                        <img id="content{{ $maincontent->id }}" src="/storage/{{ $maincontent->image }}" width="100%">
                        <div class="innercont">
                            <h2 style="position: relative;"><strong>{{ $maincontent->heading1 }}</strong>  <br> <strong>{{ $maincontent->heading2 }}</strong> <br><strong> {{ $maincontent->heading3 }}</strong></h2>
                            <p style="position: relative;">{{ $maincontent->innercontent }} <br><br><br>
                                <a href="" class="innercontbut">{{ $maincontent->navigatebutton  ?? '' }}</a>  {{ $maincontent->navigatetext ?? '' }}
                            </p>

                            <div class="editDiv slideEdit">
                                <div class="editAdmin">
                                    <a href="/maincontent/{{ $maincontent->id }}/edit" class="contact">Edit Slide</a>
                                </div>
                                <div class="delBut">
                                    <form action="/maincontent/{{ $maincontent->id ?? '' }} " method="post">
                                        @method('DELETE')
                                        @csrf
                                        
                                            <button class="contact" style="">Delete Slide</button>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                
            </div>
            

            <div id="carousButton">
                @foreach(  $user->maincontents as $maincontent )
                    <span id="ctrl{{ $maincontent->id }}" class="dot"  ></span>
                @endforeach
            </div>

            <div class="editDiv slides">
                <div class="editAdmin bladeCreate">
                    <a href="/maincontent/create" class="contact">Create Slides</a>
                </div>
            </div>

        </div>

        <div class="wrappingCont addcont bladeModify">
            <a href="/post/create" class="contact" style="">Add Contents</a>
        </div>

        @foreach($user->posts as $post)
            <div class="innercontpost">
                <h3>{{ $post->title }}</h3>
                <p>
                    {{ $post->content }}
                </p>
                
                <div class='contentimg'>
                    <img src="/storage/{{ $post->image1 }}" alt="">
                    <img src="/storage/{{ $post->image2 }}" alt="">
                    <img src="/storage/{{ $post->image3 }}" alt="">
                    <img src="/storage/{{ $post->image4 }}" alt="">
                </div>
                <div class="wrappingCont" style="">
                    <div>
                        <a href="/post/{{ $post->id }}/edit" class="contact" style="">Edit Contents</a>
                    </div>
                    <div class="delBut">
                        <form action="/post/{{ $post->id}} " method="post">
                            @method('DELETE')
                            @csrf
                            
                                <button class="contact" style="">Delete Content</button>
                            
                        </form>
                    </div>
                </div>
                
            </div>
        @endforeach

        @foreach($user->topnavmenus as $topnavmenu)
            <form id="deleteTopNav-{{ $topnavmenu->id }}" action="/topnavmenu/{{ $topnavmenu->id }} "
                method="POST" style="display: none;">
                @method('DELETE')
                @csrf
            </form>
        @endforeach
@endsection
