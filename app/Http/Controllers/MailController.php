<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
   public static function sendMail($request,$plantilla)
    {
        $request['subject']     = isset($request['subject'])?$request['subject']:'Informazione';
        $request['msg']         = isset($request['comment'])?$request['comment']:'';
        $request['plantilla']   = 'emails.'.$plantilla;

        $subject                = $request['subject'];
        $destinatario           = $request['email'];

        try{
            $response = Mail::send($request['plantilla'], $request, function ($message) use ($destinatario, $subject) {
                $message->to($destinatario)->subject($subject);
            });
        }catch(\Swift_TransportException $e){
            return $e->getMessage();
        }

        try{
            Mail::send($request['plantilla'], $request, function ($message) use ($subject) {
                $message->to("info@jumperr.com")->subject($subject);
            });
        }catch(\Swift_TransportException $e){
            return $e->getMessage();
        }

        return "OK";
    }
}