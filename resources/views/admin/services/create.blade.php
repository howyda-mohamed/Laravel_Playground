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
                <h5 class="card-header">Add  Services</h5>
                <div class="card-body">
                    <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Title</label>
                            <input id="inputText3" type="text" placeholder="Enter Title" name="title" class="form-control">
                        </div>
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror

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
