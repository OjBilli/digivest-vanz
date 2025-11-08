@extends('layouts.app')
@section('content')
  <!-- breadcrumb start -->
    <div class="breadcrumb_area">
        <div class="breadcrumb_inner d-flex align-items-center">
            <div class="container">
                <div class="breadcrumb_content">
                    <h2>Contact Us</h2>
                    <div class="page_link">
                        <a href="{{route('welcome')}}">Home</a>
                        <a href="{{route('contact')}}">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb end -->

    <!-- contact page conten area start -->
    <div class="contact-page-content-area">
        <div class="container">
            <div class="row justify-content-center">
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Address:</h4>
                            <span class="details"> St. Zip. Encinitas. 260-C North El Camino,  USA</span>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Livechat</h4>
                            <span class="details">@buttom right corner</span>
                            <span class="details"></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Email Address</h4>

                            <span class="details">info@fortressunion.org </span>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Sheikh%20Tower%2C%20%20Bogra%205800&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact page conten area end -->

    <!-- contact area start  -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-bottom-inner">
                        <!-- contact bottom inner -->
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="form-content-area">
                                    <!-- right content area -->
                                    <h3 class="title text-center">Contact Us</h3>
                                    <div class="contact-form-wrapper">
                                        <form  class="contact-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-element ">
                                                        <input type="text" id="name" name="name" placeholder="Name" class="input-field borderd">
                                                    </div>
                                                    <div class="form-element ">
                                                        <input type="email" id="email" name="email" placeholder="Email" class="input-field borderd">
                                                    </div>

                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-element ">
                                                        <input type="text" id="company" name="company" placeholder="Company" class="input-field borderd">
                                                    </div>
                                                    <div class="form-element ">
                                                        <input type="tel" id="phone" name="phone" placeholder="Phone Number" class="input-field borderd">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea rows="10" cols="30" id="message" name="message" placeholder="How can we help?" class="input-field borderd textarea"></textarea>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-blue" value="Send a Message">
                                        </form>
                                    </div>
                                </div>
                                <!-- //.right content area -->
                            </div>
                        </div>
                    </div>
                    <!-- contact bottom inner -->
                </div>
                <!-- //.col-lg-12 -->
            </div>

        </div>

    </section>
    <!-- contact area end -->

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
