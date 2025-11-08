@php
    use App\Models\Notification;
    use App\Models\Identity;
    $latestNotifications = Auth::user()->notifications()->latest()->take(4)->get();
    $documents = Identity::latest()
        ->take(1)
        ->where('user_id', Auth::user()->id)
        ->get();

@endphp

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>

    <meta charset="utf-8">
    <title>Atlas Market Edgers</title>

    <meta name="author" content="themesflat.com">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" type="text/css" href="/files/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/files/css/animation.css">
    <link rel="stylesheet" type="text/css" href="/files/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/files/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="/files/css/styles.css">




    <link rel="stylesheet" href="/files/font/fonts.css">


    <link rel="stylesheet" href="/files/icon/style.css">


    <link rel="shortcut icon" href="/files/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/files/images/favicon.png">



    <!-- Begin of Chaport Live Chat code -->
    <script type="text/javascript">
        (function(w, d, v3) {
            w.chaportConfig = {
                appId: '69070e6aee90f1150add85ec',
            };

            if (w.chaport) return;
            v3 = w.chaport = {};
            v3._q = [];
            v3._l = {};
            v3.q = function() {
                v3._q.push(arguments)
            };
            v3.on = function(e, fn) {
                if (!v3._l[e]) v3._l[e] = [];
                v3._l[e].push(fn)
            };
            var s = d.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'https://app.chaport.com/javascripts/insert.js';
            var ss = d.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss)
        })(window, document);
    </script>
    <!-- End of Chaport Live Chat code -->

</head>

<body class="counter-scroll">


    <div id="wrapper">

        <div id="page" class="">

            <div class="layout-wrap loader-off">

                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>

                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="{{ route('user.dashboard') }}" id="site-logo-inner">
                            <img class="" id="logo_header" alt="" src="/files/images/logo/logo.svg"
                                data-light="/files/images/logo/logo.svg" data-dark="/files/images/logo/logo-dark.svg">
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-back"></i>
                        </div>
                    </div>
                    <div class="section-menu-left-wrap">
                        <div class="center">
                            <div class="center-item">
                                <div class="center-heading f14-regular text-Gray menu-heading mb-12">Navigation</div>
                            </div>
                            <div class="center-item">
                                <ul class="">
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button active">
                                            <div class="icon">
                                                <i class="icon-category"></i>
                                            </div>
                                            <div class="text">Dashboard</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item active">
                                                <a href="{{ route('user.dashboard') }}" class="">
                                                    <div class="text">Banking Experience</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="{{ route('user.portfolio') }}" class="">
                                                    <div class="text">My Investment Portfolio</div>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon">
                                                <i class="icon-wallet1"></i>
                                            </div>
                                            <div class="text">My Wallet</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="{{ route('user.deposit') }}" class="">
                                                    <div class="text">Deposit</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="{{ route('user.withdraw') }}" class="">
                                                    <div class="text">Withdrawal</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon">
                                                <i class="icon-arrow-swap"></i>
                                            </div>
                                            <div class="text">Transfers</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="{{ route('user.domestic') }}" class="">
                                                    <div class="text">Domestic Transfer</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="{{ route('user.wire') }}" class="">
                                                    <div class="text">Wire Transfer</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="menu-item">
                                        <a href="{{ route('user.transactions') }}" class="menu-item-button">
                                            <div class="icon">
                                                <svg class="" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="../../../www.w3.org/2000/svg.html">
                                                    <path d="M6.1428 8.50146V14.2182" stroke="#A4A4A9"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M10.0317 5.76562V14.2179" stroke="#A4A4A9"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M13.8572 11.522V14.2178" stroke="#A4A4A9"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.9047 1.6665H6.0952C3.37297 1.6665 1.66663 3.59324 1.66663 6.3208V13.6789C1.66663 16.4064 3.36504 18.3332 6.0952 18.3332H13.9047C16.6349 18.3332 18.3333 16.4064 18.3333 13.6789V6.3208C18.3333 3.59324 16.6349 1.6665 13.9047 1.6665Z"
                                                        stroke="#A4A4A9" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="text">Transaction</div>
                                        </a>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon">
                                                <i class="icon-dash1"></i>
                                            </div>
                                            <div class="text">Account Quick books</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="{{ route('user.loanP') }}" class="">
                                                    <div class="text">Loans & Mortgages</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="{{ route('user.virtual') }}" class="">
                                                    <div class="text">My Card</div>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon">
                                                <i class="icon-setting1"></i>
                                            </div>
                                            <div class="text">Settings</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="{{ route('user.profile') }}" class="">
                                                    <div class="text">Profile</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="{{ route('user.link') }}" class="">
                                                    <div class="text">Link Account</div>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="menu-item-button">
                                            <div class="icon">
                                                <i class="icon-login"></i>
                                            </div>
                                            <div class="text">Sign Out</div>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="hidden">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="image">
                                <img src="/files/images/item/bot.png" alt="">
                            </div>
                            <div class="content">
                                <p class="f12-regular text-White">Pro features</p>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content')

            </div>

        </div>

    </div>

    <script src="/files/js/jquery.min.js"></script>
    <script src="/files/js/countto.js"></script>
    <script src="/files/js/bootstrap.min.js"></script>
    <script src="/files/js/bootstrap-select.min.js"></script>
    <script src="/files/js/apexcharts/apexcharts.js"></script>
    <script src="/files/js/apexcharts/line-chart-1.js"></script>
    <script src="/files/js/apexcharts/small-chart-1.js"></script>
    <script src="/files/js/apexcharts/small-chart-2.js"></script>
    <script src="/files/js/apexcharts/small-chart-3.js"></script>
    <script src="/files/js/apexcharts/small-chart-4.js"></script>
    <script src="/files/js/apexcharts/line-chart-twoline.js"></script>
    <script src="/files/js/apexcharts/candlestick-1.js"></script>
    <script src="/files/js/apexcharts/candlestick-4.js"></script>
    <script src="/files/js/apexcharts/candlestick-5.js"></script>
    <script src="/files/js/switcher.js"></script>
    <script defer src="/files/js/theme-settings.js"></script>
    <script src="/files/js/main.js"></script>



    {{-- <script src="/files/js/swiper-bundle.min.js"></script>
    <script src="/files/js/carousel.js"></script> --}}
    <script src="/files/js/apexcharts/candlestick-2.js"></script>
    <script src="/files/js/apexcharts/donut-1.js"></script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        function logout() {
            event.preventDefault();
            $('.logout-form').submit();
        }
    </script>





    <script>
        function myFunction() {
            var copyText = document.getElementById("copy-my-contents");
            var range = document.createRange();
            var selection = window.getSelection();
            range.selectNodeContents(copyText);
            selection.removeAllRanges();
            selection.addRange(range);
            document.execCommand("copy");
        }
    </script>

    @if (session('error'))
        <script>
            swal(
                'Oops!',
                '{{ session('error') }}',
                'error'
            )
        </script>
    @endif

    @if (session('success'))
        <script>
            swal(
                'Good Job!',
                '{{ session('success') }}',
                'success'
            )
        </script>
    @endif











</body>

</html>
