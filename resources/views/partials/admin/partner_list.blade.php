@extends('layouts.admin_main')
@section('adminmain')
<div class="container ml-4">
    <h1>Liste de tous les Partenaires</h1>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-10">
            @if($partners->count())
            <table style="padding-left: 5rem">
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partners as $partner)
                    <tr>
                        <td>{{$partner->title}}</td>
                        <td>{{substr($partner->description,0,50)}}</td>
                        
                        <td>
                            <button class="btn btn-info"> <a href="{{route('partner.edit', $partner->id)}}" style="color: #fff; font-weight:bold">Modifier</a> </button>
                            <button class="btn btn-danger"> <a href="{{route('partner.destroy', $partner->id)}}" style="color: #fff; font-weight:bold">Supprimer</a> </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('partner.create')}}" class="btn btn-primary">Ajouter un nouveau partenaire </a>
            @else
                <p class="txt text-bg-warning" >Aucun partenaire trouvé</p>
            @endif
        </div>
        <div class="col-md-0">
        </div>
    </div>

</div>
@endsection