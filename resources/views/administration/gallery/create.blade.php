@extends('layouts.admin.app',['title'=>'Creation d\'un Article'])
@section('css')

@endsection
@section('content')
<div class="content">
    <div data-select2-id="26">
        <div class="page-header">
          <div class="row align-items-center">
              <div class="col">
                  <h3 class="page-title text-uppercase">Gallerie</h3>
                  <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Tableau de Bord')}}</a></li>
                      <li class="breadcrumb-item"><a href="{{route('admin.gallery.index')}}">Liste des Images de la Gallerie</a></li>
                      <li class="breadcrumb-item active">Formulaire d'ajout des images</li>
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
                    <form action="{{ route("admin.gallery.store")}}" method="POST" enctype="multipart/form-data" >
                        @csrf 
                        @method("POST")
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Images maximal de l'article (<span class="text-danger font-weight-bold">*</span>) : (360x220) pixel</label>
                                    <div>
                                        <input class="form-control" type="file" name="image[]" id="image"  accept="image/*" multiple/>
                                        <small class="form-text text-muted">Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                                        @error('image')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Groupe d'Appartenance (<span class="text-danger font-weight-bold">*</span>)</label>
                                    <select name="groupe"  class="select floating" id="groupe">
                                        <option value="" selected>Choisir la Categorie</option>
                                        @foreach ($groupe as $g)
                                            <option value="{{$g->id}}" @if ($g->id==1)
                                                selected
                                            @endif>{{$g->libelle}}</option>
                                        @endforeach
                                    </select>
                                    @error('groupe')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary"><i class="fa fa-plus-circle"></i> Ajouter à la Gallerie</button>
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
