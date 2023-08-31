@extends('layouts.controle.app',['title'=>'Creation d\'un Article'])
@section('css')

@endsection
@section('content')
<div class="content">
    <div data-select2-id="26">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                  <h3 class="page-title text-uppercase">Les Articles</h3>
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Tableau de Bord</a></li>
                      <li class="breadcrumb-item"><a href="{{route('admin.articles.index')}}">Liste des Articles</a></li>
                      <li class="breadcrumb-item active">Formulaire de création d'un Article</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                  <a href="{{ route("admin.articles.index")}}" class="btn add-btn">
                    <i class="fa fa-arrow-left"></i> {{ __("Retour a l'Accueil")}}
                  </a>
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-12">
                @if (Session::has("notification.message"))
                <div class="alert alert-{{ Session::get("notification.type")}}">
                    <span>{{ Session::get("notification.message")}}</span>
                </div>
                @endif
           </div>
            <div class="col-md-12 col-lg- offset-l-2">
                    <form action="{{ route("admin.articles.update",$article)}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method("PUT")
                        <div class="form-group">
                            <label>Titre de l'article (<span class="text-danger font-weight-bold">*</span>)</label>
                            <input class="form-control" type="text" placeholder="Titre de l'article" name="titre_de_larticle" value="{{old('titre_de_larticle') ?? $article->titre_article}}"/>
                            @error('titre_de_larticle')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Images minimale de l'article (<span class="text-danger font-weight-bold">*</span>) : (360*220) pixel</label>
                                    <div>
                                        <input class="form-control" type="file" placeholder="Image de l'article" name="image_minimale" id="image_min_article" onchange="verify_image_min_size(this)"/>
                                        <small class="form-text text-muted">MAllowed images: jpg, gif, png. Maximum 10 images only.</small>
                                        @error('image_minimale')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="row img-area-min">
                                        <div class="col-md-12 col-sm-6 col-6 col-lg-6 col-xl-6">
                                            <div class="product-thumbnail">
                                            <img
                                                src="{{asset('storage').'/'.$article->image_min_article}}"
                                                class="img-thumbnail img-flui w-100"
                                                alt=""
                                            />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Images maximal de l'article (<span class="text-danger font-weight-bold">*</span>) : (750*460) pixel</label>
                                    <div>
                                        <input class="form-control" type="file" name="image_maximale" id="image_maximale" onchange="verify_image_max_size(this)"/>
                                        <small class="form-text text-muted">Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                                        @error('image_maximale')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="row img-area-min">
                                        <div class="col-md-12 col-sm-6 col-6 col-lg-6 col-xl-6">
                                            <div class="product-thumbnail">
                                            <img
                                                src="{{asset('storage').'/'.$article->image_max_article}}"
                                                class="img-thumbnail img-flui w-100"
                                                alt=""
                                            />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Categorie (<span class="text-danger font-weight-bold">*</span>)</label>
                                    <select name="categorie_de_larticle" onchange="get_souscategorie_by_id(this)" class="select floating" id="categorie_de_larticle">
                                        <option value="" selected>Choisir la Categorie</option>
                                        @foreach ($categories as $c)
                                        <option value="{{$c->id}}" @if ($c->id==$article->categorie_id) selected @endif>{{$c->libelle_categorie}}</option>
                                        @endforeach
                                    </select>
                                    @error('categorie_de_larticle')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Resumé de l'Article (<span class="text-danger font-weight-bold">*</span>)</label>
                            <textarea id="editor" cols="30" rows="3" class="form-control summernote" placeholder="Resumé de l'article" name="resume_de_larticle">{{old('resume_de_larticle') ?? $article->resume_article}}</textarea>
                            @error('resume_de_larticle')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Contenu de l'article (<span class="text-danger font-weight-bold">*</span>)</label>
                            <textarea id="contenu" cols="30" rows="15" class="form-control summernote" placeholder="Contenu de l'article" name="contenu_de_larticle">{{old('contenu_de_larticle') ?? $article->contenu_article}}</textarea>
                            @error('contenu_de_larticle')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Les mots Clés de l'Article</label>
                            <textarea cols="30" rows="1" class="form-control summernote" placeholder="Les Mots Clés de l'article" name="motcles_de_larticle">{{old('motcles_de_larticle') ?? $article->motscles_article}}</textarea>
                            <small class="form-text text-muted">Séparer les mots clés par des points virgules.</small>
                            @error('motcles_de_larticle')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Les Metas Data de l'Article</label>
                            <textarea cols="30" rows="1" class="form-control summernote" placeholder="Les meta données de l'article" name="metadata_de_larticle">{{old('metadata_de_larticle') ?? $article->metas_article}}</textarea>
                            <small class="form-text text-muted">Séparer les metas données par des points virgules.</small>
                            @error('metadata_de_larticle')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="display-block">Statut de l'Article</label>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="statut_de_larticle"
                                id="blog_active"
                                value="1"
                                @if ($article->statut_article==1)
                                    checked
                                @endif
                            />
                              <label class="form-check-label" for="blog_active"> Active </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="statut_de_larticle"
                                id="blog_inactive"
                                value="0"
                                @if ($article->statut_article==0)
                                    checked
                                @endif
                              />
                              <label class="form-check-label" for="blog_inactive"> Inactive </label>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary"><i class="fa fa-plus-circle"></i> Mettre à jour cet article</button>
                        </div>
                    </form>
            </div>
      </div>
    </div>
    
</div>
@stop
@section('js')
<script src="{{asset('assets/js/ckeditor.js')}}"></script>
<script>
    ClassicEditor
    .create(document.querySelector('#contenu'))
    .catch(error =>{
        console.error(error);
    });
</script>
@endsection
