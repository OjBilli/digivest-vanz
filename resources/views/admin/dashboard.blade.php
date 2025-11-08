@extends('layouts.apps')
@section('content')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">ADMIN DASHBOARD</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                            class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.dashboard') }}">USERS</a>
                </li>
            </ol>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Table</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Annual Income</th>
                                <th>Deposits</th>
                                <th>Withdraws</th>
                                <th>Trade</th>
                                <th>Loans</th>
                                <th>Wire Transfer</th>
                                <th>Domestic</th>
                                <th>View User</th>
                                <th>Request Cheque</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <td scope="row">{{ $user->id }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                     <td>{{ $user->annual_income }}</td>
                                    <td><a href="{{ route('admin.user-deposits', $user->id) }}" class="btn btn-success"><i
                                                class="fe fe-check mr-2"></i>User Deposits
                                            ({{ $user->deposits()->where('status', 'pending')->count() }})
                                        </a></td>
                                    <td><a href="{{ route('admin.user-withdraws', $user->id) }}" class="btn btn-info"><i
                                                class="fe fe-printer mr-1"></i> Withdraw
                                            ({{ $user->withdraws()->where('status', 'pending')->count() }}) </a></td>

                                    <td><a href="{{ route('admin.deposit', $user->id) }}" class="btn btn-warning"><i
                                                class="fe fe-upload mr-2"></i>Deposit</a></td>

                                                <td><a href="{{ route('admin.wire.deposit', $user->id) }}" class="btn btn-success"><i
                                                    class="fe fe-upload mr-2"></i>Wire Deposit</a></td>

                                    <td><a href="{{ route('admin.user-loans', $user->id) }}" class="btn btn-dark"><i
                                                class="fa fa-american-sign-language-interpreting mr-2"></i>Loan
                                            ({{ $user->loans()->where('status', 'pending')->count() }})</a></td>
                                    <td><a href="{{ route('admin.user-wires', $user->id) }}" class="btn btn-info"><i
                                                class="fa fa-exchang mr-2"></i>Wire Transfer
                                            ({{ $user->wires()->where('status', 'pending')->count() }})</a></td>
                                    <td><a href="{{ route('admin.user-domestics', $user->id) }}" class="btn btn-danger"><i
                                                class="fa fa-handshake-o mr-2"></i>Domestic
                                            ({{ $user->domestics()->where('status', 'pending')->count() }})</a></td>
                                    <td><a href="{{ route('admin.userlogin', $user->id) }}" class="btn btn-success"><i
                                                class="fe fe-eye mr-2"></i>View User</a></td>
                                    <td><a href="{{ route('admin.user-cheques', $user->id) }}" class="btn btn-danger"><i
                                                class="fa fa-handshake-o mr-2"></i>Request cheques
                                            ({{ $user->cheques()->where('status', 'pending')->count() }})</a></td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- table-responsive -->
            </div>




        </div>
    </div>
@endsection
