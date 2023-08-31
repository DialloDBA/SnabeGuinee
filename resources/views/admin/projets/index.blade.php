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
                <h3 class="page-title">Les Articles</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('Tableau de Bord')}}</a></li>
                    <li class="breadcrumb-item active">Liste des Articles</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.projets.create')}}" class="btn add-btn" ><i class="fa fa-plus"></i> Ajouter un Article</a>
                <div class="view-icons">
                    <a href="clients.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                    <a href="clients-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Client ID</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Client Name</label>
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
                <a href="#" class="btn btn-success btn-block"> Search </a>  
            </div>     
        </div>
        <!-- Search Filter -->

        <div class="row mt-3">
            <div class="col-md-12">
                @if (Session::has("notification.message"))
                <div class="alert alert-{{ Session::get("notification.type")}}">
                    <span>{{ Session::get("notification.message")}}</span>
                </div>
                @endif
            </div>
            @foreach ($data as $a)
            <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <img style="max-height: 291px;" class="img-fluid" src="{{asset('storage').'/'.$a->image_min}}"/>
                        <h4 class="project-title m-2">
                          <a href="{{'project-view.html'}}">{{$a->titre}}</a>
                        </h4>
                        <p class="text-muted mx-2">
                            {!! str()->limit($a->resume,150) !!}
                        </p>
                        <a href="{{route('admin.projets.show',$a)}}" class="btn btn-sm w-100 btn-success">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i> Voir la Description
                        </a>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div>
                                <span><i class="far fa-calendar-alt"></i> {{\Carbon\Carbon::parse($a->created_at)->translatedFormat('d F Y à H\hi');}}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <span class="text-muted">{{$a->likes}} <i class="fa fa-heart text-danger"></i></span>
                                </div>
                                <div class="">
                                    <span class="text-muted">{{$a->views}} <i class="fa fa-eye"></i></span>
                                </div>
                                <div class="">
                                    <span class="text-muted">9 <i class="fa fa-comments text-dark"></i></span>
                                </div>
                            </div>
                        </div>
                    <hr>
                    <div>
                        <a href="{{route('admin.projets.edit',$a)}}" class="btn btn-warning btn-sm text-white">
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
                        <form action="{{route("admin.projets.destroy",$a)}}" id="delete-form" class="d-inline" method="post">
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
@endsection
@section('js')
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
<!-- Select2 JS -->
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
@endsection