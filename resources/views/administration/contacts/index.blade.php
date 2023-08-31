@extends('layouts.controle.app')
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Inbox</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Tableau de Bord</a></li>
                    <li class="breadcrumb-item active">Inbox</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="compose.html" class="btn add-btn"><i class="fa fa-arrow-left"></i> Retour</a>
                <a href="compose.html" class="btn add-btn"><i class="fa fa-plus"></i> Compose</a>
                <a href="compose.html" class="btn add-btn"><i class="fa fa-plus"></i> Compose</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="email-header">
                        <div class="row">
                            <div class="col top-action-left">
                                <div class="float-start">
                                    <div class="btn-group dropdown-action">
                                        <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">Select <i class="fa fa-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">All</a>
                                            <a class="dropdown-item" href="#">None</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Read</a>
                                            <a class="dropdown-item" href="#">Unread</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropdown-action">
                                        <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">Actions <i class="fa fa-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Archive</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Mark As Read</a>
                                            <a class="dropdown-item" href="#">Mark As Unread</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropdown-action">
                                        <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-folder"></i> <i class="fa fa-angle-down"></i></button>
                                        <div role="menu" class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Forums</a>
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Spam</a>
                                            <a class="dropdown-item" href="#">Trash</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">New</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropdown-action">
                                        <button type="button" data-bs-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fa fa-tags"></i> <i class="fa fa-angle-down"></i></button>
                                        <div role="menu" class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Work</a>
                                            <a class="dropdown-item" href="#">Family</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Primary</a>
                                            <a class="dropdown-item" href="#">Promotions</a>
                                            <a class="dropdown-item" href="#">Forums</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-start d-none d-sm-block">
                                    <input type="text" placeholder="Search Messages" class="form-control search-message" />
                                </div>
                            </div>
                            <div class="col-auto top-action-right">
                                <div class="text-end">
                                    <button type="button" title="" data-bs-toggle="tooltip" class="btn btn-white d-none d-md-inline-block" data-bs-original-title="Refresh" aria-label="Refresh"><i class="fa fa-refresh"></i></button>
                                    <div class="btn-group">
                                        <a class="btn btn-white"><i class="fa fa-angle-left"></i></a>
                                        <a class="btn btn-white"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="text-end">
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
                                            <input type="checkbox" class="checkbox-all" />
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $c)
                                    <tr class="@if (!$c->is_read()) unread @endif clickable-row" data-href="{{route('admin.contacts.show',$c)}}">
                                        <td>
                                            <input type="checkbox" class="checkmail" name="contact[]"/>
                                        </td>
                                        <td>
                                            <span class="mail-important"><i class="fa fa-star starred"></i></span>
                                        </td>
                                        <td class="name">{{$c->prenom." ".$c->nom }}</td>
                                        <td class="subject">{{$c->sujet ? Str::limit($c->sujet,80) : Str::limit($c->message,50)}}</td>
                                        <td><i class="fa fa-paperclip"></i></td>
                                        <td class="mail-date">{{$c->received_at()}}</td>
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
<script>
</script>
