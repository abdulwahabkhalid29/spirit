<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        return view('contact.index',compact('contacts'));
    }
    public function create(){
        $contacts = Contact::get();
        return view('contact.create' , compact('contacts'));
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',   
            'subject' => 'required',      
            'mobile' => 'required',      
            'message' => 'required',      
        ]);
        $store = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'mobile' => $request->mobile,
            'message' => $request->message,
           
        ]);

        if(!empty($store->id)){
            return redirect()->route('index')->with('success','contact Added');
        }
        else{
            return redirect()->route('contact.create')->with('error','Something Went Wrong');
        }

    }
    public function delete($id){
        $contacts = Contact::where('id',$id)->firstorfail();
        if(!empty($contacts)){
         $contacts->delete();
         return redirect()->route('contact.index')->with('success','contact delete');
        }
        return redirect()->route('contact.index')->with('error','record not found');
     }
}
