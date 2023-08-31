@extends('layouts.controle.app',['title'=>'Les Articles |'])
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Messages</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Tableau de Bord</a></li>
                    <li class="breadcrumb-item"><a href="{{route("admin.contacts.index")}}">Les Messages</a></li>
                    <li class="breadcrumb-item active">Contenu du Message</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="#" class="btn add-btn mx-md-1"><i class="fa fa-plus"></i> Nouveau Message</a>
                <a href="{{route('admin.contacts.index')}}" class="btn add-btn"><i class="fa fa-arrow-left"></i> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="mailview-content">
                        <div class="mailview-header">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="text-ellipsis m-b-10">
                                        <span class="mail-view-title">{{$contact->sujet}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mail-view-action">
                                        <div class="btn-group">
                                            <form action="{{route("admin.contacts.destroy",$contact)}}" method="post" class="d-inline">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="" data-bs-original-title="Supprimer ce Message"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                            <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="" data-bs-original-title="Repondre par Mail"><i class="fa fa-reply"></i></button>
                                            <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="" data-bs-original-title="Message Suivant"><i class="fa fa-share"></i></button>
                                        </div>
                                        <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="" data-bs-original-title="Imprimer"><i class="fa fa-print"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="sender-info">
                                <div class="sender-img">
                                    <img width="40" alt="" src="{{asset('storage').'/'."contact/default.png"}}" class="rounded-circle" />
                                </div>
                                <div class="receiver-details float-start">
                                    <span class="sender-name">{{$contact->prenom}} {{$contact->nom}} ({{$contact->email}})</span>
                                    <span class="receiver-name">
                                        à
                                        <span></span>, <span>Academie-Ibou</span><span></span>
                                    </span>
                                </div>
                                <div class="mail-sent-time">
                                    <span class="mail-time">{{$contact->received_at()}}</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="mailview-inner">
                            {{ $contact->message }}
                        </div>
                    </div>
                    <div class="mailview-footer">
                        <div class="row">
                            <div class="col-sm-8 left-action">
                                <a href="{{route('admin.contacts.reponse.email',$contact)}}" class="btn btn-white"><i class="fa fa-reply"></i> Repondre par Mail</a>
                                <a href="{{route('admin.contacts.reponse.sms',$contact)}}" class="btn btn-white"><i class="fa fa-reply"></i> Repondre par SMS</a>
                                <button type="button" class="btn btn-white"><i class="fa fa-share"></i> Message Suivant</button>
                            </div>
                            <div class="col-sm-4 right-action">
                                <button type="button" class="btn btn-white"><i class="fa fa-print"></i> Imprimer</button>
                                <form action="{{route('admin.contacts.destroy',$contact)}}" method="post" class="d-inline">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Supprimer</button>
                                </form>
                            </div>
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
