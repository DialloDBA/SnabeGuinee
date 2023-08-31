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
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Tableau de Bord</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.bourses.index')}}">Bourses</a></li>
                    <li class="breadcrumb-item active">Nouvelle Bourses</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.bourses.create')}}" class="btn add-btn" ><i class="fa fa-plus"></i> Nouvelle Bourses</a>
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
                    <label class="focus-label">Titre Bourses</label>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-3"> 
                <div class="form-group form-focus select-focus" id="categorie">
                    <select class="select floating"> 
                        <option>Select Company</option>
                        <option>Global Technologies</option>
                        <option>Delta Infotech</option>
                    </select>
                    <label class="focus-label">Company</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3"> 
                <div class="form-group form-focus select-focus" id="type">
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

        <div class="row">
            @foreach ($data as $b)
            <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                        <a href="{{route('admin.bourses.show',$b)}}">
                            <img style="max-height: 291px;" class="img-fluid" src="{{asset('storage').'/'.$b->image_min_bourse}}"/>
                        </a>
                        <h4 class="project-title m-2">
                          <a href="{{route('admin.bourses.show',$b)}}">{{$b->titre_bourse}}</a>
                        </h4>
                        <a href="{{route('admin.bourses.show',$b)}}" class="text-success">
                            <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                        </a>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div>
                                <span>
                                    <i class="far fa-calendar-alt"></i> 
                                    {{\Carbon\Carbon::parse($b->created_at)->translatedFormat('d F Y à H\hi');}}
                                </span>
                            </div>
                            {{-- <div class="">
                                <span class="text-muted">{{""}} <i class="fa fa-heart text-danger"></i></span>
                                <span class="text-muted">{{""}} <i class="fa fa-eye"></i></span>
                                <span class="text-muted">9 <i class="fa fa-comments text-dark"></i></span>
                            </div> --}}
                        </div>
                        <hr>
                    <div>
                        <a href="{{route('admin.bourses.edit',$b)}}" class="btn btn-warning btn-sm text-white">
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
                        {{-- <form action="{{route("admin.posts.destroy",$a)}}" id="delete-form" class="d-inline" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" id="btndelete" class="btn btn-danger btn-sm"><i class="fa fa-trash-o m-r-5"></i> Supprimer</button>
                        </form> --}}
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