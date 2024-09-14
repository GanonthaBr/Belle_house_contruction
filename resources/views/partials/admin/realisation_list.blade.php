@extends('layouts.admin_main')
@section('adminmain')
<div class="container ml-4">
    <h1>Liste de toutes les Realisations</h1>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-10">
            @if($realisations->count())
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
                    @foreach ($realisations as $realisation)
                    <tr>
                        <td>{{$realisation->name}}</td>
                        <td>{{$realisation->area}}</td>
                        <td>{{$realisation->year}}</td>
                        <td>
                            <button class="btn btn-info"> <a href="{{route('realisation.edit', $realisation->id)}}" style="color: #fff; font-weight:bold">Modifier</a> </button>
                            <button class="btn btn-danger"> <a href="{{route('realisation.destroy', $realisation->id)}}" style="color: #fff; font-weight:bold">Supprimer</a> </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('realisation.create')}}" class="btn btn-primary">Ajouter un nouvelle Realisation </a>
            @else
                <p class="txt text-bg-warning" >Aucune realisation trouvé</p>
            @endif
        </div>
        <div class="col-md-0">
        </div>
    </div>

</div>
@endsection