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
                <h5 class="card-header">Edit PlayGround</h5>
                <div class="card-body">
                    <form action="{{route('admin.playground.update',$playgrounds->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="input-select">Center Titles</label>
                            <select class="form-control" name="center_id" id="input-select">
                                    <option value="{{$playgrounds->center_id}}">{{$playgrounds->center->title}}</option>
                                    @foreach ($centers as $center )
                                    <option value="{{$center->id}}">{{$center->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('center_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Title</label>
                            <input id="inputText3" type="text" value="{{$playgrounds->title}}" placeholder="Enter Playground Title" name="title" class="form-control">
                        </div>
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{$playgrounds->description}}</textarea>
                        </div>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="inputText4" class="col-form-label">Price</label>
                            <input id="inputText4" type="number" value="{{$playgrounds->price}}" name="price" class="form-control" placeholder="Enter Playground Price">
                        </div>
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <img src="{{asset($playgrounds->image)}}" width="100px" height="100px"/>
                        <div class="custom-file mb-3">
                            <input type="file" name="image" value="{{$playgrounds->image}}" class="custom-file-input" id="customFile">
                            <label class="custom-file-label"  for="customFile">File Input</label>
                        </div>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group row">
                            <label class="col-form-label">Active :  </label>
                            <div class="col-12 col-sm-8 col-lg-6 pt-1">
                                <div class="switch-button switch-button-success">
                                    <input type="checkbox"  value="1" @if($playgrounds->active =='1') checked @endif name="active" id="switch16"><span>
                                <label for="switch16"></label></span>
                                </div>
                            </div>
                        </div>
                        @error('active')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <button name="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
