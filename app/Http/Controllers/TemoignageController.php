<?php

namespace App\Http\Controllers;

use App\Models\Temoignage;
use App\Http\Requests\StoreTemoignageRequest;
use App\Http\Requests\UpdateTemoignageRequest;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Temoignage::orderBy("unique","desc")->get();
        return view("admin.temoignages.index",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.temoignages.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTemoignageRequest $request)
    {
        $photo ="";
        $video ="";
        $destination = "temoignages";
        $destination2="temoignages/videos";
        if ($request->photo_temoin) {
            $photo = request('photo_temoin')->store($destination,"public");
        }else{
            $photo = "temoignages/avatars/default.png";
        }
        if ($request->video_temoin) {
            $video = request('video_temoin')->store($destination2,"public");
        }
        $tm= auth()->user()->temoignages()->create([
            "unique"=>Temoignage::code(),
            "prenom_temoin"=>$request->prenom_temoin,
            "nom_temoin"=>$request->nom_temoin,
            "profession_temoin"=>$request->profession_temoin,
            "telephone_temoin"=>$request->telephone_temoin,
            "message_temoin"=>$request->message_temoin,
            "photo_temoin"=>$photo,
            "video_temoin"=>$video,
            "actived"=>$request->statut_temoignage
        ]);
        // Flashy::message("Témoignage ajouté avec succès.");
        
        return redirect()->back()->with([
            'notification.alert'=>'Enregistrement Reussie.',
            'notification.type'=>"success",
            'success'=>true,
            'notification.message'=>"Témoignage de $tm->prenom_temoin $tm->nom_temoin crée avec succès.",
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($t)
    {
        $t = Temoignage::whereUnique($t)->firstOrFail();
        return view("admin.temoignages.show",compact("t"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($t)
    {
        $t = Temoignage::whereUnique($t)->firstOrFail();
        return view("admin.temoignages.edit",compact("t"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemoignageRequest $request, $t)
    {
        $t = Temoignage::whereUnique($t)->firstOrFail();
        $photo ="";
        $video ="";
        $destination = "temoignages";
        $destination2="temoignages/videos";
        if ($request->photo_temoin) {
            $photo = request('photo_temoin')->store($destination,"public");
        }else{
            $photo = $t->photo_temoin;
        }
        if ($request->video_temoin) {
            $video = request('video_temoin')->store($destination2,"public");
        }else{
            $video = $t->photo_temoin;
        }
        $t->update([
            "prenom_temoin"=>$request->prenom_temoin,
            "nom_temoin"=>$request->nom_temoin,
            "profession_temoin"=>$request->profession_temoin,
            "telephone_temoin"=>$request->telephone_temoin,
            "message_temoin"=>$request->message_temoin,
            "photo_temoin"=>$photo,
            "video_temoin"=>$video,
            "actived"=> $request->statut_temoignage
        ]);
        return redirect()->route("admin.temoignages.index")->with([
            'notification.alert'=>'Modification Reussie.',
            'notification.type'=>"success",
            'success'=>true,
            'notification.message'=>"Témoignage de $t->prenom_temoin $t->nom_temoin, Modifié avec succès.",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Temoignage $temoignage)
    {
        //
    }
}
