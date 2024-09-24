@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container ml-4">
            <h1>Liste de tous les messages reçus</h1>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                    @if($messages->count())
                    <table style="padding-left: 5rem">
                        <thead>
                            <tr>
                                {{-- 'topic', 'nom', 'content', 'email' --}}
                                <td>Topic</td>
                                <td>Content</td>
                                <td>Email</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                            <tr>
                                <td>{{$message->topic}}</td>
                                <td>{{substr($message->content,0,50)}}</td>
                                <td>{{$message->email}}</td>
                                <td>
                                    <button class="btn btn-info"> <a href="{{route('message.show', $message->id)}}" style="color: #fff; font-weight:bold">Modifier</a> </button>
                                    <form id="deleteForm{{$message->id}}" action="{{ route('message.destroy', $message->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger confirm-delete" data-form="deleteForm{{$message->id}}" data-toggle="modal" data-target="#deleteModal{{$message->id}}" />
                                    </form>
                                   
                                </td>
                            </tr>
                            @endforeach
                            <div class="modal fade" id="deleteModal{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirmer! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Voulez-vous vraiment supprimer ce messages ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler </button>
                                            <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$message->id}}">OUI </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                    
                    @else
                    <p class="txt text-bg-warning">Aucun message trouvé</p>
                    
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