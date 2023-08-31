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
                <h3 class="page-title">Les Bourses</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('Tableau de Bord')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.bourses.index')}}">Liste des Bourses</a></li>
                    <li class="breadcrumb-item active">Création d'une Nouvelle Bourse</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.posts.index')}}" class="btn add-btn" ><i class="fa fa-list"></i> Liste des Bourses</a>
            </div>
        </div>
        <!-- Search Filter -->
        <div class="row">
            <div class="col-md-12">
                @if (session('notification.message'))
                <div class="alert alert-{{session('notification.type')}} alert-dismissible fade show" role="alert">
                    <strong>{{session('notification.alert')}}</strong> {!! session('notification.message') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
            </div>
        </div>
        <!-- Search Filter -->
        <div class="row my-3" >
            
            <div class="col-md-12 col-lg- offset-l-2">
                    <form id="create-bourses-form" action="{{ route("admin.bourses.store")}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method("POST")
                        <div class="form-group">
                            <label>Titre de la Bourse <span class="text-danger font-weight-bold">*</span></label>
                            <input class="form-control" type="text" placeholder="Titre de la Bourse" name="titre" value="{{old('titre') ?? ''}}"/>
                            @error('titre')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="annees">Année Academique <span class="text-danger font-weight-bold">*</span></label>
                                            <div>
                                                <select name="annee" class="select floating @error('annee') is_invalid @enderror" id="annee">
                                                    <option value="" selected>Choisir une Année</option>
                                                    @foreach ($annees as $a)
                                                        <option value="{{ $a->id }}">{{ $a->libelle}}</option>
                                                    @endforeach
                                                </select>
                                                @error('annee')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date Limite de candidature <span class="text-danger font-weight-bold">*</span></label>
                                            <div>
                                                <input class="form-control" type="datetime-local" name="date_limite" id="date_limite" value="{{ old('date_limite')}}"/>
                                                @error('date_limite')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pays Donateur <span class="text-danger font-weight-bold">*</span></label>
                                            <div>
                                                <select name="pays" class="select floating @error('pays') is_invalid @enderror" id="pays">
                                                    <option value="" selected>Choisir le Pays</option>
                                                    @foreach ($pays as $key=> $p)
                                                    <option value="{{ $p->id }}" @if ($p->code==250) selected  @endif>{{$p->langFR}}</option>
                                                    @endforeach
                                                </select>
                                                @error('pays')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label> Programmes d'Etudes <span class="text-danger font-weight-bold">*</span></label>
                                        <select name="programmes[]" placeholder="Licence" multiple class="select floating" id="programmes">
                                            @foreach ($programmes as $key=> $p)
                                            <option value="{{ $p->id }}" @if ($key==0) selected  @endif>{{$p->titre}}</option>
                                            @endforeach
                                        </select>
                                        @error('programmes')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                      </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Image minimale (<span class="text-danger font-weight-bold">*</span>) : (360*220)</label>
                                            <div>
                                                <input class="form-control" type="file" placeholder="Image de l'article" accept="images/*" name="image_minimale" id="image_minimale" onchange="verify_image_min_size(this)"/>
                                                {{-- <small class="form-text text-muted">Format images: jpg, png.</small> --}}
                                                @error('image_minimale')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Image maximale (<span class="text-danger font-weight-bold">*</span>) : (750*460)</label>
                                            <div>
                                                <input class="form-control" type="file" name="image_maximale" id="image_maximale" />
                                                {{-- <small class="form-text text-muted">Format images: jpg, png.</small> --}}
                                                @error('image_maximale')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label> Public Cible <span class="text-danger font-weight-bold">*</span></label>
                                          <select name="public_cible[]" placeholder="Licence" multiple class="select floating" id="public_cible">
                                              @foreach ($genres as $key=> $g)
                                              <option value="{{ $g->id }}" @if ($key==0) selected  @endif>{{$g->libelle}}</option>
                                              @endforeach
                                          </select>
                                          @error('public_cible')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Type de Bourse <span class="text-danger font-weight-bold">*</span></label>
                                            <div>
                                                <select name="type" class="select floating @error('type') is_invalid @enderror" id="type">
                                                    <option value="" selected>Selectionnez le Type</option>
                                                    @foreach ($types as $key=> $t)
                                                    <option value="{{ $t->id }}" @if ($key==0) selected  @endif>{{$t->libelle}}</option>
                                                    @endforeach
                                                </select>
                                                @error('type')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Eligibilié <span class="text-danger">*</span></label>
                                    <textarea cols="30" rows="3" id="eligibilite" class="form-control eligibilite" placeholder="Resumé de l'article" name="eligibilite">{{old('eligibilite') ?? ''}}</textarea>
                                    @error('eligibilite')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description de la Bourse <span class="text-danger font-weight-bold">*</span></label>
                                    <textarea cols="30" rows="8" id="description" class="form-control description" placeholder="Description de la Bourse" name="description">{{old('description') ?? ''}}</textarea>
                                    @error('description')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Statut de la Bourse <span class="text-danger font-weight-bold">*</span></label>
                                    <select name="statut" class="select floating @error('statut') is_invalid @enderror" id="statut">
                                        <option value="" selected>Choisir le Statut</option>
                                        @foreach ($statut as $k=> $s)
                                        <option value="{{ $k }}" @if ($k==1) selected  @endif>{{$s}}</option>
                                        @endforeach
                                    </select>
                                    @error('statut')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Attacher des Pièces Justificative <span class="text-danger font-weight-bold">*</span></label>
                                    <input type="file" name="pieces[]" multiple id="pieces" class="form-control @error('pieces') is_invalid @enderror">
                                        @error('pieces')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Envoyer les Newsletters <span class="text-danger">*</span></label><br>
                                            <label class="switch">
                                                <input type="hidden" value="{{ old('to_newsletter') ?? 'off'}}" name="to_newsletter">
                                                <input type="checkbox" checked="checked" name="to_newsletter">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Ajouter aux Sliders <span class="text-danger">*</span></label><br>
                                            <label class="switch">
                                                <input type="hidden" value="{{ old('to_sliders') ?? 'off'}}" name="newsletter">
                                                <input type="checkbox" name="to_sliders">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Alerter les Ulisateurs <span class="text-danger">*</span></label><br>
                                            <label class="switch">
                                                <input type="hidden" value="{{ old('to_sliders') ?? 'off'}}" name="newsletter">
                                                <input type="checkbox" name="to_sliders">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section " id="area">
                                <button class="btn btn-outline-success w-100 create_bourse"> <i class="fa fa-plus-circle"></i> Créer la Bourse</button>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        
                    </form>
                    {{-- <div class="col-md-3">
                        <div class="form-group">
                            <label>Envoyer les Newsletters <span class="text-danger">*</span></label><br>
                            <label class="switch">
                                <input type="hidden" value="{{ old('newsletter') ?? 'off'}}" name="newsletter">
                                <input type="checkbox" checked="checked" name="auto_backup_db">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ajouter aux Sliders <span class="text-danger">*</span></label><br>
                            <label class="switch">
                                <input type="hidden" value="{{ old('newsletter') ?? 'off'}}" name="newsletter">
                                <input type="checkbox" checked="checked" name="auto_backup_db">
                                <span></span>
                            </label>
                        </div>
                    </div> --}}
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
    editeur("eligibilite");
    editeur("description");
    $("#create-bourses-form").submit(function(){
        $(this).find('.create_bourse').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Insertion en cours...').addClass("disabled");
    });
</script>
@endsection