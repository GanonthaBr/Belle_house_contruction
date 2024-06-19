  <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">NOTRE BLOG</span>
                    <h2 class="mb-4">Dernières mises à jour du blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($blogs as $blog)
                    
                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{route('blog.show',$blog->id)}}" class="block-20" style="background-image: url({{asset('storage/' . $blog->image)}});">
                        </a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                    <a><span class="fa fa-user mr-2"></span>{{$blog->author}}</a>
                                    <a class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="{{route('blog.show',$blog->id)}}"> {{$blog->title}}</a></h3>
                            <p><a href="{{route('blog.show',$blog->id)}}" class="btn btn-secondary py-2 px-3">Voir Plus+</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                    <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                    <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                            <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                    <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                    <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                            <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>