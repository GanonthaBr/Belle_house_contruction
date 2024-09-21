@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
     <div class="container">
    {{-- create a form to add new partner with title, image and content --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">Modifier un partner</h1>
        {{-- display success message if partner is created --}}
        @if (session()->has('partner-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('partner-created') }}
        </div>
        @endif
        {{-- create form --}}
        <form action="{{ route('partner.update',$partner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- display error message if there are any validation errors --}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$partner->name}}">
            </div>

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