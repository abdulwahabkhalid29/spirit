<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;

class CarouselController extends Controller
{
    public function index(){
        $carousels = Carousel::get();
        return view('carousel.index' , compact('carousels'));
    }
    public function create(){
        $carousels = Carousel::get();
        return view('carousel.create' , compact('carousels'));
    }
    public function store(Request $request){

        $request->validate([
            'title' => 'required|max:255',
            'info' => 'required|max:255',   
            'bgimg' => 'required',   
        ]);
        if($request->file('bgimg')){
            $bgimg = $request->file('bgimg');
            $imageName = 'carousel' . '-' . time() . '.' . $bgimg->getClientOriginalExtension();
            $bgimg->move('upload/carousel/', $imageName);
        }
        $store = Carousel::create([
            'title' => $request->title,
            'info' => $request->info,
            'bgimg' => $imageName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('carousel.index')->with('success','carousel Added');
        }
        else{
            return redirect()->route('carousel.create')->with('error','Something Went Wrong');
        }

    }
    public function edit($id){
        $carousel = Carousel::where('id',$id)->firstorfail();
        return view('carousel.edit',compact('carousel'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'title' => 'required|max:255',
            'info' => 'required|max:255',   
        ]);
        $imageData = Carousel::where('id',$id)->firstorfail();
        if($request->file('bgimg')){
            $bgimg = $request->file('bgimg');
            $imageName = 'carousel' . '-' . time() . '.' . $bgimg->getClientOriginalExtension();
            $bgimg->move('upload/carousel/', $imageName);
        }
        else{
            $imageName = $imageData->bgimg;
        }
    $update = Carousel::where('id',$id)->update([
        'title' => $request->title,
        'info' => $request->info,
        'bgimg' => $imageName,
    ]);
    if($update > 0){
        return redirect()->route('carousel.index')->with('success','carousel update');
    }
    return redirect()->route('carousel.edit')->with('error','something went wrong');  
    }
    public function delete($id){
        $carousels = carousel::where('id',$id)->firstorfail();
        if(!empty($carousels)){
         $carousels->delete();
         return redirect()->route('carousel.index')->with('success','carousel delete');
        }
        return redirect()->route('carousel.index')->with('error','record not found');
     } 
}