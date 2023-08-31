<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;
use Illuminate\Validation\ValidationException;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Projet::all();
        return view("admin.projets.index",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        return view("admin.projets.create",compact("data"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjetRequest $r)
    {


        $slug = str()->slug($r->titre_projet);
        //creation du dossier de l'article
        $dossier ="projets/";
        $img_max_chemin = "";
        $img_min_chemin = "";
        
        if ($r->hasFile('image_maximale_projet')) {
            $img_max_chemin = $r->file('image_maximale_projet')->store("projets", 'public');
        }
        if ($r->hasFile('image_minimale_projet')) {
            $img_min_chemin = $r->file('image_minimale_projet')->store("projets", 'public');
        }
        
        $created = Projet::create([
            'titre'=>$r->titre_projet,
            'slug'=>$slug,
            'unique'=>Projet::unique(),
            'contenu'=>$r->contenu_projet,
            'image_min'=>$img_min_chemin,
            'image_max'=>$img_max_chemin,
            'resume'=>$r->resume_projet,
            'route'=> $dossier,
            'actived'=>$r->statut_projet,
            'motscles'=>$r->motcles_projet,
            'metas'=>$r->metadata_projet,
            'user_id'=>auth()->user()->id,
        ]);

        if($created){
            // Flashy::message('L\'article a bien été crée. vous pouvez le consulter directement', route("admin.articles.show",$created->slug_projet));
            return redirect()->back()->with([
                'notification.alert'=>'Succès.',
                'notification.type'=>"success",
                'success'=>true,
                'notification.message'=>"Le Projet {$created->titre} crée avec succès.",
            ]);
        }else{
            return redirect()->route("admin.projets.index")->with([
                'notification.alert'=>'Erreur.',
                'notification.type'=>"danger",
                'success'=>false,
                'notification.message'=>"Erreur de Création du Projet.",
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        dd($projet);
        return view("admin.projets.show",compact("projet"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        
        return view("admin.projets.edit",compact("projet"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjetRequest $r,$p)
    {

        $p = Projet::where('unique',$p)->firstOrFail();
        $slug = str()->slug($r->titre_projet);
        if(Projet::where('slug',$slug)->where('id','<>',$p->id)->first()){
            throw ValidationException::withMessages([
                'titre_projet'=>'Un autre projet de meme nom existe déjà',
            ]);
        }else $slug = $p->slug;
        //creation du dossier de l'article
        $dossier ="projets/";
        $img_max_chemin = "";
        $img_min_chemin = "";
        
        if ($r->hasFile('image_maximale_projet')) {
            $img_max_chemin = $r->file('image_maximale_projet')->store("projets", 'public');
        }else $img_max_chemin = $p->image_max;
        if ($r->hasFile('image_minimale_projet')) {
            $img_min_chemin = $r->file('image_minimale_projet')->store("projets", 'public');
        }else $img_min_chemin = $p->image_min;

        $up=$p->update([
            'titre'=>$r->titre_projet,
            'slug'=>$slug,
            'contenu'=>$r->contenu_projet,
            'image_min'=>$img_min_chemin,
            'image_max'=>$img_max_chemin,
            'resume'=>$r->resume_projet,
            'route'=> $dossier,
            'priorite'=> $r->priorite_projet,
            'actived'=>$r->statut_projet,
            'motscles'=>$r->motcles_projet,
            'metas'=>$r->metadata_projet,
        ]);
        if($up){
            // Flashy::message('L\'article a bien été crée. vous pouvez le consulter directement', route("admin.articles.show",$created->slug_projet));
            return redirect()->route("admin.projets.index")->with([
                'notification.alert'=>'Succès.',
                'notification.type'=>"info",
                'success'=>true,
                'notification.message'=>"Le Projet {$p->titre} Mise à jour avec succès.",
            ]);
        }else{
            return redirect()->route("admin.projets.index")->with([
                'notification.alert'=>'Erreur.',
                'notification.type'=>"danger",
                'success'=>false,
                'notification.message'=>"Echec de mise à jour du Projet : {$p->titre}.",
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        $projet->update(['deleted_by',auth()->user()->id]);
        if($projet->delete()){
            return redirect()->route("admin.projets.index")->with([
                'notification.alert'=>'Succès.',
                'notification.type'=>"warning",
                'success'=>true,
                'notification.message'=>"Le Projet {$projet->titre} Supprimée avec succès.",
            ]);
        }
        // $p = Projet::where('unique',$p)->firstOrFail();
    }
}
