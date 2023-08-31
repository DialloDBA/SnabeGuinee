@extends('layouts.admin.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/ckeditor.css')}}">
@endsection
@section("content")
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Les Témoignages</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Tableau de Bord</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{route("admin.temoignages.index")}}">Liste des Témoignages</a>
                    </li>
                    <li class="breadcrumb-item active">{{__("Mise à jour d'un Témoignage")}}</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="{{route('admin.temoignages.index')}}" class="btn add-btn"><i class="fa fa-arrow-left"></i>{{__('Retour')}}</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-10 offset-md-1">
                <form action="{{ route("admin.temoignages.update",$temoignage)}}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    @method("PUT")
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Prénom Témoin(<span class="text-danger">*</span>)</label>
                                <input class="form-control" type="text" placeholder="Prénom du Témoin..." name="prenom_temoin" value="{{old('prenom_temoin') ?? $temoignage->prenom_temoin}}"/>
                                @error('prenom_temoin')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom Témoin(<span class="text-danger">*</span>)</label>
                                <input class="form-control" type="text" placeholder="Nom du Témoin..." name="nom_temoin" value="{{old('nom_temoin') ?? $temoignage->nom_temoin}}"/>
                                @error('nom_temoin')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Profession Témoin(<span class="text-danger">*</span>)</label>
                                <input class="form-control" type="text" placeholder="Profession du Témoin..." name="profession_temoin" value="{{old('profession_temoin') ?? $temoignage->profession_temoin}}"/>
                                @error('profession_temoin')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Telephone Témoin(<span class="text-danger">facultatif</span>)</label>
                            <input type="tel" name="telephone_temoin" id="telephone_temoin" class="form-control" value="{{ old('telephone_temoin') ?? $temoignage->telephone_temoin }}" placeholder="Telephone du Témoin">
                            @error('telephone_temoin')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <div class="profile-img-wrap edit-img">
                                <img class="inline-block photo_temoin" id="photo_temoin" src="{{$temoignage->photo_temoin ? asset('storage')."/".$temoignage->photo_temoin : asset('assets/img/profiles/avatar.png') }}" alt="Photo" id="avatar"/>
                                <div class="fileupload btn">
                                  <span class="btn-text">Choisir une photo</span>
                                  <input class="upload" onchange="preloadedImage(event)" type="file" id="photo_temoin" name="photo_temoin" accept="image/*"/>
                                </div>
                                @error('photo_temoin')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label>Message du Témoin</label>
                        <textarea cols="30" rows="5" class="form-control message_temoin" id="message_temoin" placeholder="Message du Témoin..." name="message_temoin">{{old('message_temoin') ?? $temoignage->message_temoin }}</textarea>
                        @error('message_temoin')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="display-block">Statut du Témoignage </label>
                        <div class="form-check form-check-inline">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="statut_temoignage"
                            id="statut_temoignage_active"
                            value="1"
                            @if ($temoignage->statut_temoignage==1)
                            checked=""
                            @endif
                        />
                            <label class="form-check-label" for="statut_temoignage_active"> Actif </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="statut_temoignage"
                            id="statut_temoignage_inactive"
                            value="0"
                            @if ($temoignage->statut_temoignage==0)
                            checked=""
                            @endif
                            />
                            <label class="form-check-label" for="statut_temoignage_inactive"> Inactif</label>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary ">{{__('Mettre à jour ce Témoignage')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('js')
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/ckeditor.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.message_temoignan').summernote({
            height: 75,
        });
    });
</script>
<script type="text/javascript">
function preloadedImage(event){
    if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("photo_temoin");
        preview.src = src;
    }
}
</script>
@endsection