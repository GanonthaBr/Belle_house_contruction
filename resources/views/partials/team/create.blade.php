@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container">
            <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrer le nom" >
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position:</label>
                    <input type="text" class="form-control" id="position" name="position" >
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook:</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Entrer le lien du compte Facebook (optionel) " >
                </div>
                <div class="mb-3">
                    <label for="twitter" class="form-label">Twiiter:</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Entrer le lien du compte Twitter (optionel) " >
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">LinkedIn:</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Entrer le lien du compte LinkedIn (optionel) " >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Entrer l'adresse email" >
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Numero de phone" >
                </div>
               
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection