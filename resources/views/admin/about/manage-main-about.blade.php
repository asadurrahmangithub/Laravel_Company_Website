@extends('admin.master')
@section('active-about')
    active open
@endsection
@section('sub-menu-about-active-2')
    active
@endsection
@section('content')
    <div class="container mt-4">
        <div class="card">
            <h5 class="card-header">Manage All Main About Table</h5>
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
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php $i=1 ?>
                    @foreach($abouts as $about)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{!! substr($about->main_about_title,0,20) !!}</td>
                            <td>{!! substr($about->main_sub_about_title,0,30) !!}</td>
                            <td><img src="{{asset($about->image)}}" alt="" style="height: 50px;width: 50px;"></td>
                            {{--                        <td class="col-md-1">{{$slider->publication_status}}</td>--}}

                            <td>
                                @if($about->publication_status==1)

                                    <a href="{{route('main-publication-status',['id'=>$about->id])}}" class="btn btn-success btn-xs" title="UnPublished">Public
                                        <span class="glyphicon glyphicon-arrow-up"><i class="bi bi-arrow-down-circle-fill"></i></span>
                                    </a>
                                @else
                                    <a href="{{route('main-publication-status',['id'=>$about->id])}}" class="btn btn-warning btn-xs" title="Published">
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
                                        <a class="dropdown-item" href="{{ route('edit-main-about',['id'=>$about->id]) }}"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                        >
                                        <a class="dropdown-item" onclick="return confirm('Are you sure to Delete this!!')" href="{{route('delete-main-about',['id'=>$about->id])}}"
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
