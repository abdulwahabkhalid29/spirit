<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::get();
        return view('client.index',compact('clients'));
    }
    public function create(){
        $clients = Client::get();
        return view('client.create' , compact('clients'));
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',   
            'company' => 'required|max:255',  
            'about' => 'required',   
            'facebook' => 'required|max:255',   
            'twitter' => 'required|max:255',   
            'linkedin' => 'required|max:255',   
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'client' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/client/', $imageName);
        }
        $store = Client::create([
            'name' => $request->name,
            'image' => $imageName,
            'about' => $request->about,
            'company' => $request->company,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
        ]);

        if(!empty($store->id)){
            return redirect()->route('client.index')->with('success','Client Added');
        }
        else{
            return redirect()->route('client.create')->with('error','Something Went Wrong');
        }

    }
    public function edit($id){
        $client = Client::where('id',$id)->firstorfail();
        return view('client.edit',compact('client'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'name' => 'required|max:255',
            'company' => 'required|max:255',  
            'about' => 'required',   
            'facebook' => 'required|max:255',   
            'twitter' => 'required|max:255',   
            'linkedin' => 'required|max:255',   
        ]);
        $imageData = Client::where('id',$id)->firstorfail();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'client' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/client/', $imageName);
        }
        else{
            $imageName = $imageData->image;
        }
    $update = Client::where('id',$id)->update([
        'name' => $request->name,
        'image' => $imageName,
        'about' => $request->about,
        'company' => $request->company,
        'facebook' => $request->facebook,
        'twitter' => $request->twitter,
        'linkedin' => $request->linkedin,
    ]);
    if($update > 0){
        return redirect()->route('client.index')->with('success','client update');
    }
    return redirect()->route('client.edit')->with('error','something went wrong');  
    }
    public function delete($id){
        $clients = Client::where('id',$id)->firstorfail();
        if(!empty($clients)){
         $clients->delete();
         return redirect()->route('client.index')->with('success','client delete');
        }
        return redirect()->route('client.index')->with('error','record not found');
     }
}
