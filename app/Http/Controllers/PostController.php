<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("admin.posts.index",[
            "posts"=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Category::where("actived",'1')->get();
        return view("admin.posts.create",[
            'categories'=>$cats,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $r)
    {
        if(Post::where("titre",$r->titre_article)->first()){
            $slug = str()->slug($r->titre_article)."-".date('d-m-y-h-i-s');
        }else $slug = str()->slug($r->titre_article);

        // $end_slug = str_replace(":","-",date("H:i:s"));
        // $slug = str()->slug($r->titre_article.'-'.idate('y').'-'.$end_slug);
        $cat = Category::find($r->categorie_article);
        //creation du dossier de l'article
        $dossier ="posts/".$cat->libelle_cat.'/'.$slug;
        $img_max_chemin = "";
        $img_min_chemin = "";
        
        if ($r->hasFile('image_maximale')) {
            $img_max_chemin = $r->file('image_maximale')->store("posts", 'public');
        }
        if ($r->hasFile('image_minimale')) {
            $img_min_chemin = $r->file('image_minimale')->store("posts", 'public');
        }
        
        $created = Post::create([
            'titre'=>$r->titre_article,
            'slug'=>$slug,
            'unique'=>$slug,
            'contenu'=>$r->contenu_article,
            'image_min'=>$img_min_chemin,
            'image_max'=>$img_max_chemin,
            'resume'=>$r->resume_article,
            'route'=> $dossier,
            'actived'=>$r->statut_article,
            'category_id'=>$r->categorie_article,
            'motscles'=>$r->motcles_article,
            'metas'=>$r->metadata_article,
            'user_id'=>1,
        ]);

        // Flashy::message('L\'article a bien été crée. vous pouvez le consulter directement', route("admin.articles.show",$created->slug_article));
        return redirect()->route("admin.posts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
