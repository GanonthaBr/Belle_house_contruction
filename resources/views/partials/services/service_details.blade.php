@extends('layouts.layout_asset')
@section('content-show')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/banner-1.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Services -> Details</h1>
            </div>
        </div>
    </div>
</section>
<div class="ftco-section half-light">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <h2>{{$service->title}}</h2>
            <img src="{{asset('storage/' . $service->image)}}" alt="{{$service->id}}" height="200" width="400">
        </div>
        <div class="col-md-6 m-4">
            <p>{{$service->description}}</p>
        </div>
    </div>
    <div class="container">
        <h3>Autre Services</h3>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-md-2 more-service">
                <a href="{{route('service.show', $service->id)}}" class="btn btn-custom">{{ $service->title}}</a>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                @if($service->images->count()==0)
                <div class="m-12">
                    <p class="text-center mt-4 alert-success">Pas d'images supplémentaires</p>
                </div>
                @endif
                <div class="row">
                    @foreach($service->images as $image)
                    <div class="col-md-4 d-flex justify-content-start">
                        <a href="{{asset('storage/' . $image->image)}}" data-lightbox="service-images">
                            <img src="{{asset('storage/' . $image->image)}}" alt="image {{$image->id}}" class="img-fluid" height="200" width="200" />
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</div>

@endsection