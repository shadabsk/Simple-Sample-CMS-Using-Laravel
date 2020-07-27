<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Post;

use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function store(){

        $data = request() -> validate([
            'title' => 'required',
            'content' => ['required'],
            'image1' => '',
            'image2' => '',
            'image3' => '',
            'image4' => '',

        ]);

        if(request('image1')){
            $imagepath1 = request('image1')->store('profile','public');

            $image1 = Image::make(public_path("storage/{$imagepath1}"))->resize(250, 160);
            $image1->save();

            $imageArray1 = ['image1' => $imagepath1];
        }

        if(request('image2')){
            $imagepath2 = request('image2')->store('profile','public');

            $image2 = Image::make(public_path("storage/{$imagepath2}"))->resize(250, 160);
            $image2->save();

            $imageArray2 = ['image2' => $imagepath2];
        }

        if(request('image3')){
            $imagepath3 = request('image3')->store('profile','public');

            $image3 = Image::make(public_path("storage/{$imagepath3}"))->resize(250, 160);
            $image3->save();

            $imageArray3 = ['image3' => $imagepath3];
        }

        if(request('image4')){
            $imagepath4 = request('image4')->store('profile','public');

            $image4 = Image::make(public_path("storage/{$imagepath4}"))->resize(250, 160);
            $image4->save();

            $imageArray4 = ['image4' => $imagepath4];
        }

        auth()->user()->posts()->create(
            array_merge(
                $data,
                $imageArray1 ?? [],
                $imageArray2 ?? [],
                $imageArray3 ?? [],
                $imageArray4 ?? [],
            )
        );

        return redirect('/home');
    }

    public function update(Post $post){

        $data = request() -> validate([
            'title' => 'required',
            'content' => ['required'],
            'image1' => '',
            'image2' => '',
            'image3' => '',
            'image4' => '',

        ]);

        if(request('image1')){
            $imagepath1 = request('image1')->store('profile','public');

            $image1 = Image::make(public_path("storage/{$imagepath1}"))->resize(250, 160);
            $image1->save();

            $imageArray1 = ['image1' => $imagepath1];
        }

        if(request('image2')){
            $imagepath2 = request('image2')->store('profile','public');

            $image2 = Image::make(public_path("storage/{$imagepath2}"))->resize(250, 160);
            $image2->save();

            $imageArray2 = ['image2' => $imagepath2];
        }

        if(request('image3')){
            $imagepath3 = request('image3')->store('profile','public');

            $image3 = Image::make(public_path("storage/{$imagepath3}"))->resize(250, 160);
            $image3->save();

            $imageArray3 = ['image3' => $imagepath3];
        }

        if(request('image4')){
            $imagepath4 = request('image4')->store('profile','public');

            $image4 = Image::make(public_path("storage/{$imagepath4}"))->resize(250, 160);
            $image4->save();

            $imageArray4 = ['image4' => $imagepath4];
        }

        $post->update(
            array_merge(
                $data,
                $imageArray1 ?? [],
                $imageArray2 ?? [],
                $imageArray3 ?? [],
                $imageArray4 ?? [],
            )
        );

        /*Post::whereId("1")->update(
            array_merge(
                $data,
                $imageArray1 ?? [],
                $imageArray2 ?? [],
                $imageArray3 ?? [],
                $imageArray4 ?? [],
            )
        );*/

        //auth()->user()->posts()->update

        return redirect('/home');
    }

    public function create(){
        return view('posts.create');
    }

    public function edit(Post $post){
        $user = auth()->user();
        //$this->authorize('update', $user->profile);

        return view('posts.edit', compact('user','post'));
    }

    public function show($user){   
        $user = User::select('id')->where('username', $user)->first();

        return view('Posts.show', compact('user'));

    }

    public function destroy(Post $post){

        $post->destroy($post->id);

        return redirect("/home");
        
    }

}
