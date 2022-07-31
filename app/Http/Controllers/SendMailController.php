<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Facades\Mail;
class SendMailController extends Controller
{
    public function sendMail(Request $request) {
    	$data = $request->all();
    	$email = $data['email'];
    	//Gửi mail
        Mail::send('emails.send_mails', array('email'=>$email), function($message) use ($email){
	        $message->to($email, 'Đăng ký nhận tin')->subject('Mobile Shop');
	    });
    	return back()->with('success','Đã gửi thông tin đến email của bạn');
    }

}
