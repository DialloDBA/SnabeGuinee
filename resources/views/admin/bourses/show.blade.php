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
                    <li class="breadcrumb-item active">{{$bourse->titre_bourse}}</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.bourses.create')}}" class="btn add-btn" >
                    <i class="fa fa-plus "></i> Nouvelle Bourses
                </a>
                <a href="#{{route('admin.bourses.create')}}" class="btn btn-primary rounded">
                    <i class="fa fa-user-plus"></i> Affecter un Boursier
                </a>
                <a href="{{route('admin.bourses.edit',$bourse)}}" class="btn btn-info rounded-circle" >
                    <i class="fa fa-edit"></i> 
                </a>
                <a href="{{route('admin.bourses.create')}}" class="btn btn-danger rounded-circle mx-1" >
                    <i class="fa fa-list"></i> Bourses
                </a>
                {{-- <div class="view-icons">
                    <a href="clients.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                    <a href="clients-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                </div> --}}
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="project-title">
                            <h3 class="card-title">{{ $bourse->titre_bourse }}</h3>
                            <small class="block text-ellipsis m-b-15">
                                <span class="text-xs">20</span> 
                                <span class="text-muted">Participants, </span>
                                <span class="text-xs">2</span> 
                                <span class="text-muted">Participant(s) Accepté(s)</span>
                            </small>
                        </div>
                        <div>
                            <img style="max-height: 291px;" class="img-fluid" src="{{asset('storage').'/'.$bourse->image_max_bourse}}"/>
                        </div>
                        <h3 class="my-2">Eligibilité</h3>
                        <div>
                            {!! $bourse->eligibilite!!}
                        </div>
                        <h3 class="my-2">Description </h3>
                        <div>
                            {!! $bourse->description_bourse!!}
                        </div>
                        <h3 class="my-2">Autres Informations </h3>
                        <div>
                            {!! $bourse->description_bourse!!}
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-20">Uploaded image files</h5>
                        <div class="row">
                            <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                                <div class="uploaded-box">
                                    <div class="uploaded-img">
                                        <img src="{{asset('assets/img/placeholder.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="uploaded-img-name">
                                        demo.png
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                                <div class="uploaded-box">
                                    <div class="uploaded-img">
                                        <img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="uploaded-img-name">
                                        demo.png
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                                <div class="uploaded-box">
                                    <div class="uploaded-img">
                                        <img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="uploaded-img-name">
                                        demo.png
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                                <div class="uploaded-box">
                                    <div class="uploaded-img">
                                        <img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="uploaded-img-name">
                                        demo.png
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-20">Pièces Justificatives rattachées</h5>
                        <ul class="files-list">
                            @foreach ($bourse->justificatifs()->get() as $p)
                            <li>
                                <div class="files-cont">
                                    <div class="file-type">
                                        <span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
                                    </div>
                                    <div class="files-info">
                                        <span class="file-name text-ellipsis">
                                            <a href="#">{{$p->nom}}</a></span>
                                            <span class="file-author">
                                                <a href="#">{{$p->user->username}}</a>
                                            </span> 
                                            <span class="file-date">{{$p->created_at}}</span>
                                        <div class="file-size">Taille : {{$p->taille }}</div>
                                    </div>
                                    <ul class="files-action">
                                        <li class="dropdown dropdown-action">
                                            <a href="" class="dropdown-toggle btn btn-link" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Telecharger</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Partager</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Supprimer</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="project-task">
                    <ul class="nav nav-tabs nav-tabs-top nav-justified mb-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#all_tasks" data-toggle="tab" aria-expanded="true">All Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pending_tasks" data-toggle="tab" aria-expanded="false">Tous les Postulants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#completed_tasks" data-toggle="tab" aria-expanded="false">Acceptés</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="all_tasks">
                            <div class="task-wrapper">
                                <div class="task-list-container">
                                    <div class="task-list-body">
                                        <ul id="task-list">
                                            <li class="task">
                                                <div class="task-container">
                                                    <span class="task-action-btn task-check">
                                                        <span class="action-circle large complete-btn"
                                                            title="Mark Complete">
                                                            <i class="material-icons">check</i>
                                                        </span>
                                                    </span>
                                                    <span class="task-label" contenteditable="true">Patient
                                                        appointment booking</span>
                                                    <span class="task-action-btn task-btn-right">
                                                        <span class="action-circle large" title="Assign">
                                                            <i class="material-icons">person_add</i>
                                                        </span>
                                                        <span class="action-circle large delete-btn"
                                                            title="Delete Task">
                                                            <i class="material-icons">delete</i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <span class="task-action-btn task-check">
                                                        <span class="action-circle large complete-btn"
                                                            title="Mark Complete">
                                                            <i class="material-icons">check</i>
                                                        </span>
                                                    </span>
                                                    <span class="task-label" contenteditable="true">Appointment
                                                        booking with payment gateway</span>
                                                    <span class="task-action-btn task-btn-right">
                                                        <span class="action-circle large" title="Assign">
                                                            <i class="material-icons">person_add</i>
                                                        </span>
                                                        <span class="action-circle large delete-btn"
                                                            title="Delete Task">
                                                            <i class="material-icons">delete</i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="completed task">
                                                <div class="task-container">
                                                    <span class="task-action-btn task-check">
                                                        <span class="action-circle large complete-btn"
                                                            title="Mark Complete">
                                                            <i class="material-icons">check</i>
                                                        </span>
                                                    </span>
                                                    <span class="task-label">Doctor available module</span>
                                                    <span class="task-action-btn task-btn-right">
                                                        <span class="action-circle large" title="Assign">
                                                            <i class="material-icons">person_add</i>
                                                        </span>
                                                        <span class="action-circle large delete-btn"
                                                            title="Delete Task">
                                                            <i class="material-icons">delete</i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <span class="task-action-btn task-check">
                                                        <span class="action-circle large complete-btn"
                                                            title="Mark Complete">
                                                            <i class="material-icons">check</i>
                                                        </span>
                                                    </span>
                                                    <span class="task-label" contenteditable="true">Patient and
                                                        Doctor video conferencing</span>
                                                    <span class="task-action-btn task-btn-right">
                                                        <span class="action-circle large" title="Assign">
                                                            <i class="material-icons">person_add</i>
                                                        </span>
                                                        <span class="action-circle large delete-btn"
                                                            title="Delete Task">
                                                            <i class="material-icons">delete</i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <span class="task-action-btn task-check">
                                                        <span class="action-circle large complete-btn"
                                                            title="Mark Complete">
                                                            <i class="material-icons">check</i>
                                                        </span>
                                                    </span>
                                                    <span class="task-label" contenteditable="true">Private chat
                                                        module</span>
                                                    <span class="task-action-btn task-btn-right">
                                                        <span class="action-circle large" title="Assign">
                                                            <i class="material-icons">person_add</i>
                                                        </span>
                                                        <span class="action-circle large delete-btn"
                                                            title="Delete Task">
                                                            <i class="material-icons">delete</i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <span class="task-action-btn task-check">
                                                        <span class="action-circle large complete-btn"
                                                            title="Mark Complete">
                                                            <i class="material-icons">check</i>
                                                        </span>
                                                    </span>
                                                    <span class="task-label" contenteditable="true">Patient
                                                        Profile add</span>
                                                    <span class="task-action-btn task-btn-right">
                                                        <span class="action-circle large" title="Assign">
                                                            <i class="material-icons">person_add</i>
                                                        </span>
                                                        <span class="action-circle large delete-btn"
                                                            title="Delete Task">
                                                            <i class="material-icons">delete</i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="task-list-footer">
                                        <div class="new-task-wrapper">
                                            <textarea id="new-task"
                                                placeholder="Enter new task here. . ."></textarea>
                                            <span class="error-message hidden">You need to enter a task
                                                first</span>
                                            <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                                            <span class="btn" id="close-task-panel">Close</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pending_tasks">

                        </div>
                        <div class="tab-pane" id="completed_tasks">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title m-b-15">Detailles de la Bourses</h6>
                        <table class="table table-striped table-border">
                            <tbody>
                                <tr>
                                    <td>Cout:</td>
                                    <td class="text-right">0 GNF</td>
                                </tr>
                                <tr>
                                    <td>Date limite:</td>
                                    <td class="text-right">{{$bourse->date_limite_bourse}}</td>
                                </tr>
                                <tr>
                                    <td>Publiée le:</td>
                                    <td class="text-right">{{ $bourse->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Deadline:</td>
                                    <td class="text-right">12 Jun, 2019</td>
                                </tr>
                                <tr>
                                    <td>Priorité :</td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <a href="#" class="badge badge-danger dropdown-toggle" data-toggle="dropdown">Highest </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Highestpriority</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> High priority</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-primary"></i> Normal priority</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low priority</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Créer Par :</td>
                                    <td class="text-right"><a href="profile.html">{{$bourse->user->username }}</a></td>
                                </tr>
                                <tr>
                                    <td>Statut :</td>
                                    <td class="text-right">{{ $bourse->actived }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
                        <div class="progress progress-xs mb-0">
                            <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip"
                                title="40%" style="width: 40%"></div>
                        </div>
                    </div>
                </div>
                <div class="card project-user">
                    <div class="card-body">
                        <h6 class="card-title m-b-20">Assigned Leader <button type="button"
                                class="float-right btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#assign_leader"><i class="fa fa-plus"></i> Add</button></h6>
                        <ul class="list-box">
                            <li>
                                <a href="profile.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar"><img alt=""
                                                    src="assets/img/profiles/avatar-11.jpg"></span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Wilmer Deluna</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Team Leader</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="profile.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar"><img alt=""
                                                    src="assets/img/profiles/avatar-01.jpg"></span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Lesley Grauer</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Team Leader</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card project-user">
                    <div class="card-body">
                        <h6 class="card-title m-b-20">
                            Affecter un Boursier
                            <button type="button" class="float-right btn btn-primary btn-sm" data-toggle="modal" data-target="#assign_user"><i class="fa fa-plus"></i> Add </button>
                        </h6>
                        <ul class="list-box">
                            <li>
                                <a href="profile.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar"><img alt=""
                                                    src="assets/img/profiles/avatar-02.jpg"></span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Web Designer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="profile.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar"><img alt=""
                                                    src="assets/img/profiles/avatar-09.jpg"></span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Web Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
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