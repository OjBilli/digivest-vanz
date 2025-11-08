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

        <div class="main-content">
            <div class="main-content-inner">
                <div class="main-content-wrap">
                    <div class="tf-container">
                        <div class="row">

                            <div class="col-12">
                                <div class="flex justify-between items-center mb-24 mt-24">
                                    <h6 class="">Account Summary</h6>
                                    <div class="dropdown default">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon-more"></span>
                                        </button>

                                    </div>
                                </div>
                                <div class="flex gap24 flex-md-row flex-column mb-16 row-gap-0">
                                    <div class="w-100">
                                        <div class="wg-card style-1 bg-YellowGreen bg-5 mb-16">
                                            <div class="flex items-center gap8">


                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                    xmlns="../../../www.w3.org/2000/svg.html">
                                                    <rect width="40" height="40" rx="12" fill="white" />
                                                    <path
                                                        d="M24.4478 27.9502C30.8571 22.4216 27.0898 12.3429 13.9287 12.0493C14.0755 20.9538 12.8523 27.8034 21.8058 27.8034C24.5946 23.5469 22.5397 19.3393 17.9896 15.1806C22.4907 16.9419 26.307 22.3238 24.4478 27.9502Z"
                                                        fill="#161326" />
                                                </svg>


                                                <div class="f12-bold">Account Balance</div>
                                            </div>
                                            <div class="content">
                                                <div class="flex gap2 align-items-end flex-wrap">
                                                    <h6 class="mb-0 ">{{ Auth::user()->currency_type }}
                                            {{ Help::totalBalance() }}.00</h6>
                                                    <div class="f12-medium"><span class="text-GrayDark"></span></div>
                                                </div>
                                                <div class="chart-small">
                                                    <div id="small-chart-4"></div>
                                                </div>
                                            </div>
                                            <div class="bottom">
                                                <div class="infor-number">
                                                    <div class="flex gap4 f12-medium">
                                                        <span class="text-GrayDark">Account Name</span>
                                                        <span class="">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                                                    </div>
                                                    <div class="flex gap8 f12-medium">
                                                        <span class="text-GrayDark">Account Type</span>
                                                        <span class="">{{ Auth::user()->account_type }}</span>
                                                    </div>
                                                </div>
                                                <a href="{{route('user.transactions')}}" class="tf-btn-default f12-bold style-1">
                                                    History
                                                    <i class="icon-send1"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <form action="{{ route('user.invest') }}" method="post">@csrf



                                @foreach ($errors->all() as $err)
                                    <p class="text-danger text-center">{{ $err }}</p>
                                @endforeach
                                <div class="col-12">
                                    <div class="wg-box box-quick-trade mb-32">
                                        <div class="title">
                                            <div>
                                                <div class="label-01 mb-2">Start Investment</div>
                                                <div class="f14-regular text-GrayDark">Select a plan that best fits your investment goals</div>
                                            </div>

                                        </div>
                                        <div class="quick-trade-wrap">
                                            <div class="quick-trade-list">

                                                    <select name="plan_id" class="mb-5 image-select center w-100" required>
                                                   <option value="">CHOOSE INVESTMENT PLAN</option>

                                                    @foreach ($plans as $plan)
                                                    <option class="textt-uppercase" value="{{ $plan->id }}">
                                                        {{ $plan->name }} (${{ $plan->minimum }} - ${{ $plan->maximum }} )
                                                    </option>
                                                    @endforeach

                                                </select>
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">Amount</div>
                                                    <input type="number" name="amount" placeholder="Amount"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>
                                                <select name="currency" class="mb-5 image-select center w-100" required>
                                                    <option value="">SELECT CURRENCY </option>
                                                    @foreach ($currencies as $currency)
                                                        <option class="textt-uppercase" value="{{ $currency->id }}">
                                                            {{ $currency->name }}
                                                        </option>
                                                    @endforeach

                                                </select>




                                            </div>


                                            <div class="bottom-button">



                                                <a href="#" class="btn-sell f12-bold w-100">
                                                    <button type="submit"
                                                        style="background:none; border:none; color:black;">
                                                        Start Investment
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

            </div>


        </div>

    </div>

@endsection
