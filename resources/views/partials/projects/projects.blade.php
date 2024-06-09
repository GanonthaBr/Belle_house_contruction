    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">NOS SECTEURS DE TRAVAUX D’ENVERGURE</span>
                    <h2 class="mb-4">Derniers projets</h2>
                </div>
            </div>
            <div class="row">
                 @foreach ($projects as $project)
            <div class="col-md-4">
                <div class="project">
                    <a href="{{route('project.show',$project->id)}}" class="img d-flex align-items-center" style="background-image: url({{asset('storage/' . $project->image)}});">
                        <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                    </a>
                    <div class="text">
                        <span class="subheading">{{$project->type}}</span>
                        <h3>{{$project->name}}</h3>
                        <p><span class="fa fa-map-marker mr-1"></span> {{$project->area }}, {{$project->city}}, {{$project->country}}</p> 
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>