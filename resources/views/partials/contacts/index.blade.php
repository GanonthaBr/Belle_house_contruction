@extends('layouts.layout')

@section('content')



<section class="hero-wrap hero-wrap-2" style="background-image: url('public/images/banner-1.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Nous Contacter <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Nous Contacter</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Nous contacter</span>
                <h2 class="mb-4">Envoyez un message pour votre requete</h2>
                <p>Utilisez ce formulaire ci dessous pour nous envoyer vos requêtes!</p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-8">
                <form action="{{route('contact.store')}}" class="p-4 p-md-5 contact-form" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nom" placeholder="Votre nom">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email ou Telephone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="topic" placeholder="Object">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea cols="30" rows="7" class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Envoyer Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 d-flex pl-md-5">
                <div class="row">
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="text">
                            <p><span>Adresse:</span> Quartier Koubia, Niamey-Niger</p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="text">
                            <p><span>Phone:</span> <a href="tel://0022792085050">+227 92 08 50 50</a></p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <div class="text">
                            <p><span>Email:</span> <a href="mailto:contact@bellehouseniger.com"><span class="__cf_email__" data-cfemail="a3cacdc5cce3daccd6d1d0cad7c68dc0ccce">Contact@bellehouseniger.com</span></a></p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <div class="text">
                            <p><span>Website</span> <a href="https://www.bellehouseniger.com">bellehouseniger.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-5">
                <div class="map">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed/v1/place?q=ONG+APIS,+Niamey,+Niger&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection