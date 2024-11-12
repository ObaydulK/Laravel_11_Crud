<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function create(){
        return view('create');
    }
    public function datastore(Request $request){
        $validated = $request->validate([
            'roll'=> 'required',
            'description'=>'required',
            'image'=>'nullable|mimes:png,jpg,jpeg'
        ]);
       


       $post= new Post;
        $post->roll = $request->roll;
        $post->name = $request->name;
        $post->class = $request->class;
        $post->description = $request->description;
        if (isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imageName);
        }

        $post->save();

        return redirect()->route('home')->with('success', 'Your post has been Created!');
    }
    public function editData($id){
        $post = Post::findOrFail($id);
        return view ('edit', ['ourPost'=>$post]);
    }





    public function updateData($id, Request $request){
        
      $validated = $request->validate([
            'roll'=> 'required',
            'description'=>'required',
            'image'=>'nullable|mimes:png,jpg,jpeg'
        ]);
       


        $post = Post::findOrFail($id);
        $post->roll = $request->roll;
        $post->name = $request->name;
        $post->class = $request->class;
        $post->description = $request->description;
        if (isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imageName);
            $post->image = $imageName;
        }
        $post->save();
        return redirect()->route('home')->with('success', 'Your post has been Created!');       
    }

    public function deleteData($id){
        $post = Post::findOrFail($id);
        $post->delete();
        
        return redirect()->route('home')->with('success', 'Your post has been Delete!'); 
    }
}
