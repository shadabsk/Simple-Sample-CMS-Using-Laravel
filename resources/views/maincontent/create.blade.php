@extends('layouts.app')

@section('content')
<div class="">
    <form action="/maincontent" enctype="multipart/form-data" method="post">

        @csrf

        <div class="containerDiv">
            <div class="">

                <div class="">
                    <h1>Add Slides</h1>
                </div>
                <div class="indivElem formSlide">
                    <label for="heading1" class="">Heading</label>

                    
                    <input id="heading1" type="text" 
                    class="@error('heading1') is-invalid @enderror" 
                    name="heading1" placeholder="Heading line 1" value="{{ old('heading1') }}" 
                    autocomplete="heading1" autofocus|>

                    @error('heading1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br><br>

                    <input id="heading2" type="text" 
                    class="@error('heading2') is-invalid @enderror" 
                    name="heading2" placeholder="Heading line 2 (optional)" value="{{ old('heading2') }}" 
                    autocomplete="heading2" autofocus|>

                    @error('heading2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br><br>

                    <input id="heading3" type="text" 
                    class="@error('heading3') is-invalid @enderror" 
                    name="heading3" placeholder="Heading line 3 (optional)" value="{{ old('heading3') }}" 
                    autocomplete="heading3" autofocus|>

                    @error('heading3')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>

                <div class="indivElem formSlide">
                    <label for="innercontent" class="">Description</label>

                    
                    <input id="innercontent" type="text" 
                    class="@error('innercontent') is-invalid @enderror" 
                    name="innercontent" value="{{ old('innercontent') }}" 
                    autocomplete="innercontent" autofocus|>

                    @error('innercontent')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>

                <div class="indivElem formSlide">
                    <label for="navigatebutton" class="">Navigation Button (optional)</label>

                    
                    <input id="navigatebutton" type="text" 
                    class="@error('navigatebutton') is-invalid @enderror" 
                    name="navigatebutton" value="{{ old('navigatebutton') }}" 
                    autocomplete="navigatebutton" autofocus|>

                    @error('navigatebutton')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>

                <div class="indivElem formSlide">
                    <label for="navigatetext" class="">Navigation text (optional)</label>

                    
                    <input id="navigatetext" type="text" 
                    class="@error('navigatetext') is-invalid @enderror" 
                    name="navigatetext" value="{{ old('navigatetext') }}" 
                    autocomplete="navigatetext" autofocus|>

                    @error('navigatetext')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>

                <div class="indivElem formSlide">
                    <label for="image" class="">Background image</label><br>
                    <input id="image" type="file" class="" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                

                <div class="actionButton">
                    <button class="contact">Add Slides</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
