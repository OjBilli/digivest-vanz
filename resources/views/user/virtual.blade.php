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
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-20 flex flex-wrap justify-between gap14 items-center">
                                    <h6>My Card</h6>

                                </div>
                                <div class="mb-32">
                                    <div class="swiper tf-sw-card">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="my-card-item bg-4">
                                                    <div class="number">
                                                        <div class="f12-medium text-GrayDark">Main Wallet</div>
                                                        <div class="label-01 text-White">
                                                            {{ Auth::user()->currency_type }} {{ Help::totalBalance() }}.00
                                                        </div>
                                                    </div>
                                                    <div class="bot">
                                                        <div id="cardNumberDisplay" class="f12-medium text-GrayDark">
                                                            4562&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****
                                                        </div>
                                                    </div>
                                                    <div class="icon">
                                                        <img class="" width="50px" height="50px"
                                                            src="/assets/img/logos/mastercard.png" alt="card-logo" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="wg-box card-details mb-32">
                                    <div class="title flex justify-between items-center">
                                        <h6>Card Details</h6>
                                        <div class="d-flex gap8">
                                            <a id="generateCardBtn" href="javascript:void(0);" class="tf-button f12-bold">
                                                <i class="icon icon-paper"></i>
                                                Generate Number
                                            </a>
                                            {{-- <a href="editDropdownBtn" type="button" class="tf-button f12-bold">
                                                <i class="icon icon-edit"></i>
                                                Edit
                                            </a> --}}

                                            <!-- Edit button -->



                                            <!-- Hidden Dropdown Form -->
                                            <div id="editDropdownForm"
                                                class="hidden absolute right-0 top-10 z-50 bg-white border border-gray-200 rounded-lg shadow-lg p-4 w-64">

                                                {{-- <form method="POST" action="{{ route('user.card.update') }}"> --}}
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="block text-sm text-gray-700 mb-1">Card Name</label>
                                                    <input type="text" name="card_name" value="Main Wallet"
                                                        class="w-full px-2 py-1 border rounded-md focus:outline-none focus:ring focus:ring-LightSkyBlue">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="block text-sm text-gray-700 mb-1">Valid Date</label>
                                                    <input type="text" name="valid_date" value="11/27"
                                                        class="w-full px-2 py-1 border rounded-md focus:outline-none focus:ring focus:ring-LightSkyBlue">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="block text-sm text-gray-700 mb-1">Bank Name</label>
                                                    <input type="text" name="bank_name" value="Market Edgers Bank"
                                                        class="w-full px-2 py-1 border rounded-md focus:outline-none focus:ring focus:ring-LightSkyBlue">
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit"
                                                        class="bg-LightSkyBlue text-white px-3 py-1 rounded-md text-sm font-semibold hover:opacity-90">
                                                        Save
                                                    </button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <div class="left">
                                            <ul>
                                                <li>
                                                    <div class="f14-regular text-Black">Card Name</div>
                                                    <div class="f14-bold text-Black">Main Wallet</div>
                                                </li>
                                                <li>
                                                    <div class="f14-regular text-Black">Valid Date</div>
                                                    <div class="f14-bold text-Black">11/27</div>
                                                </li>
                                                <li>
                                                    <div class="f14-regular text-Black">Card Number</div>
                                                    <div class="f14-bold text-Black" id="cardNumberHidden">**** **** ****
                                                        ****</div>
                                                </li>
                                                <li>
                                                    <div class="f14-regular text-Black">Bank Name</div>
                                                    <div class="f14-bold text-Black">Atlas Market Edgers</div>
                                                </li>
                                                <li>
                                                    <div class="f14-regular text-Black">Card Holder</div>
                                                    <div class="f14-bold text-Black">
                                                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="f14-regular text-Black">Theme</div>
                                                    <div class="f14-bold text-Black">
                                                        <div class="flex gap12">
                                                            <div class="box-item bg-YellowGreen"><i
                                                                    class="icon-check f12-bold"></i></div>
                                                            <div class="box-item bg-Orchid"></div>
                                                            <div class="box-item bg-LightSkyBlue"></div>
                                                            <div class="box-item bg-Black"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="center text-center">
                                            <div class="label-02 title">Wallet Balance</div>
                                            <h5 class="text-Black mt-2">
                                                {{ Auth::user()->currency_type }} {{ Help::totalBalance() }}.00
                                            </h5>
                                            <p class="text-sm text-GrayDark mt-2">Available Funds</p>
                                        </div>

                                        <div class="right text-center">
                                            <img src="/assets/img/logos/mastercard.png" alt="logo"
                                                class="w-12 mx-auto">
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    document.getElementById("generateCardBtn").addEventListener("click", function() {
                                        // Generate a random 16-digit number grouped by 4s
                                        let randomCardNumber = Array.from({
                                                length: 16
                                            }, () => Math.floor(Math.random() * 10))
                                            .join('')
                                            .replace(/(\d{4})(?=\d)/g, '$1 ');

                                        document.getElementById("cardNumberHidden").textContent = randomCardNumber;
                                        document.getElementById("cardNumberDisplay").innerHTML = randomCardNumber.replace(/\d{4}(?=\d)/g,
                                            "**** ");
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12">
                                <div class="wg-box type-1 bg-Gainsboro widget-tabs style-1 shadow-none">
                                    <div class="title">
                                        <h6>Wallet Activity</h6>

                                    </div>
                                    <div>
                                        <div class="widget-content-tab">
                                            <div class="widget-content-inner active">
                                                @if ($virtuals->isEmpty())
                                                    <p class="text-center">No Card Requested yet.</p>
                                                @else
                                                    @foreach ($virtuals as $virtual)
                                                        <div class="f14-regular text-Gray mb-12">
                                                            {{ $virtual->created_at->format('d M y, h:ia') }}</div>
                                                        <ul class="list-wallet-activity">
                                                            <li>
                                                                <div class="wallet-activity-item">
                                                                    <div class="icon">
                                                                        <img src="/files/images/item/cash.png"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="content">
                                                                        <div class="mb-2">
                                                                            <a href="#"
                                                                                class="f14-bold">{{ $virtual->card_holder }}</a>
                                                                        </div>
                                                                        <div class="f12-medium text-Gray">
                                                                            {{ $virtual->card_number }}</div>
                                                                    </div>

                                                                    @if ($virtual->status == 'pending')
                                                                        <div class="box-status bg-LightGray">
                                                                            <span class="font-poppins">PENDING</span>
                                                                        </div>
                                                                    @elseif ($virtual->status == 'confirmed')
                                                                        <div class="box-status bg-YellowGreen">
                                                                            <span class="font-poppins">CONFIRMED</span>
                                                                        </div>
                                                                    @elseif ($virtual->status == 'cancelled')
                                                                        <div class="box-status bg-LightGray type-red">
                                                                            <span class="font-poppins">CANCELLED</span>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    @endforeach
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="w-full max-w-full px-3 mb-6 xl:mb-0 xl:w-1/2 xl:flex-none">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-transparent border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                            <div class="relative overflow-hidden rounded-2xl"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg')">
                                <span
                                    class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 opacity-80"></span>
                                <div class="relative z-10 flex-auto p-4">
                                    <i class="p-2 text-white fas fa-wifi"></i>
                                    <h5 class="pb-2 mt-6 mb-12 text-white" id="cardNumberDisplay">
                                        4562&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****</h5>
                                    <div class="flex">
                                        <div class="flex">
                                            <div class="mr-6">
                                                <p class="mb-0 text-sm leading-normal text-white opacity-80">Card Holder</p>
                                                <h6 class="mb-0 text-white">{{ Auth::user()->first_name }}
                                                    {{ Auth::user()->last_name }}</h6>
                                            </div>
                                            <div>
                                                <p class="mb-0 text-sm leading-normal text-white opacity-80">Expires</p>
                                                <h6 class="mb-0 text-white">11/27</h6>
                                            </div>
                                        </div>
                                        <div class="flex items-end justify-end w-1/5 ml-auto">
                                            <img class="w-3/5 mt-2" src="/assets/img/logos/mastercard.png" alt="logo" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
                        <div
                            class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <form action="{{ route('user.virtual.card') }}" method="POST">@csrf
                                  @foreach ($errors->all() as $err)
                                                    <p class="text-danger text-center">{{ $err }}</p>
                                                 @endforeach
                                <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                            <h6 class="mb-0 dark:text-white">Generate Card for personal use only</h6>
                                        </div>
                                        <div class="flex-none w-1/2 max-w-full px-3 text-right">
                                            <a id="generateCardBtn"
                                                class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle
                                                    transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in
                                                    shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl
                                                    dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem
                                                    bg-x-25"
                                                    href="javascript:void(0);"> <i class="fas fa-plus"> </i>Generate Card</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                            <div class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none md-max:overflow-auto rounded-xl border-slate-100 dark:border-slate-700 bg-clip-border">
                                                <img class="mb-0 mr-4 w-1/10" src="/assets/img/logos/mastercard.png"
                                                    alt="logo" />
                                               <input readonly name="card_number" id="cardNumberHidden">
                                                <i class="ml-auto cursor-pointer fas fa-pencil-alt text-slate-700"
                                                    data-target="tooltip_trigger" data-placement="top"></i>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg">

                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                            <div class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none md-max:overflow-auto rounded-xl border-slate-100 dark:border-slate-700 bg-clip-border">

                                            <input readonly name="card_holder" class="form-control"
                                                    value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}"
                                                    placeholder="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}">
                                            <i class="ml-auto cursor-pointer fas fa-pencil-alt text-slate-700" data-target="tooltip_trigger" data-placement="top"></i>
                                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg">

                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="flex-none w-2/2 max-w-full px-3 mx-3 text-left">
                                    <button type="submit"
                                        class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75">Submit
                                        Request</button>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mt-6 md:w-12/12 md:flex-none">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                        <h6 class="mb-0 dark:text-white">Card Request History</h6>
                    </div>
                    <div class="flex-auto p-4 pt-6">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            @if ($virtuals->isEmpty())
                                <p class="text-center">No Card Requested yet.</p>
                            @else
                                @foreach ($virtuals as $virtual)
                                    <li
                                        class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                                        <div class="flex flex-col">
                                            <h6 class="mb-4 text-sm leading-normal dark:text-white">Card Type: Master Card
                                            </h6>
                                            <span class="mb-2 text-xs leading-tight dark:text-white/80">DATE: <span
                                                    class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $virtual->created_at->format('d M y, h:ia') }}</span></span>
                                            <span class="mb-2 text-xs leading-tight dark:text-white/80">Card Holder: <span
                                                    class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $virtual->card_holder }}</span></span>
                                            <span class="text-xs leading-tight dark:text-white/80">Card Number: <span
                                                    class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $virtual->card_number }}</span></span>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text"
                                                href="javascript:;"><i
                                                    class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-black bg-x-25 bg-clip-text"></i>Status:</a>
                                            <a class="inline-block dark:text-white px-4 py-2.5 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 hover:-translate-y-px active:opacity-85 bg-x-25 text-slate-700"
                                                href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700"
                                                    aria-hidden="true"></i>
                                                @if ($virtual->status == 'pending')
                                                    <button class="btn btn-warning">{{ $virtual->status }}</button>
                                                @elseif ($virtual->status == 'confirmed')
                                                    <button class="btn btn-success">{{ $virtual->status }}</button>
                                                @elseif ($virtual->status == 'cancelled')
                                                    <button class="btn btn-danger">{{ $virtual->status }}</button>
                                                @endif
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            @endif


                        </ul>
                    </div>
                </div>
            </div>

        </div> --}}


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const generateCardBtn = document.getElementById("generateCardBtn");
            const cardNumberHidden = document.getElementById("cardNumberHidden");

            generateCardBtn.addEventListener("click", function() {

                let cardNumber = '';
                for (let i = 0; i < 4; i++) {
                    cardNumber += Math.floor(1000 + Math.random() * 9000).toString() + ' ';
                }
                cardNumber = cardNumber.trim();


                cardNumberHidden.value = cardNumber;


                let existingDisplay = document.getElementById("cardNumberDisplay");
                if (!existingDisplay) {
                    existingDisplay = document.createElement("div");
                    existingDisplay.id = "cardNumberDisplay";
                    cardNumberHidden.parentElement.appendChild(existingDisplay);
                }
                existingDisplay.textContent = `Generated Card Number: ${cardNumber}`;
            });
        });
    </script>

@endsection
