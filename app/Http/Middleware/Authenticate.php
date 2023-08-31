<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */

    protected function redirectTo(Request $request): ?string
    {

        if(str()->contains(url()->current(), ['/admin'])){
            if($request->expectsJson()){
                return null;
            }else{
                session()->flash("notification.alert","Authentification Réquise.");
                session()->flash("notification.type","danger");
                session()->flash("success",false);
                session()->flash("notification.message","Vous devez etre connecté(e) pour acceder à la page demandée");
                // [
                //     'notification.alert'=>'Erreur.',
                //     'notification.type'=>"danger",
                //     'success'=>true,
                //     'notification.message'=>"Erreur(s) rencontrée(s) lors de l'enregistrement de la Bourse.",
                // ]
                return route('admin.login');
            }
        }
        if($request->expectsJson()){
            return null;
        }else{
            session()->flash("notification.alert","Authentification Réquise.");
            session()->flash("notification.type","danger");
            session()->flash("success",false);
            session()->flash("notification.message","Vous devez etre connecté(e) pour acceder à la page demandée");
            // [
            //     'notification.alert'=>'Erreur.',
            //     'notification.type'=>"danger",
            //     'success'=>true,
            //     'notification.message'=>"Erreur(s) rencontrée(s) lors de l'enregistrement de la Bourse.",
            // ]
            return route('login');
        }
        // return $request->expectsJson() ? null : 
    }
}
