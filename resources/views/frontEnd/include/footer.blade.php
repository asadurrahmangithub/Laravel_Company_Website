<footer id="footer">

{{--    <div class="footer-newsletter">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <h4>Join Our Newsletter</h4>--}}
{{--                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>--}}
{{--                    <form action="" method="post">--}}
{{--                        <input type="email" name="email"><input type="submit" value="Subscribe">--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{$footerSetting->left_title ?? 'Title'}}</h3>
                    <p>
                        {{$footerSetting->footer_adders ?? 'address' }}<br><br>
                        <strong>Phone:</strong> {{$footerSetting->footer_phone ?? 'Phone'}}<br>
                        <strong>Email:</strong> {{$footerSetting->footer_email ?? 'Email'}}<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}#hero">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}#services">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}#portfolio">Portfolio</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact-us')}}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a>Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a>Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a>App Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a>Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a>Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{$footerSetting->right_title ?? 'Title'}}</h4>
                    <p>{{$footerSetting->sub_description ?? 'Description'}}</p>
                    <div class="social-links mt-3">
                        @if($footerSetting->twitter)
                            <a href="{{$footerSetting->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                        @endif
                        @if($footerSetting->facebook)
                                <a href="{{$footerSetting->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        @endif
                        @if($footerSetting->instagram)
                                <a href="{{$footerSetting->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        @endif
                        @if($footerSetting->skype)
                                <a href="{{$footerSetting->skype}}" class="google-plus"><i class="bx bxl-skype"></i></a>
                        @endif
                        @if($footerSetting->linkedin)
                                <a href="{{$footerSetting->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Creativebraintech</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
            Designed by <a>Asadur Rahman</a>
        </div>
    </div>
</footer>
