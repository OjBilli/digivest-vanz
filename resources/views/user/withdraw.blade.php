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
                                        <div class="wg-card style-1 bg-pink-1 bg-7 mb-16">
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
                                                        <span class="">{{ Auth::user()->first_name }}
                                                            {{ Auth::user()->last_name }}</span>
                                                    </div>
                                                    <div class="flex gap8 f12-medium">
                                                        <span class="text-GrayDark">Account Type</span>
                                                        <span class="">{{ Auth::user()->account_type }}</span>
                                                    </div>
                                                </div>
                                                <a href="{{ route('user.transactions') }}"
                                                    class="tf-btn-default f12-bold style-1">
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

                            <form action="{{ route('user.withdraw') }}" method="post">@csrf



                                @foreach ($errors->all() as $err)
                                    <p class="text-danger text-center">{{ $err }}</p>
                                @endforeach
                                <div class="col-12">
                                    <div class="wg-box box-quick-trade mb-32">
                                        <div class="title">
                                            <div>
                                                <div class="label-01 mb-2">Withdrawal Request</div>
                                                <div class="f14-regular text-GrayDark">Make a quick withdrawal</div>
                                            </div>

                                        </div>
                                        <div class="quick-trade-wrap">
                                            <div class="quick-trade-list">
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">Amount</div>
                                                    <input type="number" name="amount" placeholder="Amount"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>
                                                <select name="wallet_id" class="mb-5 image-select center w-100" required>

                                                    <option selected="">Choose Wallet</option>
                                                    @foreach ($wallets as $wallet)
                                                        <option value="{{ $wallet->id }}">{{ $wallet->currency->name }}
                                                            ({{ $wallet->balance }})</option>
                                                    @endforeach

                                                </select>


                                                <fieldset class="password">
                                                    <input class="password-input bg-Gainsboro" type="password"
                                                        placeholder="Enter your pin" name="pin" tabindex="0"
                                                        value="" aria-required="true" required="">
                                                    <span class="show-pass">
                                                        <i class="icon-view view"></i>
                                                        <i class="icon-hide hide"></i>
                                                    </span>
                                                </fieldset>

                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">Account NO/ Wallet address/
                                                        Tag</div>
                                                    <input type="text" name="wallet"
                                                        placeholder="Account NO/ Wallet address/ Tag"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>

                                            </div>


                                            <div class="bottom-button">

                                                <a href="#" class="btn-buy f12-bold w-100">
                                                    <button type="submit"
                                                        style="background:none; border:none; color:black;">
                                                        Request Withdraw
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

    {{-- <div class="w-full px-6 py-6 mx-auto">


        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-3/3 lg:flex-none">
                <div class="flex flex-wrap -mx-3">

                    <div class="w-full max-w-full px-3 xl:w-1/2 xl:flex-none">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 md:w-2/2 md:flex-none">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                    <div
                                        class="p-4 mx-6 mb-0 text-center border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                        <div
                                            class="w-16 h-16 text-center bg-center shadow-sm icon bg-gradient-to-tl from-blue-500 to-violet-500 rounded-xl">
                                            <i
                                                class="relative text-xl leading-none text-white opacity-100 fas fa-landmark top-31/100"></i>
                                        </div>
                                    </div>
                                    <div class="flex-auto p-4 pt-0 text-center">
                                        <h6 class="mb-0 text-center dark:text-white">Main Balance</h6>
                                        <span
                                            class="text-xs leading-tight dark:text-white dark:opacity-80">AVAILABILITY</span>
                                        <hr
                                            class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                                        <h5 class="mb-0 dark:text-white">{{ Auth::user()->currency_type }}
                                            {{ Help::totalBalance() }}.00</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-12/12 md:flex-0">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                        <div class="flex items-center">
                            <p class="mb-0 dark:text-white/80">Make Withdraw</p>
                        </div>
                    </div>
                    <form action="{{ route('user.withdraw') }}" method="post">@csrf

                        <div class="flex-auto p-6">
                             @foreach ($errors->all() as $err)
                                                    <p class="text-danger text-center">{{ $err }}</p>
                                                 @endforeach

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">AMOUNT </label>
                                        <input type="number" name="amount"  placeholder="INITIATE AMOUNT"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>



                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="first name"
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">ACCOUNT METHOD</label>
                                        <select name="wallet_id"  id="inputState" class="form-control default-select wide focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                                           <option selected="">Choose Wallet</option>
                                                                @foreach ($wallets as $wallet)
                                                                <option value="{{ $wallet->id }}" >{{ $wallet->currency->name }} ({{ $wallet->balance }})</option>
                                                                @endforeach


                                                        </select>
                                    </div>
                                </div>

                                 <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">ACOOUNT PIN </label>
                                        <input type="number" name="pin"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>


                                 <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Account NO/ Wallet address/ Tag</label>
                                        <input type="text" name="wallet" placeholder="Account NO/ Wallet address/ Tag"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>

                            </div>




                        </div>


                        <div class="flex-none w-2/2 max-w-full px-3 mx-3 text-left">
                            <button type="submit"
                                class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75">PROCEED</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div>
                </div>
            </div>

        </div> --}}
@endsection
