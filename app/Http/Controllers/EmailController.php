<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnvoyerEmail;

class EmailController extends Controller
{
    public function envoyerEmail(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::to('decibels@assos.utc.fr')->send(new EnvoyerEmail($data));

        return redirect()->back()->with('success', 'Votre message a bien été envoyé.');
    }
}
