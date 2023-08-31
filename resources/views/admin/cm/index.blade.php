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
                <h3 class="page-title">Les Messages de Contact</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('Tableau de Bord')}}</a></li>
                    <li class="breadcrumb-item active">Liste des Messages de Contact</li>
                </ul>
            </div>
            {{-- <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.sliders.create')}}" class="btn add-btn" >
                    <i class="fa fa-plus"></i> {{__('Nouveau Slider')}}
                </a>
            </div> --}}

            <a href="{{route('admin.sliders.create')}}" class="btn add-btn" ><i class="fa fa-envelope"></i> Envoyer un E-mail </a>
                <a href="{{route('admin.sliders.create')}}" class="btn add-btn mx-1" ><svg  xmlns="http://www.w3.org/2000/svg" height="1em" fill="#fff" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7 1.3 3 4.1 4.8 7.3 4.8 66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128.2 304H116c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h12.3c6 0 10.4-3.5 10.4-6.6 0-1.3-.8-2.7-2.1-3.8l-21.9-18.8c-8.5-7.2-13.3-17.5-13.3-28.1 0-21.3 19-38.6 42.4-38.6H156c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8h-12.3c-6 0-10.4 3.5-10.4 6.6 0 1.3.8 2.7 2.1 3.8l21.9 18.8c8.5 7.2 13.3 17.5 13.3 28.1.1 21.3-19 38.6-42.4 38.6zm191.8-8c0 4.4-3.6 8-8 8h-16c-4.4 0-8-3.6-8-8v-68.2l-24.8 55.8c-2.9 5.9-11.4 5.9-14.3 0L224 227.8V296c0 4.4-3.6 8-8 8h-16c-4.4 0-8-3.6-8-8V192c0-8.8 7.2-16 16-16h16c6.1 0 11.6 3.4 14.3 8.8l17.7 35.4 17.7-35.4c2.7-5.4 8.3-8.8 14.3-8.8h16c8.8 0 16 7.2 16 16v104zm48.3 8H356c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h12.3c6 0 10.4-3.5 10.4-6.6 0-1.3-.8-2.7-2.1-3.8l-21.9-18.8c-8.5-7.2-13.3-17.5-13.3-28.1 0-21.3 19-38.6 42.4-38.6H396c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8h-12.3c-6 0-10.4 3.5-10.4 6.6 0 1.3.8 2.7 2.1 3.8l21.9 18.8c8.5 7.2 13.3 17.5 13.3 28.1.1 21.3-18.9 38.6-42.3 38.6z"/></svg>
                     Envoyer un SMS 
                </a>
                <div class="col-auto float-end ms-auto">
                    <a href="compose.html" class="btn add-btn"><i class="fa fa-arrow-left"></i> Retour</a>
                    <a href="compose.html" class="btn add-btn"><i class="fa fa-plus"></i> Compose</a>
                    
                </div>
        </div>
        <!-- Search Filter -->
        
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
            
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="email-header">
                            <div class="row">
                                <div class="col top-action-left">
                                    <div class="float-left">
                                        <div class="btn-group dropdown-action">
                                            <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Select <i class="fa fa-angle-down "></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Tous</a>
                                                <a class="dropdown-item" href="#">None</a>
                                                <div class="dropdown-divider"></div> 
                                                <a class="dropdown-item" href="#">Read</a>
                                                <a class="dropdown-item" href="#">Unread</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown-action">
                                            <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Repondre par SMS</a>
                                                <a class="dropdown-item" href="#">Repondre par Mail</a>
                                                <a class="dropdown-item" href="#">Repondre par WhatsApp</a>
                                                <div class="dropdown-divider"></div> 
                                                <a class="dropdown-item" href="#">Marquer comme lu</a>
                                                <a class="dropdown-item" href="#">Marquer comme non lu</a>
                                                <div class="dropdown-divider"></div> 
                                                <a class="dropdown-item" href="#">Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-left d-none d-sm-block">
                                        <input type="text" placeholder="Rechercher un Messages..." class="form-control search-message">
                                    </div>
                                </div>
                                <div class="col-auto top-action-right">
                                    <div class="text-right">
                                        <button type="button" title="Refresh" data-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fa fa-refresh"></i></button>
                                        <div class="btn-group">
                                            <a class="btn btn-white"><i class="fa fa-angle-left"></i></a>
                                            <a class="btn btn-white"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="email-content">
                            <div class="table-responsive">
                                <table class="table table-inbox table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="6">
                                                <input type="checkbox" class="checkbox-all">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $c)
                                        <tr class="@if(!$c->is_read()) unread @endif clickable-row" data-href="{{ route('admin.contact-messages.show',$c)}}">
                                            <td>
                                                <input type="checkbox" class="checkmail">
                                            </td>
                                            {{-- <td><span class="mail-important"><i class="fa fa-star starred"></i></span></td> --}}
                                            <td class="name">{{ $c->prenom." ".$c->nom }}</td>
                                            <td class="subject">{{ Str::words($c->message,10,'...')}}</td>
                                            <td><i class="fa fa-paperclip"></i></td>
                                            <td class="mail-date">13:14</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
@endsection