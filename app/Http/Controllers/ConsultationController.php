<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultationMail;

class ConsultationController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string',
            'company'  => 'nullable|string',
            'email'    => 'required|email',
            'whatsapp' => 'required|string',
            'event'    => 'required|string',
        ]);

        Mail::send('emails.consultation', $data, function ($message) use ($data) {
            $message->to('info@glowy.co.id')
                ->subject('New Free Consultation Request')
                ->replyTo($data['email'], $data['name']);
        });

        return response()->json([
            'status' => 'success',
            'message' => 'Consultation request sent successfully'
        ]);
    }
}
