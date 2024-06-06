<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="/" class="nav-link {{Request::is('/') ? 'active':''}}" >Accueil</a></li>
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link {{ Request::routeIs('about') ? 'active' : '' }} ">A propos</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="project.html" class="nav-link">Projets</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
                <a href="#" class="btn-custom" data-toggle="modal" data-target="#exampleModalCenter">Nous Contacter</a>
            </div>
        </div>
    </nav>