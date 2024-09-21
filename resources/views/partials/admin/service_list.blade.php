@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container ml-4">
            <h1>Liste de tous nos Services</h1>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                    @if($services->count())
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
                                    <form id="deleteForm{{$service->id}}" action="{{ route('service.destroy', $service->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger confirm-delete" data-form="deleteForm{{$service->id}}" data-toggle="modal" data-target="#deleteModal{{$service->id}}" />
                                    </form>
                                    <!-- <button class="btn btn-danger">
                                        <a href="{{route('service.destroy', $service->id)}}" style="color: #fff; font-weight:bold">Supprimer</a>
                                    </button> -->
                                </td>
                            </tr>
                            @endforeach
                            <div class="modal fade" id="deleteModal{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirmer! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Voulez-vous vraiment supprimer ce Services ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler </button>
                                            <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$service->id}}">OUI </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                    <a href="{{route('service.create')}}" class="btn btn-primary">Ajouter un nouveau service </a>
                    @else
                    <p class="txt text-bg-warning">Aucun service trouvé</p>
                    <a href="{{route('service.create')}}" class="btn btn-primary">Ajouter un nouveau service </a>
                    @endif
                </div>
                <div class="col-md-0">
                </div>
            </div>

        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection