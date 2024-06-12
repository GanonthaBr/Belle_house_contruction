@extends('layouts.layout')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner-1.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>A Propos <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">A Propos</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section" id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="about-wrap img w-100" style="background-image: url(images/about-4.png);">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-crane"></span></div>
                </div>
            </div>
            <div class="col-md-6 py-5 pl-md-5">
                <div class="row justify-content-center mb-4 pt-md-4">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">A PROPOS DE NOUS</span>
                        <h2 class="mb-4">Bienvenue chez BELLE HOUSE</h2>
                        <div class="d-flex about">
                            <div class="icon"><span class="flaticon-hammer"></span></div>
                            <h3>
                                Depuis bientôt dix ans, BELLE HOUSE se distingue comme une référence incontournable dans le domaine de l'architecture et de la construction moderne. Forte de son expertise et de son innovation, notre entreprise s’engage à transformer vos rêves en réalité, en créant des espaces qui allient fonctionnalité, esthétique et durabilité.
                            </h3>
                        </div>
                        {{-- <h4>Notre Vision</h4>
                        <p>
                         Chez BELLE HOUSE, nous croyons que chaque projet est unique, tout comme les aspirations de nos clients. Notre vision est de concevoir et de bâtir des structures qui ne sont pas seulement des habitations ou des bureaux, mais de véritables œuvres d’art qui reflètent votre personnalité et répondent parfaitement à vos besoins.
                        </p> --}}
                        {{-- <div class="d-flex video-image align-items-center mt-md-4"> --}}
                        {{-- <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url(images/about-2.jpg);">
                                <span class="fa fa-play-circle"></span>
                            </a>
                            <h4 class="ml-4">This is how we work on our clients, Watch video</h4> --}}
                        {{-- <h4>Notre Mission</h4>
                        <p>
                        Notre mission est de fournir des services d'architecture et de construction de la plus haute qualité, en mettant l'accent sur l'innovation, la durabilité et l'excellence. Nous sommes passionnés par l'idée de repousser les limites du design architectural, tout en respectant les délais et les budgets de nos clients.
                        </p> --}}
                        {{-- </div> --}}

                        <div class="about-tab">

                            <!-- Tab Navigation -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="true">Notre Vision</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">Notre Mission</a>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                                    <p>
                                        Chez BELLE HOUSE, nous croyons que chaque projet est unique, tout comme les aspirations de nos clients. Notre vision est de concevoir et de bâtir des structures qui ne sont pas seulement des habitations ou des bureaux, mais de véritables œuvres d’art qui reflètent votre personnalité et répondent parfaitement à vos besoins.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                                    <p>
                                        Notre mission est de fournir des services d'architecture et de construction de la plus haute qualité, en mettant l'accent sur l'innovation, la durabilité et l'excellence. Nous sommes passionnés par l'idée de repousser les limites du design architectural, tout en respectant les délais et les budgets de nos clients.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-intro">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url(images/banner-3.png); margin-bottom:2rem ">
                    <div class="overlay"></div>
                    <h2>FOURNIR DES SERVICES D’EXCELLENCE PERSONNIFIÉS.</h2>
                    <p>Laissez-vous séduire par l’élégance et le confort de nos réalisations</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">AVEZ-VOUS UN PROJET ?</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
    <div class="img image-overlay" style="background-image: url(images/banner-3.jpg);"></div>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 py-5 bg-secondary aside-stretch">
                <div class="heading-section heading-section-white p-4 pl-md-0 py-md-5 pr-md-5">
                    <span class="subheading">BELLE HOUSE</span>
                    <h2 class="mb-4">ENTREPRISE DE CONSTRUCTION MODERNE</h2>
                    <h4>MEILLEURES ENTREPRISES DE CONSTRUCTIONS MODERNES EN AFRIQUE DE L’OUEST<h4>
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
                                <strong class="number" data-number="100">0</strong>
                                <span>Projets Terminés</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex counter-wrap ftco-animate">
                        <div class="block-18 d-flex align-items-center justify-content-between">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-worker-1"></span></div>
                            <div class="text">
                                <strong class="number" data-number="230">0</strong>
                                <span>Clients Satisfaits</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Notre Equipe</span>
                <h2 class="mb-4">Notre Equipe</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-1.html);">
                            <div class="box">
                                <h2>AGABA Moses</h2>
                                <p>PDG</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;En charge de la gestion de l'entreprise et de toutes ses actions &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/person_pholder.png" alt>
                                </div>
                                <div class="name align-self-center ml-3">AGABA Moses<span class="position">PDG</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-2.html);">
                            <div class="box">
                                <h2>Greg Washer</h2>
                                <p>Head Engineer</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-2.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Greg Washer<span class="position">Head Engineer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-3.html);">
                            <div class="box">
                                <h2>Tony Henderson</h2>
                                <p>Ass. Engineer</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-3.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Tony Henderson <span class="position">Ass. Engineer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-4.html);">
                            <div class="box">
                                <h2>Jack Smith</h2>
                                <p>Architect</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-4.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Jack Smith <span class="position">Architect</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-5.html);">
                            <div class="box">
                                <h2>Ryan Anderson</h2>
                                <p>President</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-5.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Ryan Anderson <span class="position">President</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-6.html);">
                            <div class="box">
                                <h2>Greg Washer</h2>
                                <p>Chief Executive Officer</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-6.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Greg Washer<span class="position">Chief Executive Officer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-7.html);">
                            <div class="box">
                                <h2>Tony Henderson</h2>
                                <p>Contractor Operation Head</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-7.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Tony Henderson <span class="position">Contractor Operation Head</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-8.html);">
                            <div class="box">
                                <h2>Jack Smith</h2>
                                <p>Chief Financial Officer</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-8.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Jack Smith <span class="position">Chief Financial Officer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
{{-- <section class="ftco-section ftco-no-pt ftco-no-pb testimony-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-6 p-4 pl-md-0 py-md-5 pr-md-5 aside-stretch d-flex align-items-center">
                    <div class="heading-section heading-section-white">
                        <span class="subheading" style="color:#fff;"> LIRE LES TÉMOIGNAGES </span>
                        <p class="mb-4" style="font-size: 40px;">C'est toujours <b>une joie</b> d'entendre que le travail que nous faisons reçoit des <b>critiques positives</b>.</p>
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
                                    <p class="mb-4">"J'ai fait appel à BELLE HOUSE pour la rénovation de ma maison et je suis absolument ravi du résultat. L'équipe a été professionnelle, attentive à mes besoins et a respecté les délais. Leur expertise en architecture moderne a transformé ma maison en un véritable chef-d'œuvre. Je recommande vivement BELLE HOUSE à tous ceux qui cherchent une entreprise fiable et talentueuse."</p>
                                    <p class="name">Marc L.</p>
                                    <span class="position">Invité</span>
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
                                    <p class="mb-4">"BELLE HOUSE a conçu et construit notre nouvelle maison et nous n'aurions pas pu être plus satisfaits. Dès la première consultation, ils ont compris notre vision et l'ont transformée en réalité. Leur attention aux détails et leur créativité sont impressionnantes. Nous recevons constamment des compliments sur notre maison et c'est grâce à BELLE HOUSE. Merci pour tout votre travail exceptionnel !"</p>
                                    <p class="name">Sophie M.</p>
                                    <span class="position">Invité</span>
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
                                    <p class="mb-4">"Lorsque j'ai décidé de rénover mon appartement, j'ai choisi BELLE HOUSE sur la recommandation d'un ami et je suis tellement content de l'avoir fait. Leur équipe a été formidable du début à la fin. Ils ont réussi à moderniser l'espace tout en respectant l'architecture originale. Le résultat dépasse toutes mes attentes. BELLE HOUSE est sans aucun doute la meilleure entreprise d'architecture et de construction avec laquelle j'ai travaillé."</p>
                                    <p class="name">Jean-Pierre D.</p>
                                    <span class="position">Invité</span>
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
                                    <p class="mb-4">"BELLE HOUSE a réalisé la rénovation complète de notre maison et nous sommes extrêmement satisfaits du résultat. L'équipe a été professionnelle, innovante et très à l'écoute de nos besoins. Ils ont su transformer notre vieille maison en un espace moderne et chaleureux. Le service client est exceptionnel et ils ont toujours été disponibles pour répondre à nos questions. Nous recommandons vivement BELLE HOUSE à tous ceux qui cherchent une entreprise de confiance pour leurs projets de construction et de rénovation."</p>
                                    <p class="name"> Paul et Laura B. </p>
                                    <span class="position">Invité</span>
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
                                    <p class="mb-4">"Nous avons confié à BELLE HOUSE la construction de notre nouvelle maison de vacances et l'expérience a été incroyable. L'équipe a su marier fonctionnalité et esthétique moderne à la perfection. Ils ont été très réactifs à nos demandes et ont fait preuve d'une grande flexibilité. La qualité de la construction est irréprochable et nous sommes ravis du résultat. Je recommande BELLE HOUSE sans réserve."</p>
                                    <p class="name"> Claire V</p>
                                    <span class="position">Invité</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> --}}
@include('partials.testimonials')


@endsection