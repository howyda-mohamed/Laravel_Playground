@extends('layouts.site')
@section('content')
<!-- start section carousel -->
<div class="section-one"id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active height-img">
            <img src="{{asset('assets/front/img/one.jfif')}}" class="d-block w-100 h-100" alt="...">
            <div class="carousel-caption  d-md-block">
            <h2>Book A Playground</h2>
            <p>Find A playground for any sport.</p>
            <button><a href="playgrounds.html">View Playgrounds</a></button>
            </div>
        </div>
        <div class="carousel-item height-img">
            <img src="{{asset('assets/front/img/banner2.png')}}" class="d-block w-100 h-100" alt="...">
            <div class="carousel-caption  d-md-block">
                <h2>Read About Us</h2>
                <p>Know more about our company.</p>
                <button><a href="#about_us">About Us</a></button>
            </div>
        </div>
        <div class="carousel-item height-img">
            <img src="{{asset('assets/front/img/offer.png')}}
            " class="d-block w-100 h-100" alt="...">
            <div class="carousel-caption  d-md-block">
                <h2>Contact Us</h2>
                <p>We work 24/7 for you !</p>
                <button><a href="contact.html">Contact Us</a></button>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- start section book a play ground -->
<div class="section-two"id="playgrounds">
    <div class="container">
        <h2 style="font-size: 32px">Book Your Prefered Playground</h2>
        <div class="row">
            @foreach ($playgrounds as $play)
            <div class="col-md-6">
                <figure  data-aos="fade-right"data-aos-delay="100">
                    <div class="con-img">
                        <img src="{{asset($play->image)}}" alt="">
                    </div>
                    <div class="fle-hr">
                        <div class="h3-p">
                            <h3 style="font-size: 22px">{{$play->title}}</h3>
                            <p style="font-size: 22px">{{$play->center->title}}</p>
                        </div>
                        <span class="price">{{$play->price}}$ hr</span>
                    </div>
                </figure>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- start section Services -->
<div class="section-three"id="sport_centers">
    <div class="container">
        <h2  style="font-size: 32px">Services</h2>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-md-6">
                <div class="fle-icon-p" data-aos="fade-up"data-aos-delay="100">

                    <div class="con-h3-p">
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- start section staff -->
<div class="staff">
    <div class="container">
        <h3 style="font-size: 32px" class="first">Our Staff</h3>
        <div class="row">
            @foreach ($staffs as $staff)
            <div class="col-lg-4 col-md-6">
                <figure data-aos="fade-up"data-aos-delay="100">
                    <div class="con-img"><img src="{{asset($staff->image)}}" alt=""></div>
                    <figcaption>
                        <h3>Captine : {{ $staff->name }}</h3>
                        <p  style="font-size: 22px">{{ $staff->job }}</p>
                    </figcaption>
                </figure>
            </div>
            @endforeach

        </div>
    </div>
</div>

<!-- start section about us -->
<div class="section-four" id="about_us">
    <div class="container">
        <h2>{{ $settings->title }}</h2>
        <p class="head">{{ $settings->sub_title }}</p>
        <div class="dashed"></div>
        <div class="con-p">
            <p>{{ $settings->description }}</p>
        </div>
    </div>
</div>
<!-- full page with navbar -->

@endsection
