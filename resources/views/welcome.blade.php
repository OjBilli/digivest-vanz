@extends('layouts.app')
@section('content')

    <!-- banner start -->
    <div class="banner-area style-one">
        <div class="banner-slider owl-carousel">
            <div class="item bg-one" style="background-position: center;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 offset-xl-0 col-lg-6 offset-xl-1 offset-lg-1">
                            <div class="banner-inner-area">
                                <h5 class="subtitle">Welcome to Online Banking</h5>
                                <h1 class="title">Best Banking Services System In The World</h1>
                                <p class="brd-1">We are very fast to provide Banking services. Please check included multiple feature & Investment plan .</p>
                                <h5>How much do you want?</h5>
                                <p>We provide online instant cash loans with quick</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select>
                                            <option>Amount</option>
                                            <option value="1">1000$</option>
                                            <option value="2">2000$</option>
                                            <option value="3">3000$</option>
                                            <option value="4">4000$</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select>
                                            <option>Month</option>
                                            <option value="1">3 Month</option>
                                            <option value="2">6 Month</option>
                                            <option value="3">9 Month</option>
                                            <option value="4">12 Month</option>
                                        </select>
                                    </div>
                                </div>
                                <p>You have to pay: $0</p>
                                <a class="btn btn-blue" href="{{route('login')}}">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-one">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 offset-xl-0 col-lg-6 offset-xl-1 offset-lg-1">
                            <div class="banner-inner-area">
                                <h5 class="subtitle">Welcome to Online Banking</h5>
                                <h1 class="title">Best Banking Services System In The World</h1>
                                <p class="brd-1">We are very fast to provide Banking services. Please check included multiple feature & Investment plan .</p>
                                <h5>How much do you want?</h5>
                                <p>We provide online instant cash loans with quick</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select>
                                            <option>Amount</option>
                                            <option value="1">1000$</option>
                                            <option value="2">2000$</option>
                                            <option value="3">3000$</option>
                                            <option value="4">4000$</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select>
                                            <option>Month</option>
                                            <option value="1">3 Month</option>
                                            <option value="2">6 Month</option>
                                            <option value="3">9 Month</option>
                                            <option value="4">12 Month</option>
                                        </select>
                                    </div>
                                </div>
                                <p>You have to pay: $0</p>
                                <a class="btn btn-blue" href="{{route('login')}}">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- money-option start -->
    <div class="money-option-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-work mt-0 text-center">
                        <div class="work-icon">
                            <img class="" src="/passets/img/icon/arrow-down.png" alt="icon">
                        </div>
                        <h5><a href="{{route('login')}}">Withdraw</a></h5>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                        <a class="angle-btn" href="{{route('login')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work mt-md-0 text-center">
                        <div class="work-icon">
                            <img class="" src="/passets/img/icon/arrow-right.png" alt="icon">
                        </div>
                        <h5><a href="{{route('login')}}">Send Money</a></h5>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                        <a class="angle-btn" href="{{route('login')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work text-center">
                        <div class="work-icon">
                            <img class="" src="/passets/img/icon/card.png" alt="icon">
                        </div>
                        <h5><a href="{{route('login')}}">Cards</a></h5>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                        <a class="angle-btn" href="{{route('login')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work text-center">
                        <div class="work-icon">
                            <img class="" src="/passets/img/icon/exchange.png" alt="icon">
                        </div>
                        <h5><a href="{{route('login')}}">Exchange</a></h5>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                        <a class="angle-btn" href="{{route('login')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- money-option end -->

    <!--about-us-area start-->
    <div class="about-us-area pd-100">
        <div class="container">
            <div class="row">
                <!--video-area start-->
                <div class="col-lg-5 col-md-8 align-self-center">
                    <div class="about-us-video">
                        <img class="thumb" src="/passets/img/video/1.png" alt="img">
                        <a class="play-btn" href="../../../www.youtube.com/embed/Wimkqo8gDZ0.html" data-effect="mfp-zoom-in"><img src="/passets/img/video/play-btn.png" alt="img"></a>
                    </div>
                </div>
                <!--video-area end-->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-us-details">
                        <div class="section-title">
                            <h6 class="subtitle">About Atlas Market Edgers</h6>
                            <h2 class="title">Nothing is impossible. We can help you achieve your goals!</h2>
                            <p>Online banking can save you a lot of time and effort, you can undertake most transactions from the comforts of your home. However, it is crucial to use internet banking safely.</p>
                        </div>
                        <div class="media media-1">
                            <div class="media-left">
                                <img src="/passets/img/about/01.png" alt="img">
                            </div>
                            <div class="media-body">
                                <p>Investment Sponsporship Private Market.</p>
                            </div>
                        </div>
                        <div class="media media-2">
                            <div class="media-left">
                                <img src="/passets/img/about/02.png" alt="img">
                            </div>
                            <div class="media-body">
                                <p>Atlas Market Edgers Pledge underpins our firm-wide commitment to always put clients first, and to act responsibly and transparently.</p>
                            </div>
                        </div>
                        <a class="btn btn-blue" href="{{ route('about') }}">Learn More</a>
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
                            <img src="/passets/img/service/01.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="{{route('login')}}">Online Business</a></h5>
                            {{-- <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p> --}}
                            <a class="angle-btn" href="{{route('login')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="/passets/img/service/02.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="{{route('login')}}">Business Plan</a></h5>
                            {{-- <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p> --}}
                            <a class="angle-btn" href="{{route('login')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="/passets/img/service/03.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="{{route('login')}}">Mobile Bank</a></h5>
                            {{-- <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p> --}}
                            <a class="angle-btn" href="{{route('login')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="/passets/img/service/04.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="{{route('login')}}">Online Deposit</a></h5>
                            {{-- <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p> --}}
                            <a class="angle-btn" href="{{route('login')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="/passets/img/service/05.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="{{route('login')}}">Credit Card</a></h5>
                            {{-- <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p> --}}
                            <a class="angle-btn" href="{{route('login')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="/passets/img/service/06.png" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="{{route('login')}}">Income Monitoring</a></h5>
                            {{-- <p>Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna.</p> --}}
                            <a class="angle-btn" href="{{route('login')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
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
                        <p>Start small, scale smart. Our pricing plans are designed to match your ambition — no hidden fees, no surprises.</p>
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
                        {{-- <ul class="pricing-list">
                            <li><a href="#">Miximum Deposit $10,00</a></li>
                            <li><a href="#">Minimum Deposit $10</a></li>
                            <li><a href="#">Up to 50 Users available</a></li>
                            <li><a href="#">Free Banking</a></li>
                            <li><a class="btn btn-blue" href="#">Book Now</a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price text-center">
                        <div class="pricing-details">
                            <h2 class="pricing-cost">7.50%</h2>
                            <h6 class="pricing-subtitle">For a month</h6>
                            <h4 class="pricing-title">Premium</h4>
                        </div>
                        {{-- <ul class="pricing-list">
                            <li><a href="#">Miximum Deposit $10,00</a></li>
                            <li><a href="#">Minimum Deposit $10</a></li>
                            <li><a href="#">Up to 50 Users available</a></li>
                            <li><a href="#">Free Banking</a></li>
                            <li><a class="btn btn-blue" href="#">Book Now</a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price text-center">
                        <div class="pricing-details">
                            <h2 class="pricing-cost">9.50%</h2>
                            <h6 class="pricing-subtitle">For a month</h6>
                            <h4 class="pricing-title">Advanced Plan</h4>
                        </div>
                        {{-- <ul class="pricing-list">
                            <li><a href="#">Miximum Deposit $10,00</a></li>
                            <li><a href="#">Minimum Deposit $10</a></li>
                            <li><a href="#">Up to 50 Users available</a></li>
                            <li><a href="#">Free Banking</a></li>
                            <li><a class="btn btn-blue" href="#">Book Now</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--pricing-area end-->

    <!--fun-fact-area start-->
    <div class="fun-fact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title section-title-2">
                        <h6 class="subtitle subtitle-thumb">Why Choose Us</h6>
                        <h2 class="title">Create Your Amazing Benifit</h2>
                        {{-- <p>Bankdipscing elitr, sed diam nonumy eirmod et accusam et justo duo dolores et ea rebum. tet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-fact">
                        <h1 class="counter">76923</h1>
                        <h5>Customers</h5>
                        <p>Customer very satified with our work</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-fact">
                        <h1 class="counter">100</h1>
                        <h5>Our Branches</h5>
                        <p>45 Branches in NewYork, USA</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-fact">
                        <h1 class="counter">5243</h1>
                        <h5>Successfuly works</h5>
                        <p>Customer very satified with our work</p>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a class="btn" href="{{route('register')}}">Create An Account</a>
                </div>
            </div>
        </div>
    </div>
    <!--fun-fact-area end-->

    <!--transection-area start-->
    <div class="transection-area pd-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title style-2">
                        <h6 class="subtitle subtitle-thumb">Transaction Process</h6>
                        <h2 class="title">Recently Best Transections</h2>
                        <p>Whether it’s a local transfer or global investment, your transactions are secured, verified, and lightning fast.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="transection-details">
                        <div class="row no-gutters">
                            <div class="col-lg-2 col-md-3">
                                <h4>Transection</h4>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">


                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-seven-tab" data-bs-toggle="pill" data-bs-target="#pills-seven" type="button" role="tab" aria-controls="pills-seven" aria-selected="false">Running Investors</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-10 col-md-9">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="transection-table table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Person</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Detailes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space">
                                                        <td class="h-30"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/1.png" alt="img"></th>
                                                        <td>Amara Johnson</td>
                                                        <td>March 2,2023</td>
                                                        <td>$2,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="{{route('login')}}">Top UP</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/2.png" alt="img"></th>
                                                        <td>Talia Greene</td>
                                                        <td>Sept 24,2024</td>
                                                        <td>$10,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="{{route('login')}}">Top UP</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/3.png" alt="img"></th>
                                                        <td>Daniel Obasi</td>
                                                        <td>May 3,2025</td>
                                                        <td>$5,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="{{route('login')}}">Top UP</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/4.png" alt="img"></th>
                                                        <td>Samuel Iheanacho</td>
                                                        <td>Oct 26,2025</td>
                                                        <td>$29,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="{{route('login')}}">Top UP</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="transection-table table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Person</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Detailes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space">
                                                        <td class="h-30"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/2.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="{{route('login')}}">Top UP</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/3.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/1.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/4.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="transection-table table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Person</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Detailes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space">
                                                        <td class="h-30"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/2.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/3.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/4.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/3.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-four" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="transection-table table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Person</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Detailes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space">
                                                        <td class="h-30"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/3.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/4.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/1.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/2.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-five" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="transection-table table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Person</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Detailes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space">
                                                        <td class="h-30"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/3.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/1.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/2.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/4.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-six" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="transection-table table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Person</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Detailes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space">
                                                        <td class="h-30"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/4.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/1.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/2.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/3.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-seven" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="transection-table table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Person</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Detailes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-space">
                                                        <td class="h-30"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/4.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/1.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/2.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="/passets/img/envestor/3.png" alt="img"></th>
                                                        <td>Laxcon Martune</td>
                                                        <td>Oct 24,2018</td>
                                                        <td>$9,00,000.00</td>
                                                        <td>Dollar</td>
                                                        <td>001 Days Ago</td>
                                                        <td><a class="btn" href="#">View Detailes</a></td>
                                                    </tr>
                                                    <tr class="table-space">
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--transection-area end-->

    <!--work-area start-->
    <div class="work-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title section-title-2">
                        <h6 class="subtitle subtitle-thumb">Best Services</h6>
                        <h2 class="title">How It Works</h2>
                        <p>Banking doesn’t have to be complicated. We built a system that just works — fast, reliable, and built for your lifestyle.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-work mt-0 text-center">
                        <div class="work-icon">
                            <img class="" src="/passets/img/work/01.png" alt="icon">
                        </div>
                        <h5><a href="{{route('register')}}">Know About</a></h5>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                        <a class="angle-btn" href="{{route('register')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work mt-md-0 text-center">
                        <div class="work-icon">
                            <img class="" src="/passets/img/work/02.png" alt="icon">
                        </div>
                        <h5><a href="{{route('register')}}">Create Account</a></h5>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                        <a class="angle-btn" href="{{route('register')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work text-center">
                        <div class="work-icon">
                            <img class="" src="/passets/img/work/03.png" alt="icon">
                        </div>
                        <h5><a href="{{route('register')}}">Start Invest</a></h5>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                        <a class="angle-btn" href="{{route('register')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work text-center">
                        <div class="work-icon">
                            <img class="" src="/passets/img/work/04.png" alt="icon">
                        </div>
                        <h5><a href="{{route('register')}}">Get Profit</a></h5>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                        <a class="angle-btn" href="{{route('register')}}"><img src="/passets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--work-area end-->

    <!--payment area start  -->
    <div class="payment-area" id="payment">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="countr lt wow fadeInLeft">
                        <div class="icon">
                            <i class="fa fa-cc-visa" aria-hidden="true"></i>
                        </div>
                        <span class="counter">35750</span>
                        <h3 class="title">Visa Card </h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="countr wow fadeInUp">
                        <div class="icon">
                            <i class="fa credit fa-credit-card-alt" aria-hidden="true"></i>
                        </div>
                        <span class="counter">57305</span>
                        <h3 class="title">Credit Card</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="countr  wow fadeInDown">
                        <div class="icon">
                            <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                        </div>
                        <span class="counter">57681</span>
                        <h3 class="title">master card</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="countr wow fadeInRight">
                        <div class="icon">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                        </div>
                        <span class="counter">78607</span>
                        <h3 class="title">debit card</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--payment area end  -->

    <!--envestor-area start-->
    <div class="envestor-area pd-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h6 class="subtitle subtitle-thumb">Investor</h6>
                        <h2 class="title">Top Investor of E-Banking</h2>
                        <p>🏆 Meet our top investors this month!
They trusted the process, invested smart, and grew their balance — all within our platform.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="envestor-slider owl-carousel">
                        <div class="item">
                            <div class="single-envestor text-center">
                                <img src="/passets/img/envestor/01.png" alt="img">
                                <h6 class="name">Mti SSunagi</h6>
                                <p>Top Investor</p>
                                <ul class="social-area">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-envestor text-center">
                                <img src="/passets/img/envestor/02.png" alt="img">
                                <h6 class="name">K.D Linux Maxon</h6>
                                <p>Top Invester</p>
                                <ul class="social-area">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-envestor text-center">
                                <img src="/passets/img/envestor/03.png" alt="img">
                                <h6 class="name">MD. Preston Rati</h6>
                                <p>Top Invester</p>
                                <ul class="social-area">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-envestor text-center">
                                <img src="/passets/img/envestor/04.png" alt="img">
                                <h6 class="name">Man Mushiy</h6>
                                <p>Top Invester</p>
                                <ul class="social-area">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--envestor-area end-->

    <!--blog-area start-->
    <div class="blog-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title section-title-2">
                        <h6 class="subtitle subtitle-thumb">News</h6>
                        <h2 class="title">Your news and information</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img src="/passets/img/blog/01.png" alt="blog">
                            <div class="date">05-May-2020</div>
                        </div>
                        <div class="blog-details">
                            <ul class="post-meta">
                                <li><i class="fa fa-user-o"></i>Post By: RT Shuvro</li>
                                <li class="type"><img src="/passets/img/blog/icon01.png" alt="icon">Business</li>
                            </ul>
                            <h6><a href="#">How to invest and get money form E-Banking</a></h6>
                            <a class="btn btn-round" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img src="/passets/img/blog/02.png" alt="blog">
                            <div class="date">05-May-2020</div>
                        </div>
                        <div class="blog-details">
                            <ul class="post-meta">
                                <li><i class="fa fa-user-o"></i>Post By: RT Shuvro</li>
                                <li class="type"><img src="/passets/img/blog/icon01.png" alt="icon">Business</li>
                            </ul>
                            <h6><a href="#">How to invest and get money form E-Banking</a></h6>
                            <a class="btn btn-round" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img src="/passets/img/blog/03.png" alt="blog">
                            <div class="date">05-May-2020</div>
                        </div>
                        <div class="blog-details">
                            <ul class="post-meta">
                                <li><i class="fa fa-user-o"></i>Post By: RT Shuvro</li>
                                <li class="type"><img src="/passets/img/blog/icon01.png" alt="icon">Business</li>
                            </ul>
                            <h6><a href="#">How to invest and get money form E-Banking</a></h6>
                            <a class="btn btn-round" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog-area end-->

    <!-- partner area start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="partner-slider owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <img src="/passets/img/partner/01.png" alt="logo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="/passets/img/partner/02.png" alt="logo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="/passets/img/partner/03.png" alt="logo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="/passets/img/partner/04.png" alt="logo">
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
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your mail here">
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- sign-up area start -->
@endsection
