@extends('layouts.site')
@section('content')
<div class="booked">
    <div class="container">
        <h4 class="h4-head">Playgrounds Club</h4>
        <h3 style="font-size: 32px">{{ $playgrounds->title }}</h3>
        <p class="first">all age mini football field for private and completitive games </p>
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <div class="con-img">
                            <img src="{{ asset($playgrounds->image) }}"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="con-p">
                        <p>{{ $playgrounds->description }}</p>
                        <h5>{{ $playgrounds->price }} $ hr
                        </h5>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="con-date">
                        <h4>Booking Details</h4>
                        <form action="{{ route('reservation.store',$playgrounds->id) }}" method="post">
                            @csrf
                            <div class="for-date">
                                <p>Date</p>
                                <input name="date" type="date">
                            </div>
                            @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                                <div class="for-time">
                                    <p>Time</p>
                                    <div class="fle-time">
                                        <div class="from">
                                            <span>From</span><input name="time" type="time">
                                        </div>
                                        @error('time')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                        </div>
                                    </div>
                                        <div class="fle-total">
                                            <p>Hours</p>
                                            <div class="form"><input type="number" name="hours" placeholder="Enter Hours"></div>
                                        </div>
                                        @error('hours')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                <button class="next-to-pay">Next</button>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="con-location">
                        <h4>Location Details</h4>
                        <div class="con-details">
                            <div> {{ $playgrounds->center->title }}</div>
                            <div> <i class="fa fa-map-marker-alt"></i>{{ $playgrounds->center->location }}</div>
                            <div class="phone">
                                    <p><i class="fas fa-phone"></i>Phone</p>
                                    <span>{{ $playgrounds ->phone }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
