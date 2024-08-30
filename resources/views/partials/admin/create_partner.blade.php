@extends('layouts.layout_asset')
@section('content-show')
<main class="container">
    {{-- create a form to add new partner with title, image and content --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">Ajouter un partner</h1>
        {{-- display success message if partner is created --}}
        @if (session()->has('partner-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('partner-created') }}
        </div>
        @endif
        {{-- create form --}}
        <form action="{{ route('partner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
</main>
@endsection