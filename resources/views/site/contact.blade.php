@extends('layouts.site')
@section('content')
<div class="contact-us">
    <div class="container">
        <h4 class="h4-head">Playgrounds Club</h4>
        <h3>Contact Us</h3>
        <p>Fill in the contact form below or drop us an email and we will be happy to assist you with any questions you may have about our company</p>
        @if (Session::has('status'))
        <div class="alert alert-success">{{ Session::get('status') }}</div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <div class="con-form">
            <form action="{{ route("store.contact") }}" method="post">
                @csrf
                <div class="input">
                    <label>Name</label><input type="text" name="name"  dir="auto">
                </div>
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="input">
                    <label>Email</label> <input type="email" name="email" >
                </div>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <textarea name="message" id="" cols="30" rows="10"  placeholder="Your message"></textarea>
                @error('message')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <button>Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
