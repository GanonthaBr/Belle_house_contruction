@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container ml-4">
            <div class="page-inner">
                
                 {{-- display success message if team is created --}}
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
                @elseif (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
                @endif
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-4 pb-4">
                    <h3>Liste de l'Equipe </h3> <br>
                </div>
                <div class="container pt-4 pb-4">
                    @if ($teams->count())
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 24.24%;"> Nom</th>
                                <th style="width: 24.24%;">Position</th>
                                <th style="width: 24.24%;">Email</th>
                                <th style="width: 24.24%;">Actions</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{$team->name}}</td>
                                <td>{{$team->postion}}</td>
                                <td>{{$team->email}}</td>
                                <td>
                                    <a href="{{route('team.edit', $team->id)}}" class="btn btn-primary">Modifier</a>
                                    <form id="deleteForm{{$team->id}}" action="{{ route('team.destroy', $team->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger confirm-delete" data-form="deleteForm{{$team->id}}" data-toggle="modal" data-target="#deleteModal{{$team->id}}" />
                                    </form>
                                </td>
                            </tr>
                             <!-- Delete Confirmation Modal -->
                            <div class="modal fade" id="deleteModal{{$team->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirmer! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Voulez-vous vraiment supprimer ce membre de l'equipe ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler </button>
                                            <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$team->id}}">OUI </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       
                        </tbody>
                        
                    </table>
                    @else
                    <div class="alert alert-info" role="alert">
                        Aucun membre n'a été trouvé
                    </div>
                    @endif
                  
                </div>
                <div class="">
                    <a href="{{route('team.create')}}" class="btn btn-primary">Ajouter une nouvelle personne</a>
                </div>
               
            </div>


        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection