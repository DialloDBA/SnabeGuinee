<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boursier extends Model
{
    use HasFactory;

    public static function Dossier($nom, $prenom,$matricule) {
        // Convertir le nom en majuscules
        // $nom = strtoupper($nom);
        // $aa = \Config::get('aa');
        // $debut = (new DateTime($aa->debut))->format('y');
        // $nb = Inscription::withTrashed()->where('annee_id',$aa->id)->count();

        // Vérifier le nombre de mots dans le prénom
        $prenomMots = explode(" ", $prenom);

        if(count($prenomMots) >= 3) {
          // Si le prénom contient au moins trois mots, utiliser la première lettre de chaque mot pour générer le code unique
          $code = substr(strtoupper($nom), 0, 1).substr(strtoupper($prenomMots[0]), 0, 1) . substr(strtoupper($prenomMots[1]), 0, 1) . substr(strtoupper($prenomMots[2]), 0, 1);
        } elseif(count($prenomMots) == 2) {
          // Si le prénom contient deux mots, utiliser la première lettre de chaque mot pour générer le code unique
          $code = substr(strtoupper($nom), 0, 1).substr(strtoupper($prenomMots[0]), 0, 1) . substr(strtoupper($prenomMots[1]), 0, 1);
        } else {
          // Sinon, utiliser la première lettre du prénom et la première lettre du nom pour générer le code unique
        //   $prenom = strtoupper(substr($prenom, 0, 1));
          $code =  substr(strtoupper($nom), 0, 2).substr(strtoupper($prenom), 0, 2);
        }
    
        // Concaténer le code unique et le nombre aléatoire pour former le code final
        $codeUnique = $code . $matricule;
        
        // while(static::where('matricule',$code)->first()){
        //     $codeUnique = $code . sprintf("%04d",($nb++));
        // }

        // Retourner le code unique
        return $codeUnique;
        // return $codeUnique;
    }
}
