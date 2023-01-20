@extends('admin.master')
@section('active-setting')
    active open
@endsection
@section('add-footer')
    active
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>FrontEnd Footer Section Setup</h4>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
    @endif

    <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <form action="{{route('save-footer')}}" method="post" >
                    @csrf
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Left Footer Site</h5>
                            <small class="text-muted float-end">Please Add</small>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Left Footer Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="left_title" value="{{$setting->left_title}}" class="form-control" id="basic-default-name" placeholder="Enter Your Footer Left Title Name" />
                                    </div>
                                </div>
                            <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-message">Footer Adders</label>
                                <div class="col-sm-10">
                                <textarea
                                    name="footer_adders"
                                    id="basic-default-message"
                                    class="form-control"
                                    placeholder="Enter Your Sub Contact Title Name"
                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                    aria-describedby="basic-icon-default-message2"
                                >{{$setting->footer_adders}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Footer Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="footer_phone" value="{{$setting->footer_phone}}" class="form-control" id="basic-default-name" placeholder="Enter Your Footer Phone Number" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Footer Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="footer_email" value="{{$setting->footer_email}}" class="form-control" id="basic-default-name" placeholder="Enter Your Footer Email Name" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Right Footer Site</h5>
                            <small class="text-muted float-end">Please Add</small>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Right Footer Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="right_title" value="{{$setting->right_title}}" class="form-control" id="basic-default-name" placeholder="Enter Your Footer Right Title Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Right Footer Description</label>
                                <div class="col-sm-10">
                                <textarea
                                    name="sub_description"
                                    id="basic-default-message"
                                    class="form-control"
                                    placeholder="Enter Your Sub Right Footer Description"
                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                    aria-describedby="basic-icon-default-message2"
                                >{{$setting->sub_description}}</textarea>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Social Media Footer Site</h5>
                            <small class="text-muted float-end">Please Add</small>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Twitter (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="twitter" value="{{$setting->twitter}}" class="form-control" id="basic-default-name" placeholder="Enter Your Twitter Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Facebook (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="facebook" value="{{$setting->facebook}}" class="form-control" id="basic-default-name" placeholder="Enter Your Facebook Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Instagram (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="instagram" value="{{$setting->instagram}}" class="form-control" id="basic-default-name" placeholder="Enter Your Instagram Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Skype (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="skype" value="{{$setting->skype}}" class="form-control" id="basic-default-name" placeholder="Enter Your Skype Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">linkedIn (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="linkedin" value="{{$setting->linkedin}}" class="form-control" id="basic-default-name" placeholder="Enter Your linkedIn Link" />
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
