@extends('admin.master')
@section('active-about')
    active open
@endsection
@section('sub-menu-about-active-4')
    active
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> About Card Section</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Update About Card Section</h5>
                        <small class="text-muted float-end">Please Update</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-card-about')}}" method="post" >
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Icon Class</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" id="" value="{{$about_card->id}}">
                                    <input type="text" name="about_icon_class" value="{{$about_card->about_icon_class}}" class="form-control" id="basic-default-name" placeholder="Enter Your About Card Icon Class Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Card Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"  name="about_card_title"  value="{{$about_card->about_card_title}}" id="basic-default-name" placeholder="Enter Your About Card Title Name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Sub Card Title</label>
                                <div class="col-sm-10">
                            <textarea
                                name="about_sub_card_title"
                                id="basic-default-message"
                                class="form-control"
                                placeholder="Enter Your About Sub Card Title Name"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                            >{{$about_card->about_sub_card_title}}</textarea>
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
                                        @if($about_card->publication_status==1)
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
                                        @if($about_card->publication_status==2)
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
