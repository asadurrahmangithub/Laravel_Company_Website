@extends('admin.master')
@section('active-portfolio')
    active open
@endsection
@section('sub-menu-portfolio-active-4')
    active
@endsection
@section('content')
    <div class="container mt-4">
        <div class="card">
            <h5 class="card-header">Manage All Portfolio Item Table</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Filter</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Category</th>
                        <th>Client</th>
                        <th>Date</th>
                        <th>URL</th>
                        <th>Description</th>
                        <th>Image1</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php $i=1 ?>
                    @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$portfolio->filter_button}}</td>
                            <td>{{$portfolio->title_name}}</td>
                            <td>{{$portfolio->subtitle_name}}</td>
                            <td>{{$portfolio->category_name}}</td>
                            <td>{{$portfolio->client_name}}</td>
                            <td>{{$portfolio->project_date}}</td>
                            <td>{{$portfolio->project_url}}</td>
                            <td>{!! substr($portfolio->description,0,20) !!}</td>
                            <td><img src="{{asset($portfolio->image1)}}" alt="" style="height: 50px;width: 50px;"></td>
                            <td><img src="{{asset($portfolio->image2)}}" alt="" style="height: 50px;width: 50px;"></td>
                            <td><img src="{{asset($portfolio->image3)}}" alt="" style="height: 50px;width: 50px;"></td>


                            <td>
                                @if($portfolio->publication_status==1)

                                    <a href="{{route('portfolio-publication-status',['id'=>$portfolio->id])}}" class="btn btn-success btn-xs" title="UnPublished">Public
                                        <span class="glyphicon glyphicon-arrow-up"><i class="bi bi-arrow-down-circle-fill"></i></span>
                                    </a>
                                @else
                                    <a href="{{route('portfolio-publication-status',['id'=>$portfolio->id])}}" class="btn btn-warning btn-xs" title="Published">
                                        <span><i class="bi bi-arrow-up-circle-fill"></i>UnPublic</span>
                                    </a>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('edit-portfolio',['id'=>$portfolio->id]) }}"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                        >
                                        <a class="dropdown-item" onclick="return confirm('Are you sure to Delete this!!')" href="{{route('delete-portfolio',['id'=>$portfolio->id])}}"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                        >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
