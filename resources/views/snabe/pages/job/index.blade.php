@extends('inc.ss.app')

@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Stage / Emplois</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li>Nos Offires de Stage / D'Emplois</li>
            </ul>
            <div class="my-4">
                <p class="text-white">Stages et offres d’emplois disponibles pour étudiants et jeunes diplômés. Sur cette page, vous trouverez des opportunités de stages rémunérés et non rémunérés pour les jeunes. Vous pouvez également y trouver des offres d’emploi. Ces opportunités sont offertes par des organisations et des entreprises du monde entier pour recruter des jeunes talentueux ou les aider à acquérir de l’expérience professionnelle.</p>
            </div>
        </div>
    </div>
</div>
<div class="events-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-events-card style-4">
                    <div class="events-image">
                        <a href="events-details.html"><img src="{{asset('asset/images/events/events-1.jpg')}}" alt="Image"></a>
                        <div class="date">
                            <span>28</span>
                            <p>Mar</p>
                        </div>
                    </div>
                    <div class="events-content">
                        <div class="admin">
                            <p><a href="events-details.html"><i
                                        class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                        </div>
                        <a href="events-details.html">
                            <h3>Planning And Facilitating Effective Meetings</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-events-card style-4">
                    <div class="events-image">
                        <a href="events-details.html"><img src="{{asset('asset/images/events/events-2.jpg')}}" alt="Image"></a>
                        <div class="date">
                            <span>29</span>
                            <p>Mar</p>
                        </div>
                    </div>
                    <div class="events-content">
                        <div class="admin">
                            <p><a href="events-details.html"><i
                                        class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                        </div>
                        <a href="events-details.html">
                            <h3>Regular WordPress Meetup In New Jersey, USA</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-events-card style-4">
                    <div class="events-image">
                        <a href="events-details.html"><img src="{{asset('asset/images/events/events-3.jpg')}}" alt="Image"></a>
                        <div class="date">
                            <span>30</span>
                            <p>Mar</p>
                        </div>
                    </div>
                    <div class="events-content">
                        <div class="admin">
                            <p><a href="events-details.html"><i
                                        class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                        </div>
                        <a href="events-details.html">
                            <h3>Monday Night Concert In Lake View,Mountain City</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-events-card style-4">
                    <div class="events-image">
                        <a href="events-details.html"><img src="{{asset('asset/images/events/events-4.jpg')}}" alt="Image"></a>
                        <div class="date">
                            <span>30</span>
                            <p>Mar</p>
                        </div>
                    </div>
                    <div class="events-content">
                        <div class="admin">
                            <p><a href="events-details.html"><i
                                        class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                        </div>
                        <a href="events-details.html">
                            <h3>University Admissions Could Face Emergency Controls</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-events-card style-4">
                    <div class="events-image">
                        <a href="events-details.html"><img src="{{asset('asset/images/events/events-5.jpg')}}" alt="Image"></a>
                        <div class="date">
                            <span>30</span>
                            <p>Mar</p>
                        </div>
                    </div>
                    <div class="events-content">
                        <div class="admin">
                            <p><a href="events-details.html"><i
                                        class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                        </div>
                        <a href="events-details.html">
                            <h3>The Complete Digital Marketing Course - 12 Courses In 1</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-events-card style-4">
                    <div class="events-image">
                        <a href="events-details.html"><img src="{{asset('asset/images/events/events-6.jpg')}}" alt="Image"></a>
                        <div class="date">
                            <span>30</span>
                            <p>Mar</p>
                        </div>
                    </div>
                    <div class="events-content">
                        <div class="admin">
                            <p><a href="events-details.html"><i
                                        class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                        </div>
                        <a href="events-details.html">
                            <h3>The Python Mega Course: Build 10 Real World Applications</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="paginations">
            <ul>
                <li><a href="events-details.html"><i class="flaticon-back"></i></a></li>
                <li><a href="events-details.html">01</a></li>
                <li><a href="events-details.html">02</a></li>
                <li><a href="events-details.html">03</a></li>
                <li><a href="events.html" class="active"><i class="flaticon-next"></i></a></li>
            </ul>
        </div>
    </div>
</div>
@endsection