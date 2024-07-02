<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::send([], [], function ($message) use ($data) {
            $message->to('support@kualitasudara.com')
                ->subject('Contact Form Message')
                ->from($data['email'], $data['name'])
                ->text($data['message']);
        });

        return redirect()->route('contact')->with('success', 'Pesan Anda telah terkirim.');
    }
}
