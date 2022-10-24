<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::get();
        return view('team.index',compact('teams'));
    }
    public function create(){
        $teams = Team::get();
        return view('team.create' , compact('teams'));
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'about' => 'required|max:255',   
            'facebook' => 'required|max:255',   
            'twitter' => 'required|max:255',   
            'skype' => 'required|max:255',   
            'img' => 'required',   
        ]);
        if($request->file('img')){
            $img = $request->file('img');
            $imageName = 'team' . '-' . time() . '.' . $img->getClientOriginalExtension();
            $img->move('upload/team/', $imageName);
        }
        $store = Team::create([
            'name' => $request->name,
            'about' => $request->about,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'skype' => $request->skype,
            'img' => $imageName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('team.index')->with('success','team Added');
        }
        else{
            return redirect()->route('team.create')->with('error','Something Went Wrong');
        }

    }
    public function edit($id){
        $team = Team::where('id',$id)->firstorfail();
        return view('team.edit',compact('team'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'name' => 'required|max:255',
            'about' => 'required|max:255',   
            'facebook' => 'required|max:255',   
            'twitter' => 'required|max:255',   
            'skype' => 'required|max:255',   
        ]);
        $imageData = Team::where('id',$id)->firstorfail();
        if($request->file('img')){
            $img = $request->file('img');
            $imageName = 'team' . '-' . time() . '.' . $img->getClientOriginalExtension();
            $img->move('upload/team/', $imageName);
        }
        else{
            $imageName = $imageData->img;
        }
    $update = Team::where('id',$id)->update([
        'name' => $request->name,
        'about' => $request->about,
        'facebook' => $request->facebook,
        'twitter' => $request->twitter,
        'skype' => $request->skype,
        'img' => $imageName,
    ]);
    if($update > 0){
        return redirect()->route('team.index')->with('success','team update');
    }
    return redirect()->route('team.edit')->with('error','something went wrong');  
    }
    public function delete($id){
        $teams = Team::where('id',$id)->firstorfail();
        if(!empty($teams)){
         $teams->delete();
         return redirect()->route('team.index')->with('success','team delete');
        }
        return redirect()->route('team.index')->with('error','record not found');
     }
}
