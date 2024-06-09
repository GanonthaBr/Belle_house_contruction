@extends('layouts.layout_asset');
@section('content-show')


<div class="ftco-section half-light">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <h2>{{$service->title}}</h2>
            <img src="{{asset('storage/' . $service->image)}}" alt="{{$service->id}}" height="200" width="400">
        </div>
        <div class="col-md-6 m-4">
            <p>{{$service->description}}</p>
        </div>
    </div>
    <div class="container">
        <h3>Autre Services</h3>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-md-2 more-service">
                <a href="{{route('service.show', $service->id)}}" class="btn btn-custom">{{ $service->title}}</a>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection