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
                <div class="col-md-6 comments">
                    {{-- display compte registered success message from session --}}
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @elseif(session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                    @endif
                    <h3>{{__('Commentaires')}}</h3>
                    @if ($blog->comments->count()==0)
                    <p class="mt-4 text-alert">{{__('Pas de commentaires encore')}}</p>
                    @else
                    @foreach($blog->comments as $comment)
                    <div class="comment">
                        <!-- <h4>{{ $comment->user_name }}</h4> -->
                        <p>{{ $comment->comment }}</p>
                        <p class="comment-added">Ajoutée par {{$comment->user->name}} , {{$comment->created_at->locale('fr')->diffForHumans()}} </p>
                    </div>
                    @endforeach
                    @endif
                    {{-- Login --}}
                    <div class="login-card card">
                        <h3>{{__('Connectez-vous pour commenter')}}</h3>
                        <!-- cross to close the modal -->
                        <span class="close">
                            <i class="fas fa-times"></i>

                        </span>

                        <div class="modal-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{__('Email')}}</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{__('Mot de passe')}}</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <button type="submit" class="btn btn-primary">{{__('Se connecter')}}</button>
                                <span style="font-size: 20;">{{__('Nouvel utilisateur?')}} <span class="register-btn" style="text-decoration: underline">{{__('Creer un Compte')}}
                                        </> </span>
                            </form>
                        </div>

                    </div>
                    {{-- Register Modal --}}
                    <div class="register-card">
                        <h3>{{__('Enregistrez-vous pour commenter')}}</h3>
                        <!-- cross to close the modal -->
                        <span class="fermer">
                            <i class="fas fa-times"></i>

                        </span>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('registerFromBlog') }}" enctype=" multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label">{{__('Nom')}}</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{__('Email')}}</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{__('Mot de passe')}}</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password-confirm" class="form-label">{{__('Confirmer le mot de passe')}}</label>
                                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
                                </div>

                                <button type="submit" class="btn btn-primary">{{__('Sinscrire')}}</button>
                                <span style="font-size: 20;">{{__('Deja un utilisateur?')}} <span class="login-btn" style="text-decoration: underline">{{__('Se connecter')}}</span> </span>
                            </form>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('comments.store') }}">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <textarea class="form-control  {{ auth()->check() ? '' : 'not-logged-in' }}" name="comment" required></textarea>
                        <button class="btn comment-button" type="submit">{{__('Ajouter un commentaire')}}</button>
                    </form>
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

<script>
    var elemen = document.querySelector('.not-logged-in');
    var loginModal = document.querySelector('.login-card');
    var registerModal = document.querySelector('.register-card');
    var closeBtn = document.querySelector('.close');
    var closeBtnR = document.querySelector('.fermer');
    var registerBtn = document.querySelector('.register-btn');

    registerModal.style.display = 'none';

    elemen.addEventListener('click', function(e) {
        e.preventDefault();
        if (elemen) {
            loginModal.style.display = 'block';
        }
    });
    closeBtnR.addEventListener('click', function(e) {
        e.preventDefault();
        // console.log(registerModal);
        registerModal.style.display = 'none'
    })
    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        loginModal.style.display = 'none';
    });
    //show register modal if the register btn is clicked
    registerBtn.addEventListener('click', function(e) {
        e.preventDefault();
        loginModal.style.display = 'none';
        registerModal.style.display = 'block';
    });
</script>
@endsection