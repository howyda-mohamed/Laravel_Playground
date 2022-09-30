<!-- start section contact us -->
<div class="section-six">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"data-aos="fade-right"data-aos-delay="100">
                <div class="phone">
                    <i class="fas fa-phone"></i>
                    <div class="con-h3-p">
                        <h3>Call Us</h3>
                        <p>{{ $settings->phone }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"data-aos="fade-up"data-aos-delay="100">
                <div class="location">
                    <i class="fa fa-map-marker-alt"></i>
                    <div class="con-h3-p">
                        <h3>{{ $settings->location }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"data-aos="fade-left"data-aos-delay="100">
                <div class="email">
                    <i class="fas fa-envelope"></i>
                    <div class="con-h3-p">
                        <h3>Or Send Us Message</h3>
                        <p>{{ $settings->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start section social and copyright -->
<div class="section-seven">
    <div class="container">
        <div class="con-p-socials">
            <p>&copy;2020 Playground Name | All rights reserved</p>
            <ul>
                <li><img src="{{ asset('assets/front/img/youtube.png') }}"/></li>
                <li><img src="{{ asset('assets/front/img/facebook.png')}}"/></li>
                <li><img src="{{ asset('assets/front/img/twitter.png')}}"/></li>

            </ul>
        </div>
    </div>
</div>
