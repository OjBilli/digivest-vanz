@extends('layouts.appc')
@section('content')
    <div class="w-full px-6 py-6 mx-auto">


        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-3/3 lg:flex-none">
                <div class="flex flex-wrap -mx-3">

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
                            <form action="{{ route('user.cheque.request') }}" method="post">
                                                @csrf
                                                @foreach ($errors->all() as $err)
                                                    <p class="text-danger text-center">{{ $err }}</p>
                                                @endforeach

                                <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                            <h6 class="mb-0 dark:text-white">REQUEST CHEQUE BOOK</h6>
                                        </div>

                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3">
                                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                    <div class="mb-4">
                                                        <label
                                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">AMOUNT
                                                        </label>
                                                        <input type="number" name="amount" placeholder="INITIATE AMOUNT"
                                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    </div>
                                                </div>
                                                 <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                    <div class="mb-4">
                                                        <label
                                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Business Counterpart
                                                        </label>
                                                        <input name="business_name" type="text" placeholder="Name Of Person/Business to be paid"
                                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    </div>
                                                </div>
                                                 <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                    <div class="mb-4">
                                                        <label
                                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Bank Name
                                                        </label>
                                                        <input name="bank_name" placeholder="Bank Name" type="text"
                                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    </div>
                                                </div>
                                                 <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                    <div class="mb-4">
                                                        <label
                                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Beneficiary Account Number
                                                        </label>
                                                        <input name="account_number" type="text"
                                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    </div>
                                                </div>
                                                 <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                    <div class="mb-4">
                                                        <label
                                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Narration/Purpose
                                                        </label>
                                                        <input name="purpose" placeholder="Purpose"  placeholder="INITIATE AMOUNT"
                                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    </div>
                                                </div>



                                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                    <div class="mb-4">
                                                        <label for="first name"
                                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">ACCOUNT
                                                            METHOD</label>
                                                        <select name="wallet_id" id="inputState"
                                                            class="form-control default-select wide focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                                            <option selected="">Choose Wallet</option>
                                                            @foreach ($wallets as $wallet)
                                                                <option value="{{ $wallet->id }}">
                                                                    {{ $wallet->currency->name }} ({{ $wallet->balance }})
                                                                </option>
                                                            @endforeach


                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                    <div class="mb-4">
                                                        <label
                                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">ACOOUNT
                                                            PIN </label>
                                                        <input placeholder="Enter Pin" type="password" name="pin"
                                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    </div>
                                                </div>


                                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                    <div class="mb-4">
                                                        <label
                                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Paste
                                                            Government-approved ID</label>
                                                        <input type="file" name="approved_id"
                                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    </div>
                                                </div>

                                                 <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                    <div class="mb-4">
                                                        <label
                                                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Paste
                                                            Upload Signature</label>
                                                        <input type="file" name="signature_id"
                                                            class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
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
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white">Request History</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table
                                class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            ACCOUNT ID</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            AMOUNT</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            ACCOUNT TYPE</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            BUSSINESS COUNTERPART</th>
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            STATUS</th>
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($cheques->isEmpty())
                            <p class="text-center">No Request yet.</p>
                            @else
                            @foreach ($cheques as $cheque)
                                            <tr>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <div class="flex px-2 py-1">
                                                        <div class="flex flex-col justify-center">
                                                            <span
                                                                class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ Auth::user()->account_number }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <span
                                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">${{ number_format($cheque->amount, 2) }}</span>
                                                </td>
                                                <td
                                                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <span
                                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ Auth::user()->account_type }}</span>
                                                </td>
                                                <td
                                                    class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <span
                                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$cheque->business_name}}</span>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    @if ($cheque->status == 'pending')
                                                        <span
                                                            class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $cheque->status }}</span>
                                                    @elseif ($cheque->status == 'confirmed')
                                                        <span
                                                            class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $cheque->status }}</span>
                                                    @elseif ($cheque->status == 'cancelled')
                                                        <span
                                                            class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $cheque->status }}</span>
                                                    @endif
                                                </td>
                                                <td
                                                    class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <span
                                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $cheque->created_at->format('d M y, h:ia') }}</span>
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
@endsection
