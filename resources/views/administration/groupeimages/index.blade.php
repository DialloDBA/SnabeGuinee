@extends('layouts.admin.app',['title'=>'Les Groupes d\'image de la Gallerie'])
@section('content')
<div class="content">
    <div data-select2-id="26">
        <div class="page-header">
          <div class="row align-items-center">
                <div class="col">
                  <h3 class="page-title text-uppercase">Les Groupes d'Image de la Gallerie</h3>
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Tableau de Bord</a></li>
                    <li class="breadcrumb-item active">Liste des Groupes d'Image</li>
                  </ul>
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
        <form action="{{route('admin.groupeimages.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="row filter-row mb-5">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating" value="{{old('libelle_groupe') ?? ''}}" name="libelle_groupe">
                    <label class="focus-label">Nom du Groupe</label>
                    @error('libelle_groupe')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus select-focus">
                    <select class="select floating" name="statut_groupe">
                        <option value="">Choisir le Statut</option>
                        <option value="1">Actif</option>
                        <option value="0">Inactif</option>
                    </select>
                    <label class="focus-label">Statut du Groupe</label>
                    @error('statut_groupe')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-success btn-block"> Ajouter a la liste </a>
            </div>
        </div>
    </form>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable">
                        <thead>
                            <tr class="text-center">
                              <th>#</th>
                              <th>libelle du Groupe</th>
                              <th>Statut du Groupe</th>
                              <th>Date d'Ajout</th>
                            <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groupes as $g)
                            <tr>
                                <td>
                                    {{$g->id}}
                                </td>
                                
                              <td>{{$g->libelle}}</td>
                              <td>{{$g->statut ==1 ? 'Actif' : 'Inactif'}}</td>
                              <td>{{$g->created_at}}</td>
                              <td>
                                <a href="{{route('admin.groupeimages.show',$g)}}" class="btn btn-info btn-sm text-white"><i class="fa fa-eye"></i> Consulter</a>
                                <a href="{{route('admin.groupeimages.edit',$g)}}" class="btn btn-primary btn-sm text-white"><i class="fa fa-pencil"></i> Modifier</a>

                                <form action="{{route('admin.groupeimages.show',$g)}}" method="post" class="d-inline" onsubmit="return confirm('{{'Etes-vous sur de vouloir supprimer le Groupe '}}{{$g->libelle}}');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i> Supprimer</a>
                                </form>
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
<script>
</script>
