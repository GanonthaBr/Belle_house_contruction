@extends('layouts.layout_asset')
@section('content-show')
    <p>{{$project->name}}</p>
    @foreach ($project->images as $image)
        <div>
            <img src="{{ asset('storage/' . $image->image) }}" alt="{{'image number ' . $image->id}}">
        </div>
    @endforeach
@endsection