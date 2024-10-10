<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Notre Equipe</span>
                <h2 class="mb-4">Notre Equipe</h2>
            </div>
        </div>
        <div class="row">
            @if ($teams->count())
            @foreach ($teams as $team)
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-1.html);">
                            <div class="box">
                                <h2>{{$team->name}}</h2>
                                <p>{{$team->position}}</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;{{$team->email}} &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="{{asset('public/storage/' . $team->image)}}" alt="{{$team->name}}">
                                </div>
                                <div class="name align-self-center ml-3">{{$team->name}}<span class="position">{{$team->position}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="alert alert-danger" role="alert">
                Aucun membre de l'équipe trouvé
            </div>
            @endif

            {{-- <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-2.html);">
                            <div class="box">
                                <h2>Greg Washer</h2>
                                <p>Head Engineer</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-2.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Greg Washer<span class="position">Head Engineer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-3.html);">
                            <div class="box">
                                <h2>Tony Henderson</h2>
                                <p>Ass. Engineer</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-3.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Tony Henderson <span class="position">Ass. Engineer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-4.html);">
                            <div class="box">
                                <h2>Jack Smith</h2>
                                <p>Architect</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-4.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Jack Smith <span class="position">Architect</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-5.html);">
                            <div class="box">
                                <h2>Ryan Anderson</h2>
                                <p>President</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-5.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Ryan Anderson <span class="position">President</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-6.html);">
                            <div class="box">
                                <h2>Greg Washer</h2>
                                <p>Chief Executive Officer</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-6.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Greg Washer<span class="position">Chief Executive Officer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-7.html);">
                            <div class="box">
                                <h2>Tony Henderson</h2>
                                <p>Contractor Operation Head</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-7.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Tony Henderson <span class="position">Contractor Operation Head</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../../images/team-8.html);">
                            <div class="box">
                                <h2>Jack Smith</h2>
                                <p>Chief Financial Officer</p>
                            </div>
                        </div>
                        <div class="back">

                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="images/team-8.jpg" alt>
                                </div>
                                <div class="name align-self-center ml-3">Jack Smith <span class="position">Chief Financial Officer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>