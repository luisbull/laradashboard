<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index(){
        return view('contact.index');
    }
    
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $email = new ContactMailable($request->all());
        // dd($email);
        Mail::to('luisbull@hotmail.com')->send($email);
    
        return redirect()->back()->with('success', 'Email successfuly sent');
    }
}
