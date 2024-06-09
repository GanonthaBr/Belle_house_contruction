@extends('layouts.layout');
@section('content')


<div class="ftco-section half-light">
    <div class="container">
        <h2>{{$service->title}}</h2>

        <div class="col-md-6">
            <img src="{{'storage/' . $service->image}}" alt="{{$service->id}}">
        </div>
        <div class="col-md-6">
            <p>{{$service->description}}</p>
        </div>
    </div>
</div>

@endsection