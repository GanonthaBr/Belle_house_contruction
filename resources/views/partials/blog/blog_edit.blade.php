@extends('layouts.admin_main')
@section('adminmain')

<div class="container">
    <div class="page-inner">
          {{-- create a form to add new blog with title, image and content --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">Modifier un blog</h1>
        {{-- display success message if blog is created --}}
        @if (session()->has('blog-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('blog-created') }}
        </div>
        @endif
        {{-- create form --}}
        <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')

            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}" >
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Auteur:</label>
                <input type="text" class="form-control" id="author" name="author" value="{{$blog->author}}"  >
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
             {{-- more images --}}
            <div class="mb-3">
                <label for="images" class="form-label">Plus d'images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenu</label>
                {{-- <textarea class="form-control" id="content" name="content" rows="3"></textarea> --}}
                <textarea class="form-control" id="content" name="content" rows="3"  > {{$blog->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Sauvegarder</button>
        </form>
    </div>
</div>
@endsection
