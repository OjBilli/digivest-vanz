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
                                                <span class="inner">Investment</span>
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
                                                        <div class="f14-regular text-Gray mb-12">
                                                            {{ $deposit->created_at->format('d M y') }}</div>
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
                                                                                class="f14-bold">{{ $deposit->type }}</a>
                                                                        </div>
                                                                        <div class="f12-medium text-Gray">
                                                                            {{ $deposit->id }}</div>
                                                                    </div>
                                                                    @if ($deposit->type == 'deposit')
                                                                        <div class="price f14-bold">
                                                                            +${{ number_format($deposit->amount, 2) }}
                                                                        </div>
                                                                        <span
                                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"></span>
                                                                    @elseif ($deposit->type == 'withdraw')
                                                                        <div class="price f14-bold">
                                                                            -${{ number_format($deposit->amount, 2) }}
                                                                        </div>
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


                                            </div>
                                            <div class="widget-content-inner">
                                                @if ($domestics->isEmpty())
                                                    <p class="text-center">No Transactions yet.</p>
                                                @else
                                                    @foreach ($domestics as $domestic)
                                                        <div class="f14-regular text-Gray mb-12">
                                                            {{ $domestic->created_at->format('d M y') }}</div>
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
                                                                                class="f14-bold">{{ $domestic->bank_name }}</a>
                                                                        </div>
                                                                        <div class="f12-medium text-Gray">
                                                                            {{ $domestic->account_name }}</div>

                                                                        <div class="f12-medium text-Gray">
                                                                            {{ $domestic->account_number }}</div>
                                                                    </div>
                                                                    <div class="price f14-bold">
                                                                        ${{ number_format($domestic->amount, 2) }}</div>


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


                                            </div>
                                            <div class="widget-content-inner">
                                                @if ($wires->isEmpty())
                                                    <p class="text-center">No Transactions yet.</p>
                                                @else
                                                    @foreach ($wires as $wire)
                                                        <div class="f14-regular text-Gray mb-12">
                                                            {{ $wire->created_at->format('d M y') }}</div>
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
                                                                                class="f14-bold">{{ $wire->account_name }}</a>
                                                                        </div>
                                                                        <div class="f12-medium text-Gray">
                                                                            {{ $wire->bank_name }}</div>
                                                                    </div>
                                                                    <div class="price f14-bold">
                                                                        ${{ number_format($wire->amount, 2) }}</div>

                                                                    <div class="price f14-bold">
                                                                        {{ $wire->account_number }}</div>


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


                                            </div>
                                            <div class="widget-content-inner">
                                                @if ($loans->isEmpty())
                                                    <p class="text-center">No Transactions yet.</p>
                                                @else
                                                    @foreach ($loans as $loan)
                                                        <div class="f14-regular text-Gray mb-12">
                                                            {{ $loan->created_at->format('d M y') }}</div>
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
                                                                                class="f14-bold">{{ $loan->id }}</a>
                                                                        </div>
                                                                        <div class="f12-medium text-Gray">
                                                                            {{ Auth::user()->account_number }}</div>
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



                                            </div>


                                            <div class="widget-content-inner">
                                                @if ($invests->isEmpty())
                                                    <p class="text-center">No Transactions yet.</p>
                                                @else
                                                    @foreach ($invests as $invest)
                                                        <div class="f14-regular text-Gray mb-12">
                                                            {{ $invest->created_at->format('d M y') }}</div>
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
                                                                                class="f14-bold">{{ $invest->id }}</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="content">
                                                                        <div class="mb-2">
                                                                            <a href="#"
                                                                                class="f14-bold">{{ $invest->plan->name }}</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="price f14-bold">{{ $invest->amount }}
                                                                    </div>

                                                                    <div class="content">
                                                                        <div class="mb-2">
                                                                            <a href="#"
                                                                                class="f14-bold">{{ $invest->currency }}</a>
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

                        </div>
                    </div>
                </div>
                <!-- /main-content-wrap -->
            </div>
            <!-- /main-content-wrap -->

        </div>
        <!-- /main-content -->
    </div>



    {{-- <div class="w-full px-6 py-6 mx-auto">


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
                                                                class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">5</span>
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

        <!-- card 2 -->

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

    </div> --}}


@endsection
