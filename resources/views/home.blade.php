@extends('layouts.layout')
@section('content')


@include('partials.hero')
@include('partials.missions')
@include('partials.about.about')
<section class="ftco-intro">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url(images/banner-2.png);">
                    <div class="overlay"></div>
                    <h2>FOURNIR DES SERVICES D’EXCELLENCE PERSONNIFIÉS.</h2>
                    <p>Laissez-vous séduire par l’élégance et le confort de nos réalisations </p>
                    <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3"> AVEZ-VOUS UN PROJET ?</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.services.services')
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
    <div class="img image-overlay" style="background-image: url(images/banner-6.png);"></div>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 py-5 bg-secondary aside-stretch">
                <div class="heading-section heading-section-white p-4 pl-md-0 py-md-5 pr-md-5">
                    <span class="subheading">BELLE HOUSE</span>
                    <h2 class="mb-4">ENTREPRISE DE CONSTRUCTION MODERNE</h2>
                    <h4>MEILLEURE ENTREPRISE DE CONSTRUCTIONS MODERNES EN AFRIQUE DE L’OUEST<h4>
                            <p>
                                Leader reconnue dans le domaine de la construction moderne en Afrique de l'Ouest, notre entreprise se distingue par son engagement inébranlable envers l'excellence, l'innovation et la durabilité.
                                Avec une expertise unique dans la conception et la réalisation de projets architecturaux complexes, nous avons une approche multidisciplinaire offrant des solutions novatrices, qui repoussent les limites de l'ingénierie et de l'architecture.
                            </p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="row">
                    <div class="col-md-12 d-flex counter-wrap ftco-animate">
                        <div class="block-18 bg-primary d-flex align-items-center justify-content-between">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-engineer"></span></div>
                            <div class="text">
                                <strong class="number" data-number="155">0</strong>
                                <span>Projets Terminés</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex counter-wrap ftco-animate">
                        <div class="block-18 d-flex align-items-center justify-content-between">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-worker-1"></span></div>
                            <div class="text">
                                <strong class="number" data-number="170">0</strong>
                                <span>Clients Satisfaits</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.projects.projects')
@include('partials.testimonials')
@include('partials.blog.blogs')


@endsection