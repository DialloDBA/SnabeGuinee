@extends('inc.ss.app')

@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Bourses d'Etudes</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li><a href="{{route('bourses')}}">Nos Bourses d'Etudes</a></li>
                <li>categorie</li>
            </ul>
            <div class="my-4">
                <p class="text-white">
                    Les Bourses d’étude de premier cycle, master, doctorat et postdoctorales pour entreprendre des études universitaires sont disponibles sur cette page. Des bourses entièrement financées et partiellement financées sont offertes par des gouvernements, des organisations, des universités, des entreprises et des fondations afin de soutenir les étudiants internationaux et les étudiants de pays en développement.
                    <br>
                    La plupart des bourses d’étude sont fournies pour des études aux États-Unis, au Royaume-Uni, en Chine, au Canada, en Australie, en Allemagne, en Turquie, en France, en Nouvelle-Zélande, etc. Les bourses sont disponibles dans différents domaines de spécialisation tels que 
                </p>
            </div>
        </div>
    </div>
</div>
<div class="courses-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="courses-left-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-courses-card style4">
                                <div class="courses-img">
                                    <a href="courses-details.html"><img src="{{asset('asset/images/courses/courses-1.jpg')}}"
                                            alt="Image">
                                    </a>
                                </div>
                                <div class="courses-content">
                                    <div class="admin-profile">
                                        <img src="asset/images/courses/admin-1.jpg" alt="Image">
                                        <p>With <a href="courses-details.html">Jessica Hamson</a></p>
                                    </div>
                                    <a href="courses-details.html">
                                        <h3>Python Programming For Data Science</h3>
                                    </a>
                                    <div class="bottom-content">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <ul>
                                                    <li><i class="flaticon-graduation"></i>321</li>
                                                    <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Free</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-courses-card style4">
                                <div class="courses-img">
                                    <a href="courses-details.html"><img src="{{asset('asset/images/courses/courses-2.jpg')}}"
                                            alt="Image"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="admin-profile">
                                        <img src="asset/images/courses/admin-2.jpg" alt="Image">
                                        <p>With <a href="courses-details.html">Christoph Baldwin</a></p>
                                    </div>
                                    <a href="courses-details.html">
                                        <h3>Databases: Advanced Topics In SQL And Athers</h3>
                                    </a>
                                    <div class="bottom-content">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <ul>
                                                    <li><i class="flaticon-graduation"></i>321</li>
                                                    <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Free</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-courses-card style4">
                                <div class="courses-img">
                                    <a href="courses-details.html"><img src="{{asset('asset/images/courses/courses-3.jpg')}}"
                                            alt="Image"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="admin-profile">
                                        <img src="asset/images/courses/admin-3.jpg" alt="Image">
                                        <p>With <a href="courses-details.html">Morgen Matthias</a></p>
                                    </div>
                                    <a href="courses-details.html">
                                        <h3>Analyzing Data With MS Excel & Excel</h3>
                                    </a>
                                    <div class="bottom-content">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <ul>
                                                    <li><i class="flaticon-graduation"></i>321</li>
                                                    <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Free</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-courses-card style4">
                                <div class="courses-img">
                                    <a href="courses-details.html"><img src="{{asset('asset/images/courses/courses-3.jpg')}}"
                                            alt="Image"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="admin-profile">
                                        <img src="asset/images/courses/admin-3.jpg" alt="Image">
                                        <p>With <a href="courses-details.html">Morgen Matthias</a></p>
                                    </div>
                                    <a href="courses-details.html">
                                        <h3>UI/UX Design Pattern For Succesfull Software</h3>
                                    </a>
                                    <div class="bottom-content">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <ul>
                                                    <li><i class="flaticon-graduation"></i>321</li>
                                                    <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Free</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-courses-card style4">
                                <div class="courses-img">
                                    <a href="courses-details.html"><img src="{{asset('asset/images/courses/courses-3.jpg')}}"
                                            alt="Image"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="admin-profile">
                                        <img src="asset/images/courses/admin-3.jpg" alt="Image">
                                        <p>With <a href="courses-details.html">Morgen Matthias</a></p>
                                    </div>
                                    <a href="courses-details.html">
                                        <h3>Basic Knowledge About Hodiernal Bharat In History</h3>
                                    </a>
                                    <div class="bottom-content">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <ul>
                                                    <li><i class="flaticon-graduation"></i>321</li>
                                                    <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Free</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-courses-card style4">
                                <div class="courses-img">
                                    <a href="courses-details.html"><img src="{{asset('asset/images/courses/courses-3.jpg')}}"
                                            alt="Image"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="admin-profile">
                                        <img src="asset/images/courses/admin-3.jpg" alt="Image">
                                        <p>With <a href="courses-details.html">Morgen Matthias</a></p>
                                    </div>
                                    <a href="courses-details.html">
                                        <h3>The Complete Business Plan Course Includes 50 Templates</h3>
                                    </a>
                                    <div class="bottom-content">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <ul>
                                                    <li><i class="flaticon-graduation"></i>321</li>
                                                    <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Free</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="paginations">
                        <ul>
                            <li><a href="courses-details.html"><i class="flaticon-back"></i></a></li>
                            <li><a href="courses-details.html">01</a></li>
                            <li><a href="courses-details.html">02</a></li>
                            <li><a href="courses-details.html">03</a></li>
                            <li><a href="courses.html" class="active"><i class="flaticon-next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="courses-right-content pl-20">
                    <div class="serch-content">
                        <h3>Search</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Find Your Course">
                            <button type="submit" class="src-btn">
                                <i class="flaticon-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="category-content">
                        <h3>Select a Category</h3>
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected="">Select a Category</option>
                            <option value="1">Business</option>
                            <option value="2">Fashion</option>
                            <option value="3">writing</option>
                            <option value="3">Development</option>
                            <option value="3">Marketing</option>
                        </select>
                    </div>
                    <div class="location-type">
                        <h3>Location Type</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                On Campus
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                checked="">
                            <label class="form-check-label" for="flexCheckChecked">
                                Online
                            </label>
                        </div>
                    </div>
                    <div class="program-level">
                        <h3>Program Level</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">
                                Graduate
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1"
                                checked="">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Undergraduate
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection