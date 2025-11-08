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
                            <h6>VERIFY IDENTITY</h6>

                        </div>
                        <div class="row">

                            <form enctype="multipart/form-data" action="{{ route('user.verify_id') }}" method="post">
                                @csrf

                                @foreach ($errors->all() as $err)
                                    <p class="text-danger text-center">{{ $err }}</p>
                                @endforeach
                                <div class="col-12">
                                    <div class="wg-box box-quick-trade mb-32">

                                        <div class="quick-trade-wrap">
                                            <div class="quick-trade-list">
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">NAME ON SSN/SSI </div>
                                                    <input type="text" name="ssn" placeholder="Enter Name on ssn/ssi"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>
                                                <div class="mb-3 flex flex-wrap justify-between gap14 items-center">
                                                    <h6>Front Image SSN/SSI</h6>

                                                </div>
                                                <div class="relative mb-5">

                                                    <input type="file" name="ssn_front" accept="image/*"
                                                        class="quick-trade-input style-1 cursor-pointer"
                                                        aria-required="true" required>
                                                </div>

                                                <div class="mb-3 flex flex-wrap justify-between gap14 items-center">
                                                    <h6>Back Image SSN/SSI</h6>

                                                </div>
                                                <div class="relative mb-5">

                                                    <input type="file" name="ssn_back" accept="image/*"
                                                        class="quick-trade-input style-1 cursor-pointer"
                                                        aria-required="true" required>
                                                </div>
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">IDENTIFICATION CARD NUMBER
                                                    </div>
                                                    <input type="text" name="card"
                                                        placeholder="Enter Name on id card"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>

                                                <div class="mb-3 flex flex-wrap justify-between gap14 items-center">
                                                    <h6>Front Image ID</h6>

                                                </div>
                                                <div class="relative mb-5">

                                                    <input type="file" name="card_front" accept="image/*"
                                                        class="quick-trade-input style-1 cursor-pointer"
                                                        aria-required="true" required>
                                                </div>

                                                <div class="mb-3 flex flex-wrap justify-between gap14 items-center">
                                                    <h6>BACK Image ID</h6>

                                                </div>
                                                <div class="relative mb-5">

                                                    <input type="file" name="card_back" accept="image/*"
                                                        class="quick-trade-input style-1 cursor-pointer"
                                                        aria-required="true" required>
                                                </div>



                                            </div>


                                            <div class="bottom-button">

                                                <a href="#" class="btn-buy f12-bold w-100">
                                                    <button type="submit"
                                                        style="background:none; border:none; color:white;">
                                                        Verify Account
                                                    </button>
                                                    <i class="icon-view view"></i>
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
            <!-- /main-content-wrap -->
        </div>


    </div>

    </div>
    {{-- <div class="relative w-full mx-auto ">

        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div
                        class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
                        <img src="/storage/images/{{ Auth::user()->profile_picture }}" alt="profile_image"
                            class="w-full shadow-2xl rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                     <div class="h-full">
                        <h5 class="mb-1 dark:text-white">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
                        <p class="mb-0 font-semibold leading-normal dark:text-white dark:opacity-60 text-sm">
                            {{ Auth::user()->occupation }}</p>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                    <div class="relative right-0">
                        <ul class="relative flex flex-wrap p-1 list-none bg-gray-50 rounded-xl" nav-pills role="tablist">
                            <li class="z-30 flex-auto text-center">
                                <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700"
                                    nav-link active href="{{route('user.verifyUser')}}" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ml-2">Verify Identity</span>
                                </a>
                            </li>
                            <li class="z-30 flex-auto text-center">
                                <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700"
                                    nav-link href="{{route('user.password')}}" role="tab" aria-selected="false">
                                   <i class="relative top-0 text-sm leading-normal  ni ni-settings"></i>
                                    <span class="ml-2">Change Password</span>
                                </a>
                            </li>
                            <li class="z-30 flex-auto text-center">
                                <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-colors ease-in-out border-0 rounded-lg bg-inherit text-slate-700"
                                    nav-link href="{{route('user.pin')}}" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ml-2">Change Pin</span>
                                </a>
                            </li>
                        </ul>
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
                            <p class="mb-0 dark:text-white/80">Verify Account</p>
                        </div>
                    </div>
                     <form enctype="multipart/form-data"  action="{{ route('user.verify_id') }}" method="post">@csrf
                                                @foreach ($errors->all() as $err)
                                                <p class="text-danger text-center">{{ $err }}</p>
                                            @endforeach
                                            <div class="flex-auto p-6">
                            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Account Information</p>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-12/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">SSN/SSI </label>
                                        <input type="text" name="ssn"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Front Image SSN/SSI</label>
                                        <input type="file" name="ssn_front"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="first name"
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Back Image SSN/SSI</label>
                                        <input type="file" name="ssn_back"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>

                            </div>
                             <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-12/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">IDENTIFICATION CARD NUMBER</label>
                                        <input type="text" name="card"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Front Image IDENTIFICATION CARD</label>
                                        <input type="file" name="card_front"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="first name"
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Back Image IDENTIFICATION CARD</label>
                                        <input type="file" name="card_back"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="flex-none w-2/2 max-w-full px-3 mx-3 text-left">
                            <button type="submit"
                                class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75">Verify Account</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div>
    </div> --}}
@endsection
