<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $services = service::get();
        return view('service.index',compact('services'));
    }
    public function create(){
        $services = service::get();
        return view('service.create' , compact('services'));
    }
    public function store(Request $request){

        $request->validate([
            'title' => 'required|max:255',
            'info' => 'required|max:255',   
            'img' => 'required',   
        ]);
        if($request->file('img')){
            $img = $request->file('img');
            $imageName = 'service' . '-' . time() . '.' . $img->getClientOriginalExtension();
            $img->move('upload/service/', $imageName);
        }
        $store = service::create([
            'title' => $request->title,
            'info' => $request->info,
            'img' => $imageName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('service.index')->with('success','service Added');
        }
        else{
            return redirect()->route('service.create')->with('error','Something Went Wrong');
        }

    }
    public function edit($id){
        $service = Service::where('id',$id)->firstorfail();
        return view('service.edit',compact('service'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'title' => 'required|max:255',
            'info' => 'required|max:255',   
        ]);
        $imageData = Service::where('id',$id)->firstorfail();
        if($request->file('img')){
            $img = $request->file('img');
            $imageName = 'service' . '-' . time() . '.' . $img->getClientOriginalExtension();
            $img->move('upload/service/', $imageName);
        }
        else{
            $imageName = $imageData->img;
        }
    $update = Service::where('id',$id)->update([
        'title' => $request->title,
        'info' => $request->info,
        'img' => $imageName,
    ]);
    if($update > 0){
        return redirect()->route('service.index')->with('success','service update');
    }
    return redirect()->route('service.edit')->with('error','something went wrong');  
    }
    public function delete($id){
        $services = Service::where('id',$id)->firstorfail();
        if(!empty($services)){
         $services->delete();
         return redirect()->route('service.index')->with('success','service delete');
        }
        return redirect()->route('service.index')->with('error','record not found');
     } 
}
