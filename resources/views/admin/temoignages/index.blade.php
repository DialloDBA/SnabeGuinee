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
                <h3 class="page-title">Les Témoignages</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('Tableau de Bord')}}</a></li>
                    <li class="breadcrumb-item active">Liste des Témoignages</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.temoignages.create')}}" class="btn add-btn" >
                    <i class="fa fa-plus"></i> {{__('Nouveau Témoignage')}}
                </a>
                
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
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    
                    <div class="row">
                        <div class="col-sm-12">
                        <table
                            class="table table-striped custom-table mb-0 datatable dataTable no-footer"
                        >
                            <thead>
                            <tr role="row">
                                <th>#N°</th>
                                <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="DataTables_Table_0"
                                rowspan="1"
                                colspan="1"
                                aria-label="Name: activate to sort column ascending"
                                style="width: 203.5px"
                                >
                                Prenom & Nom
                                </th>
                                <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="DataTables_Table_0"
                                rowspan="1"
                                colspan="1"
                                aria-label="Mobile Number: activate to sort column ascending"
                                style="width: 174.438px"
                                >
                                Telephone
                                </th>
                                <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="DataTables_Table_0"
                                rowspan="1"
                                colspan="1"
                                aria-label="Email: activate to sort column ascending"
                                style="width: 177.531px"
                                >
                                Profession
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 151px" >
                                 Message
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 151px" >
                                Date de Creation
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 151px" >
                                    Statut du Temoin
                                </th>
                            </tr>
                            </thead>
                            <style>
                                #btndelete{
                                    border: 0;
                                    background-color: white;
                                }
                                .btndelete a{
                                    background-color: white !important;
                                }
    
                                .btndelete:hover{
                                    background-color: white !important;
                                }
                            </style>
                            <tbody>
                                @foreach ($data as $t)
                                    <tr class="odd">
                                        <td class="sorting_1">
                                            <a href="{{ route('admin.temoignages.show',$t)}}" class="">{{$t->unique}}</a>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ route('admin.temoignages.show',$t)}}" class="avatar">
                                                    <img alt="" src="{{ asset('storage')."/".$t->photo_temoin }}"/>
                                                </a>
                                                <a href="{{ route('admin.temoignages.show',$t)}}">{{$t->prenom_temoin ." ".$t->nom_temoin }}</a>
                                            </h2>
                                        </td>
                                        <td>{{$t->telephone_temoin}}</td>
                                        <td>
                                            {{$t->profession_temoin}}
                                        </td>
                                        <td>{!! Str::words($t->message_temoin,3, '...') !!}</td>
                                        <td>{{$t->created_at}}</td>
                                        <td>{{$t->statut()}}</td>
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