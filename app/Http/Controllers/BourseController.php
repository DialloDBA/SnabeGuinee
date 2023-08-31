<?php

namespace App\Http\Controllers;

use App\Models\Bourse;
use App\Http\Requests\StoreBourseRequest;
use App\Http\Requests\UpdateBourseRequest;
use App\Models\Annee;
use App\Models\BourseGenre;
use App\Models\BourseProgramme;
use App\Models\Genre;
use App\Models\Justificatif;
use App\Models\Pays;
use App\Models\Programme;
use App\Models\TypeBourse;

class BourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Bourse::orderBy('created_at','DESC')->orderBy('priorite','DESC')->get();
        return view("admin.bourses.index",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("admin.bourses.create",[
            "annees"=>Annee::all(),
            "types"=> TypeBourse::all(),
            "statut"=>[0=>"Inactive",1=>"Active",],
            "pays"=>Pays::all(),
            "programmes"=> Programme::all(),
            "genres"=>Genre::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBourseRequest $r)
    {

        if(Bourse::where("titre_bourse",$r->titre)->first()){
            $u = str()->slug($r->titre)."-".date('d-m-y-h-i-s');
        }else $u = str()->slug($r->titre);
        $type = TypeBourse::find($r->type);
        
        //creation du dossier de l'article
        $dossier ="bourses/".str()->slug($type->libelle);
        
        $img_max = "";
        $img_min = "";
        
        if ($r->hasFile('image_maximale')) {
            $img_max= $r->file('image_maximale')->store($dossier, 'public');
        }
        if ($r->hasFile('image_minimale')) {
            $img_min = $r->file('image_minimale')->store($dossier, 'public');
        }
        
        $created = Bourse::create([
            'titre_bourse'=>$r->titre,
            'unique'=>$u,
            'date_limite_bourse'=>$r->date_limite,
            'eligibilite'=>$r->eligibilite,
            'description_bourse'=>$r->description,
            'image_min_bourse'=>$img_min,
            'image_max_bourse'=>$img_max,
            'type_bourse_id'=>$type->id,
            'annee_id'=>$r->annee,
            'pays_id'=>$r->pays,
            'actived'=>$r->statut,
            'user_id'=>auth()->user()->id,
        ]);

        if($created){
            if(count($r->programmes)>0){
                foreach($r->programmes as $key => $p) {
                    $pro = Programme::find($p);
                    if($pro){
                        BourseProgramme::create([
                            'bourse_id'=>$created->id,
                            'programme_id'=>$pro->id,
                            'user_id'=>auth()->user()->id,
                        ]);
                    }
                }
            }
            if(count($r->public_cible)>0){
                foreach($r->public_cible as $kk => $c) {
                    $g = Genre::find($c);
                    if($g){
                        BourseGenre::create([
                            'bourse_id'=>$created->id,
                            'genre_id'=>$g->id,
                            'user_id'=>auth()->user()->id,
                        ]);
                    }
                }
            }
            if(count($r->pieces)>0){
                $dossier = $dossier ."/Pieces-Justificatives";
                foreach ($r->pieces as $key => $p) {
                   $path = $p->store($dossier, 'public');
                   Justificatif::create([
                    'nom'=>$p->getClientOriginalName(),
                    'type'=>$p->getClientOriginalExtension(),
                    'taille'=>$p->getSize(),
                    'dossier'=>$path,
                    'description'=>"desc",
                    'user_id'=>auth()->user()->id,
                    'bourse_id'=>$created->id,
                   ]);
                }
            }
            return redirect()->back()->with([
                'notification.alert'=>'Insertion Reussie.',
                'notification.type'=>"success",
                'success'=>true,
                'notification.message'=>"La Bourse $created->titre_bourse enregistrée avec succès.",
            ]);
        }
        return redirect()->back()->with([
            'notification.alert'=>'Erreur.',
            'notification.type'=>"danger",
            'success'=>true,
            'notification.message'=>"Erreur(s) rencontrée(s) lors de l'enregistrement de la Bourse.",
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Bourse $bourse)
    {
        return view("admin.bourses.show",[
            'bourse'=>$bourse,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bourse $bourse)
    {
        
        return view("admin.bourses.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBourseRequest $request, Bourse $bourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bourse $bourse)
    {
        $bourse->delete();
        return redirect()->route("admin.bourses.index")->with([
            'notification.alert'=>'Suppression Reussie.',
            'notification.type'=>"info",
            'success'=>true,
            'notification.message'=>"La Bourese $bourse->titre_bourse Suppriméé avec succès.",
        ]);
    }
}
