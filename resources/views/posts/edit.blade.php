@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post/{{ $post->id }}" enctype="multipart/form-data" method="post">

        @method('PATCH')

        @csrf

        <div class="containerDiv">
            <div class="">

                <div class="">
                    <h1>Update Post</h1>
                </div>
                <div class="indivElem formPost">
                    <label for="title" class="">Update title</label>

                    
                    <input id="title" type="text" 
                    class="@error('title') is-invalid @enderror" 
                    name="title" value="{{ old('title') ?? $post->title }}" 
                    autocomplete="title" autofocus|>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>

                <div class="indivElem formPost">
                    <label for="content" class="">Update content</label>

                    
                    <input id="content" type="text" 
                    class="@error('content') is-invalid @enderror" 
                    name="content" value="{{ old('content') ?? $post->content }}" 
                    autocomplete="content" autofocus|>

                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>

                <div class="indivElem formPost">
                    <label for="image1" class="">Update Image1 (optional)</label><br>
                    <input id="image1" type="file" class="" name="image1">

                    @error('image1')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="indivElem formPost">
                    <label for="image2" class="">Update Image2 (optional)</label><br>
                    <input id="image2" type="file" class="" name="image2">

                    @error('image2')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="indivElem formPost">
                    <label for="image3" class="">Update Image3 (optional)</label><br>
                    <input id="image3" type="file" class="" name="image3">

                    @error('image3')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="indivElem formPost">
                    <label for="image4" class="">Update Image4 (optional)</label><br>
                    <input id="image4" type="file" class="" name="image4">

                    @error('image4')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="actionButton">
                    <button class="contact">Update Post</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
