@extends('layouts.app')

@section('content')
<div class="">
    <form action="/brand/{{$user->trademark->id}}" enctype="multipart/form-data" method="post">

        @method('PATCH')

        @csrf

        <div class="containerDiv">
            <div class="">

                <div class="">
                    <h1>Edit Trademark</h1>
                </div>
                <div class="indivElem">
                    <label for="brandname1" class=" ">Edit brandname</label>

                    
                    <input id="brandname1" type="text" 
                    class=" @error('brandname1') is-invalid @enderror" 
                    name="brandname1" value="{{ old('brandname1') ??  $user->trademark->brandname1 }}" 
                    autocomplete="brandname1" autofocus|>

                    @error('brandname1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br><br>
                    <br>
                    

                    <input id="brandname2" type="text" 
                    class=" @error('brandname2') is-invalid @enderror" 
                    name="brandname2" value="{{ old('brandname2')  ?? $user->trademark->brandname2 }}" 
                    autocomplete="brandname2" autofocus|>

                    @error('brandname2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>

                <div class="indivElem">
                    <label for="logo" class="">Edit Logo (optional)</label><br>
                    <input id="logo" type="file" class="" name="logo">

                    @error('logo')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                

                <div class="actionButton">
                    <button class="contact">Edit Trademark</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
