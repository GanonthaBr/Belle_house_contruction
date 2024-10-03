@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container ml-4">
            <div class="page-inner">
                  {{-- Session message display --}}
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
                @endif
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-4 pb-4">
                    <h3>Les Statistiques </h3> <br>
                </div>
                <div class="container pt-4 pb-4">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 50%;"> Projets Terminés</th>
                                <th style="width: 50%;">Clients satisfaits</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($stats as $stat)
                            
                       
                            <tr>
                                <td>{{$stat->projects}}</td>
                                <td>{{$stat->clients}}</td>
                               
                            </tr>
                        
                        @endforeach
                        </tbody>
                        
                    </table>
                   <div>
                    <a href="{{route('stats.edit',$stat->id)}}">Mettre à jour les infos</a>
                   </div>
                </div>
            </div>


        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection