@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">ADMIN DEPOSIT</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.wallet') }}">ADMIN WALLET</a></li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">ADMIN WALLETS </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal" method="POST" >@csrf
                            <div class="form-group row">
                                <label class="col-md-3 form-label" for="example-email">BITCOIN</label>
                                <div class="col-md-9">
                                    <input value="{{$btc->address }}" type="text" name="btc" class="form-control" placeholder="">
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-md-3 form-label">ETHEREUM</label>
                                <div class="col-md-9">
                                    <input value="{{ $eth->address }}"type="text" name="eth" class="form-control"  >
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label class="col-md-3 form-label">usdt</label>
                                <div class="col-md-9">
                                    <input value="{{ $usdt->address }}" name="usdt"type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-label">wire USD</label>
                                <div class="col-md-9">
                                    <input readonly value="{{ $wireUSD->address }}" name="wireUSD"type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-label">wire EUR</label>
                                <div class="col-md-9">
                                    <input readonly value="{{ $wireEUR->address }}" name="wireEUR"type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-label">wire GBP</label>
                                <div class="col-md-9">
                                    <input readonly value="{{ $wireGBP->address }}" name="wireGBP"type="text" class="form-control">
                                </div>
                            </div>


                            <div class="mt-3">
                                <button class="btn btn-primary btn-block">UPDATE</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
