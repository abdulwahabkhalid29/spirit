<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::get();
        return view('blog.index' , compact('blogs'));
    }    
    public function create(){
        $blogs = Blog::get();
        return view('blog.create' , compact('blogs'));
    }
    public function store(Request $request){

        $request->validate([
            'category' => 'required',
            'title' => 'required|max:255',
            'work' => 'required|max:255',   
            'thumbnail' => 'required',   
        ]);
        if($request->file('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $imageName = 'blog' . '-' . time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('upload/blog/', $imageName);
        }
        $store = Blog::create([
            'category' => $request->category,
            'title' => $request->title,
            'work' => $request->work,
            'thumbnail' => $imageName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('blog.index')->with('success','blog Added');
        }
        else{
            return redirect()->route('blog.create')->with('error','Something Went Wrong');
        }

    }
    public function edit($id){
        $blog = Blog::where('id',$id)->firstorfail();
        return view('blog.edit',compact('blog'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'category' => 'required',
            'title' => 'required|max:255',
            'work' => 'required|max:255',   
        ]);
        $imageData = Blog::where('id',$id)->firstorfail();
        if($request->file('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $imageName = 'blog' . '-' . time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('upload/blog/', $imageName);
        }
        else{
            $imageName = $imageData->thumbnail;
        }
    $update = Blog::where('id',$id)->update([
        'category' => $request->category,
        'title' => $request->title,
        'work' => $request->work,
        'thumbnail' => $imageName,
    ]);
    if($update > 0){
        return redirect()->route('blog.index')->with('success','blog update');
    }
    return redirect()->route('blog.edit')->with('error','something went wrong');  
    }
    public function delete($id){
        $carousels = Blog::where('id',$id)->firstorfail();
        if(!empty($carousels)){
         $carousels->delete();
         return redirect()->route('blog.index')->with('success','blog delete');
        }
        return redirect()->route('blog.index')->with('error','record not found');
     } 
}
