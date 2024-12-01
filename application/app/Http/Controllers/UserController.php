<?php 
namespace App\Http\Controllers;

   use App\Models\User;
   use App\Models\eleve;
   use App\Models\professeur;
   use Illuminate\Http\Request;

   class UserController extends Controller
   {
    

       public function create()
       {
           return view('register');
       }

       public function store(Request $request)
       {
        
       }

       public function show(User $user)
       {
            $data=[];
            //recuperer les infos si c'est un eleve avec la relation
            $eleve = $user->eleve;
            //recuperer les infos si c'est un professeur avec la relation
            $professeur = $user->professeur;

            //si c'est un eleve
            if($eleve){
                $data = $eleve;
            }else{
                //si c'est un professeur
                $data = $professeur;
            }
            return view('user.show', compact('user', 'data'));
       }

    
   }
