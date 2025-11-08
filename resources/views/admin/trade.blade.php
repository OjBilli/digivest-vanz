@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">ADMIN TRADE</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.trade') }}">Trade</a></li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">TRADE OPTION </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-md-3 form-label">AMOUNT</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-label" for="example-email">BITCOIN</label>
                                <div class="col-md-9">
                                    <input type="text" name="example-email" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-label">ETHEREUM</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-label">CARDANO</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-label">TETHER</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-label">PLAN</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn btn-primary btn-block">TRADE</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
