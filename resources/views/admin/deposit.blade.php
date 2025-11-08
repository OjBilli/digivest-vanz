@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">ADMIN DEPOSIT</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                        class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Deposit </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                         @endif
                        <form class="form-horizontal" action="{{ route('admin.update-wallet') }}" method="POST">@csrf
                            <div class="form-group row">
                                <label class="col-md-3 form-label">AMOUNT</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-label" for="example-email">WALLET</label>

                                <div class="col-md-9">
                                    <select name="wallet_id" class="custom-select" required>
                                        <option value="">SELECT COIN </option>
                                        <option value="{{ $user->bitcoinWallet->id }}">Bitcoin
                                            ({{ $user->bitcoinWallet->balance }})</option>
                                        <option value="{{ $user->usdtWallet->id }}">Usdt
                                            ({{ $user->usdtWallet->balance }})</option>
                                        <option value="{{ $user->wireUSDWallet->id }}">Wire USD
                                            ({{ $user->wireUSDWallet->balance }})</option>
                                        <option value="{{ $user->wireEURWallet->id }}">Wire EUR
                                            ({{ $user->wireEURWallet->balance }})</option>

                                             <option value="{{ $user->wireGBPWallet->id }}">Wire GBP
                                            ({{ $user->wireGBPWallet->balance }})</option>


                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-label" for="example-email">Transaction type</label>

                                <div class="col-md-9">
                                    <select name="transaction_type" class="custom-select" required>
                                        <option value="">SELECT TYPE</option>
                                        <option value="deposit">Deposit</option>
                                        <option value="withdraw">Withdraw</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-label">Date</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="transaction_date">
                                </div>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary btn-block">DEPOSIT</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
