<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Str;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slider::orderBy("created_at","desc")->get();
        return view("admin.sliders.index",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.sliders.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        $unique = Str::slug($request->titre);
        if(Slider::where("title_sm",$request->titre)->first()){
            $unique = Str::slug($request->titre).'-'.date("H-i-s");
        }
        $dossier = "sliders/".Str::slug($request->titre).date("H_i_s");
        $path ="";
        if ($request->image_slider) {
           $path = request('image_slider')->store($dossier,'public');
        }
        auth()->user()->sliders()->create([
            'title_sm'=>$request->titre,
            'title_lg'=>$request->titre,
            'unique'=>$unique,
            'btn'=>$request->btn_slider,
            'link'=>$request->button,
            'image'=>$path,
            'folder'=>$dossier,
            'actived'=>$request->statut_slider,
        ]);
        return redirect()->back()->with([
            'notification.alert'=>'Succès.',
            'notification.type'=>"success",
            'success'=>true,
            'notification.message'=>"Votre Sliders a été crée avec succès.",
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        
        $slider->delete();
        return redirect()->route("admin.sliders.index")->with([
            'notification.alert'=>'Succès.',
            'notification.type'=>"info",
            'success'=>true,
            'notification.message'=>"Le Sliders a été Supprimé avec succès.",
        ]);
    }
}
