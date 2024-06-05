<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/wilcon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 16:49:44 GMT -->

<head>
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Favicon -->
    <link href="{{asset('images/logo.png')}}" rel="icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script nonce="991464ec-edd5-44f2-b742-13c23523bc94">
        try {
            (function(w, d) {
                ! function(j, k, l, m) {
                    j[l] = j[l] || {};
                    j[l].executed = [];
                    j.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    j.zaraz._v = "5671";
                    j.zaraz.q = [];
                    j.zaraz._f = function(n) {
                        return async function() {
                            var o = Array.prototype.slice.call(arguments);
                            j.zaraz.q.push({
                                m: n,
                                a: o
                            })
                        }
                    };
                    for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                    j.zaraz.init = () => {
                        var q = k.getElementsByTagName(m)[0],
                            r = k.createElement(m),
                            s = k.getElementsByTagName("title")[0];
                        s && (j[l].t = k.getElementsByTagName("title")[0].text);
                        j[l].x = Math.random();
                        j[l].w = j.screen.width;
                        j[l].h = j.screen.height;
                        j[l].j = j.innerHeight;
                        j[l].e = j.innerWidth;
                        j[l].l = j.location.href;
                        j[l].r = k.referrer;
                        j[l].k = j.screen.colorDepth;
                        j[l].n = k.characterSet;
                        j[l].o = (new Date).getTimezoneOffset();
                        if (j.dataLayer)
                            for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                    ...x[1],
                                    ...y[1]
                                })), {}))) zaraz.set(w[0], w[1], {
                                scope: "page"
                            });
                        j[l].q = [];
                        for (; j.zaraz.q.length;) {
                            const z = j.zaraz.q.shift();
                            j[l].q.push(z)
                        }
                        r.defer = !0;
                        for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith("_zaraz_"))).forEach((B => {
                            try {
                                j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                            } catch {
                                j[l]["z_" + B.slice(7)] = A.getItem(B)
                            }
                        }));
                        r.referrerPolicy = "origin";
                        r.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                        q.parentNode.insertBefore(r, q)
                    };
                    ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body>
    <div class="py-1 top">
        <div class="container">
            <div class="row">
                <div class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
                    <p class="mb-0 w-100">
                        <span class="fa fa-paper-plane"></span>
                        <span class="text"><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9de4f2e8eff8f0fcf4f1ddf8f0fcf4f1b3fef2f0" style="font-size: 12px">contact@bellehouseniger.com</a></span>
                    </p>
                </div>
                <div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            {{-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a> --}}

                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end">
                    <p class="mb-0 register-link"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Nous Contacter</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-5">
        <div class="container">
            <div class="row d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-md-4 d-flex mb-2 mb-md-0">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <span>
                            <img src="images/logo.png" alt="Belle House Construction Company" height="65" width="80">
                        </span>
                        <span class="ml-2">Belle House <small style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Batisseur de Confiance</small></span>
                    </a>
                </div>
                <div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fa fa-map"></span>
                    </div>
                    <div class="pr-md-4 pl-md-3 pl-3 text">
                        <p class="con"><span>Appellez au</span> <span>+227 456 78910</span></p>
                        <p class="con">Appel 24/7 pour vos besoins</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex topper mb-md-0 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text pl-3 pl-md-3">
                        <p class="hr"><span>Localisation</span></p>
                        <p class="con">Niamey Quartier Bobiel,Niger</p>
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
                    <li class="nav-item active"><a href="index.html" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">A propos</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="project.html" class="nav-link">Projets</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
                <a href="#" class="btn-custom" data-toggle="modal" data-target="#exampleModalCenter">Nous Contacter</a>
            </div>
        </div>
    </nav>

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-lg-6 ftco-animate">
                    <div class="mt-5">
                        <h1 class="mb-4">Construire <br>Votre Maison !</h1>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                        <p><a href="#" class="btn btn-primary">Our Services</a> <a href="#" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter">Request A Quote</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2">
        <div class="container">
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-engineer-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3">Quality Construction</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2 d-flex">
                        <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-worker-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3">Professional Liability</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-engineer"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3">Dedicated To Our Clients</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section" id="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="about-wrap img w-100" style="background-image: url(images/about.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-crane"></span></div>
                    </div>
                </div>
                <div class="col-md-6 py-5 pl-md-5">
                    <div class="row justify-content-center mb-4 pt-md-4">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Welcome to Wilcon</span>
                            <h2 class="mb-4">Wilcon A Construction Company</h2>
                            <div class="d-flex about">
                                <div class="icon"><span class="flaticon-hammer"></span></div>
                                <h3>We're in this business since 1975 and We provide the best insdustrial services</h3>
                            </div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <div class="d-flex video-image align-items-center mt-md-4">
                                <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url(images/about-2.jpg);">
                                    <span class="fa fa-play-circle"></span>
                                </a>
                                <h4 class="ml-4">This is how we work on our clients, Watch video</h4>
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
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our Global Work Industries</span>
                    <h2 class="mb-4">Latest Projects</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Our Blog</span>
                    <h2 class="mb-4">Latest Blog Updates</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-lg-4 ftco-animate">
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
            </div>
        </div>
    </section>
    <footer class="ftco-footer">
        <div class="container mb-5 pb-4">
            <div class="row">
                <div class="col-lg col-md-6">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2 d-flex align-items-center">About</h2>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <ul class="ftco-footer-social list-unstyled mt-4">
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2">Links</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-md-4">
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Project</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog Posts</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Industries</a></li>
                            </ul>
                            <ul class="list-unstyled ml-md-5">
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Terms of Use</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Customer Services</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Prompt Delivery</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reliable Equipment</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New Heavy Equipment</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg col-md-6">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="fa fa-map-marker mr-3"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span class="text"><span class="__cf_email__" data-cfemail="2841464e476851475d5a4c4745494146064b4745">[email&#160;protected]</span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 aside-stretch py-3">
                        <p class="mb-0">
                            Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="fa fa-close"></span>
                    </button>
                </div>
                <div class="modal-body p-4 p-md-5">
                    <form action="#" class="appointment-form ftco-animate">
                        <h3>Request Quote</h3>
                        <div class>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class>
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name id class="form-control">
                                            <option value>Select Your Services</option>
                                            <option value>Architecture</option>
                                            <option value>Renovation</option>
                                            <option value>Construction</option>
                                            <option value>Interior &amp; Exterior</option>
                                            <option value>Chemical Research</option>
                                            <option value>Petroleum &amp; Gas</option>
                                            <option value>Other Services</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class>
                            <div class="form-group">
                                <textarea name id cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"88e12d83fc06669d","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/wilcon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 16:50:07 GMT -->

</html>