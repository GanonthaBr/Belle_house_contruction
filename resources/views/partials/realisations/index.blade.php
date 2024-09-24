@extends('layouts.layout')

@section('content')



<section class="hero-wrap hero-wrap-2" style="background-image: url('public/images/banner-1.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Nos Projets <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Nos Realisations</h1>
            </div>
        </div>
    </div>
</section>
 <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">NOS SECTEURS DE TRAVAUX D’ENVERGURE</span>
                    <h2 class="mb-4">Dernieres Realisations</h2>
                </div>
            </div>
             <div class="row">
            @if ($realisations->count())
                @foreach ($realisations as $realisation)
            <div class="col-md-4">
                <div class="project">
                    <a href="{{route('realisation.show',$realisation->id)}}" class="img d-flex align-items-center" style="background-image: url({{asset('storage/' . $realisation->image)}});">
                        <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                    </a>
                    <div class="text">
                        <span class="subheading">{{$realisation->type}}</span>
                        <h3>{{$realisation->name}}</h3>
                        <p><span class="fa fa-map-marker mr-1"></span> {{$realisation->area }}, {{$realisation->city}}, {{$realisation->country}}</p> 
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p class="txt text-bg-primary" >Liste des realisations vide!</p>
            @endif
            
        </div>
        </div>
    </section>

@endsection