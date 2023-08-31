@extends('layouts.admin.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="content">
        <div data-select2-id="26">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Informations Générales</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Tableau de Bord</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.informations.index')}}">Informations</a></li>
                            <li class="breadcrumb-item active">Informations de Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    @if (Session::has('notification.message'))
                        <div class="alert alert-{{ Session::get('notification.type') }} alert-dismissible fade show" role="alert">
                            {{ Session::get('notification.message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Paramètres Généraux | <span class="h3 text-primary">Academie Ibou</span></h3>
                            </div>
                        </div>
                    </div>

                    <form action="{{route('admin.informations.update_settings_gloabal')}}" method="POST">
                        @csrf
                        @method("POST")
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nom Entité <span class="text-danger">*</span></label>
                                    <input class="form-control @error('nom_entite') is-invalid @enderror" type="text" name="nom_entite" value="{{old('nom_entite') ?? $informations->nom_entite}}" />
                                    @error('nom_entite')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Personne à Contacter</label>
                                    <input class="form-control @error('personne_contacter') is-invalid @enderror" name="personne_contacter" value="{{old('personne_contacter') ?? $informations->personne_contacter}}" type="text" />
                                    @error('personne_contacter')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Adresse Officielle</label>
                                    <input class="form-control @error('adresse_officielle') is-invalid @enderror" name="adresse_officielle" value="{{old('adresse_officielle') ?? $informations->adresse_officielle}}" type="text" />
                                    @error('adresse_officielle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Pays</label>
                                    <select class="form-control @error('pays') is-invalid @enderror select" name="pays">
                                        <option value="{{$informations->pays}}">{{$informations->pays}}</option>
                                    </select>
                                    @error('pays')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Ville</label>
                                    <input class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{old('ville') ?? $informations->ville}}" type="text" />
                                    @error('ville')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Etat/Région</label>
                                    <select name="region" class="form-control @error('region') is-invalid @enderror select">
                                        <option value="{{$informations->region}}">{{$informations->region}}</option>
                                    </select>
                                    @error('region')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Code Postal</label>
                                    <input class="form-control @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ old('code_postal' ?? $informations->code_postal )}}" type="text" />
                                    @error('code_postal')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Adresse E-mail</label>
                                    <input class="form-control @error('email_officielle') is-invalid @enderror" name="email_officielle" value="{{ old('email_officielle') ?? $informations->email_officielle }}" type="email" />
                                    @error('email_officielle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Numero Telephone 1 &nbsp;<span class="text-danger font-weight-bold">(*)</span></label>
                                    <input class="form-control @error('telephone_1') is-invalid @enderror" name="telephone_1" value="{{ old('telephone_1') ?? $informations->telephone_1}}" type="text" />
                                    @error('telephone_1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Numero Telephone 2 &nbsp;<span class="text-danger font-weight-bold">(facultatif)</span></label>
                                    <input class="form-control @error('telephone_2') is-invalid @enderror" name="telephone_2" value="{{ old('telephone_2') ?? $informations->telephone_2}}" type="text" />
                                    @error('telephone_2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Fax &nbsp;<span class="text-danger font-weight-bold">(facultatif)</span></label>
                                    <input class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{ old('fax') ?? $informations->fax }}" type="text" />
                                    @error('fax')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Site Web</label>
                                    <input class="form-control @error('site_web') is-invalid @enderror" name="site_web" value="{{ old('site_web') ?? $informations->site_web}}" type="text" />
                                    @error('site_web')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Chaine Youtube <i class="fa fa-youtube"></i> <span class="text-danger">*</span></label>
                                    <input class="form-control @error('compte_youtube') is-invalid @enderror" type="url" name="compte_youtube" value="{{old('compte_youtube') ?? $informations->compte_youtube}}" />
                                    @error('compte_youtube')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Compte Instagram <i class="fa fa-instagram"></i> <span class="text-danger">*</span></label>
                                    <input class="form-control @error('compte_instagram') is-invalid @enderror" name="compte_instagram" value="{{old('compte_instagram') ?? $informations->compte_instagram}}" type="text" />
                                    @error('compte_instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label> Compte Facebook <i class="fa fa-facebook"></i> <span class="text-danger">*</span></label>
                                    <input class="form-control @error('compte_facebook') is-invalid @enderror" type="url" name="compte_facebook" value="{{old('compte_facebook') ?? $informations->compte_facebook}}" />
                                    @error('compte_facebook')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Compte Twitter <i class="fa fa-twitter"></i> <span class="text-danger">*</span></label>
                                    <input class="form-control @error('compte_twitter') is-invalid @enderror" name="compte_twitter" value="{{old('compte_twitter') ?? $informations->compte_twitter}}" type="url" />
                                    @error('compte_twitter')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label> Compte WhatsApp <i class="fa fa-whatsapp"></i> <span class="text-danger">*</span></label>
                                    <input class="form-control @error('compte_whatsapp') is-invalid @enderror" type="tel" name="compte_whatsapp" value="{{old('compte_whatsapp') ?? $informations->compte_whatsapp}}" />
                                    @error('compte_whatsapp')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Compte TikTok <i class="fa fa-tiktok"></i> <span class="text-danger">*</span></label>
                                    <input class="form-control @error('compte_tiktok') is-invalid @enderror" name="compte_tiktok" value="{{old('compte_tiktok') ?? $informations->compte_tiktok}}" type="url" />
                                    @error('compte_tiktok')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Compte LinkedIn <i class="fa fa-linkedin"></i> <span class="text-danger">*</span></label>
                                    <input class="form-control @error('compte_linkedin') is-invalid @enderror" name="compte_linkedin" value="{{old('compte_linkedin') ?? $informations->compte_linkedin}}" type="url" />
                                    @error('compte_linkedin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Compte Pinterest <i class="fa fa-pinterest"></i> <span class="text-danger">*</span></label>
                                    <input class="form-control @error('compte_pinterest') is-invalid @enderror" name="compte_pinterest" value="{{old('compte_pinterest') ?? $informations->compte_pinterest}}" type="text" />
                                    @error('compte_pinterest')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Sauvegarder ces Informations</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')

    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#add_souscategorie_form").submit(function(e) {
                e.preventDefault();
                $url = $('#add_souscategorie_form').attr("action");
                $categorie = $('#categorie').val();
                $libelle = $('input[name=libelle_sous_categorie]').val();
                $statut = $('#statut_sous_categorie').val();
                //alert($statut+" "+$categorie +" "+ $libelle);
                //alert($url)
                $.ajax({
                    type: "POST",
                    url: $url,
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'categorie': $categorie,
                        'libelle_sous_categorie': $libelle,
                        'statut_sous_categorie': $statut
                    },
                    beforeSend: function() {
                        $("span.alert-success-categorie").text("").hide();
                        $(document).find('span.text-error-form').text("");
                    },
                    success: function(data) {
                        if (data.success == true) {
                            $("span.alert-success-categorie").text(data.message).show();
                            $("#add_souscategorie_form")[0].reset();
                        }
                    },
                    error: function(error) {
                        if (error.responseJSON.errors) {
                            $.each(error.responseJSON.errors, function(field_name, error) {
                                $('span.' + field_name + '_error').text(error);
                            });
                        }
                    }
                })
            })
            $(".close").click(function() {
                $("span.alert-success-categorie").text("").hide();
                history.go(0);
            });
        })
    </script>
@endsection
