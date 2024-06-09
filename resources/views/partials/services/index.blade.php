@extends('layouts.layout')

@section('content')



<section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner-1.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Services</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-half-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Our Services</span>
                <h2 class="mb-4">We Offer Services</h2>
            </div>
        </div>
        <div class="row">
           @foreach ($services as $service)
                <div class="col-md-4">
                <div class="services-wrap ftco-animate">
                    <div class="img" style="background-image: url({{asset('storage/' . $service->image)}});"></div>
                    <div class="text">
                        <div class="icon"><span class="flaticon-architect"></span></div>
                        <h2>{{$service->title}}</h2>
                        <p>  {{substr($service->description,0,110)}}...</p>
                        <a href="{{route('service.show',$service->id)}}" class="btn-custom">Read more</a>
                    </div>
                </div>
            </div>
           @endforeach
            {{-- <div class="col-md-4">
                <div class="services-wrap ftco-animate">
                    <div class="img" style="background-image: url(images/services-2.jpg);"></div>
                    <div class="text">
                        <div class="icon"><span class="flaticon-worker"></span></div>
                        <h2>Renovation</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <a href="#" class="btn-custom">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-wrap ftco-animate">
                    <div class="img" style="background-image: url(images/services-3.jpg);"></div>
                    <div class="text">
                        <div class="icon"><span class="flaticon-hammer"></span></div>
                        <h2>Construction</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <a href="#" class="btn-custom">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-wrap ftco-animate">
                    <div class="img" style="background-image: url(images/services-4.jpg);"></div>
                    <div class="text">
                        <div class="icon"><span class="flaticon-architect"></span></div>
                        <h2>Interior &amp; Exterior</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <a href="#" class="btn-custom">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-wrap ftco-animate">
                    <div class="img" style="background-image: url(images/services-5.jpg);"></div>
                    <div class="text">
                        <div class="icon"><span class="flaticon-worker"></span></div>
                        <h2>Chemical Research</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <a href="#" class="btn-custom">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-wrap ftco-animate">
                    <div class="img" style="background-image: url(images/services-6.jpg);"></div>
                    <div class="text">
                        <div class="icon"><span class="flaticon-hammer"></span></div>
                        <h2>Petroleum &amp; Gas</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        <a href="#" class="btn-custom">Read more</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>


@endsection