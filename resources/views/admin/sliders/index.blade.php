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
                <h3 class="page-title">Les Sliders</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('Tableau de Bord')}}</a></li>
                    <li class="breadcrumb-item active">Liste des Sliders</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.sliders.create')}}" class="btn add-btn" >
                    <i class="fa fa-plus"></i> {{__('Nouveau Slider')}}
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
        
        <div class="row mt-4">
            <div class="col-md-12">
                @if (session('notification.message'))
                <div class="alert alert-{{session('notification.type')}} alert-dismissible fade show" role="alert">
                    <strong>{{session('notification.alert')}}</strong> {{session('notification.message')}}
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
                <img alt="" src="{{asset('storage')."/".$s->image}}" class="card-img-top" />
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
                        <i class="fa @if ($s->is_active()) {{'fa-toggle-off'}} @else {{'fa-toggle-on'}} @endif">
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