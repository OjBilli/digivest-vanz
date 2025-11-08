@extends('layouts.appp')
@section('content')
    @php
$totalAmount =
    (float) Auth::user()->wireUSDWallet->balance +
    (float) Auth::user()->wireEURWallet->balance +
    (float) Auth::user()->wireGBPWallet->balance;
@endphp
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
                            <div class="col-lg-4">
                                <div class="wg-profile">
                                    <div class="dropdown default">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon-more text-White"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="{{ route('user.deposit') }}">Wallet</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('user.profile') }}">Setting</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="image-bg">
                                        <img src="/files/images/item/bg-profile.png" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="avatar">
                                            <img src="/storage/images/{{ Auth::user()->profile_picture }}"
                                                alt="">
                                        </div>
                                        <h6 class="name mb-2">
                                            <a href="#">Full Name: {{ Auth::user()->first_name }}
                                                {{ Auth::user()->last_name }}</a>
                                        </h6>
                                        <div class="join-time f12-medium text-Gray">Join on <span
                                                class="text-Black time">{{ Auth::user()->created_at->format('d F, Y') }}</span>
                                        </div>
                                         <h6 class="name mb-2">
                                            <a href="#">Account Number:</a>
                                        </h6>
                                        <div class="connect mr-4">
                                            <div id="copy-account-number" class="f12-bold text-black">{{ Auth::user()->account_number }}</div>
                                            <ul class="tf-social mr-4">

                                                <a onclick="copyToClipboard()"class="tf-button style-4 f12-bold w-100">
                                                    Click to Copy
                                                    <i class="icon-document"></i>
                                                </a>


                                            </ul>
                                        </div>





                                <script>
                                    function copyToClipboard() {
                                        const accountNumber = document.getElementById("copy-account-number").textContent.trim();
                                        navigator.clipboard.writeText(accountNumber).then(() => {
                                            alert("Account number copied: " + accountNumber);
                                        }).catch(err => {
                                            console.error('Failed to copy: ', err);
                                            alert("Failed to copy account number.");
                                        });
                                    }
                                </script>



                                    </div>
                                    <a href="{{ route('user.profile') }}" class="tf-button f12-bold w-100 bg-Gainsboro">
                                        <i class="icon icon-edit"></i>
                                        Edit Profile
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8">
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
                                                <i class="icon-wallet f12-bold"></i>
                                                <div class="f12-bold">Account Balance</div>
                                            </div>
                                            <div class="content">
                                                <div class="flex gap2 align-items-end flex-wrap">
                                                    <h6 class="mb-0 "> {{ Auth::user()->currency_type }} {{ number_format($totalAmount, 2) }}</h6>
                                                        {{-- {{ Help::totalBalance() }}.00</h6> --}}
                                                    <div class="f12-medium"> <span class="text-GrayDark"></span></div>
                                                </div>
                                                <div class="chart-small">
                                                    <div id="small-chart-4"></div>
                                                </div>
                                            </div>
                                            <div class="bottom">
                                                <div class="infor-number">
                                                    <div class="flex gap4 f12-medium">
                                                        <a href="{{ route('user.deposit') }}"
                                                            class="tf-btn-default f12-bold style-1">
                                                            Deposit
                                                            <i class="icon-send1"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex gap8 f12-medium">
                                                        <a href="{{ route('user.withdraw') }}"
                                                            class="tf-btn-default f12-bold style-1">
                                                            Withdraw
                                                            <i class="icon-send1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a href="{{ route('user.transactions') }}"
                                                    class="tf-btn-default f12-bold style-1">
                                                    Transactions
                                                    <i class="icon-send1"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="wg-card style-1 bg-blue-1 bg-6 mb-16">
                                            <div class="flex items-center gap8">
                                                <i class="icon-arrow-swap f12-bold"></i>
                                                <div class="f12-bold">Account Type</div>
                                            </div>
                                            <div class="content">
                                                <div class="flex gap2 align-items-end flex-wrap">
                                                    <h6 class="mb-0 ">{{ Auth::user()->account_type }}</h6>
                                                    <div class="f12-medium"><span class="text-GrayDark"></span></div>
                                                </div>
                                                <div class="chart-small">
                                                    <div id="small-chart-5"></div>
                                                </div>
                                            </div>
                                            <div class="bottom">
                                                <div class="infor-number">
                                                    <div class="flex gap4 f12-medium">
                                                        <a href="{{ route('user.domestic') }}"
                                                            class="tf-btn-default f12-bold style-1">
                                                            Domestic
                                                            <i class="icon-send1"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex gap8 f12-medium">
                                                        <a href="{{ route('user.wire') }}"
                                                            class="tf-btn-default f12-bold style-1">
                                                            Wire
                                                            <i class="icon-send1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a href="{{ route('user.transactions') }}"
                                                    class="tf-btn-default f12-bold style-1">
                                                    Transactions
                                                    <i class="icon-send1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <div class="wg-card style-1 bg-pink-1 bg-7 mb-16">
                                            <div class="flex items-center gap8">
                                                <i class="icon-search-normal f12-bold"></i>
                                                <div class="f12-bold">Status</div>
                                            </div>
                                            <div class="content">
                                                <div class="flex gap2 align-items-end flex-wrap">
                                                    <h6 class="mb-0 ">Accout Verification</h6>
                                                    <div class="f12-medium"><span class="text-GrayDark"></span></div>
                                                </div>
                                                <div class="chart-small">
                                                    <div id="small-chart-6"></div>
                                                </div>
                                            </div>
                                            <div class="bottom">
                                                <div class="infor-number">
                                                    <div class="flex gap4 f12-medium">
                                                        <span class="text-GrayDark">Status:</span>

                                                    </div>

                                                    <div class="flex items-center gap8">
                                                         @if ($documents->isEmpty())
                                                 <div class="box-status bg-LightGray type-red">
                                                            <span class="font-poppins">UNVERIFIED</span>
                                                        </div>
                                            @else
                                                @foreach ($documents as $document)
                                                    @if ($document->status === null)
                                                        <div class="box-status bg-LightGray type-red">
                                                            <span class="font-poppins">UNVERIFIED</span>
                                                        </div>
                                                    @elseif ($document->status == 'pending')
                                                         <div class="box-status bg-LightGray">
                                                            <span class="font-poppins">PENDING</span>
                                                        </div>
                                                    @elseif ($document->status == 'confirmed')
                                                        <div class="box-status bg-YellowGreen">
                                                            <span class="font-poppins">VERIFIED</span>
                                                        </div>
                                                    @elseif ($document->status == 'cancelled')
                                                       <div class="box-status bg-LightGray type-red">
                                                            <span class="font-poppins">CANCELLED</span>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="wg-card style-1 bg-Black bg-8 mb-16">
                                            <div class="flex items-center gap8">
                                                <i class="icon-mastercard f12-bold text-White"></i>
                                                <div class="f12-bold text-White">Card Holder</div>
                                            </div>
                                            <div class="content">
                                                <div class="flex gap2 align-items-end flex-wrap">
                                                    <h6 class="mb-0 text-White">{{ Auth::user()->first_name }}
                                                        {{ Auth::user()->last_name }}</h6>
                                                    <div class="f12-medium text-White"><span class="text-GrayDark"></span>
                                                    </div>
                                                </div>
                                                <div class="chart-small">
                                                    <div id="small-chart-1"></div>
                                                </div>
                                            </div>
                                            <div class="bottom">
                                                <div class="infor-number">
                                                    <div class="flex gap4 f12-medium">
                                                        <span class="text-white">Validity</span>
                                                        <span class="text-White"></span>
                                                    </div>
                                                    <div class="flex gap8 f12-medium">
                                                        <span class="text-white">Cvv</span>
                                                        <span class="text-White"></span>
                                                    </div>
                                                </div>
                                                <a href="{{ route('user.virtual') }}"
                                                    class="tf-btn-default f12-bold style-white">
                                                    Card Details
                                                    <i class="icon-send1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                               <div class="wg-box type-1 bg-Gainsboro widget-tabs style-1 shadow-none mb-32">
                                                <div class="title">
                                                    <h6>Transaction History</h6>
                                                    <ul class="widget-menu-tab mb-0">
                                                        <li class="item-title f12-medium active">
                                                            <span class="inner">Deposit/Withdraw</span>
                                                        </li>
                                                        <li class="item-title f12-medium">
                                                            <span class="inner">Domestics</span>
                                                        </li>
                                                        <li class="item-title f12-medium">
                                                            <span class="inner">Wire</span>
                                                        </li>
                                                        <li class="item-title f12-medium">
                                                            <span class="inner">Loan</span>
                                                        </li>
                                                         <li class="item-title f12-medium">
                                                            <span class="inner">Investments</span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div>
                                                    <div class="widget-content-tab">
                                                        <div class="widget-content-inner active">
                                                            @if ($deposits->isEmpty())
                                                            <p class="text-center">No Transactions yet.</p>
                                                             @else
                                                            @foreach ($deposits as $deposit)
                                                            <div class="f14-regular text-Gray mb-12">{{ $deposit->created_at->format('d M y') }}</div>
                                                            <ul class="list-wallet-activity">
                                                                <li>
                                                                    <div class="wallet-activity-item">
                                                                        <div class="icon">
                                                                            <img src="/files/images/item/cash.png" alt="">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="mb-2">
                                                                                <a href="#" class="f14-bold">{{ $deposit->type }}</a>
                                                                            </div>
                                                                            <div class="f12-medium text-Gray">{{ $deposit->id }}</div>
                                                                        </div>
                                                                             @if ($deposit->type == 'deposit')
                                                                              <div class="price f14-bold">+${{ number_format($deposit->amount, 2) }}</div>
                                                                            <span
                                                                                class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"></span>
                                                                        @elseif ($deposit->type == 'withdraw')
                                                                        <div class="price f14-bold">-${{ number_format($deposit->amount, 2) }}</div>
                                                                          @endif

                                                                         @if ($deposit->status == 'pending')
                                                                                <div class="box-status bg-LightGray">
                                                                            <span class="font-poppins">PENDING</span>
                                                                        </div>
                                                                         @elseif ($deposit->status == 'confirmed')
                                                                                            <div class="box-status bg-YellowGreen">
                                                                                <span class="font-poppins">CONFIRMED</span>
                                                                            </div>

                                                                         @elseif ($deposit->status == 'cancelled')
                                                                                            <div class="box-status bg-LightGray type-red">
                                                                            <span class="font-poppins">CANCELLED</span>
                                                                        </div>
                                                                         @endif

                                                                    </div>
                                                                </li>

                                                            </ul>

                                                            @endforeach
                                                             @endif

                                                            <a href="{{route('user.transactions')}}" class="tf-button f12-bold w-100">
                                                                View Transactions
                                                                <i class="icon icon-send"></i>
                                                            </a>
                                                        </div>
                                                        <div class="widget-content-inner">
                                                             @if ($domestics->isEmpty())
                                                                <p class="text-center">No Transactions yet.</p>
                                                            @else
                                                                @foreach ($domestics as $domestic)
                                                            <div class="f14-regular text-Gray mb-12">{{ $domestic->created_at->format('d M y') }}</div>
                                                            <ul class="list-wallet-activity">
                                                                <li>
                                                                    <div class="wallet-activity-item">
                                                                        <div class="icon">
                                                                            <img src="/files/images/item/cash.png" alt="">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="mb-2">
                                                                                <a href="#" class="f14-bold">{{ $domestic->bank_name }}</a>
                                                                            </div>
                                                                            <div class="f12-medium text-Gray">{{ $domestic->account_name }}</div>

                                                                            <div class="f12-medium text-Gray">{{ $domestic->account_number }}</div>
                                                                        </div>
                                                                        <div class="price f14-bold">${{ number_format($domestic->amount, 2) }}</div>


                                                                         @if ($domestic->status == 'pending')
                                                                                <div class="box-status bg-LightGray">
                                                                            <span class="font-poppins">PENDING</span>
                                                                        </div>
                                                                         @elseif ($domestic->status == 'confirmed')
                                                                                            <div class="box-status bg-YellowGreen">
                                                                                <span class="font-poppins">CONFIRMED</span>
                                                                            </div>

                                                                         @elseif ($domestic->status == 'cancelled')
                                                                                            <div class="box-status bg-LightGray type-red">
                                                                            <span class="font-poppins">CANCELLED</span>
                                                                        </div>
                                                                         @endif
                                                                    </div>
                                                                </li>

                                                            </ul>

                                                                 @endforeach
                                                                @endif

                                                            <a href="{{route('user.transactions')}}" class="tf-button f12-bold w-100">
                                                                View Transactions
                                                                <i class="icon icon-send"></i>
                                                            </a>
                                                            </a>
                                                        </div>
                                                        <div class="widget-content-inner">
                                                            @if ($wires->isEmpty())
                                                            <p class="text-center">No Transactions yet.</p>
                                                        @else
                                                            @foreach ($wires as $wire)
                                                            <div class="f14-regular text-Gray mb-12"> {{ $wire->created_at->format('d M y') }}</div>
                                                            <ul class="list-wallet-activity">
                                                                <li>
                                                                    <div class="wallet-activity-item">
                                                                        <div class="icon">
                                                                            <img src="/files/images/item/cash.png" alt="">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="mb-2">
                                                                                <a href="#" class="f14-bold">{{ $wire->account_name }}</a>
                                                                            </div>
                                                                            <div class="f12-medium text-Gray">{{ $wire->bank_name }}</div>
                                                                        </div>
                                                                        <div class="price f14-bold">${{ number_format($wire->amount, 2) }}</div>

                                                                        <div class="price f14-bold">{{ $wire->account_number }}</div>


                                                                        @if ($wire->status == 'pending')
                                                                                <div class="box-status bg-LightGray">
                                                                            <span class="font-poppins">PENDING</span>
                                                                        </div>
                                                                         @elseif ($wire->status == 'confirmed')
                                                                                            <div class="box-status bg-YellowGreen">
                                                                                <span class="font-poppins">CONFIRMED</span>
                                                                            </div>

                                                                         @elseif ($wire->status == 'cancelled')
                                                                                            <div class="box-status bg-LightGray type-red">
                                                                            <span class="font-poppins">CANCELLED</span>
                                                                        </div>
                                                                         @endif

                                                                    </div>
                                                                </li>

                                                            </ul>

                                                                @endforeach
                                                            @endif

                                                             <a href="{{route('user.transactions')}}" class="tf-button f12-bold w-100">
                                                                View Transactions
                                                                <i class="icon icon-send"></i>
                                                            </a>
                                                        </div>
                                                         <div class="widget-content-inner">
                                                            @if ($loans->isEmpty())
                                                                <p class="text-center">No Transactions yet.</p>
                                                            @else
                                                                @foreach ($loans as $loan)
                                                            <div class="f14-regular text-Gray mb-12">{{ $loan->created_at->format('d M y') }}</div>
                                                            <ul class="list-wallet-activity">
                                                                <li>
                                                                    <div class="wallet-activity-item">
                                                                        <div class="icon">
                                                                            <img src="/files/images/item/cash.png" alt="">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="mb-2">
                                                                                <a href="#" class="f14-bold">{{ $loan->id }}</a>
                                                                            </div>
                                                                            <div class="f12-medium text-Gray">{{ Auth::user()->account_number }}</div>
                                                                        </div>
                                                                        <div class="price f14-bold">{{ $loan->amount }}</div>

                                                                         @if ($loan->status == 'pending')
                                                                                <div class="box-status bg-LightGray">
                                                                            <span class="font-poppins">PENDING</span>
                                                                        </div>
                                                                         @elseif ($loan->status == 'confirmed')
                                                                                            <div class="box-status bg-YellowGreen">
                                                                                <span class="font-poppins">CONFIRMED</span>
                                                                            </div>

                                                                         @elseif ($loan->status == 'cancelled')
                                                                                            <div class="box-status bg-LightGray type-red">
                                                                            <span class="font-poppins">CANCELLED</span>
                                                                        </div>
                                                                         @endif
                                                                    </div>
                                                                </li>

                                                            </ul>

                                                                 @endforeach
                                                             @endif


                                                            <a href="{{route('user.transactions')}}" class="tf-button f12-bold w-100">
                                                                View Transactions
                                                                <i class="icon icon-send"></i>
                                                            </a>
                                                        </div>


                                                         <div class="widget-content-inner">
                                                            @if ($invests->isEmpty())
                                                                <p class="text-center">No Transactions yet.</p>
                                                            @else
                                                                @foreach ($invests as $invest)
                                                            <div class="f14-regular text-Gray mb-12">{{ $invest->created_at->format('d M y') }}</div>
                                                            <ul class="list-wallet-activity">
                                                                <li>
                                                                    <div class="wallet-activity-item">
                                                                        <div class="icon">
                                                                            <img src="/files/images/item/cash.png" alt="">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="mb-2">
                                                                                <a href="#" class="f14-bold">{{ $invest->id }}</a>
                                                                            </div>

                                                                        </div>
                                                                           <div class="content">
                                                                            <div class="mb-2">
                                                                                <a href="#" class="f14-bold">{{ $invest->plan->name }}</a>
                                                                            </div>

                                                                        </div>
                                                                        <div class="price f14-bold">{{ $invest->amount }}</div>

                                                                        <div class="content">
                                                                            <div class="mb-2">
                                                                                <a href="#" class="f14-bold">{{ $invest->currency }}</a>
                                                                            </div>

                                                                        </div>

                                                                         @if ($invest->status == 'pending')
                                                                                <div class="box-status bg-LightGray">
                                                                            <span class="font-poppins">PENDING</span>
                                                                        </div>
                                                                         @elseif ($invest->status == 'confirmed')
                                                                                            <div class="box-status bg-YellowGreen">
                                                                                <span class="font-poppins">CONFIRMED</span>
                                                                            </div>

                                                                         @elseif ($invest->status == 'cancelled')
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
                            <div class="col-lg-6">
                                <div class="wg-box shadow-none pt-32 pr-32">
                                    <div class="title">
                                        <h6>Current Graph</h6>
                                        <div class="dropdown default">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon-more"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a href="javascript:void(0);">This Week</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">This Day</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="line-chart-1" class="line-chart"></div>
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
{{-- @section('content')




    <div class="w-full px-6 py-6 mx-auto">

        <div class="flex flex-wrap -mx-3">

            <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        User Details</p>
                                    <h5 class="mb-2 font-bold dark:text-white">{{ Auth::user()->first_name }}
                                        {{ Auth::user()->last_name }}</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="text-sm font-bold leading-normal text-emerald-500">Account
                                            Name</span>

                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-white-500 to-yellow-500">

                                    <img src="/storage/images/{{ Auth::user()->profile_picture }}"
                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                        alt="user" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        Account Balance</p>
                                    <h5 class="mb-2 font-bold dark:text-white">{{ Auth::user()->currency_type }}
                                        {{ Help::totalBalance() }}.00</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="text-sm font-bold leading-normal text-emerald-500">Availability</span>

                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        Account Type</p>
                                    <h5 class="mb-2 font-bold dark:text-white">{{ Auth::user()->account_type }}</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="text-sm font-bold leading-normal text-emerald-500">Account
                                            Type</span>

                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                    <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        IDENTIFICATION:</p>
                                    <h5 class="mb-2 font-bold dark:text-white">Status</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="text-sm font-bold leading-normal text-red-600">Verification</span>

                                    </p>
                                </div>
                            </div>
                            <div class=" text-right basis-1/3">

                                @if ($documents->isEmpty())
                                    <span
                                        class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
                                        Unverified</span>
                                @else
                                    @foreach ($documents as $document)
                                        @if ($document->status === null)
                                            <span
                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
                                                Unverified</span>
                                        @elseif ($document->status == 'pending')
                                            <span
                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $document->status }}</span>
                                        @elseif ($document->status == 'confirmed')
                                            <span
                                                class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
                                                Verified</span>
                                        @elseif ($document->status == 'cancelled')
                                            <span
                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $document->status }}</span>
                                        @endif
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <div class="relative w-full mt-6">
            <div class="w-full max-w-full px-3 mt-0 lg:w-12/12 ">
                <div
                    class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="p-4 pb-0 rounded-t-4">
                        <h6 class="mb-0 dark:text-white">Account Details</h6>
                    </div>
                    <div class="flex-auto p-4">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">

                            <li
                                class="relative flex justify-between py-2 pr-4 border-0 rounded-b-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <div
                                        class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                        <i class="text-white ni ni-mobile-button relative top-0.75 text-xxs"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">User
                                            Phone</h6>
                                        <span class="text-xs leading-tight dark:text-white/80"><span
                                                class="font-semibold">{{ Auth::user()->phone }}</span></span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <button
                                        class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i
                                            class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true"></i></button>
                                </div>
                            </li>

                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <div
                                        class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                        <i class="text-white ni ni-tag relative top-0.75 text-xxs"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Account
                                            Number</h6>
                                        <span id="copy-account-number" class="text-xs leading-tight dark:text-white/80">
                                            {{ Auth::user()->account_number }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <button onclick="copyToClipboard()"
                                        class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75">
                                        Copy Account Number
                                    </button>
                                </div>

                                <script>
                                    function copyToClipboard() {
                                        const accountNumber = document.getElementById("copy-account-number").textContent.trim();
                                        navigator.clipboard.writeText(accountNumber).then(() => {
                                            alert("Account number copied: " + accountNumber);
                                        }).catch(err => {
                                            console.error('Failed to copy: ', err);
                                            alert("Failed to copy account number.");
                                        });
                                    }
                                </script>
                            </li>

                        </ul>
                    </div>
                </div>
            </div> </div>
        <div class="w-full px-6 py-6 mx-auto">


            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white">Deposit/Withdraw History</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table
                                    class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ID</th>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Transaction Type</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Transaction Amount</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Status</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($deposits->isEmpty())
                                            <p class="text-center">No Transactions yet.</p>
                                        @else
                                            @foreach ($deposits as $deposit)
                                                <tr>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <div class="flex px-2 py-1">
                                                            <div>
                                                                <span
                                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $deposit->id }}</span>
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <div class="flex px-2 py-1">
                                                            <div>
                                                                <span
                                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $deposit->type }}</span>
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        @if ($deposit->type == 'deposit')
                                                            <span
                                                                class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">+${{ number_format($deposit->amount, 2) }}</span>
                                                        @elseif ($deposit->type == 'withdraw')
                                                            <span
                                                                class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">-${{ number_format($deposit->amount, 2) }}</span>
                                                        @endif

                                                    </td>
                                                    <td
                                                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        @if ($deposit->status == 'pending')
                                                            <span
                                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $deposit->status }}</span>
                                                        @elseif ($deposit->status == 'confirmed')
                                                            <span
                                                                class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $deposit->status }}</span>
                                                        @elseif ($deposit->status == 'cancelled')
                                                            <span
                                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $deposit->status }}</span>
                                                        @endif

                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $deposit->created_at->format('d M y') }}</span>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white">Wire Transactions History</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table
                                    class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ID</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                TRANSACTION AMOUNT</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                BANK NAME</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ACCOUNT NAME</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ACCOUNT NUMBER</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                STATUS</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($wires->isEmpty())
                                            <p class="text-center">No Transactions yet.</p>
                                        @else
                                            @foreach ($wires as $wire)
                                                <tr>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <div class="flex px-2 py-1">
                                                            <div class="flex flex-col justify-center">

                                                                <span
                                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">#{{ $wire->id }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">

                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">${{ number_format($wire->amount, 2) }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $wire->bank_name }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $wire->account_name }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <a href="javascript:;"
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">
                                                            {{ $wire->account_number }}</a>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        @if ($wire->status == 'pending')
                                                            <span
                                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $wire->status }}</span>
                                                        @elseif ($wire->status == 'confirmed')
                                                            <span
                                                                class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $wire->status }}</span>
                                                        @elseif ($wire->status == 'cancelled')
                                                            <span
                                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $wire->status }}</span>
                                                        @endif
                                                    </td>

                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <a href="javascript:;"
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">
                                                            {{ $wire->created_at->format('d M y') }}</a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white">Domestic Transfer History</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table
                                    class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ID</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                TRANSACTION AMOUNT</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ACCOUNT NUMBER</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ACCOUNT NAME</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                BANK NAME</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                STATUS</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($domestics->isEmpty())
                                            <p class="text-center">No Transactions yet.</p>
                                        @else
                                            @foreach ($domestics as $domestic)
                                                <tr>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <div class="flex px-2 py-1">
                                                            <div class="flex flex-col justify-center">
                                                                <span
                                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $domestic->id }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">${{ number_format($domestic->amount, 2) }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $domestic->account_number }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $domestic->account_name }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <a href="javascript:;"
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">
                                                            {{ $domestic->bank_name }}</a>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        @if ($domestic->status == 'pending')
                                                            <span
                                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $domestic->status }}</span>
                                                        @elseif ($domestic->status == 'confirmed')
                                                            <span
                                                                class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $domestic->status }}</span>
                                                        @elseif ($domestic->status == 'cancelled')
                                                            <span
                                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $domestic->status }}</span>
                                                        @endif
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <a href="javascript:;"
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">
                                                            {{ $domestic->created_at->format('d M y') }}</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white">Loan Transaction History</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table
                                    class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ID</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                AMOUNT</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ACCOUNT TYPE</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ACCOUNT NUMBER</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                STATUS</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($loans->isEmpty())
                                            <p class="text-center">No Transactions yet.</p>
                                        @else
                                            @foreach ($loans as $loan)
                                                <tr>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <div class="flex px-2 py-1">
                                                            <div class="flex flex-col justify-center">
                                                                <span
                                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $loan->id }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $loan->amount }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ Auth::user()->account_type }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ Auth::user()->account_number }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        @if ($loan->status == 'pending')
                                                            <span
                                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $loan->status }}</span>
                                                        @elseif ($loan->status == 'confirmed')
                                                            <span
                                                                class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $loan->status }}</span>
                                                        @elseif ($loan->status == 'cancelled')
                                                            <span
                                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $loan->status }}</span>
                                                        @endif
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $loan->created_at->format('d M y') }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>







    @endsection --}}
