<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
  <link rel="icon" type="image/x-icon" href="/assetss/img/logo/favincon.png">
    <title>FORTRESS UNION || REGISTRATION</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="/assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
  </head>

  <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    <!-- Navbar -->
    <nav class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start">
      <div class="container flex items-center justify-between py-0 flex-wrap-inherit">
        <a class="py-1.75 ml-4 mr-4 font-bold text-white text-sm whitespace-nowrap lg:ml-0" href="#" target=""> FORTRESS UNION || REGISTRATION </a>
        <button navbar-trigger class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden" type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
            <span bar1 class="w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
            <span bar2 class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
            <span bar3 class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
          </span>
        </button>
        <div navbar-menu class="items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                  <li>
                    <a class="flex items-center px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" aria-current="page" href="{{route('welcome')}}">
                      <i class="mr-1 fa fa-chart-pie opacity-60"></i>
                      Home
                    </a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" href="{{route('about')}}">
                      <i class="mr-1 fa fa-user opacity-60"></i>
                      About Us
                    </a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" href="{{route('register')}}">
                      <i class="mr-1 fas fa-user-circle opacity-60"></i>
                      Sign Up
                    </a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" href="{{route('login')}}">
                      <i class="mr-1 fas fa-key opacity-60"></i>
                      Sign In
                    </a>
                  </li>
                </ul>

                <ul class="hidden pl-0 mb-0 list-none lg:block lg:flex-row">

                </ul>
              </div>
      </div>
    </nav>

    <main class="mt-0 transition-all duration-200 ease-in-out">
      <section class="min-h-screen">
        <div class="bg-top relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-cover min-h-50-screen rounded-xl bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg')]">
          <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 opacity-60"></span>
          <div class="container z-10">
            <div class="flex flex-wrap justify-center -mx-3">
              <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
                <p class="text-white">create new account for free.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
            <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
              <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
                <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                  <h5>Registration Form</h5>
                </div>
                {{-- <div class="flex flex-wrap px-3 -mx-3 sm:px-6 xl:px-12">
                  <div class="w-3/12 max-w-full px-1 ml-auto flex-0">
                    <a class="inline-block w-full px-5 py-2.5 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-transparent border border-gray-200 border-solid rounded-lg shadow-none cursor-pointer hover:-translate-y-px leading-pro text-xs ease-in tracking-tight-rem bg-150 bg-x-25 hover:bg-transparent hover:opacity-75" href="javascript:;">
                      <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink32">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(3.000000, 3.000000)" fill-rule="nonzero">
                            <circle fill="#3C5A9A" cx="29.5091719" cy="29.4927506" r="29.4882047"></circle>
                            <path d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z" fill="#FFFFFF"></path>
                          </g>
                        </g>
                      </svg>
                    </a>
                  </div>
                  <div class="w-3/12 max-w-full px-1 flex-0">
                    <a class="inline-block w-full px-5 py-2.5 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-transparent border border-gray-200 border-solid rounded-lg shadow-none cursor-pointer hover:-translate-y-px leading-pro text-xs ease-in tracking-tight-rem bg-150 bg-x-25 hover:bg-transparent hover:opacity-75" href="javascript:;">
                      <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(7.000000, 0.564551)" fill="#000000" fill-rule="nonzero">
                            <path
                              d="M40.9233048,32.8428307 C41.0078713,42.0741676 48.9124247,45.146088 49,45.1851909 C48.9331634,45.4017274 47.7369821,49.5628653 44.835501,53.8610269 C42.3271952,57.5771105 39.7241148,61.2793611 35.6233362,61.356042 C31.5939073,61.431307 30.2982233,58.9340578 25.6914424,58.9340578 C21.0860585,58.9340578 19.6464932,61.27947 15.8321878,61.4314159 C11.8738936,61.5833617 8.85958554,57.4131833 6.33064852,53.7107148 C1.16284874,46.1373849 -2.78641926,32.3103122 2.51645059,22.9768066 C5.15080028,18.3417501 9.85858819,15.4066355 14.9684701,15.3313705 C18.8554146,15.2562145 22.5241194,17.9820905 24.9003639,17.9820905 C27.275104,17.9820905 31.733383,14.7039812 36.4203248,15.1854154 C38.3824403,15.2681959 43.8902255,15.9888223 47.4267616,21.2362369 C47.1417927,21.4153043 40.8549638,25.1251794 40.9233048,32.8428307 M33.3504628,10.1750144 C35.4519466,7.59650964 36.8663676,4.00699306 36.4804992,0.435448578 C33.4513624,0.558856931 29.7884601,2.48154382 27.6157341,5.05863265 C25.6685547,7.34076135 23.9632549,10.9934525 24.4233742,14.4943068 C27.7996959,14.7590956 31.2488715,12.7551531 33.3504628,10.1750144"
                            ></path>
                          </g>
                        </g>
                      </svg>
                    </a>
                  </div>
                  <div class="w-3/12 max-w-full px-1 mr-auto flex-0">
                    <a class="inline-block w-full px-5 py-2.5 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-transparent border border-gray-200 border-solid rounded-lg shadow-none cursor-pointer hover:-translate-y-px leading-pro text-xs ease-in tracking-tight-rem bg-150 bg-x-25 hover:bg-transparent hover:opacity-75" href="javascript:;">
                      <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                            <path d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267" fill="#4285F4"></path>
                            <path d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667" fill="#34A853"></path>
                            <path d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782" fill="#FBBC05"></path>
                            <path d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769" fill="#EB4335"></path>
                          </g>
                        </g>
                      </svg>
                    </a>
                  </div>
                  <div class="relative w-full max-w-full px-3 mt-2 text-center shrink-0">
                    <p class="z-20 inline px-4 mb-2 font-semibold leading-normal bg-white text-sm text-slate-400">or</p>
                  </div>
                </div> --}}
                <div class="flex-auto p-6">
                  <form role="form text-left" action="{{ route('register') }}" method="POST"  enctype="multipart/form-data">@csrf

                  @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
                    <div class="mb-4">
                      <input  name="first_name" placeholder="First Name" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>
                     <div class="mb-4">
                      <input name="last_name" placeholder="Last Name" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>

                     <div class="mb-4">
                       <label  class="mb-1 block font-medium md:text-lg"> Account type </label>
                    <select name="account_type" class="w-full rounded-3xl border border-n30 bg-primary/5 px-3 py-2 text-sm dark:border-n500 dark:bg-bg3 md:px-6 md:py-3">

                             <option>Select Account Type</option>
                            <option value="Savings Account">Savings Account</option>
                            <option value="Current Account">Current Account</option>
                            <option value="Fixed Deposit">Fixed Deposit</option>
                            <option value="Recurring Deposit">Recurring Deposit</option>
                            <option value="NRI Account">NRI Account</option>
                            <option value="Joint Account">Joint Account</option>
                            <option value="Business Account">Business Account</option>

                    </select>
                    </div>
                     <div class="mb-4">
                      <input name="email" placeholder="Email" type="email" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>
                     <div class="mb-4">
                      <input name="password" placeholder="Password" type="password" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>
                    <div class="mb-4">
                      <input name="password_confirmation" placeholder="password confirmation" type="password" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>


                     <div class="mb-4">
                      <input name="address_1" placeholder="Address" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>
                     {{-- <div class="mb-4">
                      <input name="unit" placeholder="unit" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div> --}}

                     <div class="mb-4">
                      <label  class="mb-1 block font-medium md:text-lg"> Country </label>

                         <select name="country"class="w-full rounded-3xl border border-n30 bg-primary/5 px-3 py-2 text-sm dark:border-n500 dark:bg-bg3 md:px-6 md:py-3">

                        @foreach ($countries as $country)
                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>


                     <div class="mb-4">
                      <input name="state" placeholder="state" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>
                     <div class="mb-4">
                      <input name="username" placeholder="username" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>

                     <div class="mb-4">
                      <label for="name" class="mb-1 block font-medium md:text-lg"> Currency </label>
                     <select name="currency_type" required class="w-full rounded-3xl border border-n30 bg-primary/5 px-3 py-2 text-sm dark:border-n500 dark:bg-bg3 md:px-6 md:py-3">

                            <option>Select Currency</option>
                            <option value="$">USD</option>
                            <option value="€">EUR</option>
                             <option value="CA$">CAD</option>
                            <option value="£">GBP</option>
                            <option value="¥">JPY</option>
                            <option value="₹">INR</option>
                            <option value="₩">KRW</option>
                            <option value="₽">RUB</option>


                    </select>

                     <div class="mb-4">
                      <label  class="mb-1 block font-medium md:text-lg"> Annual Income </label>
                     <select name="annual_income" required class="w-full rounded-3xl border border-n30 bg-primary/5 px-3 py-2 text-sm dark:border-n500 dark:bg-bg3 md:px-6 md:py-3">

                            <option>Select Currency</option>
                            <option value="100 - 10,000">100 - 10,000</option>
                            <option value="10,000 - 500,000">10,000 - 500,000</option>
                            <option value="500,000 - 1,000,000">500,000 - 1,000,000</option>
                            <option value="1,000,000 - 5,000,000">1,000,000 - 5,000,000</option>
                            <option value="5,000,000 - 10,000,000">5,000,000 - 10,000,000</option>
                            <option value="10,000,000 - 50,000,000">10,000,000 - 50,000,000</option>
                            <option value="50,000,000+">50,000,000+</option>

                    </select>
                    </div>


                     <div class="mb-4">
                      <input name="phone" placeholder="phone number" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>
                     <div class="mb-4">
                      <input name="zipcode" placeholder="zipcode" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>

                    <div class="mb-4">
                      <input name="city" placeholder="City" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>

                     <div class="mb-4">
                      <input name="occupation" placeholder="occupation" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"  aria-describedby="email-addon" />
                    </div>
                    <div class="mb-4">
                      <input name="ssn" type="text" placeholder="ssn/ id number" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                    </div>
                    <div class="mb-4">
                      <input name="profile_picture" type="file" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                    </div>
                    <div class="mb-4">
                      <input name="dob" type="text" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="DD/MM/YYYY" />
                    </div>
                    <div class="min-h-6 pl-7 mb-0.5 block">
                      <input class="w-4.8 h-4.8 ease -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-blue-500 checked:to-violet-500 after:text-xxs after:font-awesome after:duration-250 after:ease-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" value="" checked />
                      <label class="mb-2 ml-1 font-normal cursor-pointer text-sm text-slate-700" for="flexCheckDefault"> I agree the <a href="javascript:;" class="font-bold text-slate-700">Terms and Conditions</a> </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Sign up</button>
                    </div>
                    <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a href="{{route('login')}}" class="font-bold text-slate-700">Sign in</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="py-12">

      </footer>

    </main>
  </body>

  <script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>

  <script src="/assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (session('error'))
        <script>
            swal(
                'Oops!',
                '{{ session('error') }}',
                'error'
            )
        </script>
    @endif

    @if(session('success'))
    <script>
        alert("{{ session('success') }}");
        window.location.href = "{{ route('login') }}";
    </script>
    @endif
</html>



{{-- <!doctype html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/boy/assets/images/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="/boy/fonts.googleapis.com/index.html" />
    <link rel="preconnect" href="/boy/fonts.gstatic.com/index.html" crossorigin />
    <link rel="stylesheet" href="/boy/fonts.googleapis.com/css21141.css?family=Inter:wght@100..900&amp;display=swap" />
    <link rel="stylesheet" href="/boy/assets/css/line-awesome/css/line-awesome.min.css" />
    <meta name="description" content="Bankhub - Html Tailwindcss Banking and Fintech Dashboard Template" />
    <title>Registeration || Page
    </title>
  <link href="/boy/assets/css/index.css" rel="stylesheet"></head>

  <body class="vertical hidden bg-secondary/5 dark:bg-bg3">

    <div class="loader min-w-screen fixed inset-0 !z-50 flex min-h-screen items-center justify-center bg-n0 dark:bg-bg4">
      <svg viewBox="25 25 50 50">
        <circle r="20" cy="50" cx="50"></circle>
      </svg>
    </div>

    <div class="relative min-h-screen bg-secondary/5 dark:bg-bg3">

     <a href="index.html">
        <img src="/vil/assets/images/logo/loho.png" alt="logo" class="logo-full2 relative z-[2] p-6 lg:block lg:p-8" />
      </a>
      <div class="mt-7 flex items-center justify-center">
        <div class="relative z-[2] mx-auto max-w-[1416px] px-3 pb-10">
          <div class="box grid grid-cols-12 items-center gap-4 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.04)] dark:bg-bg4 xl:p-6 xxxl:gap-6">
            <div class="col-span-12 lg:col-span-12">
              <form action="{{ route('register') }}" method="POST"  enctype="multipart/form-data">@csrf

                  @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach

                <h3 class="h3 mb-4">Let&apos;s Get Started!</h3>
                <p class="bb-dashed mb-4 pb-4 text-sm md:mb-6 md:pb-6 md:text-base">Create Your Online Account</p>
                <div class="grid grid-cols-2 gap-x-4 xxxl:gap-x-6">
                  <div class="col-span-2 md:col-span-1">
                    <label  class="mb-1 block font-medium md:text-lg"> First Name </label>
                    <input name="first_name" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="First Name" />
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <label  class="mb-1 block font-medium md:text-lg"> Last Name </label>
                    <input name="last_name" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Last Name" />
                  </div>
                </div>

                 <div class="grid grid-cols-2 gap-x-4 xxxl:gap-x-6">
                  <div class="col-span-2 md:col-span-1">
                    <label for="name" class="mb-1 block font-medium md:text-lg"> Currency </label>
                     <select name="currency_type" required class="w-full rounded-3xl border border-n30 bg-primary/5 px-3 py-2 text-sm dark:border-n500 dark:bg-bg3 md:px-6 md:py-3">

                            <option>Select Currency</option>
                            <option value="$">USD</option>
                            <option value="€">EUR</option>
                            <option value="£">GBP</option>
                            <option value="¥">JPY</option>
                            <option value="₹">INR</option>
                            <option value="₩">KRW</option>
                            <option value="₽">RUB</option>

                    </select>
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <label  class="mb-1 block font-medium md:text-lg"> Account type </label>
                    <select name="account_type" class="w-full rounded-3xl border border-n30 bg-primary/5 px-3 py-2 text-sm dark:border-n500 dark:bg-bg3 md:px-6 md:py-3">

                             <option>Select Account Type</option>
                            <option value="Savings Account">Savings Account</option>
                            <option value="Current Account">Current Account</option>
                            <option value="Fixed Deposit">Fixed Deposit</option>
                            <option value="Recurring Deposit">Recurring Deposit</option>
                            <option value="NRI Account">NRI Account</option>
                            <option value="Joint Account">Joint Account</option>
                            <option value="Business Account">Business Account</option>

                    </select>
                  </div>
                </div>


                 <div class="grid grid-cols-2 gap-x-4 xxxl:gap-x-6">
                  <div class="col-span-2 md:col-span-1">
                    <label  class="mb-1 block font-medium md:text-lg"> Unit </label>
                    <input name="unit" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter Unit" />
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <label  class="mb-1 block font-medium md:text-lg"> State </label>
                    <input name="state" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter State" />
                  </div>
                </div>



                <div class="grid grid-cols-2 gap-x-4 xxxl:gap-x-6">
                  <div class="col-span-2 md:col-span-1">
                    <label class="mb-1 block font-medium md:text-lg"> Username</label>
                    <input name="username" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter Username" />
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <label  class="mb-1 block font-medium md:text-lg">Phone Number </label>
                    <input name="phone" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter Phone Number" />
                  </div>
                </div>

                 <div class="grid grid-cols-2 gap-x-4 xxxl:gap-x-6">
                  <div class="col-span-2 md:col-span-1">
                    <label for="name" class="mb-1 block font-medium md:text-lg"> Zipcode</label>
                    <input name="zipcode" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter Zipcode" />
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <label for="lname" class="mb-1 block font-medium md:text-lg">Address</label>
                    <input name="address_1" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter Address" />
                  </div>
                </div>


                 <div class="grid grid-cols-2 gap-x-4 xxxl:gap-x-6">
                  <div class="col-span-2 md:col-span-1">
                    <label  class="mb-1 block font-medium md:text-lg"> City </label>
                    <input name="city" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter City" />
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <label  class="mb-1 block font-medium md:text-lg"> Country </label>

                         <select name="country"class="w-full rounded-3xl border border-n30 bg-primary/5 px-3 py-2 text-sm dark:border-n500 dark:bg-bg3 md:px-6 md:py-3">

                        @foreach ($countries as $country)
                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>

                <div class="pt-4">
                  <label  class="mb-2 block font-medium md:text-lg"> Enter Your Email </label>
                  <input name="email" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter Your Email"  />
                </div>
                <label class="my-4 block font-medium md:text-lg"> Enter Your Password </label>
                <div class="mb-2">
                  <div  class="relative rounded-3xl border border-n30 bg-n0 px-3 py-2 dark:border-n500 dark:bg-bg4 md:px-6 md:py-2.5">
                    <input name="password" type="password" class="w-11/12 border-none bg-transparent p-0 text-sm" placeholder="Enter Password" id="password2" />
                    <span class="eye-icon absolute top-1/2 -translate-y-1/2 cursor-pointer ltr:right-5 rtl:left-5" onclick="togglePassword('password2',this)">
                      <i class="las la-eye" style="display: none"></i>
                      <i class="las la-eye-slash"></i>
                    </span>
                  </div>
                </div>
                 <label class="my-4 block font-medium md:text-lg"> Confirm Password</label>
                <div class="mb-2">
                  <div  class="relative rounded-3xl border border-n30 bg-n0 px-3 py-2 dark:border-n500 dark:bg-bg4 md:px-6 md:py-2.5">
                    <input name="password_confirmation" type="password" class="w-11/12 border-none bg-transparent p-0 text-sm" placeholder="Enter Password" id="password2" />
                    <span class="eye-icon absolute top-1/2 -translate-y-1/2 cursor-pointer ltr:right-5 rtl:left-5" onclick="togglePassword('password2',this)">
                      <i class="las la-eye" style="display: none"></i>
                      <i class="las la-eye-slash"></i>
                    </span>
                  </div>
                </div>
                 <div class="grid grid-cols-2 gap-x-4 xxxl:gap-x-6">
                  <div class="col-span-2 md:col-span-1">
                    <label  class="mb-1 block font-medium md:text-lg"> Occupation</label>
                    <input name="occupation" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter Occupation" />
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <label  class="mb-1 block font-medium md:text-lg">SSN / ID CARD NUMBER</label>
                    <input name="ssn" type="text" class="mb-2 w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter ssn" />
                  </div>
                </div>

                  <label  class="my-4 block font-medium md:text-lg"> Upload Profile Picture </label>
                <div class="mb-2">
                  <div  class="relative rounded-3xl border border-n30 bg-n0 px-3 py-2 dark:border-n500 dark:bg-bg4 md:px-6 md:py-2.5">
                   <input name="profile_picture" type="file" accept="image/*" />

                  </div>
                </div>

                  <label  class="my-4 block font-medium md:text-lg"> Date of Birth</label>
                <div class="mb-2">
                  <div  class="relative rounded-3xl border border-n30 bg-n0 px-3 py-2 dark:border-n500 dark:bg-bg4 md:px-6 md:py-2.5">
                   <input name="dob"   type="date"   />

                  </div>
                </div>

                <p>
                  Already Have An Account
                  <a class="text-primary" href="{{route('login')}}"> Sign in </a>
                  ,
                  <a class="text-primary" href="{{route('login')}}"> Already Have An Account</a>

                </p>
                <div class="mt-8">
                  <button class="btn-primary px-5">Sign Up</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

    <script src="/boy/assets/js/main.js"></script>
  <script defer src="/boy/assets/js/app.js"></script></body>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (session('error'))
        <script>
            swal(
                'Oops!',
                '{{ session('error') }}',
                'error'
            )
        </script>
    @endif

    @if(session('success'))
    <script>
        alert("{{ session('success') }}");
        window.location.href = "{{ route('login') }}";
    </script>
    @endif

</html> --}}
