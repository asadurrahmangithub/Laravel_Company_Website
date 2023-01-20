@extends('admin.master')
@section('active-home')
    active open
@endsection
@section('sub-menu-home-active-2')
    active
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">All Manage Home Slider Table</h5>
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
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Button Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php $i=1 ?>
                    @foreach($sliders as $slider)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{!! substr($slider->slider_title,0,20) !!}</td>
                        <td>{!! substr($slider->slider_subtitle,0,30) !!}</td>
                        <td>{{$slider->slider_button_name}}</td>
                        <td><img src="{{asset($slider->image)}}" alt="" style="height: 50px;width: 50px;"></td>
{{--                        <td class="col-md-1">{{$slider->publication_status}}</td>--}}

                        <td>
                            @if($slider->publication_status==1)

                                <a href="{{route('slider-publication-status',['id'=>$slider->id])}}" class="btn btn-success btn-xs" title="UnPublished">Public
                                    <span class="glyphicon glyphicon-arrow-up"><i class="bi bi-arrow-down-circle-fill"></i></span>
                                </a>
                            @else
                                <a href="{{route('slider-publication-status',['id'=>$slider->id])}}" class="btn btn-warning btn-xs" title="Published">
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
                                    <a class="dropdown-item" href="{{ route('editSlider',['id'=>$slider->id]) }}"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" onclick="return confirm('Are you sure to Delete this!!')" href="{{route('deleteSlider',['id'=>$slider->id])}}"
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
