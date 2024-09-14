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
                        <td>Nom</td>
                        <td>Superficie</td>
                        <td>Annee</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->name}}</td>
                        <td>{{$project->area}}</td>
                        <td>{{$project->year}}</td>
                        <td>
                            <button class="btn btn-info"> <a href="{{route('project.edit', $project->id)}}" style="color: #fff; font-weight:bold">Modifier</a> </button>
                            <button class="btn btn-danger"> <a href="{{route('project.destroy', $project->id)}}" style="color: #fff; font-weight:bold">Supprimer</a> </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('project.create')}}" class="btn btn-primary">Ajouter un nouveau projet </a>
        </div>
        <div class="col-md-0">
        </div>
    </div>

</div>
@endsection