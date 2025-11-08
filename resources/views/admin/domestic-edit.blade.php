@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">EDIT DOMESTIC TRANSFER</h4>
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
                <h4 class="card-title">EDIT DOMESTIC TRANSFER </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                         @endif
                         <form class="form-horizontal" action="{{ route('admin.edit-domestic', $domestic->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label class="col-md-3 form-label">AMOUNT</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="amount" value="{{ old('amount', $domestic->amount) }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-label">Bank Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="bank_name" value="{{ old('bank_name', $domestic->bank_name) }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-label">Account Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="account_name" value="{{ old('account_name', $domestic->account_name) }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-label">Account Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="account_number" value="{{ old('account_number', $domestic->account_number) }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-label">Narration</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="narration" value="{{ old('narration', $domestic->narration) }}">
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary btn-block">Make Edit</button>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
