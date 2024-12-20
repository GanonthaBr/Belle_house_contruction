@extends('layouts.layout')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('public/images/banner-1.png');" data-stellar-background-ratio="0.5">
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
        <h2>Liste de Nos Blog Posts</h2>
        <div class="row d-flex">
            @foreach ($blogs as $blog)

            <div class="col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url({{asset('public/storage/' . $blog->image)}});">
                    </a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a><span class="fa fa-calendar mr-2"></span> {{substr($blog->created_at,0,10)}} </a>
                                <a><span class="fa fa-user mr-2"></span>{{$blog->author}}</a>
                                <a class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="{{route('blog.show',$blog->id)}}"> {{$blog->title}}</a></h3>
                        <p><a href="{{route('blog.show',$blog->id)}}" class="btn btn-secondary py-2 px-3">Voir Plus+</a></p>
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
        <div class="row mt-5">
            <div class="col text-center">
                
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</section>


@endsection