@extends('layouts.appc')
@section('content')
    <div class="relative w-full mx-auto ">

        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div
                        class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
                        <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1 dark:text-white">Austin@atlasmarketedgers.com</h5>
                        <p class="mb-0 font-semibold leading-normal dark:text-white dark:opacity-60 text-sm">
                            ACCOUNT MANAGER</p>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                    <div class="relative right-0">
                        <ul class="relative flex flex-wrap p-1 list-none bg-gray-50 rounded-xl" nav-pills role="tablist">

                            <li class="z-30 flex-auto text-center">
                                <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700"
                                    nav-link href="mailto:Austin@exoduscu.com" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ml-2">SEND MAIL</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
