@extends('admin.master')
@section('active-service')
    active open
@endsection
@section('sub-menu-service-active-4')
    active
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Manage All Card Service Table</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table table-dark">
                    <thead>
                    <tr class="row col-mb-12">
                        <th class="col-md-1">No</th>
                        <th class="col-md-3">Icon Class</th>
                        <th class="col-md-2">Card Title</th>
                        <th class="col-md-3">Sub Card Title</th>
                        <th class="col-md-2">Status</th>
                        <th class="col-md-1">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php $i=1 ?>
                    @foreach($service_cards as $service_card)
                        <tr class="row col-mb-12">
                            <td class="col-md-1">{{$i}}</td>
                            <td class="col-md-3">{{$service_card->service_icon_class}}</td>
                            <td class="col-md-2">{!! substr($service_card->service_card_title,0,20) !!}</td>
                            <td class="col-md-3">{!! substr($service_card->service_card_subtitle,0,30) !!}</td>
                            <td class="col-md-2">
                                @if($service_card->publication_status==1)

                                    <a href="{{route('service-card-publication-status',['id'=>$service_card->id])}}" class="btn btn-success btn-xs" title="UnPublished">Public
                                        <span class="glyphicon glyphicon-arrow-up"><i class="bi bi-arrow-down-circle-fill"></i></span>
                                    </a>
                                @else
                                    <a href="{{route('service-card-publication-status',['id'=>$service_card->id])}}" class="btn btn-warning btn-xs" title="Published">
                                        <span><i class="bi bi-arrow-up-circle-fill"></i>UnPublic</span>
                                    </a>
                                @endif
                            </td>
                            <td class="col-md-1">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('edit-manage-card',['id'=>$service_card->id]) }}"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                        >
                                        <a class="dropdown-item" onclick="return confirm('Are you sure to Delete this!!')" href="{{route('delete-manage-card',['id'=>$service_card->id])}}"
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
