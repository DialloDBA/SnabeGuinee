<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Pays;
use App\Models\Post;
use App\Models\Genre;
use App\Models\Video;
use App\Models\Bourse;
use App\Models\Projet;
use App\Models\Slider;
use App\Models\Domaine;
use App\Models\Category;
use App\Models\Programme;
use App\Models\Newsletter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Validation\ValidationException;

class SnabeController extends Controller
{

    public function __construct(){
        $cats = Category::whereActived('1')->get();
        view()->share([
            'categories'=>$cats,
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::whereActived('1')->orderBy('created_at','DESC')->orderBy('priorite','DESC')->limit(3)->get();
        $videos = Video::whereActived('1')->orderBy("created_at","DESC")->limit(3)->get();
        $feminin = Genre::findOrFail(1);
        $bourses = Bourse::whereActived("1")->orderBy('priorite',"DESC")->orderBy("created_at","DESC")->limit(4)->get();
        $feminines = $feminin->bourses()->limit(3)->get();
        $d = $bourses->diff($feminines);
        return view("snabe.index",[
            'posts'=>$posts,
            'sliders'=>Slider::whereActived("1")->get(),
            'videos'=>$videos,
            'cibles'=>Genre::all(),
            'pays'=>Pays::all(),
            'domaines'=>Domaine::whereActived('1')->get(),
            'programmes'=>Programme::whereActived('1')->get(),
            'bourses'=>$bourses,
            'feminines'=>$feminines,
            'projets'=> Projet::orderBy('created_at','DESC')->orderBy('priorite','DESC')->limit(3)->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     */

    public function about()
    {
        $posts = Post::whereActived('1')->orderBy('created_at','DESC')->limit(3)->get();
        return view("snabe.pages.presentation.index",[
            'posts'=>$posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        return view("snabe.pages.contact.index");
    }
    public function newsletters(Request $r)
    {
        $this->validate($r,[
            'email'=>'required|email',
        ]);
        $n = Newsletter::whereEmail($r->email)->first();
        if($n){
            throw ValidationException::withMessages([
                'email'=>'Cette adresse e-mail est déjà abonnée au newsletters du SNABE'
            ]);
        }
        $abonne = Newsletter::create(['email'=>$r->email]);
        if($abonne){
            return response()->json([
                'success'=>true,
                'type'=>'Succès',
                'message'=>"Votre abonnement a reussie. Vous serez notifié(e) de toutes les dennieres informations du SNABE GUINEE.",
            ],200);
        }else{
            return response()->json([
                'success'=>false,
                'type'=>'Erreur',
            ],200);
        }
    }
    public function alumnis()
    {
        return view("snabe.pages.alumnis.index");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function faqs()
    {
        return view("snabe.pages.faqs.index",[
            'faqs'=> Faq::orderBy('created_at','DESC')->get(),
        ]);
    }
    public function videos()
    {
        $news = Post::orderBy('created_at','DESC')->paginate(4);
        return view("snabe.pages.videos.index",[
            'videos'=> Video::whereActived('1')->orderBy('created_at','DESC')->get(),
            'first'=> "",
            'news'=> Post::whereActived('1')->orderBy('created_at','DESC')->paginate(4),
            'cats'=> Category::whereActived('1')->get(),
        ]);
    }
    public function photos()
    {
        return view("snabe.pages.gallery.index",[
            'photos'=> Faq::orderBy('created_at','DESC')->get(),
        ]);
    }
    public function projets()
    {
        return view("snabe.pages.projets.index",[
            'projets'=> Projet::orderBy('created_at','DESC')->orderBy('priorite','DESC')->get(),
            'news' => Post::whereActived('1')->orderBy('created_at','DESC')->orderBy('priorite','DESC')->limit(3)->get(),
        ]);
    }

    public function projets_view($slug)
    {
        $p = Projet::whereSlug($slug)->firstOrFail();
        // $news = Post::where('category_id',$cat->id)->orderBy('created_at','DESC')->paginate(4);

        $others = Projet::whereActived('1')->where("id",'<>',$p->id)->orderBy('created_at','DESC')->orderBy('priorite','DESC')->limit(4)->get();
        return view("snabe.pages.projets.index_view",[
            'projet'=> $p,
            // 'news'=> $news,
            "others"=>$others
        ]);
    }

    public function news()
    {
        $first = "";
        $news = Post::orderBy('created_at','DESC')->paginate(4);
        $others ="";
        return view("snabe.pages.news.index",[
            'news'=> $news,
            'first'=> $first,
            'cats'=> Category::whereActived('1')->get(),
            "others"=>$others
        ]);
    }

    public function category($c)
    {
        $cat = Category::whereUnique($c)->firstOrFail();
        $news = Post::where('category_id',$cat->id)->orderBy('created_at','DESC')->paginate(4);
        $others = "";
        return view("snabe.pages.news.index_category",[
            'cat'=> $cat,
            'news'=> $news,
            "others"=>$others
        ]);
    }

    public function tags($c,$t){
        dd("tages");
    }

    public function post(Request $r,$c,$p)
    {
        $cat = Category::whereUnique($c)->firstOrFail();
        $post = Post::whereUnique($p)->where('category_id',$cat->id)->firstOrFail();
        $news = Post::where('category_id',$cat->id)->where('id','<>',$post->id)->orderBy('created_at','DESC')->paginate(4);
        $others =  Post::where('category_id',$cat->id)->where('id','<>',$post->id)->orderBy('created_at','DESC')->limit(3)->get();
        
        return view("snabe.pages.news.index_view",[
            'cat'=> $cat,
            'news'=> $news,
            "others"=>$others,
            "post"=>$post,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function privacy()
    {
        return view("snabe.pages.privacy.index");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function termes()
    {
        return view("snabe.pages.termes.index");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_contact(Request $r)
    {
        if(request()->ajax()){
            $this->validate($r,[
                'nom_complet'=>"required|string|max:200|min:2",
                'telephone'=>"required|string|min:9|max:20",
                'email'=>"required|email",
                'sujet'=>"required|string|min:3",
                'message'=>"required|min:3|",
            ]);
            $telephone = str_replace([' ','(',')','-'],'',$r->telephone);
            if(strlen($telephone)>13 || !Str::contains($telephone, '+')){
                throw ValidationException::withMessages([
                    "telephone"=>"Numero de Téléphone invalide. Essayez par exemple :+224 623101212",
                ]);
            }
            $message = ContactMessage::create([
                'nom'=>$r->nom_complet,
                'email'=>$r->email,
                'telephone'=>$telephone,
                'sujet'=>$r->sujet,
                'message'=>$r->message
            ]);
            if($message){
                return response()->json([
                'alert'=>'Message Envoyé avec succès.',
                'type'=>"success",
                'success'=>true,
                'message'=>"Vous serez contacté par E-mail, par SMS ou WhatsApp.<br>Merci de votre Confiance.",
                ],200);
            }else {
                return response()->json([
                'alert'=>'Message Non Envoyé.',
                'type'=>"danger",
                'success'=>false,
                'message'=>"",
                ],400);
            }
        }
    }
    public function offres(){
        return view("snabe.pages.job.index",[
            'offres'=>"",
        ]);
    }
    public function bourses(){
        return view("snabe.pages.bourses.index",[
            'cibles'=>Genre::all(),
            'pays'=>Pays::all(),
            'domaines'=>Domaine::whereActived('1')->get(),
            'programmes'=>Programme::whereActived('1')->get(),
            'bourses'=>Bourse::whereActived("1")->orderBy('priorite',"DESC")->orderBy("created_at","DESC")->paginate(6),
        ]);
    }

    public function bourses_category($bourse){
        dd($bourse);
        return view("snabe.pages.bourses.category",[
            'offres'=>"",
        ]);
    }
    public function bourses_view(Bourse $bourse){
        return view("snabe.pages.bourses.index_view",[
            'bourse'=>$bourse,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
