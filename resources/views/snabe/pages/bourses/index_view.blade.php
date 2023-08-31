@extends('inc.ss.app')
@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Bourses d'Etudes</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li><a href="{{route('bourses')}}">Nos Bourses d'Etudes</a></li>
                {{-- <li><a href="{{route('bourses.category',10)}}">categorie</a></li> --}}
                <li>{{$bourse->titre_bourse}}</li>
            </ul>
            <div class="my-4 d-none">
                <p class="text-white">
                    Les Bourses d’étude de premier cycle, master, doctorat et postdoctorales pour entreprendre des études universitaires sont disponibles sur cette page. Des bourses entièrement financées et partiellement financées sont offertes par des gouvernements, des organisations, des universités, des entreprises et des fondations afin de soutenir les étudiants internationaux et les étudiants de pays en développement.
                    <br>
                    La plupart des bourses d’étude sont fournies pour des études aux États-Unis, au Royaume-Uni, en Chine, au Canada, en Australie, en Allemagne, en Turquie, en France, en Nouvelle-Zélande, etc. Les bourses sont disponibles dans différents domaines de spécialisation tels que 
                </p>
            </div>
        </div>
    </div>
</div>
<div class="courses-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="courses-details">
                    <div class="courses-card">
                        <h2>{{$bourse->titre_bourse}}</h2>
                        <div class="img">
                            <img class="" src="{{asset('storage').'/'.$bourse->image_max_bourse}}" alt="{{$bourse->titre_bourse}}" titre="{{$bourse->titre_bourse}}">
                        </div>
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="teacher">
                                        <img class="" height="65" width="65" src="{{asset('asset/images/devise.png')}}" alt="{{ $info->entite }}">
                                        <p>Par : <a href="{{route('about')}}">{{ $info->entite }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock"></i>
                                    <span>Dernière Mise à jour :</span>{{$bourse->created_at}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="description">
                        <div class="container p-0">
                            <nav>
                                <div class="nav nav-tabs d-flex justify-content-between" id="nav-tab"
                                    role="tablist">
                                    <button class="nav-link active" id="nav-overview-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-overview" type="button" role="tab"
                                        aria-controls="nav-overview" aria-selected="true">Présentation
                                    </button>
                                    {{-- <button class="nav-link" id="nav-curriculum-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-curriculum" type="button" role="tab"
                                        aria-controls="nav-curriculum" aria-selected="false">Curriculum
                                    </button>
                                    <button class="nav-link" id="nav-instructor-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-instructor" type="button" role="tab"
                                        aria-controls="nav-instructor" aria-selected="false">Instructor
                                    </button> --}}
                                    <button class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-documents" type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">Documents</button>
                                    <button class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">Commentaires</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-overview" role="tabpanel"
                                    aria-labelledby="nav-overview-tab">
                                    <div class="overview">
                                        <div class="overview-box">
                                            {!! $bourse->eligibilite !!}
                                        </div>
                                        <div class="overview-box">
                                            {!! $bourse->description_bourse !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-curriculum" role="tabpanel"
                                    aria-labelledby="nav-curriculum-tab">
                                    <div class="curriculum">
                                        <h3>Starting With Sanu</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim ven
                                            iam quis nostrud xerci tation ulla mco laboris nisi ut Lorem ipsum dolor
                                            sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut
                                            labore</p>
                                        <div class="curriculum-list">
                                            <ul>
                                                <li>Lesson1: Introduction Of Programming language ?<span>01
                                                        Hour</span></li>
                                                <li>Lesson2: Installation and Set-Up Guide ?<span>03 Hour</span>
                                                </li>
                                                <li>Lesson3: Working with String, Boolean Functions ?<span>01
                                                        Hour</span></li>
                                                <li>Lesson4: Working on Form Controls ?<span>30 min</span></li>
                                                <li>Lesson5: Error Solutions and code debugging ?<span>01
                                                        Hour</span></li>
                                                <li>Lesson6: Working with live site.<span>01 Hour</span></li>
                                                <li>Module Handling<span>02 Hour</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-documents" role="tabpanel" aria-labelledby="nav-instructor-tab">
                                    <div class="row">
                                        <div class="instructor">
                                            <div class="row align-items-center">
                                                <div class="related-download">
                                                    <h3>Documents Attachés (À Lire )</h3>
                                                    <ul>
                                                        @foreach ($bourse->justificatifs()->get() as $d)
                                                        <li><a href="{{asset('storage')."/".$d->dossier }}" download=""><i class="flaticon-pdf-file"></i>{{$d->nom}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-reviews" role="tabpanel"
                                    aria-labelledby="nav-reviews-tab">
                                    <div class="reviews">
                                        <div class="single-reviews-card">
                                            <img src="gle-reviews-card">
                                            <img src="{{asset('asset/images/courses/review-1.png')}}" alt="Images">
                                            <h2>Jorge Overall</h2>
                                            <div class="date">
                                                <p>jan 17, 2022 at 10:43 am</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tem incid idunt ut dolore magna aliqua. Ut enim ad minim ven
                                                iam quis nostrud </p>
                                        </div>
                                        <div class="single-reviews-card">
                                            <img src="{{asset('asset/images/courses/review-2.png')}}" alt="Images">
                                            <h2>Manuel Myers</h2>
                                            <div class="date">
                                                <p>jan 17, 2022 at 10:43 am</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tem incid idunt ut dolore magna aliqua. Ut enim ad minim ven
                                                iam quis nostrud </p>
                                        </div>
                                        <div class="single-reviews-card">
                                            <img src="{{asset('asset/images/courses/review-1.png')}}" alt="Images">
                                            <h2>Sally Hatch</h2>
                                            <div class="date">
                                                <p>jan 17, 2022 at 10:43 am</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tem incid idunt ut dolore magna aliqua. Ut enim ad minim ven
                                                iam quis nostrud </p>
                                        </div>
                                        <div class="review-form">
                                            <h3>Write a Review</h3>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" id="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" id="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Summary</label>
                                                            <textarea class="form-control" id="review"
                                                                rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="default-btn btn">Submit Review</button>
                                            </form>
                                        </div>
                                    </div>
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
                                            <textarea class="form-control" id="review2" rows="4"
                                                placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name2" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email2"
                                                placeholder="Email">
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
                                        Save my name, email, and website in this browser for the next time I
                                        comment.
                                    </label>
                                </div>
                                <button type="submit" class="default-btn btn">
                                    Post a Comment <i class="flaticon-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="enroll-courses">
                    <div class="enroll-img">
                        <img src="{{asset('storage').'/'.$bourse->image_min_bourse}}" alt="Image">
                        {{-- <div class="icon">
                            <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i class="ri-play-fill"></i>
                            </a>
                        </div> --}}
                    </div>
                    <div class="list">
                        <ul>
                            <li><span>Pays :</span>{{ $bourse->pays->langFR}}</li>
                            <li><span>Année Academique :</span>{{ $bourse->annee->libelle}}</li>
                            <li><span>Date limite Dépot :</span>{{(new DateTime($bourse->date_limite_bourse))->format("d/m/Y H:i")}}</li>
                            
                            <li><span>Postulant(s) :</span>2</li>
                            <li>
                                <span>Programmes :</span> 
                                @if ($bourse->programmes()->count()>=3)
                                    <br/>
                                @endif
                                @foreach ($bourse->programmes()->get() as $p)
                                    {{ $p->titre }} 
                                    @if ($bourse->programmes()->get()->last()->id !=$p->id)
                                        {{ ','}}
                                    @endif
                                @endforeach
                            </li>
                            <li>
                                <span>Public Cible :</span>
                                @foreach ($bourse->cibles()->get() as $c)
                                    {{ $c->libelle }} 
                                    @if ($bourse->cibles()->get()->last()->id !=$c->id)
                                        {{ ','}}
                                    @endif
                                @endforeach
                             </li>
                        </ul>
                    </div>
                    <a href="{{route("bourses.postuler",$bourse->unique)}}" class="default-btn btn"><i></i> Postuler Maintenant</a>
                </div>
                <div class="related-download">
                    <h3>Documents Attachés (À Lire )</h3>
                    <ul>
                        @foreach ($bourse->justificatifs()->get() as $d)
                        <li><a href="{{asset('storage')."/".$d->dossier }}" download=""><i class="flaticon-pdf-file"></i>{{$d->nom}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <x-NewsletterComponent></x-NewsletterComponent>
            </div>
        </div>
    </div>
</div>
@endsection