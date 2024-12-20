@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
  @include('partials.admin.sidebar')
  <!-- End Sidebar -->
  <div class="main-panel">
    @include('partials.admin.mainheader')
<div class="container">
    <div class="container-fluid px-4">
    <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$service->title}}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea  class="form-control" id="description" name="description" required> {{$service->description}} </textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        {{-- more images --}}
        <div class="mb-3">
            <label for="images" class="form-label">Plus d'images</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Publier</button>
    </form>
    </div>
</div>
@include('partials.admin.footer')
  </div>
</div>
@endsection