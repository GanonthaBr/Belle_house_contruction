@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container">
            <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <h1 class="mt-4">Modifications les statistiques</h1>
                    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre:</label>
                            <input type="text" class="form-control" id="title" name="title" required value="{{$about->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Clients:</label>
                            <input type="text" class="form-control" id="description" name="description" required value="{{$about->description}}">
                        </div>
                        <div class="mb-3">
                            <label for="vision" class="form-label">Vision:</label>
                            <input type="text" class="form-control" id="vision" name="vision" required value="{{$about->vision}}">
                        </div>
                        <div class="mb-3">
                            <label for="mission" class="form-label">Clients:</label>
                            <input type="text" class="form-control" id="mission" name="mission" required value="{{$about->mission}}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" multiple>
                        </div>

                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </form>
                </div>
            </div>
        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection