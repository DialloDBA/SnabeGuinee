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
                <h3 class="page-title">Les Vidéos</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Tableau de Bord</a></li>
                    <li class="breadcrumb-item"><a href="{{route("admin.videos.index")}}">Liste des Vidéos</a></li>
                    <li class="breadcrumb-item active">{{__("Nouveau Témoignage")}}</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.videos.index')}}" class="btn add-btn"><i class="fa fa-arrow-left"></i>{{__('Retour')}}</a>
            </div>
        </div>
        <!-- Search Filter -->
        
        <!-- Search Filter -->
        
        
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="col-md-10 offset-md-1">
                    <form class="addVideoForm" action="{{ route("admin.videos.store")}}" id="addVideoForm" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method("POST")
                        <div class="form-group">
                            <label>Titre de la Video</label>
                            <input class="form-control" type="text" placeholder="Titre de la vidéo" name="titre_video" value="{{old('titre_video') ?? ''}}"/>
                            @error('titre_video')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Source de la Vidéo</label>
                                <select name="source_video" onchange="change_source_video(this)" class="select floating @error('source_video') is_invalid @enderror" id="source_video">
                                    <option value="" selected>Choisir la Sous Categorie</option>
                                    @foreach ($sources as $key => $s)
                                    <option value="{{$key}}" >{{$s}}</option>
                                    @endforeach
                                </select>
                                @error('source_video')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label> Categorie de la Vidéo</label>
                                <select name="categorie_video"  class="select floating" id="categorie_video" onchange="" >
                                    <option value="" selected>Choisir la Categorie</option>
                                    @foreach ($categorievideos as $c)
                                    <option value="{{$c->id}}" >{{$c->libelle_cat}}</option>
                                    @endforeach
                                </select>
                                @error('categorie_de_larticle')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
                        </div>
                        <div class="form-group video_area">
                            <label for="url_video" id="label_url">URL de la Video</label>
                            <input class="form-control" type="url" placeholder="https://youtu.be/ambed/FVaBvjznolw" name="url_video" value="{{old('url_video') ?? ''}}" />
                            <div class="container video-area" style="display:none;">
                                <div class="row my-2">
                                    <div class="col-md-12">
                                    <iframe class="ambed-code w-100" height="200" src="https://youtu.be/ambed/FVaBvjznolw" title="Loto Benz Tirage 1365" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            @error('url_video')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image_video" id="">Image de Couverture de la Video</label>
                            <input class="form-control" type="file" id="image_video" name="image_video" accept="image/*"/>
                            @if (!$errors->first('image_video'))
                                <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                            @endif
                            @error('image_video')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description de la Vidéo </label>
                            <textarea cols="30" rows="8" class="form-control summernote" placeholder="Une petite description de la video..." name="description_video">{{old('description_video') ?? ''}}</textarea>
                            @error('description_video')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="display-block">Statut de la Vidéo</label>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="statut_video"
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
                                name="statut_video"
                                id="blog_inactive"
                                value="0"
                              />
                              <label class="form-check-label" for="blog_inactive"> Inactive </label>
                            </div>
                        </div>
                        <div class="submit-section">
                            {{-- <button type="submit" name="continue" value="1" class="btn btn-info btn-rounded text-white btn-md add_video">
                                <i class="fa fa-plus-circle"></i> Ajouter cette Vidéo
                            </button>
                            <button type="submit" name="continue" value="1"  class="btn btn-info btn-rounded text-white btn-md add_video">
                                <i class="fa fa-plus-circle"></i> Ajouter cette Vidéo et Continuer
                            </button> --}}
                            <button type="submit" class="btn btn-primary btn-rounded btn-create text-white btn-md add_video"><i class="fa fa-plus-circle"></i> Ajouter la vidéo</button>
                        </div>
                    </form>
                </div>
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
    

    function change_source_video(v){
        const video = v.value;
        $("#label_url").remove();
        if (video && video==1) {
            $('input[name=url_video]').before('<label for="url_video" id="label_url">Choisir une Vidéo <span class="text-danger">*<span/></label>');
            $('input[name=url_video]').attr('accept','video/*');
            $('input[name=url_video]').attr('type','file');
            $(".add_video").removeAttr('disabled');
        }
        if (video && video==2) {
            $('input[name=url_video]').before('<label for="url_video" id="label_url">Coller le lien de la Vidéo <span class="text-danger">*<span/></label>');
            $('input[name=url_video]').attr('type','url');
            $('input[name=url_video]').attr('placeholder','https://youtu.be/FVaBvjznolw');
            $(".add_video").removeAttr('disabled');
        }
        if (typeof video =='string' && video.trim().length===0) {
            $(".add_video").attr('disabled','disabled');
            $('input[name=url_video]').before('<label for="url_video" id="label_url">Coller le lien de la Vidéo <span class="text-danger">*<span/></label>');
            $('input[name=url_video]').attr('type','url');
            $('input[name=url_video]').attr('placeholder','https://youtu.be/FVaBvjznolw');
        }
    }
    editeur("message_temoin","Le contenu du Temoignage","100");

    $("form.addVideoForm").submit(function(){
        $(this).find(".btn-create").html("Telechargement encours...");
    });
</script>
@endsection