@extends('admin.master')
@section('active-about')
    active open
@endsection
@section('sub-menu-about-active-1')
    active
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Main About Section</h4>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
        @endif

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add New About Main Section</h5>
                        <small class="text-muted float-end">Please Add</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save-main-about')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="main_about_title" id="basic-default-name" placeholder="Enter Your About Main Title Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Sub Title</label>
                                <div class="col-sm-10">
                            <textarea
                                required
                                name="main_sub_about_title"
                                id="basic-default-message"
                                class="form-control"
                                placeholder="Enter Your About Main Sub Title Name"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                            ></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="file" class="form-control" required name="image" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
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
                                        checked
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
