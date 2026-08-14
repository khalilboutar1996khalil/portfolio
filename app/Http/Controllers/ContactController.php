<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageReceived;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
     public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            $contact = Contact::create($validated);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'envoi du message.'
            ], 500);
        }

        try {
            Mail::to(config('mail.admin_address'))->send(new ContactMessageReceived($contact));
        } catch (\Exception $e) {
            Log::error('Failed to send contact notification email: '.$e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Votre message a été envoyé avec succès !'
        ]);
    }
}
