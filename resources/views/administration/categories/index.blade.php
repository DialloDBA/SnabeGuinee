@extends('layouts.controle.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
@endsection
@section('content')
<div class="content">
    <div data-select2-id="26">
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Categories</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Tableau de Bord</a></li>
                    <li class="breadcrumb-item active">Liste des Categories</li>
                </ul>
            </div>
          </div>
        </div>
        <div class="row filter-row d-none">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus select-focus">
                    <select class="select floating">
                        <option>Select Company</option>
                        <option>Global Technologies</option>
                        <option>Delta Infotech</option>
                    </select>
                    <label class="focus-label">Company</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus select-focus">
                    <select class="select floating">
                        <option>Select Roll</option>
                        <option>Web Developer</option>
                        <option>Web Designer</option>
                        <option>Android Developer</option>
                        <option>Ios Developer</option>
                    </select>
                    <label class="focus-label">Role</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#" class="btn btn-success btn-block"> Search </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Ajouter une Categorie</h3>
                <form action="{{route("admin.categories.store")}}" id="add_categorie_form" method="POST">
                    @csrf
                    @method("POST")
                    <div class="form-group">
                        <label>Libelle de la Categorie <span class="text-danger">*</span></label>
                        <div class="">
                            <input class="form-control @error('libelle_categorie') is-invalid @enderror" value="{{old('libelle_categorie')}}" type="text" name="libelle_categorie"/>
                        </div>
                        @error('libelle_categorie')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Statut de la Categorie <span class="text-danger">*</span></label>
                        <select name="statut_categorie" class="select floating @error('statut_categorie') is-invalid @enderror" id="statut_categorie">
                            <option value="">Selectionner une categorie</option>
                            <option value="1" selected>Actif</option>
                            <option value="0">Non Actif</option>
                        </select>@error('statut_categorie')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" id="add_categories">Enregistrer</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable">
                        <thead>
                            <tr class="text-uppercase">
                                <th>#code</th>
                                <th>libelle</th>
                                <th> Date creation</th>
                                <th>Statut</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $c)
                            <tr>
                                <td>
                                    {{$c->code_categorie}}
                                </td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.html">{{ $c->libelle_categorie}}</a>
                                    </h2>
                                </td>
                                <td>{{ date("d/m/Y",strtotime($c->created_at))}}</td>
                                <td>
                                    <span class="badge bg-inverse-danger">{{$c->statut()}}</span>
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Actions
                                        </button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="{{route('admin.categories.show',$c)}}" >
                                                <i class="fa fa-eye m-r-5"></i> Consulter
                                            </a>
                                            <a class="dropdown-item" href="{{route('admin.categories.edit',$c)}}" >
                                                <i class="fa fa-pencil m-r-5"></i> Modifier
                                            </a>
                                            <form action="{{route("admin.categories.destroy",$c)}}" id="delete-form" class="dropdown-item" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" id="btndelete"><i class="fa fa-trash-o m-r-5"></i> Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal custom-modal fade" id="delete_expense" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-body">
                  <div class="form-header">
                      <h3>Delete Expense</h3>
                      <p>Are you sure want to delete ?</p>
                  </div>
                  <div class="modal-btn delete-action">
                      <div class="row">
                          <div class="col-6">
                              <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                          </div>
                          <div class="col-6">
                            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                          </div>
                      </div>
                  </div>
              </div>
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
<script>
    $(function(){
        $("#add_souscategorie_form").submit(function(e){
            e.preventDefault();
            $url = $('#add_souscategorie_form').attr("action");
            $categorie = $('#categorie').val();
            $libelle = $('input[name=libelle_sous_categorie]').val();
            $statut = $('#statut_sous_categorie').val();
            //alert($statut+" "+$categorie +" "+ $libelle);
            //alert($url)
            $.ajax({
                type :"POST",
                url : $url,
                data : {
                    '_token': $('input[name=_token]').val(),
                    'categorie': $categorie,
                    'libelle_sous_categorie': $libelle,
                    'statut_sous_categorie': $statut
                },
                beforeSend : function(){
                    $("span.alert-success-categorie").text("").hide();
                    $(document).find('span.text-error-form').text("");
                },
                success : function (data) {
                    if (data.success==true) {
                        $("span.alert-success-categorie").text(data.message).show();
                        $("#add_souscategorie_form")[0].reset();
                    }
                },
                error : function(error){
                    if(error.responseJSON.errors){
                        $.each(error.responseJSON.errors,function(field_name,error){
                            $('span.'+field_name+'_error').text(error);
                        });
                    }
                }
            })
        })
        $(".close").click(function(){
            $("span.alert-success-categorie").text("").hide();
            history.go(0);
        });
    })
    $("#add_categorie_form").submit(function(e){
        // e.preventDefault();
        $("#add_categories").text("Créatin en cours...");
    })
</script>
@endsection
