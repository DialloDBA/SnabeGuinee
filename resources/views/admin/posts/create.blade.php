@extends("inc.aa.app")
@section('css')
	<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
@endsection
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Les Articles</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('Tableau de Bord')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.posts.index')}}">Liste des Articles</a></li>
                    <li class="breadcrumb-item active">Création d'un Article</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.posts.index')}}" class="btn add-btn" ><i class="fa fa-list"></i> Liste des Articles</a>
            </div>
        </div>
        <!-- Search Filter -->
        
        <!-- Search Filter -->
        <div class="row my-3" >
            <div class="col-md-12">
                @if (Session::has("notification.message"))
                <div class="alert alert-{{ Session::get("notification.type")}}">
                    <span>{{ Session::get("notification.message")}}</span>
                </div>
                @endif
            </div>
            <div class="col-md-12 col-lg- offset-l-2">
                    <form action="{{ route("admin.posts.store")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Titre de l'article (<span class="text-danger font-weight-bold">*</span>)</label>
                            <input class="form-control" type="text" placeholder="Titre de l'article" name="titre_article" value="{{old('titre_article') ?? ''}}"/>
                            @error('titre_article')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Images minimale de l'article (<span class="text-danger font-weight-bold">*</span>) : (360*220) pixel</label>
                                    <div>
                                        <input class="form-control" type="file" placeholder="Image de l'article" accept="images/*" name="image_minimale" id="image_minimale" onchange="verify_image_min_size(this)"/>
                                        <small class="form-text text-muted">MAllowed images: jpg, gif, png. Maximum 10 images only.</small>
                                        @error('image_minimale')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Images maximal de l'article (<span class="text-danger font-weight-bold">*</span>) : (750*460) pixel</label>
                                    <div>
                                        <input class="form-control" type="file" name="image_maximale" id="image_maximale" />
                                        <small class="form-text text-muted">Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                                        @error('image_maximale')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Categorie (<span class="text-danger font-weight-bold">*</span>)</label>
                                    <select name="categorie_article"  class="select floating" id="categorie_article">
                                        <option value="" selected>Choisir la Categorie</option>
                                        @foreach ($categories as $c)
                                        <option value="{{$c->id}}" >{{$c->libelle_cat}}</option>
                                        @endforeach
                                    </select>
                                    @error('categorie_article')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Resumé de l'Article (<span class="text-danger font-weight-bold">*</span>)</label>
                            <textarea id="editor" cols="30" rows="3" class="form-control" placeholder="Resumé de l'article" name="resume_article">{{old('resume_article') ?? ''}}</textarea>
                            @error('resume_article')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Contenu de l'article (<span class="text-danger font-weight-bold">*</span>)</label>
                            <textarea id="contenu" cols="30" rows="15" class="form-control" placeholder="Contenu de l'article" name="contenu_article">{{old('contenu_article') ?? ''}}</textarea>
                            @error('contenu_article')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Les mots Clés de l'Article</label>
                            <textarea cols="30" rows="1" class="form-control" placeholder="Les Mots Clés de l'article" name="motcles_article">{{old('motcles_article') ?? ''}}</textarea>
                            <small class="form-text text-muted">Séparer les mots clés par des points virgules.</small>
                            @error('motcles_article')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Les Metas Data de l'Article</label>
                            <textarea cols="30" rows="1" class="form-control" placeholder="Les meta données de l'article" name="metadata_article">{{old('metadata_article') ?? ''}}</textarea>
                            <small class="form-text text-muted">Séparer les metas données par des points virgules.</small>
                            @error('metadata_article')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="display-block">Statut de l'Article</label>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="statut_article"
                                id="blog_active"
                                value="1"
                                checked=""
                            />
                              <label class="form-check-label" for="blog_active"> Active </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="statut_article"
                                id="blog_inactive"
                                value="0"
                              />
                              <label class="form-check-label" for="blog_inactive"> Inactive </label>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary w-100"><i class="fa fa-plus-circle"></i> Créer cet article</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

</div>
@endsection
@section('js')
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
<!-- Select2 JS -->
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>

<script src="{{asset('assets/js/fonctions.js')}}"></script>
<script src="{{asset('assets/js/ckeditorv2.js')}}"></script>
<script>
    // ClassicEditor
    // .create(document.querySelector('#contenu'))
    // .catch(error =>{
    //     console.error(error);
    // });
    editeur("contenu");
    editeur("editor");
</script>
@endsection