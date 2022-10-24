<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){    
        $categories = category::get();
        return view('category.index' , compact('categories'));
    }
    public function create(){
        $categories = category::get();
        return view('category.create' , compact('categories'));
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191|:categories,name',
            'status' => 'required',
        ]);
        $store = Category::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        if(!empty($store->id)){
            return redirect()->route('category.index')->with('success','Category Added');
        }
        else{
            return redirect()->route('category.create')->with('error','Something Went Wrong');
        }

    }
    public function edit($id){
        $categories = category::get();
        $category = Category::where('id',$id)->firstorfail();
        return view('category.edit',compact('category' , 'categories'));
    }

    public function update(Request $request, $id){
        $request->validate([ 
        'name' => 'required|max:191|unique:categories,name,'.$id,
        'status' => 'required',
    ]);
    $update = Category::where('id',$id)->update([
        'name' => $request->name,
        'status' => $request->status,
    ]);
    if($update > 0){
        return redirect()->route('category.index')->with('success','category update');
    }
    return redirect()->route('category.index')->with('error','something went wrong');  
    }
    public function delete($id){
        $categories = Category::where('id',$id)->firstorfail();
        if(!empty($categories)){
         $categories->delete();
         return redirect()->route('category.index')->with('success','category delete');
        }
        return redirect()->route('category.index')->with('error','record not found');
     }
}
