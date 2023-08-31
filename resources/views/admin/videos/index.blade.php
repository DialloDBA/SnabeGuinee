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
                <h3 class="page-title">Les Vidéos</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('Tableau de Bord')}}</a></li>
                    <li class="breadcrumb-item active">Liste des  Vidéos</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.videos.create')}}" class="btn add-btn" >
                    <i class="fa fa-plus"></i> {{__('Nouvelle Vidéo ?')}}
                </a>
            </div>
        </div>
        <!-- Search Filter -->
        <div class="row filter-row d-none">
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
        <div class="row mt-5">
            @foreach ($data as $s)
        <div class="col-12 col-md-6 col-lg-4 d-flex">
            <div class="card flex-fill">
                {{-- <img alt="" src="{{asset('storage')."/".$s->image_video}}" class="card-img-top" /> --}}
                @if ($s->source_video==1)
                    <video src="{{asset('storage')."/".$s->url_video}}" poster="{{asset('storage')."/".$s->image_video}}" controls></video>
                @endif
                @if ($s->source_video==2)
                <a href="{{route('admin.videos.show',$s->unique)}}">
                    <iframe class="card-img-top" width="900" height="350" src="https://www.youtube.com/embed/<?=substr($s->url_video,-11)?>?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                </a>
                @endif
                <div class="card-header">
                    <h5 class="card-title mb-0">{{$s->title_sm}}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                       {!! $s->title_lg !!}
                    </p>
                    <a class="btn btn-primary card-link" href="#"><i class="fa fa-edit"></i></a>
                    <form action="{{route('admin.sliders.destroy',$s)}}" method="post" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger card-link" type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                    <a class="btn btn-primary card-link" href="#">
                        <i class="fa @if ($s->active()) {{'fa-toggle-off'}} @else {{'fa-toggle-on'}} @endif">
                        </i> {{$s->statut()}}
                    </a>
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