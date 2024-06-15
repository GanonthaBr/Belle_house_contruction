<section class="">
    <div class="partners-container container">

        <div class="row  section-title pb-3 mb-5 mx-auto">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">Nos Partenaires </span>
                <h2 class="mb-4">Nos different partneraires</h2>
            </div>

        </div>

        <div class="partners-scroll">
            @foreach ($partners as $partner)
            <div class="partner-item">
                <img src="{{asset('storage/' . $partner->image)}}" alt="{{$partner->name}}">
            </div>
            @endforeach
        </div>
    </div>
</section>