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
                <h3 class="page-title">Les Témoignages</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Tableau de Bord</a></li>
                    <li class="breadcrumb-item"><a href="{{route("admin.temoignages.index")}}">Liste des Témoignages</a></li>
                    <li class="breadcrumb-item active">{{__("Nouveau Témoignage")}}</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.sliders.index')}}" class="btn add-btn"><i class="fa fa-arrow-left"></i>{{__('Retour')}}</a>
            </div>
        </div>
        <!-- Search Filter -->
        
        <!-- Search Filter -->
        
        <div class="row mt-4">
            <div class="col-md-10 offset-md-1">
                @if (session('notification.message'))
                <div class="alert alert-{{session('notification.type')}} alert-dismissible fade show" role="alert">
                    <strong>{{session('notification.alert')}}</strong> {{session('notification.message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
            </div>
        </div> 
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="col-md-10 offset-md-1">
                    <form action="{{ route("admin.sliders.store")}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method("POST")
                        <div class="form-group">
                            <label for="titre">Titre du Slider <span class="text-danger">*</span></label>
                            <input class="form-control" id="titre" type="text" placeholder="Titre de du Slider..." name="titre" value="{{old('titre') ?? ''}}"/>
                            @error('titre')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Titre du Button(<span class="text-danger">facultatif</span>)</label>
                                    <input class="form-control" type="text" placeholder="titre du button du slider..." name="btn_slider" value="{{old('titre_offre') ?? ''}}"/>
                                    @error('btn_slider')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Lien du Button(<span class="text-danger">facultatif</span>)</label>
                                <input type="text" name="button" id="" class="form-control">
                                @error('link_slider')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Image du Slider<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="image_slider" id="image_slider" accept="image/*">
                                @error('image_slider')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label>Description du Slider</label>
                            <textarea cols="30" rows="5" class="form-control" id="" placeholder="Description du slider" name="description_slider">{{old('description_slider') ?? "" }}</textarea>
                            @error('description_slider')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="display-block">Statut du Slider </label>
                            <div class="form-check form-check-inline">
                                <input
                                class="form-check-input"
                                type="radio"
                                name="statut_slider"
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
                                name="statut_slider"
                                id="blog_inactive"
                                value="0"
                                />
                                <label class="form-check-label" for="blog_inactive"> Inactive </label>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-success submit-btn">Créer l'Offre d'emploi</button>
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
    editeur("message_temoin","Le contenu du Temoignage","100");

    $("form.create-temoignage").submit(function(){
        $(this).find(".btn-create").html("Veuillez Patientez...");
    });
</script>
@endsection