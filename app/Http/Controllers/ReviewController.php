<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected function insertData(Request $req)
    {
        $req->validate([
            'name'=>'required|max:15',
            'email'=>'required|max:25|email',
            'subject'=>'max:50',
            'message'=>'max:500',

        ]);


        $data['name']=$req->name;
        $data['email']=$req->email;
        $data['subject']=$req->subject;
        $data['message']=$req->message;

        $user=Review::create($data);
        if($user)
        {
            return redirect(route('contact'))->with('status',"Got it! We'll be in touch with you soon.");
        }else{
            return redirect(route('contact'))->with('status','System error');
        }
    }
}
