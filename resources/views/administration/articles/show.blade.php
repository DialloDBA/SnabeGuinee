@extends('layouts.controle.app',['title'=>'Les Articles | '.$article->titre_article])
@section('content')
<div class="content">
    <div data-select2-id="26">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                  <h3 class="page-title text-uppercase">Les Articles</h3>
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Tableau de Bord</a></li>
                      <li class="breadcrumb-item"><a href="{{route('admin.articles.index')}}">Liste des Articles</a></li>
                      <li class="breadcrumb-item active">{{$article->titre_article}}</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                  <a href="{{ route("admin.articles.index")}}" class="btn add-btn">
                    <i class="fa fa-arrow-left"></i> {{ __("Retour a l'Accueil")}}
                  </a>
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-12">
                @if (Session::has("notification.message"))
                <div class="alert alert-{{ Session::get("notification.type")}}">
                    <span>{{ Session::get("notification.message")}}</span>
                </div>
                @endif
           </div>
           <div class="col-md-8 ">
                <div class="card">
                    <div class="card-body">
                        <h2>{{$article->titre_article}}</h2>
                        <div class="d-flex justify-content-between">
                            <div>
                                <span class="mx-2"><i class="far fa-calendar-alt"></i> {{\Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y à H\hi');}}</span>
                                <span class="mx-2"><i class="far fa-user"></i> {{$article->user->name}}</span>
                            </div>
                            <div class="">
                                <span class="text-muted mx-2">{{$article->likes_article}} <i class="fa fa-heart text-danger"></i></span>
                                <span class="text-muted mx-2">{{$article->views_article}} <i class="fa fa-eye"></i></span>
                                <span class="text-muted mx-2">9 <i class="fa fa-comments text-dark"></i></span>
                            </div>
                        </div>
                        <img class="img-fluid w-100 my-3" src="{{asset('storage').'/'.$article->image_max_article}}"/>
                        <div class="border border-left-primary p-2">
                            {!! $article->resume_article !!}
                        </div>
                        <div class="my-2">
                            {!! $article->contenu_article !!}
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="mx-2 my-2">Partagez cet Article sur : </h3>
                        <div class="my-2">
                            <a href="http://" class="h3 border border-1 p-2 mx-2"><i class="fa fa-facebook"></i></a>
                            <a href="http://" class="h3 border border-1 p-2 mx-2"><i class="fa fa-twitter"></i></a>
                            <a href="http://" class="h3 border border-1 p-2 mx-2"><i class="fa fa-instagram text-danger"></i></a>
                            <a href="http://" class="h3 border border-1 p-2 mx-2"><i class="fa fa-whatsapp text-success"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="mx-2">A propos de l'auteur : </h3>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <a href="#">
                                    <img class="rounded-circle" height="30" src="{{asset('assets/img/profiles/avatar-19.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="mx-2 my-3">
                                <h4>{{ $article->user->name}} </h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quam dolor exercitationem dignissimos, assumenda aut praesentium qui? Maiores, similique quisquam!</p>
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
