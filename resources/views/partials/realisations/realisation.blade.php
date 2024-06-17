    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">NOS SECTEURS DE TRAVAUX D’ENVERGURE</span>
                    <h2 class="mb-4">Dernieres Realisations</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($realisations as $realisation)
                    <div class="col-md-4">
                    <div class="project">
                        <a href="{{asset('storage/' . $realisation->image)}}" class="img image-popup d-flex align-items-center" style="background-image: url({{asset('stoarge/' . $realisation->image)}});">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading"> {{$realisation->title}} </span>
                            <h3>{{$realisation->type}}</h3>
                            <p><span class="fa fa-map-marker mr-1"></span>{{$realisation->area}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </section>