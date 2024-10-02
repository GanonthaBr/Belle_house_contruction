@extends('layouts.layout_asset')

@section('content-show')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('public/images/banner-1.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Nos Realisations <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Nos Realisations -> details</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="ftco-section half-light">
        <div class="container row d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-sm-12">
                <h2>{{$realisation->name }} </h2>
                <img src="{{asset('public/storage/' . $realisation->image)}}" alt="{{$realisation->id}}" class="img-fluid">
                <div class="card bg-light rounded">
                    <div class="card-body">
                        <!-- Add your list of items here -->
                        <ul style="list-style-type: none; padding: 0;">

                            <h3><b>Details:</b></h3>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1" style="margin-left: 10px;"></i><span style="padding-left: 10px"> <strong>Superficie :</strong>{{$realisation->surface}} m²</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1" style="margin-left: 10px;"></i><span style="padding-left: 10px"> <strong>Tache :</strong>{{$realisation->task}}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1" style="margin-left: 10px;"></i><span style="padding-left: 10px"><strong>Maître d'ouvrage :</strong> {{$realisation->maitre_douvrage}}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1" style="margin-left: 10px;"></i><span style="padding-left: 10px"><strong>Année :</strong>{{ \Carbon\Carbon::parse($realisation->year)->format('Y') }}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1" style="margin-left: 10px;"></i><span style="padding-left: 10px"> <strong>Quartier :</strong> {{$realisation->area}}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1" style="margin-left: 10px;"></i><span style="padding-left: 10px"><strong>Ville :</strong> {{$realisation->city}}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1" style="margin-left: 10px;"></i><span style="padding-left: 10px"><strong>Pays :</strong> {{$realisation->country}}</span></div>
                    </div>
                    <h3><b>Description</b></h3>
                    <p>

                        {{$realisation->description}}

                    </p>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 pl-sm-3">
                @if($realisation->images->count()==0)
                <div class="m-12">
                    <p class="text-center mt-4 alert-success">Pas d'images supplémentaires</p>
                </div>
                @else
                <div class="row" style="margin-left: 50px;">
                    <div class="row">
                        <h2>Images</h2>
                    </div>
                    <div class="row">
                        @foreach($realisation->images as $image)
                        <div class="col-md-12 d-flex justify-content-start">
                            <a href="{{asset('public/storage/' . $image->image)}}" data-lightbox="realisation-images">
                                <img src="{{asset('public/storage/' . $image->image)}}" alt="image {{$image->id}}" class="img-fluid" height="200" width="200" />
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
                @endif

            </div>
        </div>

    </div>
    </div>
    {{-- display more images horizontally, we can click an image to expand and loop through all , original display not too large --}}

</section>


@endsection