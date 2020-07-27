@extends('layouts.app')

@section('content')
<div class="">
    <form action="/topnavmenu/{{ $navmenu->id }}" method="post">

    @method('PATCH')
    @csrf

        <div class="containerDiv">
            <div class="">

                <div class="">
                    <h1>Edit Top Menus</h1>
                </div>
                <div class="indivElem">
                    <label for="navmenutext" class="">Edit Menus</label>

                    
                    <input id="navmenutext" type="text" 
                    class="@error('navmenutext') is-invalid @enderror" 
                    name="navmenutext" value="{{ old('navmenutext')  ?? $navmenu->navmenutext}}" 
                    autocomplete="navmenutext" autofocus|>

                    @error('navmenutext')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>
                

                <div class="actionButton">
                    <button class="contact">Edit Menu</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
