@extends('layouts.app')
@section('content')

 <!-- breadcrumb start -->
    <div class="breadcrumb_area">
        <div class="breadcrumb_inner d-flex align-items-center">
            <div class="container">
                <div class="breadcrumb_content">
                    <h2>Loan</h2>
                    <div class="page_link">
                        <a href="index-1.html">Home</a>
                        <a href="loan.html">Loan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb end -->

    <!--pricing-area start-->
    <div class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h6 class="subtitle subtitle-thumb">Loan Plan</h6>
                        <h2 class="title">What we offer for you</h2>
                        <p>We provide online instant cash loans with quick approval that suit your term.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-price text-center">
                        <div class="pricing-details">
                            <h2 class="pricing-cost">Home Loan</h2>
                            <h6 class="pricing-subtitle">Best for you</h6>
                            <h4 class="pricing-title">$5000-$10000</h4>
                        </div>
                        <ul class="pricing-list">
                            <li><a href="#">Borrow - $350 over 3 months</a></li>
                            <li><a href="#">Interest rate - 292% pa fixed</a></li>
                            <li><a href="#">Total amount payable - $500.25</a></li>
                            <li><a href="#">Representative - 1,286% APR</a></li>
                            <li><a class="btn btn-blue" href="#">Apply Now</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price text-center">
                        <div class="pricing-details">
                            <h2 class="pricing-cost">Car Loan</h2>
                            <h6 class="pricing-subtitle">Best for you</h6>
                            <h4 class="pricing-title">$5000-$10000</h4>
                        </div>
                        <ul class="pricing-list">
                            <li><a href="#">Borrow - $350 over 3 months</a></li>
                            <li><a href="#">Interest rate - 292% pa fixed</a></li>
                            <li><a href="#">Total amount payable - $500.25</a></li>
                            <li><a href="#">Representative - 1,286% APR</a></li>
                            <li><a class="btn btn-blue" href="#">Apply Now</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price text-center">
                        <div class="pricing-details">
                            <h2 class="pricing-cost">Education Loan</h2>
                            <h6 class="pricing-subtitle">Best for you</h6>
                            <h4 class="pricing-title">$5000-$10000</h4>
                        </div>
                        <ul class="pricing-list">
                            <li><a href="#">Borrow - $350 over 3 months</a></li>
                            <li><a href="#">Interest rate - 292% pa fixed</a></li>
                            <li><a href="#">Total amount payable - $500.25</a></li>
                            <li><a href="#">Representative - 1,286% APR</a></li>
                            <li><a class="btn btn-blue" href="#">Apply Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--pricing-area end-->

    <!--service-area start-->
    <div class="service-area default-pd">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h6 class="subtitle subtitle-thumb">How it Works</h6>
                        <h2 class="title">We provide online instant cash loans with quick approval that suit your term</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="passets/img/service/03.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Apply for loan</a></h5>
                            <p></p>
                            <a class="angle-btn" href="{{route('login')}}"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="passets/img/service/01.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Application review</a></h5>
                            <p></p>
                            <a class="angle-btn" href="{{route('login')}}"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="passets/img/service/06.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Get funding fast</a></h5>
                            <p></p>
                            <a class="angle-btn" href="{{route('login')}}"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--service-area end-->

    <!-- apply_loan_start  -->
    <div class="apply_loan">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="loan_text wow fadeInLeft text-lg-start text-center" data-wow-duration="1s" data-wow-delay=".3s">
                        <h3>Apply for a Loan for your startup, education or company</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="loan_btn text-lg-end text-center wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <a class="btn btn-blue" href="{{route('login')}}">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- apply_loan_end  -->

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
                            <li><a class="btn btn-blue" href="{{route('register')}}">Book Now</a></li>
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
                            <li><a class="btn btn-blue" href="{{route('register')}}">Book Now</a></li>
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
                            <li><a class="btn btn-blue" href="{{route('register')}}">Book Now</a></li>
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
                        <p></p>
                        <a class="angle-btn" href="{{route('login')}}"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work mt-md-0 text-center">
                        <div class="work-icon">
                            <img class="" src="passets/img/work/02.png" alt="icon">
                        </div>
                        <h5><a href="#">Create Account</a></h5>
                        <p></p>
                        <a class="angle-btn" href="{{route('login')}}"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work text-center">
                        <div class="work-icon">
                            <img class="" src="passets/img/work/03.png" alt="icon">
                        </div>
                        <h5><a href="#">Start Invest</a></h5>
                        <p></p>
                        <a class="angle-btn" href="{{route('login')}}"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work text-center">
                        <div class="work-icon">
                            <img class="" src="passets/img/work/04.png" alt="icon">
                        </div>
                        <h5><a href="#">Get Profit</a></h5>
                        <p></p>
                        <a class="angle-btn" href="{{route('login')}}"><img src="passets/img/icon/angle-left-round.png" alt="icon"></a>
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
