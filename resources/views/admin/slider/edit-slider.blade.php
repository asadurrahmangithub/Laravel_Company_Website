@extends('admin.master')
@section('active-home')
    active open
@endsection
@section('sub-menu-home-active-2')
    active
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Home Slider</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Update Slider Section</h5>
                        <small class="text-muted float-end">Please Update</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('updateSlider')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" id="" value="{{$slider->id}}">
                                    <input type="text" class="form-control" name="slider_title" value="{{$slider->slider_title}}" id="basic-default-name" placeholder="Enter Your Home Title Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Sub Title</label>
                                <div class="col-sm-10">
                            <textarea
                                name="slider_subtitle"
                                id="basic-default-message"
                                class="form-control"
                                placeholder="Enter Your Home Sub Title Name"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                            >{{$slider->slider_subtitle}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Button Name</label>
                                <div class="col-sm-10">
                                    <input
                                        value="{{$slider->slider_button_name}}"
                                        name="slider_button_name"
                                        type="text"
                                        class="form-control"
                                        id="basic-default-company"
                                        placeholder="Button Name"
                                    />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Image</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img" src="{{asset($slider->image)}}" alt="" style="height: 150px; width: 150px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
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
                                        @if($slider->publication_status==1)
                                        checked
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
                                        @if($slider->publication_status==2)
                                        checked
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
