<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

use App\Trademark;

use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth' );
    }
    
    public function create(){
        $user = auth()->user();

        if($user->trademark !=null){
            return redirect()->route('brand.edit', ['user' => $user]);
        }else{
            return view('brand.create', compact('user'));
        }
        //$this->authorize('update', $user->profile);
    }

    public function store(){
        $user = auth()->user();
        
        $data = request() -> validate([
            'brandname1' => 'required',
            'brandname2' => 'required',
            'logo' => '',
        ]);

        //$brandname = request('brandname1').request('brandname2');

        //$brandname = array("brand" => $brandname);

        if(request('logo')){
            $logopath = request('logo')->store('profile','public');

            $logo = Image::make(public_path("storage/{$logopath}"))->resize(60, 60);
            $logo->save();

            $logoArray = ['logo' => $logopath];
        }

        auth()->user()->trademark()->create(
            array_merge(
                $data,
                $logoArray ?? [],
            )
        );

        return redirect('/home');
        

    }

    public function edit(User $user){
        //$user = auth()->user();
        
        //$this->authorize('update', $user->profile);

        if($user->trademark == null){
            return redirect()->route('brand.create');
        }else{
            return view('brand.edit', compact('user'));
        }
    }

    public function update(Trademark $user){
        
        
        $data = request() -> validate([
            'brandname1' => 'required',
            'brandname2' => 'required',
            'logo' => '',
        ]);

        //$brandname = request('brandname1').request('brandname2');

        //$brandname = array("brand" => $brandname);

        if(request('logo')){
            $logopath = request('logo')->store('profile','public');
            $logo = Image::make(public_path("storage/{$logopath}"))->resize(60, 60);
            $logo->save();

            $logoArray = ['logo' => $logopath];
        }
        

        /*$trademark()->update(
            array_merge(
                $data,
                $logoArray ?? [],
            )
        );*/

        auth()->user()->trademark()->update(
            array_merge(
                $data,
                $logoArray ?? [],
            )
        );
        

        return redirect('/home');
        

    }

    public function destroy(User $user, Trademark $trademark){

        if($user->trademark == null){
            
        }else{
            $trademark->destroy($user->trademark->id);
        }
        
        //$user->destroy($user->trademark->id);

        return redirect("/home");
        
    }
}
