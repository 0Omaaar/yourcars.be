<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:100',
                'prenom' => 'required|string|max:100',
                'email' => 'required|email',
                'phone' => 'required',
                'adresse' => 'required|string|max:255',
                'objet' => 'required|string|max:100',
                'message' => 'required|string',
            ]);

            Mail::to("info@yourcars.be")->queue(new ContactFormMail($validated));

            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer plus tard.')->withInput();
        }
    }
}
