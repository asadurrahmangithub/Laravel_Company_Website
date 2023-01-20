@extends('admin.master')
@section('active-setting')
    active open
@endsection
@section('menu-logo')
    active
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> FrontEnd Logo Upload</h4>
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
                        <h5 class="mb-0">Upload Menu Logo</h5>
                        <small class="text-muted float-end">Please Upload</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('logo-upload')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Upload Logo</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img" src="{{asset($logo->image)}}" alt="" style="height: 150px; width: 150px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
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
