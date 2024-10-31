@extends('layouts.layout')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner-1.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Nos Projets <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Nos Projets</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Nos differents Projets</span>
                <h2 class="mb-4">Derniers Projets</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($projects as $project)
                
            <div class="col-md-4">
                <div class="project">
                    <a href="{{route('project.show',$project->id)}}" class="img d-flex align-items-center" style="background-image: url({{asset('storage/' . $project->image)}});">
                        <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                    </a>
                    <div class="text">
                        <span class="subheading">{{$project->type}}</span>
                        <h3>{{$project->name}}</h3>
                        <p><span class="fa fa-map-marker mr-1"></span> {{$project->area }}, {{$project->city}}, {{$project->country}}</p> 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                {{-- <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div> --}}
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</section>


@endsection