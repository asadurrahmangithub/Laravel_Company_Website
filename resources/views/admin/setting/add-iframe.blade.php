@extends('admin.master')
@section('active-setting')
    active open
@endsection
@section('iframe')
    active
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span> Contact Section iframe Setup</h4>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
    @endif

    <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <form action="{{route('save-iframe')}}" method="post" >
                    @csrf
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Iframe Src Add</h5>
                            <small class="text-muted float-end">Please Add</small>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Iframe Src</label>
                                <div class="col-sm-10">
                                <textarea
                                    name="iframe_src"
                                    id="basic-default-message"
                                    class="form-control"
                                    placeholder="Enter Your Iframe Src Code..........."
                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                    aria-describedby="basic-icon-default-message2"
                                    rows="4"
                                >{{$iframe->iframe_src}}</textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
