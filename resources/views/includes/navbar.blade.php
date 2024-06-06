<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="/" class="nav-link {{Request::is('/') ? 'active':''}}" >Accueil</a></li>
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link {{ Request::routeIs('about') ? 'active' : '' }} ">A propos</a></li>
                    <li class="nav-item"><a href="{{route('services')}}" class="nav-link {{ Request::routeIs('services') ? 'active' : '' }} ">Services</a></li>
                    <li class="nav-item"><a href="{{route('projects')}}" class="nav-link {{ Request::routeIs('projects') ? 'active' : '' }} ">Projets</a></li>
                    <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link {{ Request::routeIs('blogs') ? 'active' : '' }} ">Blog</a></li>
                    <li class="nav-item"><a href="{{route('contacts')}}" class="nav-link {{ Request::routeIs('contacts') ? 'active' : '' }} ">Contact</a></li>
                </ul>
                <a href="#" class="btn-custom" data-toggle="modal" data-target="#exampleModalCenter">Nous Contacter</a>
            </div>
        </div>
    </nav>