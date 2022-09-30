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
                    <p class="pageheader-text"></p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @if (Session::has('status'))
        <div class="alert alert-success">{{ Session::get('status') }}</div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">PlayGround Table</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                </div>
                                <div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered first dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 181.4px;">Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 303.275px;">Description</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 130.325px;">Image</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 130.325px;">Price</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 64.675px;">Active</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="2" colspan="2" aria-label="Start date: activate to sort column ascending" style="width: 124.863px;"><center>Action</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($playgrounds as $play )
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$play->title}}</td>
                                    <td>{{$play->description}}</td>
                                    <td><img width="100" height="100" src="{{$play->image}}" alt="Playground Image"></td>
                                    <td>{{$play->price}}</td>
                                    <td>{{$play->getActive()}}</td>
                                    <td><a href="{{route('admin.playground.edit',$play->id)}}" class="btn btn-info">Edit</a></td>
                                    <td><a href="{{route('admin.playground.delete',$play->id)}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                {{$playgrounds->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
