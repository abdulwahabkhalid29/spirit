<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = post::get();
        return view('post.index',compact('posts'));
    }
    public function create(){
        $posts = post::get();
        return view('post.create' , compact('posts'));
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',   
            'about' => 'required',      
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'post' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/post/', $imageName);
        }
        $store = post::create([
            'name' => $request->name,
            'image' => $imageName,
            'about' => $request->about,
           
        ]);

        if(!empty($store->id)){
            return redirect()->route('post.index')->with('success','post Added');
        }
        else{
            return redirect()->route('post.create')->with('error','Something Went Wrong');
        }

    }
    public function edit($id){
        $post = post::where('id',$id)->firstorfail();
        return view('post.edit',compact('post'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'name' => 'required|max:255',
            'about' => 'required',   
        ]);
        $imageData = post::where('id',$id)->firstorfail();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'post' . '-' . time() . '.' . $image->getpostOriginalExtension();
            $image->move('upload/post/', $imageName);
        }
        else{
            $imageName = $imageData->image;
        }
    $update = post::where('id',$id)->update([
        'name' => $request->name,
        'image' => $imageName,
        'about' => $request->about,
    ]);
    if($update > 0){
        return redirect()->route('post.index')->with('success','post update');
    }
    return redirect()->route('post.edit')->with('error','something went wrong');  
    }
    public function delete($id){
        $posts = post::where('id',$id)->firstorfail();
        if(!empty($posts)){
         $posts->delete();
         return redirect()->route('post.index')->with('success','post delete');
        }
        return redirect()->route('post.index')->with('error','record not found');
     }
}
