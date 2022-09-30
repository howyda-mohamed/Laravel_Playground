@extends('layouts.admin')
@section('content')
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                    <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title">Basic Form Elements</h3>
                <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
            </div>
            <div class="card">
                <h5 class="card-header">Update Sport Center</h5>
                <div class="card-body">
                    <form action="{{route('admin.center.update',$centers->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Title</label>
                            <input id="inputText3" type="text" placeholder="Enter Title" value="{{$centers->title}}" name="title" class="form-control">
                        </div>
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Location</label>
                            <textarea class="form-control" name="location" id="exampleFormControlTextarea1" rows="3">{{$centers->location}}</textarea>
                        </div>
                        @error('location')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Phone</label>
                            <input id="inputText3" type="text" placeholder="Enter Phone" value="{{$centers->phone}}" name="phone" class="form-control">
                        </div>
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Playground Numbers</label>
                            <input id="inputText3" type="number" value="{{$centers->play_number}}" placeholder="Enter Number" name="play_number" class="form-control">
                        </div>
                        @error('play_number')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <img src="{{asset($centers->image)}}" width="100px" height="100px"/>
                        <div class="custom-file mb-3">
                            <input type="file" name="image" value="{{$centers->image}}" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">File Input</label>
                        </div>

                        <div class="form-group">
                            <button name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
