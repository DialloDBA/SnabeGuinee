@extends('layouts.admin.app',['title'=>"Gestion des Sliders"])
@section('css')

@endsection
@section("content")
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Les Sliders du Site</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Tableau de Bord</a></li>
                    <li class="breadcrumb-item active">Liste des Sliders</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="{{route('admin.sliders.create')}}" class="btn add-btn"><i class="fa fa-plus"></i>{{__('Nouveau Slider')}}</a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($sliders as $s)
        <div class="col-12 col-md-6 col-lg-4 d-flex">
            <div class="card flex-fill">
                <img alt="" src="{{asset('storage')."/".$s->image}}" class="card-img-top" />
                <div class="card-header">
                    <h5 class="card-title mb-0">{{$s->title_sm}}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                       {!! $s->title_lg !!}
                    </p>
                    <a class="btn btn-primary card-link" href="#"><i class="fa fa-edit"></i></a>
                    <form action="{{route('admin.sliders.destroy',$s)}}" method="post" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger card-link" type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                    <a class="btn btn-primary card-link" href="#">
                        <i class="fa @if ($s->is_active()) {{'fa-toggle-off'}} @else {{'fa-toggle-on'}} @endif">
                        </i> {{$s->statut()}}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
</div>
@stop

@section('js')
@endsection