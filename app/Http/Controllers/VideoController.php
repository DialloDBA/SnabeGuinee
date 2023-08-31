<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Video::orderBy("created_at","DESC")->get();
        return view("admin.videos.index",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorievideos = Category::where('actived','1')->get();
        $sources = ['1'=>'Ordinateur','2'=>'Youtube'];
        return view("admin.videos.create",compact("categorievideos","sources"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoRequest $request)
    {
        $this->validate($request,[
            'titre_video'=>'required',
            'source_video'=>'required',
            'categorie_video'=>'required',
            'url_video'=>'required',
            'image_video'=>'required',
            'description_video'=>'required',
        ]);
        $slug = Str::slug($request->titre_video);

        $c = Category::find($request->categorie_video);
        $url_video ="";
        $image_chemin ="";
        if ($request->source_video==1) {
           if ($request->url_video) {
              $url_video = "videos/".$c->unique."/";
              $url_video = request('url_video')->store($url_video,'public');
           }
        }
        if ($request->source_video==2) {
           $url_video = $request->url_video;
        }
        if ($request->image_video) {
            $image_chemin = "videos/images/".$c->unique;
            // $image_chemin = request('image_video')->store($image_chemin,'public');
            $image_chemin = $request->file('image_video')->store($image_chemin,'public');
        }
        
        auth()->user()->videos()->create([
            'titre_video'=>$request->titre_video,
            'slug_video'=>$slug,
            'source_video'=>$request->source_video,
            'unique'=>$slug,
            'url_video'=>$url_video,
            'image_video'=>$image_chemin,
            'category_id'=>$request->categorie_video,
            'description_video'=>$request->description_video,
        ]);

        return redirect()->route("admin.videos.index")->with([
            'notification.alert'=>'Succès.',
            'notification.type'=>"success",
            'success'=>true,
            'notification.message'=>"Votre Vidéo a été uploadée avec succès.",
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
