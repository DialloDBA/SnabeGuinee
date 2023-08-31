@extends('layouts.admin.app',['title'=>"Gestion des Sliders"])
@section('css')

@endsection
@section("content")
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Les Témoignages</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Tableau de Bord</a></li>
                    <li class="breadcrumb-item active">Liste des Témoignages</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="{{route('admin.temoignages.create')}}" class="btn add-btn"><i class="fa fa-plus"></i>{{__('Nouveau Témoignage')}}</a>
            </div>
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
                            <th></th>
                            <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="DataTables_Table_0"
                            rowspan="1"
                            colspan="1"
                            aria-label="Name: activate to sort column ascending"
                            style="width: 203.5px"
                            >
                            Prenom & Nom Temoin
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
                            Telephone Mobile Temoin
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
                            Profession Temoin
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 151px" >
                             Message Temoin
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
                            @foreach ($temoignages as $t)
                                <tr class="odd">
                                    <td class="sorting_1">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Actions
                                            </button>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="{{route('admin.temoignages.show',$t)}}" >
                                                    <i class="fa fa-eye m-r-5"></i> Lire...
                                                </a>
                                                <a class="dropdown-item" href="{{route('admin.temoignages.edit',$t)}}" >
                                                    <i class="fa fa-pencil m-r-5"></i> Modifier
                                                </a>
                                                <form action="{{route("admin.temoignages.destroy",$t)}}" id="delete-form" class="dropdown-item" method="post">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" id="btndelete"><i class="fa fa-trash-o m-r-5"></i> Supprimer</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar">
                                                <img alt="" src="{{ asset('storage')."/".$t->photo_temoin }}"/>
                                            </a>
                                            <a href="#">{{$t->prenom_temoin ." ".$t->nom_temoin }}</a>
                                        </h2>
                                    </td>
                                    <td>{{$t->telephone_temoin}}</td>
                                    <td>
                                        {{$t->profession_temoin}}
                                    </td>
                                    <td>{{Str::limit($t->message_temoin,30)}}</td>
                                    <td>{{$t->created_at}}</td>
                                    <td>{{$t->statut_temoignage()}}</td>
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
@stop

@section('js')
@endsection