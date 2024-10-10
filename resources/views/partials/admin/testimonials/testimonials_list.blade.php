@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container ml-4">
            <div class="page-inner">
                
                 {{-- display success message if testimonial is created --}}
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
                    <h3>Les Temoignages </h3> <br>
                </div>
                <div class="container pt-4 pb-4">
                    @if ($testimonials->count())
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 33.33%;"> Nom du client</th>
                                <th style="width: 33.33%;">Contenu</th>
                                <th style="width: 33.33%;">Actions</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>{{$testimonial->name}}</td>
                                <td>{{$testimonial->message}}</td>
                                <td>
                                    <a href="{{route('testimonial.edit', $testimonial->id)}}" class="btn btn-primary">Modifier</a>
                                    <form id="deleteForm{{$testimonial->id}}" action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger confirm-delete" data-form="deleteForm{{$testimonial->id}}" data-toggle="modal" data-target="#deleteModal{{$testimonial->id}}" />
                                    </form>
                                </td>
                            </tr>
                             <!-- Delete Confirmation Modal -->
                            <div class="modal fade" id="deleteModal{{$testimonial->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirmer! </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Voulez-vous vraiment supprimer ce temoignage ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler </button>
                                            <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$testimonial->id}}">OUI </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       
                        </tbody>
                        
                    </table>
                    @else
                    <div class="alert alert-info" role="alert">
                        Aucun temoignage n'a été trouvé
                    </div>
                    @endif
                  
                </div>
                <div class="">
                    <a href="{{route('testimonial.create')}}" class="btn btn-primary">Ajouter un temoignage</a>
                </div>
               
            </div>


        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection