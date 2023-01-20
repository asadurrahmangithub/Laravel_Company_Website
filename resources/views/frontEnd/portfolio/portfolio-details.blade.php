@extends('frontEnd.master')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('home')}}#portfolio">Portfolio</a></li>
                        <li>Portfolio Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                @if($portfolio->image1)
                                <div class="swiper-slide">
                                    <img src="{{asset($portfolio->image1)}}" alt="">
                                </div>
                                @endif

                                @if($portfolio->image2)
                                <div class="swiper-slide">
                                    <img src="{{asset($portfolio->image2)}}" alt="">
                                </div>
                                @endif

                                @if($portfolio->image3)
                                <div class="swiper-slide">
                                    <img src="{{asset($portfolio->image3)}}" alt="">
                                </div>
                                @endif

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: {{$portfolio->category_name}}</li>
                                <li><strong>Client</strong>: {{$portfolio->client_name}}</li>
                                <li><strong>Project date</strong>: {{$portfolio->project_date}}</li>
                                <li><strong>Project URL</strong>: <a href="#">{{$portfolio->project_url}}</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>This is an example of portfolio detail</h2>
                            <p>
                                {{$portfolio->description}}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main>
@endsection
