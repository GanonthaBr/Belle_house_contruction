<section class="hero-wrap js-fullheight" style="background-image: url('public/images/bank.png'); height:1000px; z-index:9999" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true" >
            <div class="col-lg-10 col-sm-8 ftco-animate">
                <div class="mt-5">
                    <h1 class="mb-4" style="font-size: 2.7rem ;  "> <b>L’ÉLÉGANCE</b> <br>ET <b>LE CONFORT</b> DE NOS RÉALISATIONS</h1>
                    <p class="mb-4">
                        Transformez vos <b>rêves en réalité</b>, n’est qu’un aperçu de notre <b>savoir-faire</b> et de <br> notre passion pour l'architecture et la construction moderne.
                    </p>
                    <p><a href="#services" class="btn btn-primary">NOS SERVICES</a> <a href="#" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter">AVEZ-VOUS UN PROJET ?</a></p>
                </div>
            </div>
            @if ($alaune->count())
            <div class="col-lg-2 col-sm-4 ">
                <div class="card" style="background: #fff; height:300px;width:250px; margin-left:1rem;margin-top:0" >
                    <div class="card-body">
                        @foreach ($alaune as $item)
                        <img src="{{asset('storage/'.$item->image)}}" alt="" height="300" width="250">
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>