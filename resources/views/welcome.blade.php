@extends('layouts.layout')
@section('content')
    
    @include('includes.topbar')
    @include('includes.navbar')
    @include('partials.hero')
    @include('partials.services')
    @include('partials.about')
    <section class="ftco-intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url(images/bg_2.jpg);">
                        <div class="overlay"></div>
                        <h2>Providing Personalized and High Quality Services</h2>
                        <p>We can manage your dream building A small river named Duden flows by their place</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Request A Quote</a></p>
                    </div>
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
                <div class="col-md-4">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url(images/services-1.jpg);"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-architect"></span></div>
                            <h2>Architecture</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <a href="#" class="btn-custom">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
        <div class="img image-overlay" style="background-image: url(images/about-3.jpg);"></div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 py-5 bg-secondary aside-stretch">
                    <div class="heading-section heading-section-white p-4 pl-md-0 py-md-5 pr-md-5">
                        <span class="subheading">Wilcon A Construction Company</span>
                        <h2 class="mb-4">Best Provider for Industrial Services</h2>
                        <h4>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="row">
                        <div class="col-md-12 d-flex counter-wrap ftco-animate">
                            <div class="block-18 bg-primary d-flex align-items-center justify-content-between">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-engineer"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="48000">0</strong>
                                    <span>Project Completed</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex counter-wrap ftco-animate">
                            <div class="block-18 d-flex align-items-center justify-content-between">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-worker-1"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="54900">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.projects')
    <section class="ftco-section ftco-no-pt ftco-no-pb testimony-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-6 p-4 pl-md-0 py-md-5 pr-md-5 aside-stretch d-flex align-items-center">
                    <div class="heading-section heading-section-white">
                        <span class="subheading" style="color:#fff;">Read Testimonials</span>
                        <h2 class="mb-4" style="font-size: 50px;">It's always a joy to hear that the work we do has positively reviews</h2>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-4 py-md-5 aside-stretch-right">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blogs')
   @include('partials.footer')
   @include('includes.modal')

@endsection