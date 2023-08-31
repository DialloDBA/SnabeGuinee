@extends('layouts.admin.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/ckeditor.css')}}">
@endsection
@section("content")
<div class="conten containe-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">@lang('messages.temoignages.header.index.title')</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">{{__('messages.DASHBOARD')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route("admin.temoignages.index")}}">@lang('messages.temoignages.header.index.active')</a></li>
                    <li class="breadcrumb-item active">{{$temoignage->code_temoignage}}</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="{{route('admin.temoignages.index')}}" class="btn add-btn"><i class="fa fa-arrow-left"></i>{{__('Retour')}}</a>
            </div>
        </div>
    </div>
    <div class="card mb-0">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="profile-view">
                <div class="profile-img-wrap">
                  <div class="profile-img">
                    <a href="#"
                      ><img alt="" src="{{$temoignage->photo_temoin ? asset('storage')."/".$temoignage->photo_temoin : asset('assets/img/profiles/avatar.png') }}"
                    /></a>
                  </div>
                </div>
                <div class="profile-basic">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="profile-info-left">
                        <h3 class="user-name m-t-0 mb-0">{{$temoignage->prenom_temoin ." ".$temoignage->nom_temoin }}</h3>
                        
                        <small class="text-muted">{{$temoignage->profession_temoin }}</small>
                        <div class="staff-id">ID : {{$temoignage->code_temoignage}}</div>
                        <div class="small doj text-muted">
                          Date de creation : {{$temoignage->created_at}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <ul class="personal-info">
                        <li>
                          <div class="title">Telephone: </div>
                          <div class="text"><a href="">{{$temoignage->telephone_temoin}}</a></div>
                        </li>
                        <li>
                          <div class="title"></div>
                          <div class="text">
                            <a href="javascript:void(0)"
                              ><span
                                class="__cf_email__"
                                data-cfemail="204a4f484e444f45604558414d504c450e434f4d"
                                ></span
                              ></a
                            >
                          </div>
                        </li>
                        <li>
                          <div class="title text-capitalize">statut temoignage :</div>
                          <div class="text">
                            {{$temoignage->statut_temoignage()}}
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <div class="text-muted text-center">
                            <h3 class="text-capitalize">contenu du Temoignage</h3>
                        </div>
                        {{ $temoignage->message_temoin}}
                    </div>
                  </div>
                </div>
                <div class="pro-edit">
                  <a
                    class="edit-icon"
                    href="{{route('admin.temoignages.edit',$temoignage)}}"><i class="fa fa-pencil"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@stop
@section('js')
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/ckeditor.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.message_temoignan').summernote({
            height: 75,
        });
    });
</script>
<script type="text/javascript">
function preloadedImage(event){
    if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("photo_temoin");
        preview.src = src;
    }
}
</script>
@endsection