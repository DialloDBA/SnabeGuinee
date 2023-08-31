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
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Tableau de Bord</a></li>
                    <li class="breadcrumb-item"><a href="{{route("admin.temoignages.index")}}">Liste des Témoignages</a></li>
                    <li class="breadcrumb-item active">{{$t->unique}}</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('admin.temoignages.index')}}" class="btn add-btn"><i class="fa fa-arrow-left"></i>{{__('Retour')}}</a>
            </div>
        </div>
        <!-- Search Filter -->
        
        <!-- Search Filter -->

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

<script src="{{asset('assets/js/fonctions.js')}}"></script>
<script src="{{asset('assets/js/ckeditorv2.js')}}"></script>
<script>
    editeur("message_temoin","Le contenu du Temoignage","100");

    $("form.create-temoignage").submit(function(){
        $(this).find(".btn-create").html("Veuillez Patientez...");
    });
</script>
@endsection