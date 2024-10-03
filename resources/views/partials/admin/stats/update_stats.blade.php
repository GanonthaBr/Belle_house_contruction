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
                    <h1 class="mt-4">Modifier les statistiques</h1>
                    <form action="{{ route('stats.update', $stats->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="projets" class="form-label">Projets:</label>
                            <input type="text" class="form-control" id="projets" name="projets" required value="{{$stats->projects}}">
                        </div>
                        <div class="mb-3">
                            <label for="clients" class="form-label">Clients:</label>
                            <input type="text" class="form-control" id="clients" name="clients" required value="{{$stats->clients}}">
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