@extends('layouts.admin_main')
@section('adminmain')
<div class="container ml-4">
    <h1>Liste de tous les Projets</h1>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-10">
            <table style="padding-left: 5rem">
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td>{{$service->title}}</td>
                        <td>{{substr($service->description,0,50)}}</td>
                        
                        <td>
                            <button class="btn btn-info"> <a href="{{route('service.edit', $service->id)}}" style="color: #fff; font-weight:bold">Modifier</a> </button>
                            <button class="btn btn-danger"> <a href="{{route('service.destroy', $service->id)}}" style="color: #fff; font-weight:bold">Supprimer</a> </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('service.create')}}" class="btn btn-primary">Ajouter un nouveau projet </a>
        </div>
        <div class="col-md-0">
        </div>
    </div>

</div>
@endsection