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
                 {{-- display success message if blog is created --}}
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
                        @foreach ($stats as $about)
                            
                       
                            <tr>
                                <td>{{$about->projects}}</td>
                                <td>{{$about->clients}}</td>
                               
                            </tr>
                        
                        @endforeach
                        </tbody>
                        
                    </table>
                   <div>
                    <a href="{{route('stats.edit',$about->id)}}">Mettre à jour les infos</a>
                   </div>
                </div>
                <div class="container pt-4 pb-4">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-4 pb-4">
                    <h3>About </h3> <br>
                </div>
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 25%;"> Titre</th>
                                <th style="width: 25%;">Description</th>
                                <th style="width: 25%;">Vision</th>
                                <th style="width: 25%;">Mission</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                       @foreach ($abouts as $about)
                           
                    
                            <tr>
                                <td>{{$about->title}}</td>
                                <td>{{$about->description}}</td>
                                <td>{{$about->vision}}</td>
                                <td>{{$about->mission}}</td>
                               
                            </tr>
                        
                        
                        </tbody>
                        
                    </table>
                   <div>
                    <a href="{{route('about.edit',$about->id)}}">Mettre à jour les infos</a>
                   </div>
                </div>
                 @endforeach
            </div>


        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection