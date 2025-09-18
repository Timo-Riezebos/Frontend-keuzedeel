<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Hier kun je eventueel een mail sturen of opslaan
        // Voor nu alleen een bevestiging
        return redirect()->back()->with('success', 'Bedankt voor je bericht!');
    }
}
