@extends('frontEnd.master')
@section('content')
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact Us</h2>
                @foreach($contact_titles as $contact_title)
                    <p>{{$contact_title->contact_title}}</p>
                @endforeach
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info">
                        @foreach($contact_infos as $contact_info)
                            <div class="address">
                                <i class="{{$contact_info->contact_icon_class}}"></i>
                                <h4>{{$contact_info->contact_info_title}}</h4>
                                <p>{{$contact_info->contact_info_subtitle}}</p>
                            </div>
                        @endforeach

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos-delay="200">

                    <form method="POST" action="{{route('send.email')}}" class="php-email-send">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control"  placeholder="Your Name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label for="name">Your Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                            @if ($errors->has('subject'))
                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                            @endif
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Message</label>
                            <textarea name="message" class="form-control" rows="10">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Us Section -->
@endsection
