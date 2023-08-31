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
                    
                    <li class="breadcrumb-item"> <a href="{{route('admin.groupeimages.index')}}">Liste des Groupes d'Image</a></li>
                    <li class="breadcrumb-item active">Affichage du Groupe d'Image {{$groupeImage->libelle}}</li>
                  </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route("admin.groupeimages.index")}}" class="btn add-btn">
                        <i class="fa fa-arrow-left"></i> {{ __("Retour")}}
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
        
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Groupe : {{ $groupeImage->libelle}}</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead>
                          <tbody>
                            <tr>
                                <th>Nom du Groupe</th>
                                <td>{{ $groupeImage->libelle}}</td>
                            </tr>
                            <tr>
                                <th>Slug du Groupe</th>
                                <td>{{ $groupeImage->slug}}</td>
                            </tr>
                            <tr>
                                <th>Statut du Groupe</th>
                                <td>{{ $groupeImage->statut ==1 ? 'Actif' : 'Inactif'}}</td>
                            </tr>
                            <tr class="bg-primary text-white">
                                <th>Date de Création du Groupe</th>
                                <td>{{ (new DateTime($groupeImage->created_at))->format('d/m/Y') }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Liste de Toutes les Image du Groupe</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @forelse ($groupeImage->images()->get() as $image)
                            <div class="col-md-6">
                                <div class="card">
                                <div class="card-body">
                                    <img class="img-fluid" src="{{asset('storage').'/'.$image->image}}"/>
                                        <h4 class="project-title m-2">
                                        <a href="javascript:void();">{{$image->titre}}</a>
                                        <a href="javascript:void();" class="badge badge-primary text-white float-end" onclick="return false;">{{$image->groupe->libelle}}</a>
                                        </h4>
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <span><i class="far fa-calendar-alt"></i> {{\Carbon\Carbon::parse($image->created_at)->translatedFormat('d F Y à H\hi');}}</span>
                                            </div>
                                            <div class="">
                                                <span class="text-muted">{{\App\Models\Gallery::getFullSize($image->taille)}}<i class="fa fa-comments text-dark"></i></span>
                                            </div>
                                        </div>
                                    <hr>
                                    <div>
                                        <a href="{{route('admin.gallery.edit',$image)}}" class="btn btn-warning btn-sm text-white">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Modifier
                                        </a>
                                        <form action="{{route('admin.changeStatut')}}" method="post" class="d-inline">
                                            @csrf
                                            @method("POST")
                                        </form>
                                        <form action="{{route("admin.gallery.destroy",$image)}}" id="delete-form" class="d-inline" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" id="btndelete" class="btn btn-danger btn-sm"><i class="fa fa-trash-o m-r-5"></i> Supprimer</button>
                                        </form>
                                        <form action="{{route('admin.changeStatut')}}" method="post" class="d-inline">
                                            @csrf
                                            @method("POST")
                                            <input type="hidden" name="model" value="App\Models\Gallery">
                                            <input type="hidden" name="whereField" value="id">
                                            <input type="hidden" name="whereValue" value="{{$image->id }}">
                                            <input type="hidden" name="statutField" value="statut">
                                            <input type="hidden" name="statutValue" value="{{$image->statut}}">
                                            <input type="hidden" name="msg" value="Statut de l'image modifier avec Succès">
                                            <button class="btn btn-primary btn-sm" type="submit">
                                                <i class="fa @if ($image->is_active()) {{'fa-toggle-off'}} @else {{'fa-toggle-on'}} @endif">
                                                </i> {{$image->statut()}}
                                            </button>
                                        </form>
                                        <span>
                                        </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            @empty
                                <small class="text-center">Aucune image pour ce Groupe</small>
                            @endforelse
                        </div>
                    </div>
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
