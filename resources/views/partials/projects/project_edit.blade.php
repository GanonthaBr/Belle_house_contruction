@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container">
    <div class="container-fluid px-4">
    <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Entrer le nom du project: exemple: BH01" value="{{$project->name}}" >
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Entrer le type " value="{{$project->type}}" >
        </div>
        <div class="mb-3">
            <label for="area" class="form-label">Quartier:</label>
            <input type="text" class="form-control" id="area" name="area" placeholder="Entrer le quartier" value="{{$project->area}}" >
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">Ville:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Entrer la ville" value="{{$project->city}}" >
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country:</label>
            <input type="text" class="form-control" id="country" name="country" placeholder="Entrer le Pays" value="{{$project->country}}" >
        </div>

        <div class="mb-3">
            <label for="surface" class="form-label">Surface:</label>
            <input type="text" class="form-control" id="surface" name="surface" placeholder="Entrer la surface" value="{{$project->surface}}" >
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Annee:</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Entrer l'annee du projet" value="{{$project->year}}" >
        </div>
        <div class="mb-3">
            <label for="usage" class="form-label">usage:</label>
            <input type="text" class="form-control" id="usage" name="usage" placeholder="Entrer l'utilisation" value="{{$project->usage}}" >
        </div>
        <div class="mb-3">
            <label for="maitre_doeuvre" class="form-label">Maitre doeuvre:</label>
            <input type="text" class="form-control" id="maitre_doeuvre" name="maitre_doeuvre" placeholder="Maitre d'oeuvre" value="{{$project->maitre_doeuvre}}" >
        </div>
        <div class="mb-3">
            <label for="maitre_douvrage" class="form-label">Maitre douvrage:</label>
            <input type="text" class="form-control" id="maitre_douvrage" name="maitre_douvrage" placeholde="Maitre d'ouvrage" value="{{$project->maitre_douvrage}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" > {{$project->description}} </textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image"
        </div>
        {{-- more images --}}
        <div class="mb-3">
            <label for="images" class="form-label">Plus d'images</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Sauvegarder</button>
    </form>
    </div>
</div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection