@extends('inc.ss.app')

@section('content')
<div class="page-banner-area bg-2" style="background-image: url('{{ asset('storage').'/'.$post->image_max }}') !important;">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{$post->titre}}</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li><a href="{{route('news')}}">Toutes les Actualités</a></li>
                <li><a href="{{route('news.category',$cat)}}">{{$post->category->libelle_cat}}</a></li>
                <li>{{$post->titre}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="news-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="news-details">
                    <div class="news-simple-card">
                        <img src="{{ asset('storage').'/'.$post->image_max }}" alt="{{$post->titre}} Image">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>Par <a href="javascript:voide(0)">Administrateur</a></li>
                                <li>
                                    <a href="{{route('news.category',[$post->category])}}">
                                        <i class="flaticon-tag"></i> 
                                        {{$post->category->libelle_cat}} 
                                    </a> 
                                </li>
                            </ul>
                        </div>
                        <h2 class="text-prim">{{$post->titre}}</h2>
                        <div>
                            {!! $post->contenu !!}
                        </div>
                    </div>
                    <div class="tags-and-share">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="tags">
                                    @php
                                        $tags = explode(' ',$post->motscles);
                                    @endphp
                                    <ul>
                                        <li><span>Tags : </span></li>
                                        @foreach ($tags as $t)
                                        <li><a href="{{route('news.category.tags',[$post->category,$t])}}">{{$t}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="share">
                                    <ul>
                                        <li><span>Partager :</span></li>
                                        <li>
                                            <a href="https://www.facebook.com" target="_blank"><i
                                                    class="flaticon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.twitter.com" target="_blank">
                                                <i class="flaticon-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/?lang=en" target="_blank">
                                                <i class="flaticon-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://linkedin.com/?lang=en" target="_blank">
                                                <i class="flaticon-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments">
                        <h3>2 comments</h3>
                        <div class="single-comments-box">
                            <img src="{{asset('asset/images/courses/review-1.png')}}" alt="Images">
                            <h4>James Benjamin</h4>
                            <div class="date">
                                <p>jan 17, 2022 at 10:43 am</p>
                            </div>
                            <div class="reply">
                                <a href="#">Reply</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid
                                idunt ut dolore magna aliqua. Ut enim ad minim ven iam quis nostrud </p>
                        </div>
                        <div class="single-comments-box">
                            <img src="{{asset('asset/images/courses/review-2.png')}}" alt="Images">
                            <h4>Elizabeth Sofia</h4>
                            <div class="date">
                                <p>jan 17, 2022 at 10:43 am</p>
                            </div>
                            <div class="reply">
                                <a href="#">Reply</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid
                                idunt ut dolore magna aliqua. Ut enim ad minim ven iam quis nostrud </p>
                        </div>
                    </div>
                    <div class="reply-area">
                        <div class="reply-form">
                            <h3>Leave a Reply</h3>
                            <p>Your email address will not be published.</p>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="review" rows="4"
                                                placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="website"
                                                placeholder="Website">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Enregistrez mon nom, mon adresse e-mail et mon site Web dans ce navigateur pour la prochaine fois que je commenterai.
                                    </label>
                                </div>
                                <button type="submit" class="default-btn btn">Poster un Commentaire 
                                    <i class="flaticon-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
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
                
                <div class="related-post-area">
                    <h3 class="text-prim">Autres Articles</h3>
                    @foreach ($others as $a)
                    <div class="related-post-box">
                        <div class="related-post-content">
                            <a href="{{route('news.post',[$a->category,$a->unique])}}"><img src="{{ asset('storage').'/'.$a->image_max }}" alt="Image"></a>
                            <h4>
                                <a href="{{route('news.post',[$a->category,$a->unique])}}">{{$a->titre}}</a>
                            </h4>
                            <p><i class="flaticon-tag"></i> {{$a->category->libelle_cat}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection