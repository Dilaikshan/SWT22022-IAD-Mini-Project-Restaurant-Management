<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bokking;
class BookingController extends Controller
{
    protected function insertData(Request $req)
    {
        $req->validate([
            'name'=>'required|max:15',
            'email'=>'required|max:25|email',
            'datetime' => 'required',
            'people'=>'required',
            'message'=>'max:100',

        ]);

        $datetime = date('Y-m-d H:i:s', strtotime($req->datetime));

        $data['name']=$req->name;
        $data['email']=$req->email;
        $data['datetime']=$datetime;
        $data['people']=$req->people;
        $data['message']=$req->message;

        $user=Bokking::create($data);
        if($user)
        {
            return redirect(route('home'))->with('success','Booking successfull');
        }else{
            return redirect(route('booking'))->with('failed','Booking Failed');
        }
    }
}
