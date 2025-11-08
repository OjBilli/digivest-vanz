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
                                    <h6>Account Deposit</h6>
                                    {{-- <div class="flex items-center flex-wrap gap6">
                                                    <a href="#" class="tf-button style-4 f12-bold">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../../../www.w3.org/2000/svg.html">
                                                            <path d="M7.99992 11.3335C8.18881 11.3335 8.34725 11.2695 8.47525 11.1415C8.60281 11.0139 8.66658 10.8557 8.66658 10.6668V8.66683H10.6833C10.8721 8.66683 11.0277 8.60283 11.1499 8.47483C11.2721 8.34727 11.3333 8.18905 11.3333 8.00016C11.3333 7.81127 11.2693 7.65283 11.1413 7.52483C11.0137 7.39727 10.8555 7.3335 10.6666 7.3335H8.66658V5.31683C8.66658 5.12794 8.60281 4.97238 8.47525 4.85016C8.34725 4.72794 8.18881 4.66683 7.99992 4.66683C7.81103 4.66683 7.65281 4.73061 7.52525 4.85816C7.39725 4.98616 7.33325 5.14461 7.33325 5.3335V7.3335H5.31659C5.1277 7.3335 4.97214 7.39727 4.84992 7.52483C4.7277 7.65283 4.66658 7.81127 4.66658 8.00016C4.66658 8.18905 4.73036 8.34727 4.85792 8.47483C4.98592 8.60283 5.14436 8.66683 5.33325 8.66683H7.33325V10.6835C7.33325 10.8724 7.39725 11.0279 7.52525 11.1502C7.65281 11.2724 7.81103 11.3335 7.99992 11.3335ZM7.99992 14.6668C7.0777 14.6668 6.21103 14.4917 5.39992 14.1415C4.58881 13.7917 3.88325 13.3168 3.28325 12.7168C2.68325 12.1168 2.20836 11.4113 1.85859 10.6002C1.50836 9.78905 1.33325 8.92238 1.33325 8.00016C1.33325 7.07794 1.50836 6.21127 1.85859 5.40016C2.20836 4.58905 2.68325 3.8835 3.28325 3.2835C3.88325 2.6835 4.58881 2.20838 5.39992 1.85816C6.21103 1.50838 7.0777 1.3335 7.99992 1.3335C8.92214 1.3335 9.78881 1.50838 10.5999 1.85816C11.411 2.20838 12.1166 2.6835 12.7166 3.2835C13.3166 3.8835 13.7915 4.58905 14.1413 5.40016C14.4915 6.21127 14.6666 7.07794 14.6666 8.00016C14.6666 8.92238 14.4915 9.78905 14.1413 10.6002C13.7915 11.4113 13.3166 12.1168 12.7166 12.7168C12.1166 13.3168 11.411 13.7917 10.5999 14.1415C9.78881 14.4917 8.92214 14.6668 7.99992 14.6668ZM7.99992 13.3335C9.4777 13.3335 10.7361 12.8142 11.7753 11.7755C12.8139 10.7364 13.3333 9.47794 13.3333 8.00016C13.3333 6.52238 12.8139 5.26394 11.7753 4.22483C10.7361 3.18616 9.4777 2.66683 7.99992 2.66683C6.52214 2.66683 5.26392 3.18616 4.22525 4.22483C3.18614 5.26394 2.66659 6.52238 2.66659 8.00016C2.66659 9.47794 3.18614 10.7364 4.22525 11.7755C5.26392 12.8142 6.52214 13.3335 7.99992 13.3335Z" fill="#161326"/>
                                                        </svg>
                                                        Add wallet
                                                    </a>
                                                </div> --}}
                                </div>
                                @if ($currency->id == 1 || $currency->id == 2)
                                    <div class="wg-box card-details mb-32">
                                        <div class="title">
                                            <h6>Deposit Instructions</h6>

                                        </div>
                                        <div class="content">
                                            <div class="left">
                                                <ul>
                                                    <li>
                                                        <div class="f14-regular text-Black">Caution:</div>
                                                        <div class="f14-bold text-Black">Please make a deposit to the bank
                                                            address below.</div>
                                                    </li>
                                                    <li>
                                                        <div class="f14-regular text-Black">Amount:</div>
                                                        <div class="f14-bold text-Black">${{ number_format($amount, 2) }}
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="f14-regular text-Black">Asset Type:</div>
                                                        <div class="f14-bold text-Black">{{ $currency->name }} </div>
                                                    </li>
                                                    <li>

                                                        <p class="pl-4 f14-regular text-Black">Please note that this union
                                                            will not be held liable for funding a wrong wallet address, fund
                                                            only the address below.</p>
                                                    </li>
                                                    <li>
                                                        <div class="f14-regular text-Black">
                                                            <input readonly id="copy-my-contents" class="form-control"
                                                                value="{{ $admin_wallet }}"
                                                                placeholder="{{ $admin_wallet }}"
                                                                style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 6px;">
                                                        </div>

                                                        <div class="f14-bold text-Black mt-2">
                                                            <button type="button" onclick="copyWalletAddress()"
                                                                class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-LightSkyBlue border border-LightSkyBlue rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-90">
                                                                Copy Address
                                                            </button>
                                                        </div>
                                                    </li>

                                                    <script>
                                                        function copyWalletAddress() {
                                                            const input = document.getElementById("copy-my-contents");

                                                            // Try the modern clipboard API first
                                                            if (navigator.clipboard && window.isSecureContext) {
                                                                navigator.clipboard.writeText(input.value)
                                                                    .then(() => alert("Copied: " + input.value))
                                                                    .catch(err => {
                                                                        console.error("Clipboard copy failed:", err);
                                                                        fallbackCopy(input);
                                                                    });
                                                            } else {
                                                                // Fallback for older browsers
                                                                fallbackCopy(input);
                                                            }
                                                        }

                                                        function fallbackCopy(input) {
                                                            input.select();
                                                            input.setSelectionRange(0, 99999); // Mobile support
                                                            document.execCommand("copy");
                                                            alert("Copied: " + input.value);
                                                        }
                                                    </script>

                                                </ul>
                                            </div>

                                            <div class="right">
                                                <div class="wrap-donut">
                                                    <img width="100%" height="200"
                                                        src="https://quickchart.io/qr?text={{ $admin_wallet }}"
                                                        alt="Qr Code">
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="item">
                                                            <div class="block-legend">
                                                                <div class="dot bg-LightSkyBlue"></div>
                                                                <div class="f14-regular text-Gray">Scan Code</div>
                                                            </div>

                                                        </div>
                                                        <div class="item">
                                                            <div class="block-legend">
                                                                <div class="dot bg-Khaki"></div>
                                                                <div class="f14-regular text-Gray">To make Payment</div>
                                                            </div>

                                                        </div>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                        <div class="f14-bold text-Black">
                                            <a href="{{ route('user.confirm', $transaction) }}"
                                                class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-Black border border-LightSkyBlue rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-90">
                                                I've Made Payment
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="wg-box card-details mb-32">
                                        <div class="title">
                                            <h6>Deposit Instructions</h6>

                                        </div>
                                        <div class="content">
                                            <div class="left">
                                                <ul>
                                                    <li>
                                                        <div class="f14-regular text-Black">Caution:</div>
                                                        <div class="f14-bold text-Black">Please Read Carefully.</div>
                                                    </li>

                                                    <li>

                                                        <p class="pl-4 f14-regular text-Black">Please reach out to our
                                                            Livechat at the bottom right corner of the page and make a wire
                                                            transfer of ${{ number_format($amount, 2) }} to the account
                                                            provided by the company. Please note that the company will not
                                                            be held liable for funding a wrong account.</p>
                                                    </li>


                                                </ul>
                                            </div>


                                        </div>
                                        <div class="f14-bold text-Black">
                                            <a href="{{ route('user.confirm', $transaction) }}"
                                                class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-Black border border-LightSkyBlue rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-90">
                                                I've Made Payment
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>
    {{-- <div class="w-full px-6 py-6 mx-auto">


        @if ($currency->id == 1 || $currency->id == 2)

        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-3/3 lg:flex-none">
                <div class="flex flex-wrap -mx-3">

                    <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
                        <div
                            class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">

                                <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                            <h6 class="mb-0 dark:text-white">Follow Deposit Instruction</h6>
                                        </div>
                                        <div class="flex-none w-1/2 max-w-full px-3 text-right">

                                        </div>
                                    </div>
                                </div>
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                            <div class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none md-max:overflow-auto rounded-xl border-slate-100 dark:border-slate-700 bg-clip-border">
                                                <img width="250" height="200" src="https://quickchart.io/qr?text={{ $admin_wallet }}" alt="Qr Code">
                                               <p>Please make a deposit of ${{ number_format($amount, 2) }} worth of {{  $currency->name}} to the bank address below. Please note that this union will not be held liable for funding a wrong wallet address.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                            <div class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none md-max:overflow-auto rounded-xl border-slate-100 dark:border-slate-700 bg-clip-border">

                                            <input readonly id="copy-my-contents"class="form-control"
                                                    value="{{ $admin_wallet }}"
                                                    placeholder="{{ $admin_wallet }}">

                                             <button onclick="myFunction()" type="button"
                                        class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75">Copy Button</button>
                                            </div>
                                        </div>

                                        <script>
                                                function myFunction() {
                                                    var copyText = document.getElementById("copy-my-contents");
                                                    copyText.select();
                                                    copyText.setSelectionRange(0, 99999); // For mobile compatibility

                                                    navigator.clipboard.writeText(copyText.value)
                                                        .then(() => {
                                                            alert("Copied: " + copyText.value);
                                                        })
                                                        .catch(err => {
                                                            console.error("Failed to copy: ", err);
                                                        });
                                                }
                                                </script>

                                    </div>
                                </div>

                                <div class="flex-none w-2/2 max-w-full px-3 mx-3 text-left">

                                        <a class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75" href="{{ route('user.confirm', $transaction) }}">I've made payment</a>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>


        @else

 <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-3/3 lg:flex-none">
                <div class="flex flex-wrap -mx-3">

                    <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
                        <div
                            class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">

                                <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                            <h6 class="mb-0 dark:text-white">Follow Deposit Instruction</h6>
                                        </div>
                                        <div class="flex-none w-1/2 max-w-full px-3 text-right">

                                        </div>
                                    </div>
                                </div>
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                            <div class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none md-max:overflow-auto rounded-xl border-slate-100 dark:border-slate-700 bg-clip-border">

                                               <p>Please reach out to our Livechat at the bottom right corner of the page and make a wire transfer of ${{ number_format($amount, 2) }} to the account provided by the company. Please note that the company will not be held liable for funding a wrong account.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-none w-2/2 max-w-full px-3 mx-3 text-left">

                                        <a class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75" href="{{ route('user.confirm', $transaction) }}">I've made payment</a>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>


         @endif
 --}}
@endsection
