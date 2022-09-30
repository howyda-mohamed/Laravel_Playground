@extends('layouts.site')
@section('content')
<div class="section-two"id="playgrounds">
    <div class="container">
        <h4 style="margin-top: 50px;" class="h4-head">Playgrounds Club</h4>
        @if (Session::has('status'))
        <div class="alert alert-success">{{ Session::get('status') }}</div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <h2 style="font-size: 32px;">Playgrounds</h2>
        <p style="text-align: center;padding-bottom: 20px;padding-top:5px">Browse all the available playgrounds and make a reservation.</p>
        <div class="dashed"></div>
        <div class="row">
            @foreach ($playgrounds as $play)
            <div class="col-md-6">
                <a href="{{ route('reservation.show',$play->id) }}">
                <figure  data-aos="fade-right"data-aos-delay="100">
                    <div class="con-img">
                        <img src="{{asset($play->image)}}" alt="">
                    </div>
                    <div class="fle-hr">
                        <div class="h3-p">
                            <h3>{{$play->title}}</h3>
                            <p>{{$play->center->title}}</p>
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
@endsection
