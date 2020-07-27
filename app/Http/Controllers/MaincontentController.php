<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Maincontent;

use Intervention\Image\Facades\Image;

class MaincontentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function store(){

        $data = request() -> validate([
            'heading1' => 'required',
            'heading2' => '',
            'heading3' => '',
            'innercontent' => 'required',
            'navigatebutton' => '',
            'navigatetext' => '',
            'image' => ['required','image'],
            

        ]);

        if(request('image')){
            $imagepath = request('image')->store('profile','public');

            $image = Image::make(public_path("storage/{$imagepath}"))->resize(1519, 675);
            $image->save();

            $imageArray = ['image' => $imagepath];
        }

        auth()->user()->maincontents()->create(
            array_merge(
                $data,
                $imageArray ?? [],
            )
        );

        return redirect('/home');
    }

    public function update(Maincontent $content){

        $data = request() -> validate([
            'heading1' => 'required',
            'heading2' => '',
            'heading3' => '',
            'innercontent' => 'required',
            'navigatebutton' => '',
            'navigatetext' => '',
            'image' => ['image'],
            

        ]);

        if(request('image')){
            $imagepath = request('image')->store('profile','public');

            $image = Image::make(public_path("storage/{$imagepath}"))->resize(1519, 675);
            $image->save();

            $imageArray = ['image' => $imagepath];
        }

        $content->update(
            array_merge(
                $data,
                $imageArray ?? [],
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
        return view('maincontent.create');
    }

    public function edit(Maincontent $content){
        $user = auth()->user();
        //$this->authorize('update', $user->profile);

        return view('maincontent.edit', compact('content'));
    }

    public function destroy(Maincontent $content){

        $content->delete();

        return redirect("/home");
        
    }

}


