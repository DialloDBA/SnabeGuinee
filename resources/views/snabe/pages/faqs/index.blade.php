@extends('inc.ss.app')

@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>FAQs</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li>FAQs</li>
            </ul>
        </div>
    </div>
</div>
<div class="faq-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-image pr-20">
                    <img src="{{asset('asset/images/faq-img.jpg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-left-content pl-20">
                    <div class="faq-title">
                        <h2>Besoin de poser des questions ou de vérifier des questions</h2>
                        <p>Il existe de nombreuses variantes de passages de Lorem Ipsum disponibles, mais la majorité dans l'humour injecté, les mots aléatoires ne semblent pas crédibles</p>
                    </div>
                    <div class="accordion" id="accordionExample">
                        @foreach ($faqs as $k=> $f)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{($k+1)}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{($k+1)}}" aria-expanded="{{ $k==0 ? 'true' : 'false'}}" aria-controls="collapse{{($k+1)}}">
                                    {{($k+1)}}. {{$f->question}}
                                </button>
                            </h2>
                            <div id="collapse{{($k+1)}}" class="accordion-collapse collapse {{ $k==0 ? 'show' : ''}}" aria-labelledby="heading{{($k+1)}}"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{$f->reponse}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection