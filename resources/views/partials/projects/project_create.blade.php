@extends('layouts.layout')

@section('content')
    <div class="container">
     <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Entrer le nom du project: exemple: BH01" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type:</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Entrer le type " required>
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
                <label for="country" class="form-label">Country:</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Entrer le Pays" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Publier</button>
    </form>
</div>
@endsection