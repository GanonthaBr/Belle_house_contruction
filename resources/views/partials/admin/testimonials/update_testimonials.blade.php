@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container">
            <div class="container-fluid px-4">
                <h1 class="mt-4">Ajouter un Temoignage</h1>
                <form action="{{ route('testimonial.update',$testimonial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom:</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{$testimonial->name}}" >
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Contenu:</label>
                        <input type="text" class="form-control" id="message" name="message" required value="{{$testimonial->message}}" >
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image:</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </form>
            </div>
        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection