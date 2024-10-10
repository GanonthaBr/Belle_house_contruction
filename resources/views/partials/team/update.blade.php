@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container">
            <form action="{{ route('team.update',$team->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name"  value="{{$team->name}}" required>
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position:</label>
                    <input type="text" class="form-control" id="position" name="position" value="{{$team->position}}" required>
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">Quartier:</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{$team->facebook}}" required>
                </div>
                <div class="mb-3">
                    <label for="twitter" class="form-label">Ville:</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{$team->twitter}}" required>
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">Pays:</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$team->linkedin}}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Annee:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$team->email}}" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Maitre doeuvre:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$team->phone}}" required>
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