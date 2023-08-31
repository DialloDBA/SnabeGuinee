@extends('layouts.controle.app')
@section('content')
<div class="content">
    <div data-select2-id="26">
        <div class="page-header">
          <div class="row align-items-center">
              <div class="col">
                  <h3 class="page-title text-uppercase">Les Articles</h3>
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Tableau de Bord</a></li>
                    <li class="breadcrumb-item active">Liste des Articles</li>
                  </ul>
              </div>
              <div class="col-auto float-right ml-auto">
                  <a href="{{ route("admin.articles.create")}}" class="btn add-btn">
                    <i class="fa fa-plus-circle"></i> {{ __("Ajouter un Article")}}
                  </a>
              </div>
          </div>
        </div>
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Item Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus select-focus">
                    <select class="select floating">
                        <option> -- Select -- </option>
                        <option>Loren Gatlin</option>
                        <option>Tarah Shropshire</option>
                    </select>
                    <label class="focus-label">Purchased By</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus select-focus">
                    <select class="select floating">
                        <option> -- Select -- </option>
                        <option> Cash </option>
                        <option> Cheque </option>
                    </select>
                    <label class="focus-label">Paid By</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">From</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">To</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <a href="#" class="btn btn-success btn-block"> Search </a>
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
        @foreach ($articles as $a)
        <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img class="img-fluid" src="{{asset('storage').'/'.$a->image_min_article}}"/>
                    <h4 class="project-title m-2">
                      <a href="{{'project-view.html'}}">{{$a->titre_article}}</a>
                    </h4>
                    <p class="text-muted mx-2">
                        {!! Str::limit($a->resume_article,120) !!}
                    </p>
                    <a href="{{route('admin.articles.show',$a)}}" class="text-success">
                        <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> Lire[...]
                    </a>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div>
                            <span><i class="far fa-calendar-alt"></i> {{\Carbon\Carbon::parse($a->created_at)->translatedFormat('d F Y à H\hi');}}</span>
                        </div>
                        <div class="">
                            <span class="text-muted">{{$a->likes_article}} <i class="fa fa-heart text-danger"></i></span>
                            <span class="text-muted">{{$a->views_article}} <i class="fa fa-eye"></i></span>
                            <span class="text-muted">9 <i class="fa fa-comments text-dark"></i></span>
                        </div>
                    </div>
                <hr>
                <div>
                    <a href="{{route('admin.articles.edit',$a)}}" class="btn btn-warning btn-sm text-white">
                        <i class="fa fa-pencil" aria-hidden="true"></i> Modifier
                    </a>
                    
                    {{-- <form action="{{route('admin.changeStatut')}}" method="post" class="d-inline">
                        @csrf
                        @method("POST")
                        <input type="hidden" name="model" value="App\Models\Article">
                        <input type="hidden" name="whereField" value="slug_article">
                        <input type="hidden" name="whereValue" value="{{$a->slug_article }}">
                        <input type="hidden" name="statutField" value="statut_article">
                        <input type="hidden" name="statutValue" value="{{$a->statut_article}}">
                        <input type="hidden" name="msg" value="Statut de l'article modifié avec Succès">
                        <button class="btn btn-primary card-link" type="submit">
                            <i class="fa @if ($a->statut_article==1) {{'fa-toggle-off'}} @else {{'fa-toggle-on'}} @endif">
                            </i> @if ($a->statut_article==1) {{'Desactiver'}} @else {{'Mettre en ligne'}} @endif
                        </button>
                    </form> --}}
                    <form action="{{route("admin.articles.destroy",$a)}}" id="delete-form" class="d-inline" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" id="btndelete" class="btn btn-danger btn-sm"><i class="fa fa-trash-o m-r-5"></i> Supprimer</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        @endforeach
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
