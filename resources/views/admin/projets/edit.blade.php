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
                <a href="{{route('admin.projets.index')}}" class="btn add-btn" ><i class="fa fa-list"></i> Liste des Projets</a>
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
                    <form action="{{ route("admin.projets.update",$projet)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Titre du Projet (<span class="text-danger font-weight-bold">*</span>)</label>
                                    <input class="form-control" type="text" placeholder="Titre du Projet" name="titre_projet" value="{{old('titre_projet') ?? $projet->titre }}"/>
                                    @error('titre_projet')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Priorité du Projet (<span class="text-danger font-weight-bold">*</span>)</label>
                                    <input class="form-control" type="number" min="0" max="10" placeholder="Titre du Projet" name="priorite_projet" value="{{old('priorite_projet') ?? $projet->priorite }}"/>
                                    @error('priorite_projet')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Images minimale du Projet (<span class="text-danger font-weight-bold">*</span>) : (360*220) pixel</label>
                                    <div>
                                        <input class="form-control" type="file" placeholder="Image du Projet" accept="images/*" name="image_minimale_projet" id="image_minimale_projet" onchange="verify_image_min_size(this)"/>
                                        <small class="form-text text-muted">MAllowed images: jpg, gif, png. Maximum 10 images only.</small>
                                        @error('image_minimale_projet')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Images maximal du Projet (<span class="text-danger font-weight-bold">*</span>) : (750*460) pixel</label>
                                    <div>
                                        <input class="form-control" type="file" name="image_maximale_projet" id="image_maximale_projet" />
                                        <small class="form-text text-muted">Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                                        @error('image_maximale_projet')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Autres Images du Projet (<span class="text-danger font-weight-bold">*</span>) : (750*460) pixel</label>
                                    <div>
                                        <input multiple class="form-control" type="file" name="autres_images_projet[]" id="autres_images_projet" />
                                        <small class="form-text text-muted">Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                                        @error('autres_images_projet')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Resumé du Projet (<span class="text-danger font-weight-bold">*</span>)</label>
                            <textarea id="" cols="30" rows="3" class="form-control" placeholder="Resumé du Projet" name="resume_projet">{{old('resume_projet') ?? $projet->resume }}</textarea>
                            @error('resume_projet')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Contenu du Projet (<span class="text-danger font-weight-bold">*</span>)</label>
                            <textarea id="contenu" cols="30" rows="15" class="form-control" placeholder="Contenu du Projet" name="contenu_projet">{{old('contenu_projet') ?? $projet->contenu }}</textarea>
                            @error('contenu_projet')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Les mots Clés du Projet</label>
                            <textarea cols="30" rows="1" class="form-control" placeholder="Les Mots Clés du Projet" name="motcles_projet">{{old('motcles_projet') ?? $projet->motcles }}</textarea>
                            <small class="form-text text-muted">Séparer les mots clés par des points virgules.</small>
                            @error('motcles_projet')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Les Metas Data du Projet</label>
                            <textarea cols="30" rows="1" class="form-control" placeholder="Les meta données du Projet" name="metadata_projet">{{old('metadata_projet') ?? $projet->metadata}}</textarea>
                            <small class="form-text text-muted">Séparer les metas données par des points virgules.</small>
                            @error('metadata_projet')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="display-block">Statut du Projet</label>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="statut_projet"
                                id="blog_active"
                                value="1"
                                @if ($projet->actived=='1')
                                checked=""
                                @endif
                            />
                              <label class="form-check-label" for="blog_active"> Active </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="statut_projet"
                                id="blog_inactive"
                                @if ($projet->actived=='0')
                                checked=""
                                @endif
                                value="0"
                              />
                              <label class="form-check-label" for="blog_inactive"> Inactive </label>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-success w-100"><i class="fa fa-plus-circle"></i> Créer cet Projet</button>
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