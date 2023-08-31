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
                    <li class="breadcrumb-item active">Repondre par SMS</li>
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
            <div class="card">
              <div class="card-body">
                <form method="POST" action="{{route('admin.contacts.reponse.envoi-sms',$contact)}}">
                    @csrf
                    
                  <div class="form-group">
                    <label for="telephone_contact">À : {{$contact->nom }}</label>
                    <input readonly type="email" name="telephone_contact" id="telephone_contact" placeholder="À : {{$contact->telephone}}" value="{{ old("telephone_contact") ?? $contact->telephone }}" class="form-control" />
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="email" placeholder="Destinataire : SNABE GUINÉE" name="telephone_envois" value="+224623505010" class="form-control" readonly/>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="Subject" class="form-control" />
                  </div>
                  <div class="form-group">
                    <textarea id="message" class="form-control" rows="5"></textarea>
                  </div>
                  <div class="form-group mb-0">
                    <div class="text-center">
                      <button class="btn btn-primary" type="submit">
                        <span>Envoyer</span> <i class="fa fa-send m-l-5"></i>
                      </button>
                      <button class="btn btn-success m-l-5" type="button">
                        <span>Annuler</span> <i class="fa fa-trash-o m-l-5"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>

@stop
@section('js')
@endsection
