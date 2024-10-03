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
                                <th style="width: 50%;">Projets Termines</th>
                                <th style="width: 50%;">Clients satisfaits</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>{{$stats->projets}}</td>
                                <td>{{$stats->clients}}</td>
                               
                            </tr>
                        
                           
                        </tbody>
                    </table>
                   
                </div>
            </div>


        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection