<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//Importation des classes pour le mail
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageGoogle;
use App\Mail\MessageMail;

class MessageController extends Controller
{

    // Envoi du mail aux utilisateurs
    
	public function sendMessageMail (Request $request) {

		#1. Validation de la requête
		$this->validate($request, [ 'message' => 'bail|required' ]);

		#2. Récupération des utilisateurs
		$users = User::all();
        try {
            Mail::to("grisoffa@gmail.com")->send(new MessageMail($request->message));
            return 'Email envoyé avec succès !';
        } catch (\Exception $e) {
            return 'Erreur lors de l\'envoi : ' . $e->getMessage();
        }
        
	}

}
