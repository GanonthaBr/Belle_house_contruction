@extends('layouts.layout')

@section('content')


<!-- 
<body>
    <div class="py-1 top">
        <div class="container">
            <div class="row">
                <div class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
                    <p class="mb-0 w-100">
                        <span class="fa fa-paper-plane"></span>
                        <span class="text"><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9d0c6dcdbccc4c8c0c5e9ccc4c8c0c587cac6c4">[email&#160;protected]</a></span>
                    </p>
                </div>
                <div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end">
                    <p class="mb-0 register-link"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Inquire Now</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-5">
        <div class="container">
            <div class="row d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-md-4 d-flex mb-2 mb-md-0">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <span class="flaticon flaticon-crane"></span>
                        <span class="ml-2">Wilcon <small>Construction Company</small></span>
                    </a>
                </div>
                <div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fa fa-map"></span>
                    </div>
                    <div class="pr-md-4 pl-md-3 pl-3 text">
                        <p class="con"><span>Free Call</span> <span>+1 234 456 78910</span></p>
                        <p class="con">Call Us Now 24/7 Customer Support</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex topper mb-md-0 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text pl-3 pl-md-3">
                        <p class="hr"><span>Our Location</span></p>
                        <p class="con">198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="project.html" class="nav-link">Projects</a></li>
                    <li class="nav-item active"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
                <a href="#" class="btn-custom" data-toggle="modal" data-target="#exampleModalCenter">Inquire Now</a>
            </div>
        </div>
    </nav> -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner-1.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Nos Actualités <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Nos Actualités</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
             @foreach ($blogs as $blog)
                    
                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('storage/' . $blog->image)}});">
                        </a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                    <a href="#"><span class="fa fa-user mr-2"></span>{{$blog->author}}</a>
                                    <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="#"> {{$blog->title}}</a></h3>
                            <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Voir Plus+</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            {{-- <div class="col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                        <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                        <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                        <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                        <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                        <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                        <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>


@endsection