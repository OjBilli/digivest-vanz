@extends('layouts.app')
@section('content')
<!-- breadcrumb start -->
    <div class="breadcrumb_area">
        <div class="breadcrumb_inner d-flex align-items-center">
            <div class="container">
                <div class="breadcrumb_content">
                    <h2>About Us</h2>
                    <div class="page_link">
                        <a href="{{route('welcome')}}">Home</a>
                        <a href="{{route('about')}}">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb end -->

    <!--about-us-area start-->
    <div class="about-us-area pd-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-self-center">
                    <div class="about-us-video">
                        <img class="thumb" src="passets/img/video/1.png" alt="img">
                        <a class="play-btn" href="../../../www.youtube.com/embed/Wimkqo8gDZ0.html" data-effect="mfp-zoom-in"><img src="passets/img/video/play-btn.png" alt="img"></a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-us-details">
                        <div class="section-title">
                            <h6 class="subtitle">About The E-Banking</h6>
                            <h2 class="title">Nothing is impossible. We can help you achieve your goals!</h2>
                            <p>Online banking can save you a lot of time and effort, you can undertake most transactions from the comforts of your home. However, it is crucial to use internet banking safely.</p>
                        </div>
                        <div class="media media-1">
                            <div class="media-left">
                                <img src="passets/img/about/01.png" alt="img">
                            </div>
                            <div class="media-body">
                                <p>Nro eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus dolor sit.</p>
                            </div>
                        </div>
                        <div class="media media-2">
                            <div class="media-left">
                                <img src="passets/img/about/02.png" alt="img">
                            </div>
                            <div class="media-body">
                                <p>Easy pament process belief Lorem Ipsum is not simply random text. It has roots in a McClintock.</p>
                            </div>
                        </div>
                        <a class="btn btn-blue" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about-us-area end-->

    <!--service-area start-->
    <div class="service-area default-pd">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h6 class="subtitle subtitle-thumb">Best Services</h6>
                        <h2 class="title">Presenting Banking Plan & Services That are Right For You</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="passets/img/service/01.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Online Business</a></h5>
                            <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p>
                            <a class="angle-btn" href="#"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="passets/img/service/02.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Business Plan</a></h5>
                            <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p>
                            <a class="angle-btn" href="#"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="passets/img/service/03.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Mobile Bank</a></h5>
                            <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p>
                            <a class="angle-btn" href="#"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="passets/img/service/04.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Online Deposit</a></h5>
                            <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p>
                            <a class="angle-btn" href="#"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="passets/img/service/05.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Credit Card</a></h5>
                            <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p>
                            <a class="angle-btn" href="#"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="passets/img/service/06.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Income Monitoring</a></h5>
                            <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p>
                            <a class="angle-btn" href="#"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--service-area end-->

    <!--pricing-area start-->
    <div class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h6 class="subtitle subtitle-thumb">Pricing Plan</h6>
                        <h2 class="title">Grab Our Mega Deposit Package</h2>
                        <p>Bank dipscing elitr, sed diam nonumy eirmod et accusam et justo duo dolores et ea rebum. tet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-price text-center">
                        <div class="pricing-details">
                            <h2 class="pricing-cost">5.50%</h2>
                            <h6 class="pricing-subtitle">For a month</h6>
                            <h4 class="pricing-title">Basic</h4>
                        </div>
                        <ul class="pricing-list">
                            <li><a href="#">Miximum Deposit $10,00</a></li>
                            <li><a href="#">Minimum Deposit $10</a></li>
                            <li><a href="#">Up to 50 Users available</a></li>
                            <li><a href="#">Free Banking</a></li>
                            <li><a class="btn btn-blue" href="#">Book Now</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price text-center">
                        <div class="pricing-details">
                            <h2 class="pricing-cost">7.50%</h2>
                            <h6 class="pricing-subtitle">For a month</h6>
                            <h4 class="pricing-title">Premium</h4>
                        </div>
                        <ul class="pricing-list">
                            <li><a href="#">Miximum Deposit $10,00</a></li>
                            <li><a href="#">Minimum Deposit $10</a></li>
                            <li><a href="#">Up to 50 Users available</a></li>
                            <li><a href="#">Free Banking</a></li>
                            <li><a class="btn btn-blue" href="#">Book Now</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price text-center">
                        <div class="pricing-details">
                            <h2 class="pricing-cost">9.50%</h2>
                            <h6 class="pricing-subtitle">For a month</h6>
                            <h4 class="pricing-title">Advanced Plan</h4>
                        </div>
                        <ul class="pricing-list">
                            <li><a href="#">Miximum Deposit $10,00</a></li>
                            <li><a href="#">Minimum Deposit $10</a></li>
                            <li><a href="#">Up to 50 Users available</a></li>
                            <li><a href="#">Free Banking</a></li>
                            <li><a class="btn btn-blue" href="#">Book Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--pricing-area end-->


    <!--work-area start-->
    <div class="work-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title section-title-2">
                        <h6 class="subtitle subtitle-thumb">Best Services</h6>
                        <h2 class="title">How It Work</h2>
                        <p>Bankdipscing elitr, sed diam nonumy eirmod et accusam et justo duo dolores et ea rebum. tet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-work mt-0 text-center">
                        <div class="work-icon">
                            <img class="" src="passets/img/work/01.png" alt="icon">
                        </div>
                        <h5><a href="#">Know About</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <a class="angle-btn" href="#"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work mt-md-0 text-center">
                        <div class="work-icon">
                            <img class="" src="passets/img/work/02.png" alt="icon">
                        </div>
                        <h5><a href="#">Create Account</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <a class="angle-btn" href="#"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work text-center">
                        <div class="work-icon">
                            <img class="" src="passets/img/work/03.png" alt="icon">
                        </div>
                        <h5><a href="#">Start Invest</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <a class="angle-btn" href="#"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work text-center">
                        <div class="work-icon">
                            <img class="" src="passets/img/work/04.png" alt="icon">
                        </div>
                        <h5><a href="#">Get Profit</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <a class="angle-btn" href="#"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--work-area end-->


    <!-- partner area start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="partner-slider owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <img src="passets/img/partner/01.png" alt="logo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="passets/img/partner/02.png" alt="logo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="passets/img/partner/03.png" alt="logo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="passets/img/partner/04.png" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partner area end -->

    <!-- sign-up area start -->
    <div class="container">
        <div class="sign-up-area">
            <div class="row">
                <div class="col-lg-6">
                    <div class="media align-items-center">
                        <div class="media-left">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="media-body">
                            <h5>SignUp For Newsletter</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="d-md-inline-flex">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your mail here">
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- sign-up area start -->
@endsection
