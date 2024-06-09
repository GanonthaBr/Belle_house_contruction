 <section class="ftco-section bg-half-light " id="services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Nos Services</span>
                    <h2 class="mb-4">Nous offrons des services</h2>
                </div>
            </div>
            <div class="row">
               @foreach ($services as $service)
                    <div class="col-md-4">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url({{asset('storage/' . $service->image)}});"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-architect"></span></div>
                            <h2>{{$service->title}}</h2>
                            <p>
                            {{substr($service->description,0,110)}}...
                            </p>
                            <a href="{{route('service.show',$service->id)}}" class="btn-custom">Voir Plus+</a>
                        </div>
                    </div>
                </div>
               @endforeach
                {{-- <div class="col-md-4">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url(images/services_Renovation.png);"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-worker"></span></div>
                            <h2>Renovation</h2>
                            <p>Transformez vos espaces ou projets existants en chefs-d'œuvre modernes avec notre service de rénovation. </p>
                            <a href="#" class="btn-custom">Voir Plus+</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url(images/services_Construction.png);"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-hammer"></span></div>
                            <h2>Construction</h2>
                            <p>Du concept à la réalisation, notre service de construction assure une exécution impeccable de vos projets.</p>
                            <a href="#" class="btn-custom">Voir Plus+</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>