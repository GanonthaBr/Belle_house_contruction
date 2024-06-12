@extends('layouts.layout_asset')
@section('content-show')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/banner-1.png')}});" data-stellar-background-ratio="0.5">
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
<section>
    <div class="container">
        <div class="row d-flex">
            <div class="ftco-section half-light col-md-8">
                <div class="container d-flex">
                    <div class="row-md-6">
                        <h2>{{$blog->title}}</h2>
                        <img src="{{asset('storage/' . $blog->image)}}" alt="{{$blog->id}}" height="200" width="400">
                    </div>

                </div>
                <div class="container d-flex justify-content-center align-items-center">

                    <div class="row-md-6 m-4">
                        <p>{!!$blog->content!!}</p>
                    </div>
                </div>
                <h3>Tous les Blogs</h3>
                <a href="{{route('blogs')}}">Voir les autres blogs</a>
            </div>
            <div class="col-md-4">
                <!-- card of items -->
                <div class="card">
                    <h4>Les recentes publications</h4>
                    <div class="card-item">

                        <div class="card-body">
                            <ul>
                                @foreach($blogs as $blog)
                                <li>
                                    <a href="{{route('blog.show', $blog->id)}}">{{substr($blog->title,0,50)}}...</a>
                                </li>
                                @endforeach
                                <li><a href="{{route('blogs')}}">Tous les Blogs >></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



</div>
@endsection