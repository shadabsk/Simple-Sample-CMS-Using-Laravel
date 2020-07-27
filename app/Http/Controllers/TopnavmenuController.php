<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Topnavmenu;

use App\User;

class TopnavmenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth' );
    }
    
    public function store(){

        $data = request() -> validate([
            'navmenutext' => 'required',
        ]);

        
        auth()->user()->topnavmenus()->create($data);

        return redirect('/home');
    }

    public function update(Topnavmenu $navmenu){

        $data = request() -> validate([
            'navmenutext' => 'required',
        ]);

        $navmenu->update($data);

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
        return view('topnavmenu.create');
    }

    public function edit(User $user,Topnavmenu $navmenu){
        $user = auth()->user();

        
        //$this->authorize('update', $user->profile);

        return view('topnavmenu.edit', compact('user','navmenu'));
    }

    public function destroy(Topnavmenu $navmenu){
        
        
        $navmenu->delete();

        return redirect("/home");
        
    }
}
