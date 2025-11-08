@extends('layouts.appp')
@section('content')
    <div class="section-content-right">
        <!-- header-dashboard -->
        <div class="header-dashboard">
            <div class="wrap">
                <div class="header-left">
                    <div class="button-show-hide">
                        <i class="icon-menu"></i>
                    </div>
                    <h6>Dashboard</h6>
                    <form class="form-search flex-grow">
                        <fieldset class="name">
                            <input type="text" placeholder="Type to search …" class="show-search style-1" name="name"
                                tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="button-submit">
                            <button class="" type="submit"><i class="icon-search-normal1"></i></button>
                        </div>
                    </form>
                </div>
                <div class="header-grid">
                    <div class="header-btn">

                        <div class="popup-wrap noti type-header">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="header-item">
                                        <i class="icon-notification1"></i>
                                    </span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end has-content"
                                    aria-labelledby="dropdownMenuButton2">
                                    <li>
                                        <h6>Notifications</h6>
                                    </li>

                                    <li>
                                        <a href="{{route('user.transactions')}}" class="tf-button style-1 f12-bold w-100">
                                            View All
                                            <i class="icon icon-send"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="line1"></div>
                    <div class="popup-wrap user type-header">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="header-user wg-user">
                                    <span class="image">
                                        <img src="/storage/images/{{ Auth::user()->profile_picture }}" alt="">
                                    </span>

                                    <span class="content flex flex-column">
                                        <span class="label-02 text-Black name">{{ Auth::user()->first_name }}
                                            {{ Auth::user()->last_name }}</span>
                                        {{-- <span class="f14-regular text-Gray">{{ Auth::user()->role }}</span> --}}
                                    </span>
                                </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3">
                                <li>
                                    <a href="{{ route('user.portfolio') }}" class="user-item">
                                        <div class="body-title-2">Investment Portfolio</div>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('user.transactions') }}" class="user-item">
                                        <div class="body-title-2">Transactions</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.profile') }}" class="user-item">
                                        <div class="body-title-2">Setting</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.link') }}" class="user-item">
                                        <div class="body-title-2">Account Link</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="user-item menu-item-button">
                                        <div class="body-title-2">Log out</div>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /header-dashboard -->
        <!-- main-content -->
        <div class="main-content">
            <!-- main-content-wrap -->
            <div class="main-content-inner">
                <!-- main-content-wrap -->
                <div class="main-content-wrap">
                    <div class="tf-container">
                        <div class="mb-32 flex flex-wrap justify-between gap14 items-center">
                            <h6>Loan Request</h6>
                            {{-- <div class="flex items-center flex-wrap">
                                            <a href="#" class="tf-button style-4 f12-bold">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                                    <path d="M9.98018 8.5H9.46685H6.35352V10.3867H7.22685H9.98018C10.6135 10.3867 11.1335 9.96 11.1335 9.44C11.1335 8.92 10.6135 8.5 9.98018 8.5Z" fill="#161326"/>
                                                    <path d="M7.99967 1.3335C4.31967 1.3335 1.33301 4.32016 1.33301 8.00016C1.33301 11.6802 4.31967 14.6668 7.99967 14.6668C11.6797 14.6668 14.6663 11.6802 14.6663 8.00016C14.6663 4.32016 11.6797 1.3335 7.99967 1.3335ZM9.97967 11.3868H8.87967V12.3335C8.87967 12.6068 8.65301 12.8335 8.37967 12.8335C8.10634 12.8335 7.87967 12.6068 7.87967 12.3335V11.3868H7.22634H7.07301V12.3335C7.07301 12.6068 6.84634 12.8335 6.57301 12.8335C6.29967 12.8335 6.07301 12.6068 6.07301 12.3335V11.3868H5.85301H4.69967C4.42634 11.3868 4.19967 11.1602 4.19967 10.8868C4.19967 10.6135 4.42634 10.3868 4.69967 10.3868H5.35301V8.00016V5.6135H4.69967C4.42634 5.6135 4.19967 5.38683 4.19967 5.1135C4.19967 4.84016 4.42634 4.6135 4.69967 4.6135H5.85301H6.07301V3.66683C6.07301 3.3935 6.29967 3.16683 6.57301 3.16683C6.84634 3.16683 7.07301 3.3935 7.07301 3.66683V4.6135H7.22634H7.87967V3.66683C7.87967 3.3935 8.10634 3.16683 8.37967 3.16683C8.65301 3.16683 8.87967 3.3935 8.87967 3.66683V4.6135H9.46634C10.4997 4.6135 11.413 5.52016 11.413 6.56016C11.413 7.00683 11.253 7.4135 10.9997 7.74683C11.673 8.07349 12.133 8.7135 12.133 9.4535C12.133 10.5135 11.1663 11.3868 9.97967 11.3868Z" fill="#161326"/>
                                                    <path d="M10.4135 6.55311C10.4135 6.11311 10.0002 5.60645 9.46685 5.60645H7.22685H6.35352V7.49311H9.46685C9.98685 7.49978 10.4135 7.07311 10.4135 6.55311Z" fill="#161326"/>
                                                </svg>
                                                Bit Coin
                                            </a>
                                            <a href="#" class="tf-button style-4 f12-bold">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                                    <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#161326"/>
                                                    <path d="M4.60004 9.93317L7.78669 11.3465C7.92669 11.4065 8.08671 11.4065 8.22004 11.3465L11.4067 9.93317C11.6867 9.80651 11.9467 10.1465 11.7534 10.3865L8.42003 14.4598C8.19336 14.7398 7.82004 14.7398 7.59337 14.4598L4.26004 10.3865C4.06004 10.1465 4.31338 9.80651 4.60004 9.93317Z" fill="#161326"/>
                                                    <path d="M7.85338 6.3265L5.10004 7.69984C4.85337 7.81984 4.85337 8.17317 5.10004 8.29317L7.85338 9.6665C7.94671 9.71317 8.06001 9.71317 8.15334 9.6665L10.9067 8.29317C11.1533 8.17317 11.1533 7.81984 10.9067 7.69984L8.15334 6.3265C8.05334 6.27984 7.94671 6.27984 7.85338 6.3265Z" fill="#161326"/>
                                                </svg>
                                                Ethereum
                                            </a>
                                            <a href="#" class="tf-button style-4 f12-bold">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                                    <path d="M4.74695 2.3335H10.667C13.3336 2.3335 14.667 4.00016 14.667 6.3335V8.00016C14.667 11.3335 12.667 13.6668 9.00029 13.6668H2.62695L3.33362 10.8335H8.29362C10.667 10.8335 11.8336 9.3335 11.8336 7.2935V7.16683C11.8336 6.00016 11.3336 5.16683 9.83362 5.16683H4.04029L4.74695 2.3335Z" fill="#161326"/>
                                                    <path d="M8.27334 6.81982H3.13334C2.41334 6.81982 1.78667 7.31316 1.60667 8.00649L1.44 8.68649C1.38 8.93316 1.56667 9.17316 1.82 9.17316H6.96C7.68 9.17316 8.30667 8.67982 8.48667 7.98649L8.65334 7.3065C8.72 7.05983 8.52667 6.81982 8.27334 6.81982Z" fill="#161326"/>
                                                </svg>
                                                Dash
                                            </a>
                                            <a href="#" class="tf-button style-4 f12-bold">
                                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                                    <path d="M10.0003 1.6665C5.40032 1.6665 1.66699 5.39984 1.66699 9.99984C1.66699 14.5998 5.40032 18.3332 10.0003 18.3332C14.6003 18.3332 18.3337 14.5998 18.3337 9.99984C18.3337 5.39984 14.6003 1.6665 10.0003 1.6665ZM13.1837 13.5998C13.1087 13.9998 12.767 14.2832 12.367 14.2832H7.75031C7.20031 14.2832 6.80032 13.7498 6.95032 13.2248L7.65032 10.7665L6.22533 11.0498C6.18366 11.0582 6.142 11.0582 6.10033 11.0582C5.80866 11.0582 5.55032 10.8498 5.49199 10.5582C5.42532 10.2165 5.64199 9.8915 5.98365 9.82484L8.04199 9.41651L9.13365 5.60817C9.18365 5.43317 9.35033 5.30817 9.53366 5.30817H10.667C11.217 5.30817 11.617 5.82483 11.4753 6.35817L10.8003 8.8665L12.4087 8.5415C12.742 8.47484 13.0753 8.6915 13.142 9.03317C13.2086 9.37483 12.992 9.69984 12.6503 9.7665L10.4336 10.2082L9.97533 11.9165H12.5003C13.017 11.9165 13.4087 12.3832 13.317 12.8998L13.1837 13.5998Z" fill="#161326"/>
                                                </svg>
                                                Lite Coin
                                            </a>
                                        </div> --}}
                        </div>
                        <div class="row">

                            <form action="{{ route('user.loan') }}" method="POST">@csrf

                                @foreach ($errors->all() as $err)
                                    <p class="text-danger text-center">{{ $err }}</p>
                                @endforeach
                                <div class="col-12">
                                    <div class="wg-box box-quick-trade mb-32">
                                        <div class="title">
                                            <div>
                                                <div class="label-01 mb-2">Request Form</div>
                                                <div class="f14-regular text-GrayDark">Fill the form below to request for a
                                                    loan</div>
                                            </div>
                                            {{-- <select class="image-select center style-white type-2 image-w-20">
                                                        <option selected data-thumbnail="/files/images/item/bitcoin-1.png">45,662.05 Dash</option>
                                                        <option data-thumbnail="/files/images/item/dashcoin.png">40,662.05 Dash</option>
                                                    </select> --}}
                                        </div>
                                        <div class="quick-trade-wrap">
                                            <div class="quick-trade-list">
                                                <div class="relative">
                                                    <div class="f12-medium text-Primary title">Amount</div>
                                                    <input type="number" name="amount" placeholder="Amount"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>
                                                <div class="relative">
                                                    <div class="f12-medium text-Primary title">Naration</div>
                                                    <input name="narration" type="text" placeholder="Loan Description"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>
                                                {{-- <div class="relative">
                                                            <div class="f12-medium text-Primary title">Fee (1%)</div>
                                                            <input type="text" placeholder="" class="quick-trade-input style-1" value="0.000000" aria-required="true" required="">
                                                        </div>
                                                        <div class="relative">
                                                            <div class="f12-medium text-Primary title">Total BPL</div>
                                                            <input type="text" placeholder="" class="quick-trade-input style-1" value="0.000000" aria-required="true" required="">
                                                        </div> --}}
                                            </div>
                                            <div class="tf-cart-checkbox style-3 mb-4">
                                                <div class="tf-checkbox-wrapp">
                                                    <input class="checkbox-item" type="checkbox"
                                                        name="transaction_checkbox">
                                                    <div>
                                                        <i class="icon-check"></i>
                                                    </div>
                                                </div>
                                                <div class="f12-medium text-GrayDark">
                                                    I have read and agree to Terms of Service
                                                </div>
                                            </div>

                                            <div class="bottom-button">
                                                {{-- <a href="#" class="btn-buy f12-bold w-100">
                                                            Buy
                                                            <i class="icon icon-send"></i>
                                                        </a> --}}
                                                <a href="#" class="btn-sell f12-bold w-100">
                                                    <button type="submit"
                                                        style="background:none; border:none; color:white;">
                                                        Submit Request
                                                    </button>
                                                    <i class="icon icon-send"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /main-content-wrap -->
            </div>
            <!-- /main-content-wrap -->

        </div>
        <!-- /main-content -->
    </div>
@endsection
