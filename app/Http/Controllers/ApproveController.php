<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class ApproveController extends Controller
{
    public function index(){

        $data = array('name'=>"BayBD");
        $subject="esraq26552@gmail.com";
        $test="User Credentials";
        $text="test";
        mail::send(['emails'=>'reset_set'],$data,
        function($message)use($subject,$test,$text)
        {
            $message->from('oktech1212@gmail.com','BayBD');
            $message->to($subject);
            $message->cc('humayunesraq26552@gmail.com');
            $message->subject($test);
            $message->setBody($text);
        });

        echo "done";
    }
}
