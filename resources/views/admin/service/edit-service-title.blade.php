@extends('admin.master')
@section('active-service')
    active open
@endsection
@section('sub-menu-service-active-2')
    active
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Service Title Section</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Update Service Title Section</h5>
                        <small class="text-muted float-end">Please Update</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-manage-title')}}" method="post" >
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Service Title</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" id="" value="{{$service_title->id}}">
                                    <input type="text" name="service_title" value="{{$service_title->service_title}}" class="form-control" id="basic-default-name" placeholder="Enter Your Service Title Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                                <div class="form-check col-sm-2">
                                    <input
                                        name="publication_status"
                                        class="form-check-input"
                                        type="radio"
                                        value="1"
                                        id="defaultRadio1"
                                        @if($service_title->publication_status==1){
                                        checked
                                        }
                                        @endif

                                    />
                                    <label class="form-check-label" for="defaultRadio1"> Public </label>
                                </div>
                                <div class="form-check col-sm-2">
                                    <input
                                        name="publication_status"
                                        class="form-check-input"
                                        type="radio"
                                        value="2"
                                        id="defaultRadio2"
                                        @if($service_title->publication_status==2){
                                        checked
                                        }
                                        @endif
                                    />
                                    <label class="form-check-label" for="defaultRadio2"> UnPublic </label>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
