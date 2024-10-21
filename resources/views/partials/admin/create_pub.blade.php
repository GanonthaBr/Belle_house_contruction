@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container">
            {{-- create a form to add new blog with title, image and content --}}
            <div class="container-fluid px-4">
                <h1 class="mt-4">Ajouter un blog</h1>
                {{-- display success message if blog is created --}}
                @if (session()->has('error'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('error') }}
                </div>
                @endif
                {{-- create form --}}
                <form action="{{ route('pub.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection