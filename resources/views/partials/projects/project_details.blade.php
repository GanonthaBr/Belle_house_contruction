@extends('layouts.layout_asset')

@section('content-show')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/banner-1.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Nos projects <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Nos projects -> details</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="ftco-section half-light">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <h2>{{$project->name}}</h2>
                <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->id}}" class="img-fluid">
                <div class="card bg-light rounded">
                    <div class="card-body">
                        <!-- Add your list of items here -->
                        <ul style="list-style-type: none; padding: 0;">
                            <h2>{{$project->usage}}</h2>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1"></i><span style="padding-left: 10px"> <strong>Superficie :</strong>{{$project->surface}} m²</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1"></i><span style="padding-left: 10px"> <strong>Type :</strong>{{$project->type}} m²</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1"></i><span style="padding-left: 10px"><strong>Maître d'ouvrage :</strong> {{$project->maitre_douvrage}}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1"></i><span style="padding-left: 10px"><strong>Maître d'oeuvre :</strong> {{$project->maitre_doeuvre}}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1"></i><span style="padding-left: 10px"><strong>Année :</strong>{{ \Carbon\Carbon::parse($project->year)->format('Y') }}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1"></i><span style="padding-left: 10px"><strong>Usage :</strong> {{$project->usage}}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1"></i><span style="padding-left: 10px"> <strong>Quartier :</strong> {{$project->area}}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1"></i><span style="padding-left: 10px"><strong>Ville :</strong> {{$project->city}}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1"></i><span style="padding-left: 10px"><strong>Pays :</strong> {{$project->country}}</span></div>
                            <div class="d-flex left-content-between mb-3"><i class="fa fa-check text-primary pt-1"></i><span style="padding-left: 10px"><strong>Description :</strong> {{$project->description}}</span></div>
                        </ul>
                    </div>
                </div>
            </div>
            <di class="col-md-6">
                <h3>Plus d'images</h3>

                @if($project->images->count()==0)
                <div class="m-12">
                    <p class="text-center mt-4 alert-success">Pas d'images supplémentaires</p>
                </div>
                @endif
                @foreach($project->images as $image)
                <div class="col-md-12 mb-4 d-flex">
                    <a href="{{asset('storage/' . $image->image)}}" data-lightbox="project-images">
                        <img src="{{asset('storage/' . $image->image)}}" alt="image {{$image->id}}" class="img-fluid" />
                    </a>
                </div>
                @endforeach

        </div>
    </div>
    </div>
    {{-- display more images horizontally, we can click an image to expand and loop through all , original display not too large --}}

</section>


@endsection