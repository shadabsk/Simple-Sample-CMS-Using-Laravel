@extends('layouts.app')

@section('content')
<div class="">
    <form action="/topnavmenu" method="post">

        @csrf

        <div class="containerDiv">
            <div class="">

                <div class="">
                    <h1>Create Top Menus</h1>
                </div>
                <div class="indivElem">
                    <label for="navmenutext" class="">Add Menus</label>

                    
                    <input id="navmenutext" type="text" 
                    class="@error('navmenutext') is-invalid @enderror" 
                    name="navmenutext" value="{{ old('navmenutext')  }}" 
                    autocomplete="navmenutext" autofocus|>

                    @error('navmenutext')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>
                

                <div class="actionButton">
                    <button class="contact">Add Menus</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
