@extends('frontEnd.master')
@section('content')
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            @foreach($sliders as $slider)
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>{{$slider->slider_title}}</h1>
                    <h2>{{$slider->slider_subtitle}}</h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">{{$slider->slider_button_name}}</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{asset($slider->image)}}" class="img-fluid animated" alt="">
                </div>
            </div>
            @endforeach
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    @foreach($main_abouts as $main_about)
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="{{asset($main_about->image)}}" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">{{$main_about->main_about_title}}</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            {{$main_about->main_sub_about_title}}
                        </p>
                    @endforeach
                        <div class="row">
                            @foreach($about_cards as $about_card)
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="{{$about_card->about_icon_class}}"></i>
                                <h4>{{$about_card->about_card_title}}</h4>
                                <p>{{$about_card->about_sub_card_title}}</p>
                            </div>
                            @endforeach
{{--                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">--}}
{{--                                <i class="bx bx-cube-alt"></i>--}}
{{--                                <h4>Ullamco laboris nisi</h4>--}}
{{--                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    @foreach($service_titles as $service_title)
                    <p>{{$service_title->service_title}}</p>
                    @endforeach
                </div>

                <div class="row">
                    @foreach($service_cards as $service_card)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="{{$service_card->service_icon_class}}"></i></div>
                            <h4 class="title"><a href="">{{$service_card->service_card_title}}</a></h4>
                            <p class="description">{{$service_card->service_card_subtitle}}</p>
                        </div>
                    </div>
                    @endforeach

{{--                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">--}}
{{--                        <div class="icon-box">--}}
{{--                            <div class="icon"><i class="bx bx-file"></i></div>--}}
{{--                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>--}}
{{--                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">--}}
{{--                        <div class="icon-box">--}}
{{--                            <div class="icon"><i class="bx bx-tachometer"></i></div>--}}
{{--                            <h4 class="title"><a href="">Magni Dolores</a></h4>--}}
{{--                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">--}}
{{--                        <div class="icon-box">--}}
{{--                            <div class="icon"><i class="bx bx-world"></i></div>--}}
{{--                            <h4 class="title"><a href="">Nemo Enim</a></h4>--}}
{{--                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    @foreach($portfolio_titles as $portfolio_title)
                        <p>{{$portfolio_title->portfolio_title}}</p>
                    @endforeach
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-web">Web</li>
                            <li data-filter=".filter-card">Others</li>

                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach($portfolio_apps as $portfolio_app)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset($portfolio_app->image1)}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset($portfolio_app->image1)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                <a href="{{route('portfolio-details',['id'=>$portfolio_app->id])}}" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>{{$portfolio_app->title_name}}</h4>
                                <p>{{$portfolio_app->subtitle_name}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($portfolio_webs as $portfolio_web)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset($portfolio_web->image1)}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset($portfolio_web->image1)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                <a href="{{route('portfolio-details',['id'=>$portfolio_web->id])}}" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>{{$portfolio_web->title_name}}</h4>
                                <p>{{$portfolio_web->subtitle_name}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                        @foreach($portfolio_others as $portfolio_other)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{asset($portfolio_other->image1)}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset($portfolio_other->image1)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                                <a href="{{route('portfolio-details',['id'=>$portfolio_other->id])}}" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>{{$portfolio_other->title_name}}</h4>
                                <p>{{$portfolio_other->subtitle_name}}</p>
                            </div>
                        </div>
                    </div>
                        @endforeach



                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    @foreach($question_titles as $question_title)
                        <p>{{$question_title->question_title}}</p>
                    @endforeach
                </div>

                <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

                    <?php $i=1 ?>
                    @foreach($questions as $question)
                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{$i}}">{{$question->question}}? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq{{$i}}" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                {{$question->question_ans}}
                            </p>
                        </div>
                    </li>
                            <?php $i++ ?>
                    @endforeach


{{--                    <li>--}}
{{--                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">--}}
{{--                            <p>--}}
{{--                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">--}}
{{--                            <p>--}}
{{--                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">--}}
{{--                            <p>--}}
{{--                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">--}}
{{--                            <p>--}}
{{--                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>--}}
{{--                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">--}}
{{--                            <p>--}}
{{--                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </li>--}}



                </ul>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Team Section ======= -->
        <!--    <section id="team" class="team">-->
        <!--      <div class="container">-->

        <!--        <div class="section-title" data-aos="fade-up">-->
        <!--          <h2>Team</h2>-->
        <!--          <p>Our team is always here to help</p>-->
        <!--        </div>-->

        <!--        <div class="row">-->

        <!--          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">-->
        <!--            <div class="member">-->
    <!--              <img src="{{asset('frontEnd')}}/assets/img/team/team-1.jpg" class="img-fluid" alt="">-->
        <!--              <div class="member-info">-->
        <!--                <div class="member-info-content">-->
        <!--                  <h4>Walter White</h4>-->
        <!--                  <span>Chief Executive Officer</span>-->
        <!--                </div>-->
        <!--                <div class="social">-->
        <!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
        <!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
        <!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
        <!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">-->
        <!--            <div class="member">-->
    <!--              <img src="{{asset('frontEnd')}}/assets/img/team/team-2.jpg" class="img-fluid" alt="">-->
        <!--              <div class="member-info">-->
        <!--                <div class="member-info-content">-->
        <!--                  <h4>Sarah Jhonson</h4>-->
        <!--                  <span>Product Manager</span>-->
        <!--                </div>-->
        <!--                <div class="social">-->
        <!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
        <!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
        <!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
        <!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">-->
        <!--            <div class="member">-->
    <!--              <img src="{{asset('frontEnd')}}/assets/img/team/team-3.jpg" class="img-fluid" alt="">-->
        <!--              <div class="member-info">-->
        <!--                <div class="member-info-content">-->
        <!--                  <h4>William Anderson</h4>-->
        <!--                  <span>CTO</span>-->
        <!--                </div>-->
        <!--                <div class="social">-->
        <!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
        <!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
        <!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
        <!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">-->
        <!--            <div class="member">-->
    <!--              <img src="{{asset('frontEnd')}}/assets/img/team/team-4.jpg" class="img-fluid" alt="">-->
        <!--              <div class="member-info">-->
        <!--                <div class="member-info-content">-->
        <!--                  <h4>Amanda Jepson</h4>-->
        <!--                  <span>Accountant</span>-->
        <!--                </div>-->
        <!--                <div class="social">-->
        <!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
        <!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
        <!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
        <!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--        </div>-->

        <!--      </div>-->
        <!--    </section>&lt;!&ndash; End Team Section &ndash;&gt;-->

        <!-- ======= Clients Section ======= -->
        <!--    <section id="clients" class="clients section-bg">-->
        <!--      <div class="container" data-aos="fade-up">-->

        <!--        <div class="section-title">-->
        <!--          <h2>Clients</h2>-->
        <!--          <p>They trusted us</p>-->
        <!--        </div>-->

        <!--        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">-->
        <!--          <div class="swiper-wrapper align-items-center">-->
    <!--            <div class="swiper-slide"><img src="{{asset('frontEnd')}}/assets/img/clients/client-1.png" class="img-fluid" alt=""></div>-->
    <!--            <div class="swiper-slide"><img src="{{asset('frontEnd')}}/assets/img/clients/client-2.png" class="img-fluid" alt=""></div>-->
    <!--            <div class="swiper-slide"><img src="{{asset('frontEnd')}}/assets/img/clients/client-3.png" class="img-fluid" alt=""></div>-->
    <!--            <div class="swiper-slide"><img src="{{asset('frontEnd')}}/assets/img/clients/client-4.png" class="img-fluid" alt=""></div>-->
    <!--            <div class="swiper-slide"><img src="{{asset('frontEnd')}}/assets/img/clients/client-5.png" class="img-fluid" alt=""></div>-->
    <!--            <div class="swiper-slide"><img src="{{asset('frontEnd')}}/assets/img/clients/client-6.png" class="img-fluid" alt=""></div>-->
    <!--            <div class="swiper-slide"><img src="{{asset('frontEnd')}}/assets/img/clients/client-7.png" class="img-fluid" alt=""></div>-->
    <!--            <div class="swiper-slide"><img src="{{asset('frontEnd')}}/assets/img/clients/client-8.png" class="img-fluid" alt=""></div>-->
        <!--          </div>-->
        <!--          <div class="swiper-pagination"></div>-->
        <!--        </div>-->

        <!--      </div>-->
        <!--    </section>&lt;!&ndash; End Clients Section &ndash;&gt;-->

    </main><!-- End #main -->

@endsection
