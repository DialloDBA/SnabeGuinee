@extends('layouts.admin.app')
@section('css')
<link rel="stylesheet" href="{{asset('snabe/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('snabe/css/select2.min.css')}}">
@endsection
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Informations de l'Academie</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Tableau de Bord</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.informations.index')}}">Informations</a></li>
                    <li class="breadcrumb-item active">Informations de Contact</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="row">
        
    </div>
</div>

@endsection
@section('js')
    
<script src="{{asset('snabe/js/select2.min.js')}}"></script>
<script src="{{asset('snabe/js/moment.min.js')}}"></script>
<script src="{{asset('snabe/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('snabe/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('snabe/js/dataTables.bootstrap4.min.js')}}"></script>
{{-- <script type="text/javascript">
    const avatar = (event)=>{
        const imgfile = event.target.files;
        const imgfilelength = imgfile.length;
        if(imgfilelength>0){
            const imageSrc = URL.createObjectURL(imgfile[0]);
            const avatar = document.querySelector("#avatar");
            avatar.src = imageSrc;
            avatar.style.display = "block";
        }
    }
</script> --}}
@endsection