@extends('layouts.layout_asset')
@section('content-show')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('images/banner-1.png')}}')" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Nos projects <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Nos realisations -> Ajouter</h1>
            </div>
        </div>
    </div>
</section>

    <div class="container">
     <form action="{{ route('realisation.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Entrer le nom du project: exemple: BH01" required>
            </div>
            <div class="mb-3">
                <label for="task" class="form-label">Tache:</label>
                <input type="text" class="form-control" id="task" name="task" placeholder="Entrer la tache effectuee " required>
            </div>
            <div class="mb-3">
                <label for="area" class="form-label">Quartier:</label>
                <input type="text" class="form-control" id="area" name="area" placeholder="Entrer le quartier" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Ville:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Entrer la ville" required>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Pays:</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Entrer le Pays" required>
            </div>
           
            {{-- <div class="mb-3">
                <label for="surface" class="form-label">Surface:</label>
                <input type="text" class="form-control" id="surface" name="surface" placeholder="Entrer la surface" required>
            </div> --}}
            <div class="mb-3">
                <label for="year" class="form-label">Annee:</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Entrer l'annee du projet" required>
            </div>
            {{-- <div class="mb-3">
                <label for="usage" class="form-label">usage:</label>
                <input type="text" class="form-control" id="usage" name="usage" placeholder="Entrer l'utilisation" required>
            </div> --}}
            <div class="mb-3">
                <label for="maitre_doeuvre" class="form-label">Maitre doeuvre:</label>
                <input type="text" class="form-control" id="maitre_doeuvre" name="maitre_doeuvre" placeholder="Maitre d'oeuvre" required>
            </div>
            {{-- <div class="mb-3">
                <label for="maitre_douvrage" class="form-label">Maitre douvrage:</label>
                <input type="text" class="form-control" id="maitre_douvrage" name="maitre_douvrage" placeholde="Maitre d'ouvrage" required>
            </div> --}}
            <div class="mb-3">
                <label for="video" class="form-label">Lien de la video:</label>
                <textarea type="text" class="form-control" id="video" name="video" placeholder="Lien Youtube de la video"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
             {{-- more images --}}
            <div class="mb-3">
                <label for="images" class="form-label">Plus d'images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Publier</button>
    </form>
</div>
@endsection