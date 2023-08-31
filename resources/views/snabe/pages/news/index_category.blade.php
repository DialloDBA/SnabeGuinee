@extends('inc.ss.app')

@section('content')

<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Dernières nouvelles</h1>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('news')}}">Dernières nouvelles</a></li>
                <li>{{ $cat->libelle_cat }}</li>
            </ul>
        </div>
    </div>
</div>


<div class="latest-news-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="latest-news-left-content pr-20">
                    
                    <div class="latest-news-card-area">
                        <h3 class="text-prim">Dernières nouvelles</h3>
                        <div class="row">
                            
                            @forelse ($news as $key=>$a)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-news-card">
                                    <div class="news-img">
                                        <a href="{{route('news.post',[$a->category,$a->unique])}}">
                                            <img src="{{ asset('storage').'/'.$a->image_min }}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <div class="list">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="flaticon-user"></i>Par administrateur
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('news.category',[$a->category])}}">
                                                        <i class="flaticon-tag"></i> 
                                                        {{$a->category->libelle_cat}} 
                                                    </a> 
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('news.post',[$a->category,$a->unique])}}">
                                            <h3 class="text-prim">
                                                {{ $a->titre }}
                                            </h3>
                                        </a>
                                        <a href="{{route('news.post',[$a->category,$a->unique])}}" class="read-more-btn text-prim">
                                            Lire Plus...<i class="flaticon-next"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-lg-12 col-md-12">
                                <h3 class="text-prim">Aucun Article pour la catégorie <span>{{$cat->libelle_cat}}</span></h3>
                            </div>
                            @endforelse
                        </div>
                    </div>
                    {{ $news->links()}}
                    {{-- <div class="paginations">
                        <ul>
                            <li><a href="news-details.html"><i class="flaticon-back"></i></a></li>
                            <li><a href="news-details.html">01</a></li>
                            <li><a href="news-details.html">02</a></li>
                            <li><a href="news-details.html">03</a></li>
                            <li><a href="latest-news.html" class="active"><i class="flaticon-next"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="serch-content">
                    <form action="" class="" id="seach-post-category">
                        <h3 class="text-prim">Recherche</h3>
                        <div class="form-group">
                            <input type="hidden" name="category" id="category" value="{{ $cat->unique }}">
                            <input type="text" class="form-control" placeholder="Rechercher un Article...">
                            <button type="submit" class="src-btn">
                                <i class="flaticon-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="category-list">
                    <h3 class="text-prim">Liste des catégories</h3>
                    <ul>
                        @foreach ($categories as $c)
                        <li>
                            <a @if ($c->id==$cat->id) class="text-danger fw-bold" @endif href="{{route('news.category',$c)}}">{{$c->libelle_cat}} (<span>{{ $c->posts()->where('actived','1')->count()}}</span>)<i class="ri-arrow-drop-right-fill"></i></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="category-content">
                    <h3>Choisir une Categorie</h3>
                    <form action="" method="GET" id="select-cats-form">
                        @csrf
                        @method("GET")
                        <select class="form-select form-control" id="categories-list" name="category" aria-label="Default select example">
                            <option value="">Selectionner une Categorie</option>
                            @foreach ($categories as $c)
                            <option value="{{ $c->unique }}"  @selected($cat->id == $c->id)>{{$c->libelle_cat}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="related-post-area">
                    <h3 class="text-prim">Autres Articles</h3>
                    <div class="related-post-box">
                        <div class="related-post-content">
                            <a href="latest-news.html"><img src="asset/images/news/news-2.jpg" alt="Image"></a>
                            <h4><a href="latest-news.html">Professor Tom comments on the volunteer B. Snack
                                    brand</a></h4>
                            <p><i class="flaticon-tag"></i> Social Sciences</p>
                        </div>
                    </div>
                    <div class="related-post-box">
                        <div class="related-post-content">
                            <a href="latest-news.html"><img src="asset/images/news/news-3.jpg" alt="Image"></a>
                            <h4><a href="latest-news.html">Making a meaningful difference in patients’ lives.</a>
                            </h4>
                            <p><i class="flaticon-tag"></i> Social Sciences</p>
                        </div>
                    </div>
                    <div class="related-post-box">
                        <div class="related-post-content">
                            <a href="latest-news.html"><img src="asset/images/news/news-1.jpg" alt="Image"></a>
                            <h4><a href="latest-news.html">Happiness begins with good health</a></h4>
                            <p><i class="flaticon-tag"></i> Social Sciences</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $("#categories-list").change(function(e){
            $category = $(this).val();
            if($category && $category!=''){
                url = location.origin;
                url = url + '/actualites/'+$category;
                location.replace(url)
            }
        });
    </script>
@endsection