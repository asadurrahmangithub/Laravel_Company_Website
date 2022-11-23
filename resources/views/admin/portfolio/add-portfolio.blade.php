@extends('admin.master')
@section('active-portfolio')
    active open
@endsection
@section('sub-menu-portfolio-active-3')
    active
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Portfolio Item Section</h4>

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
                        <h5 class="mb-0">Add New Portfolio Item</h5>
                        <small class="text-muted float-end">Please Add</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save-portfolio')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Where to Show*</label>
                                <div class="form-check col-sm-2">
                                    <input
                                        name="filter_button"
                                        class="form-check-input"
                                        type="radio"
                                        value="1"
                                        id="defaultRadio1"
                                    />
                                    <label class="form-check-label" for="defaultRadio1"> App </label>
                                </div>
                                <div class="form-check col-sm-2">
                                    <input
                                        name="filter_button"
                                        class="form-check-input"
                                        type="radio"
                                        value="2"
                                        id="defaultRadio2"
                                    />
                                    <label class="form-check-label" for="defaultRadio2"> Web </label>
                                </div>
                                <div class="form-check col-sm-2">
                                    <input
                                        name="filter_button"
                                        class="form-check-input"
                                        type="radio"
                                        value="3"
                                        id="defaultRadio2"
                                    />
                                    <label class="form-check-label" for="defaultRadio2"> Others </label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title_name" id="basic-default-name" placeholder="Enter Your Title Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Sub Title</label>
                                <div class="col-sm-10">
                                    <input
                                        name="subtitle_name"
                                        type="text"
                                        class="form-control"
                                        id="basic-default-company"
                                        placeholder="Enter Your Sub Title Name"
                                    />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="category_name" id="basic-default-name" placeholder="Enter Your Category Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Client Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="client_name" id="basic-default-name" placeholder="Enter Your Client Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Project Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="project_date" id="basic-default-name" placeholder="Enter Your Project Date Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Project URL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="project_url" id="basic-default-name" placeholder="Enter Your Project URL Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                                <div class="col-sm-10">
                            <textarea
                                name="description"
                                id="basic-default-message"
                                class="form-control"
                                placeholder="Enter Your Description Title Name"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                            ></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Image 1*</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="file" required class="form-control" id="inputGroupFile02" name="image1" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Image 2</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="image2" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Image 3</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="image3" />
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
