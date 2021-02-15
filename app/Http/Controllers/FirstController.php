<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller
{
    public function index(){

        $photos = Song::all();
        return view("FirstController.index", ["photos" => $photos]);
    }

    public function about(){

        return view("FirstController.about");
    }

    public function article($id){
        return view("FirstController.article", ["id" => $id]);

    }

    public function create(){
        return view('firstcontroller.create');
    }

    public function utilisateur($id){
        $user = User::find($id);
        if($user == false)
            abort(404);
        return view('firstcontroller.utilisateur', ["user" => $user]);
    }

    public function suivre($id) {
        Auth::user()->ILikeThem()->toggle($id);
        return back();
    }
    public function store(Request $request){
        
        $request->validate([
            'title' => 'required|min:4|max:255',
            'image' => 'required|file|mimes:mp3,ogg'
        ]);
        //phpinfo();
        //dd($_FILES, $request ->file('image'));
        $name = $request->file('image')->hashName();
        $request->file('image')->move('uploads/'.Auth::id(), $name);
        $photo = new Song();
        
        $photo->title = $request->input('title');
        $photo->url = "/uploads/".Auth::id()."/".$name; 
        $photo->votes = 0;
        $photo->user_id = Auth::id();
        $photo->save();
        return redirect('/');
    }
    
    public function search($s){
        $photos = Song::whereRaw("title like concat('%', ?, '%')", [$s])->orderBy('votes', 'desc')->get();
        $users = User::whereRaw("name LIKE CONCAT(?, '%')", [$s])->orderBy('id', 'desc')->get();
        return view('firstcontroller.search', ["photos" => $photos, "users"=>$users]);
    }
}
