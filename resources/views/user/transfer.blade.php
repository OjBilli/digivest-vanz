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
                                    <h6 class="">Personal Data Page</h6>
                                    <div class="dropdown default">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon-more"></span>
                                        </button>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">

                            <form action="{{ route('user.profile') }}" method="post">@csrf



                                @foreach ($errors->all() as $err)
                                    <p class="text-danger text-center">{{ $err }}</p>
                                @endforeach
                                <div class="col-12">
                                    <div class="wg-box box-quick-trade mb-32">
                                        <div class="title">
                                            <div>
                                                <div class="label-01 mb-2">EDIT PROFILE </div>
                                                <div class="f14-regular text-GrayDark">Update your personal information
                                                    correctly.</div>
                                            </div>

                                        </div>
                                        <div class="quick-trade-wrap">
                                            <div class="quick-trade-list">
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">FIRST NAME</div>
                                                    <input type="text" name="first_name"
                                                        value="{{ Auth::user()->first_name }}"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">LAST NAME</div>
                                                    <input type="text" name="last_name"
                                                        value=" {{ Auth::user()->last_name }}"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">OCCUPATION</div>
                                                    <input type="text" value="{{ Auth::user()->occupation }}"
                                                        name="occupation" class="quick-trade-input style-1"
                                                        aria-required="true" required="">
                                                </div>
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">USERNAME</div>
                                                    <input type="text" value="{{ Auth::user()->username }}"
                                                        name="username" class="quick-trade-input style-1"
                                                        aria-required="true" required="">
                                                </div>


                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">ADDRESS</div>
                                                    <input type="text" value="{{ Auth::user()->address_1 }}"
                                                        name="address_1" class="quick-trade-input style-1"
                                                        aria-required="true" required="">
                                                </div>







                                                <select name="country" class="mb-5 image-select center w-100" required>
                                                    <option value="COUNTRY: {{ Auth::user()->country }}" selected>
                                                        {{ Auth::user()->country }}</option>
                                                    @foreach ($countries as $country)
                                                        @if ($country->name != Auth::user()->country)
                                                            <option value="{{ $country->name }}">{{ $country->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach

                                                </select>


                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">PHONE</div>
                                                    <input type="text" value="{{ Auth::user()->phone }}"
                                                        name="phone" class="quick-trade-input style-1"
                                                        aria-required="true" required="">
                                                </div>
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">CITY</div>
                                                    <input type="text" name="city"
                                                        value="{{ Auth::user()->city }}"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">ID/SSN</div>
                                                    <input type="text" name="ssn" value="{{ Auth::user()->ssn }}"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>
                                                <div class="relative mb-5">
                                                    <div class="f12-medium text-Primary title">DATE OF BIRTH</div>
                                                    <input name="dob" value="{{ Auth::user()->dob }}" type="date"
                                                        class="quick-trade-input style-1" aria-required="true"
                                                        required="">
                                                </div>



                                            </div>


                                            <div class="bottom-button">



                                                <a href="#" class="btn-sell f12-bold w-100">
                                                    <button type="submit"
                                                        style="background:none; border:none; color:black;">
                                                        Update Profile
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


    {{-- <form action="{{ route('user.profile') }}" method="post">@csrf
                        <div class="flex-auto p-6">
                            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">User Information</p>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">First
                                            Name</label>
                                        <input type="text" name="first_name" value="{{ Auth::user()->first_name }}"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Last
                                            Name</label>
                                        <input type="text" name="last_name" value=" {{ Auth::user()->last_name }}"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="first name"
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Occupation</label>
                                        <input type="text" value="{{ Auth::user()->occupation }}" name="occupation"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Username</label>
                                        <input type="text" value="{{ Auth::user()->username }}" name="username"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                            </div>
                            <hr
                                class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

                            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Contact Information
                            </p>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                    <div class="mb-4">
                                        <label for="address"
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Address</label>
                                        <input type="text" value="{{ Auth::user()->address_1 }}" name="address_1"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="city"
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Username</label>
                                        <input type="text" value="{{ Auth::user()->username }}" name="username"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="country"
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Phone</label>
                                        <input type="text" value="{{ Auth::user()->phone }}" name="phone"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>

                            </div>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="inputState"
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Country</label>
                                        <select name="country" id="inputState"
                                            class="form-control default-select wide focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                            <option value="{{ Auth::user()->country }}" selected>
                                                {{ Auth::user()->country }}</option>
                                            @foreach ($countries as $country)
                                                @if ($country->name != Auth::user()->country)
                                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">City</label>
                                        <input type="text" name="city" value="{{ Auth::user()->city }}"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>


                            </div>
                            <hr
                                class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

                            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Biodata</p>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">ID/SSN</label>
                                        <input type="text" name="ssn" value="{{ Auth::user()->ssn }}"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label
                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Date
                                            Of Birth</label>
                                        <input name="dob" value="{{ Auth::user()->dob }}" type="date"
                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="flex-none w-2/2 max-w-full px-3 mx-3 text-left">
                            <button type="submit"
                                class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75">Update
                                Profile</button>
                        </div>
                    </form> --}}
@endsection
