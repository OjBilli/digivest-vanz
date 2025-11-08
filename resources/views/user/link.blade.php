@extends('layouts.appp')
@section('content')
    <div class="section-content-right">
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
                                        <a href="{{ route('user.transactions') }}" class="tf-button style-1 f12-bold w-100">
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

        <div class="main-content">
            <!-- main-content-wrap -->
            <div class="main-content-inner">
                <!-- main-content-wrap -->
                <div class="main-content-wrap">
                    <div class="tf-container">
                        <div class="wg-box style-1 p-32 gap16 bg-Gainsboro shadow-none mb-23">
                            <h5>Account Linking</h5>
                            <div class="flex flex-wrap row-gap-16 gap36 items-center">
                                <div class="flex gap6 items-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path
                                            d="M13.492 2.1665H6.50866C3.47533 2.1665 1.66699 3.97484 1.66699 7.00817V13.9832C1.66699 17.0248 3.47533 18.8332 6.50866 18.8332H13.4837C16.517 18.8332 18.3253 17.0248 18.3253 13.9915V7.00817C18.3337 3.97484 16.5253 2.1665 13.492 2.1665ZM12.8003 12.4165C13.042 12.6582 13.042 13.0582 12.8003 13.2998C12.6753 13.4248 12.517 13.4832 12.3587 13.4832C12.2003 13.4832 12.042 13.4248 11.917 13.2998L10.0003 11.3832L8.08366 13.2998C7.95866 13.4248 7.80033 13.4832 7.64199 13.4832C7.48366 13.4832 7.32533 13.4248 7.20033 13.2998C6.95866 13.0582 6.95866 12.6582 7.20033 12.4165L9.11699 10.4998L7.20033 8.58317C6.95866 8.3415 6.95866 7.9415 7.20033 7.69984C7.44199 7.45817 7.84199 7.45817 8.08366 7.69984L10.0003 9.6165L11.917 7.69984C12.1587 7.45817 12.5587 7.45817 12.8003 7.69984C13.042 7.9415 13.042 8.3415 12.8003 8.58317L10.8837 10.4998L12.8003 12.4165Z"
                                            fill="#FD7972" />
                                    </svg>
                                    <div class="f14-regular">Payee Linking</div>
                                </div>

                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <div class="account-security-item mb-24">
                                    <div class="heading">
                                        <div class="label-01 mb-8">Link Account</div>
                                        <div class="f12-regular text-GrayDark">Message our live chat team for quick,
                                            step-by-step help linking your account as a payee.</div>
                                    </div>
                                    <a href="mailto:info@atlasmarketedgers.com" class="tf-button f12-bold w-100">
                                        Email Support
                                        <i class="icon icon-send"></i>
                                    </a>

                                </div>


                            </div>


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
