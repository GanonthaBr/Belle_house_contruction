@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container">
            <form action="{{ route('stats.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="projets" class="form-label">Projets:</label>
                    <input type="text" class="form-control" id="projets" name="projets" required value="{{$stats->projets}}" >
                </div>
                <div class="mb-3">
                    <label for="clients" class="form-label">Clients:</label>
                    <input type="text" class="form-control" id="clients" name="clients"  required value="{{$stats->clients}}" >
                </div>
                
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </form>
        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection