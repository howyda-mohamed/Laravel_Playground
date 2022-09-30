@extends('layouts.site')
@section('content')
<div class="sports-center">

    <div class="container">
        <h4 class="h4-head">Playgrounds Club</h4>

    <h3 id="h3center">Sport Centers</h3>
    <p class="first">See all sport centers that we operate and books a playground.</p>
        <div class="row">
            @foreach ($centers as $center )
            <div class="col-lg-6">
                <div class="Mainsport">
                    <figure>
                        <div class="con-img">
                            <img src="{{asset($center->image)}}"/>
                        </div>
                        <figcaption>
                            <h4>{{$center->title}}</h4>
                            <h5>{{$center->play_number}} Plagygrounds</h5>
                            <p>{{$center->location}}</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
