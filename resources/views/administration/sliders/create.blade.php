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
                <h3 class="page-title">Les Sliders du Site</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">{{__('Dashboard')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.sliders.index')}}">Liste des Sliders</a></li>
                    <li class="breadcrumb-item active">{{__('Nouveau Slider')}}</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="#" class="btn add-btn"><i class="fa fa-plus"></i>{{__('Nouveau Slider')}}</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-10 offset-md-1">
                <form action="{{ route("admin.sliders.store")}}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    @method("POST")
                    <div class="form-group">
                        <label>Titre 1 du Slider <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="Titre de l'Offre..." name="titre_sm" value="{{old('titre_sm') ?? 'BIENVENUE À LA MATERNELLE DU GROUPE SCOLAIRE LES ECUREUILS'}}"/>
                        @error('titre_sm')
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
                        <label>Titre Descriptif du Slider</label>
                        <textarea cols="30" rows="5" class="form-control" id="" placeholder="Titre 2 du slider" name="titre_lg">{{old('titre_lg') ?? "" }}</textarea>
                        @error('titre_lg')
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
                        <button class="btn btn-success submit-btn">Ajouter ce Slider</button>
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
        $('.b').summernote({
            height: 75,
        });
    });
</script>
@endsection