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
                        <div class="wg-box style-1 p-32 gap16 bg-Gainsboro shadow-none mb-23">
                            <h5>Account Security</h5>
                            <div class="flex flex-wrap row-gap-16 gap36 items-center">
                                <div class="flex gap6 items-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path
                                            d="M13.492 2.1665H6.50866C3.47533 2.1665 1.66699 3.97484 1.66699 7.00817V13.9832C1.66699 17.0248 3.47533 18.8332 6.50866 18.8332H13.4837C16.517 18.8332 18.3253 17.0248 18.3253 13.9915V7.00817C18.3337 3.97484 16.5253 2.1665 13.492 2.1665ZM13.9837 8.58317L9.25866 13.3082C9.14199 13.4248 8.98366 13.4915 8.81699 13.4915C8.65033 13.4915 8.49199 13.4248 8.37533 13.3082L6.01699 10.9498C5.77533 10.7082 5.77533 10.3082 6.01699 10.0665C6.25866 9.82484 6.65866 9.82484 6.90033 10.0665L8.81699 11.9832L13.1003 7.69984C13.342 7.45817 13.742 7.45817 13.9837 7.69984C14.2253 7.9415 14.2253 8.33317 13.9837 8.58317Z"
                                            fill="#2BC155" />
                                    </svg>
                                    <div class="f14-regular">2 FA</div>
                                </div>
                                <div class="flex gap6 items-center">
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
                                    <div class="f14-regular">Identify Verification</div>
                                </div>
                                <div class="flex gap6 items-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path
                                            d="M13.492 2.1665H6.50866C3.47533 2.1665 1.66699 3.97484 1.66699 7.00817V13.9832C1.66699 17.0248 3.47533 18.8332 6.50866 18.8332H13.4837C16.517 18.8332 18.3253 17.0248 18.3253 13.9915V7.00817C18.3337 3.97484 16.5253 2.1665 13.492 2.1665ZM13.9837 8.58317L9.25866 13.3082C9.14199 13.4248 8.98366 13.4915 8.81699 13.4915C8.65033 13.4915 8.49199 13.4248 8.37533 13.3082L6.01699 10.9498C5.77533 10.7082 5.77533 10.3082 6.01699 10.0665C6.25866 9.82484 6.65866 9.82484 6.90033 10.0665L8.81699 11.9832L13.1003 7.69984C13.342 7.45817 13.742 7.45817 13.9837 7.69984C14.2253 7.9415 14.2253 8.33317 13.9837 8.58317Z"
                                            fill="#2BC155" />
                                    </svg>
                                    <div class="f14-regular">Enable Anti-phising Code</div>
                                </div>
                                <div class="flex gap6 items-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path
                                            d="M13.492 2.1665H6.50866C3.47533 2.1665 1.66699 3.97484 1.66699 7.00817V13.9832C1.66699 17.0248 3.47533 18.8332 6.50866 18.8332H13.4837C16.517 18.8332 18.3253 17.0248 18.3253 13.9915V7.00817C18.3337 3.97484 16.5253 2.1665 13.492 2.1665ZM13.9837 8.58317L9.25866 13.3082C9.14199 13.4248 8.98366 13.4915 8.81699 13.4915C8.65033 13.4915 8.49199 13.4248 8.37533 13.3082L6.01699 10.9498C5.77533 10.7082 5.77533 10.3082 6.01699 10.0665C6.25866 9.82484 6.65866 9.82484 6.90033 10.0665L8.81699 11.9832L13.1003 7.69984C13.342 7.45817 13.742 7.45817 13.9837 7.69984C14.2253 7.9415 14.2253 8.33317 13.9837 8.58317Z"
                                            fill="#2BC155" />
                                    </svg>
                                    <div class="f14-regular">Turn-on Withdrawal Whitelist</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-account-security">
                            <div class="left">
                                <div class="account-security-item mb-24">
                                    <div class="heading">
                                        <div class="label-01 mb-8">2 Factor Authentication</div>
                                        <div class="f12-regular text-GrayDark">Two-factor authentication is an enhanced
                                            security measure. Once enabled, you'll be required to give two types of
                                            identification when you log into</div>
                                    </div>
                                    <div class="content">
                                        <div class="content-item">
                                            <input class="tf-check flex-shrink-0" type="checkbox" checked>
                                            <div class="icon flex-shrink-0">
                                                <i class="icon-google"></i>
                                            </div>
                                            <div>
                                                <div class="mb-6 f12-bold">Google Authentication</div>
                                                <div class="f12-regular text-GrayDark">Used for withdrawal & Security
                                                    verification</div>
                                            </div>
                                        </div>
                                        <div class="content-item">
                                            <input class="tf-check flex-shrink-0" type="checkbox">
                                            <div class="icon flex-shrink-0">
                                                <i class="icon-message-text1"></i>
                                            </div>
                                            <div>
                                                <div class="mb-6 f12-bold">SMS Authentication</div>
                                                <div class="f12-regular text-GrayDark">Used for withdrawal & Security
                                                    verification</div>
                                            </div>
                                        </div>
                                        <div class="content-item">
                                            <input class="tf-check flex-shrink-0" type="checkbox" checked>
                                            <div class="icon flex-shrink-0">
                                                <i class="icon-sms-tracking"></i>
                                            </div>
                                            <div>
                                                <div class="mb-6 f12-bold">Email Authentication</div>
                                                <div class="f12-regular text-GrayDark">Used for withdrawal & Security
                                                    verification</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-security-item mb-24">
                                    <div class="heading">
                                        <div class="label-01 mb-8">Identify Verification</div>
                                        <div class="f12-regular text-GrayDark">Identify Verification is an enhanced
                                            security measure. Once enabled, you'll be required to give two types of
                                            identification when you log into</div>
                                    </div>
                                    <div class="content">
                                        <div class="content-item">
                                            <input class="tf-check flex-shrink-0" type="checkbox" checked>
                                            <div class="icon flex-shrink-0">
                                                <i class="icon-person"></i>
                                            </div>
                                            <div>
                                                <div class="mb-6 f12-bold">Manage Identify Verification</div>
                                                <div class="f12-regular text-GrayDark">Used for withdrawal & Security
                                                    verification</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-security-item mb-24">
                                    <div class="heading">
                                        <div class="label-01 mb-8">Anti-phising Code</div>
                                        <div class="f12-regular text-GrayDark">Identify Verification is an enhanced
                                            security measure. Once enabled, you'll be required to give two types of
                                            identification when you log into</div>
                                    </div>
                                    <div class="content">
                                        <div class="content-item">
                                            <input class="tf-check flex-shrink-0" type="checkbox" checked>
                                            <div class="icon flex-shrink-0">
                                                <i class="icon-message-text1"></i>
                                            </div>
                                            <div>
                                                <div class="mb-6 f12-bold">Enable Anti-phising Code</div>
                                                <div class="f12-regular text-GrayDark">Enable Anti-phising Code & Security
                                                    verification</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="account-security-item d-block mb-24">
                                    <div class="content-item mb-24">
                                        <div class="icon flex-shrink-0">
                                            <i class="icon-mouse-square"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="mb-6 f12-bold">Update Profile</div>
                                            <div class="f12-regular text-GrayDark">Update your profile information</div>
                                        </div>
                                        <a href="{{ route('user.transfer') }}" class="flex-shrink-0 f12-medium">Manage</a>
                                    </div>
                                    <div class="content-item">
                                        <div class="icon flex-shrink-0">
                                            <i class="icon-login"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="mb-6 f12-bold">Login Password</div>
                                            <div class="f12-regular text-GrayDark">Reset Login Password</div>
                                        </div>
                                        <a href="{{ route('user.password') }}" class="flex-shrink-0 f12-medium">Reset</a>
                                    </div>
                                </div>
                                <div class="account-security-item d-block mb-24">
                                    <div class="content-item mb-16">
                                        <div class="icon flex-shrink-0">
                                            <i class="icon-gps"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="mb-6 f12-bold">Pin Reset</div>
                                            <div class="f12-regular text-GrayDark">Change Transaction Pin</div>
                                        </div>
                                        <a href="{{ route('user.pin') }}" class="flex-shrink-0 f12-medium">Manage</a>
                                    </div>

                                </div>
                                <div class="account-security-item d-block mb-24">
                                    <div class="content-item mb-16">
                                        <div class="icon flex-shrink-0">
                                            <i class="icon-person"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="mb-6 f12-bold">Account Verification</div>
                                            <div class="f12-regular text-GrayDark">Verify Account</div>
                                        </div>
                                        <a href="{{ route('user.verifyUser') }}" class="flex-shrink-0 f12-medium">Veriy
                                            Here</a>
                                    </div>
                                    {{-- <div>
                                                    <div class="f12-medium">Suspended Account Activity?</div>
                                                    <a href="#" class="f14-bold text-Salmon">Deactivated Account</a>
                                                </div> --}}
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
                            <p class="mb-0 dark:text-white/80">Edit Profile</p>
                        </div>
                    </div>
                    <form action="{{ route('user.profile') }}" method="post">@csrf
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
                    </form>
                </div>
            </div>


        </div>

    </div>
    </div> --}}
@endsection
