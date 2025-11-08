@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">USERS CHEQUE REQUEST TABLE</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
        </ol>
    </div>

</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users Withdrawal Table</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead >
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Business name</th>
                            <th>Amount</th>
                            <th>Government ID</th>
                            <th>Signature Iamge</th>
                            <th>Purpose</th>
                            <th>Status</th>
                            <th>Confirm</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cheques as $cheque)
                        <tr>
                            <th scope="row">{{ $cheque->id }}</th>
                            <td>{{ $user->email }}</td>
                            <td>{{ $cheque->amount }}</td>
                            <td>{{ $cheque->business_name }}</td>
                            <td><div class="profile-photo">
                                <img src="/storage/images/{{ $cheque->approved_id}}" class="img-fluid " alt="">
                            </div></td>

                            <td><div class="profile-photo">
                                <img src="/storage/images/{{ $cheque->signature_id }}" class="img-fluid " alt="">
                            </div></td>
                            <td>{{ $cheque->purpose }}</td>
                            <td>{{ $cheque->status }}</td>

                            <td>

                                @if ($cheque->status != 'confirmed')
                                <a href="{{ route('admin.confirm-cheques', $cheque->id)}}" class="btn btn-success"><i
                                    class="fe fe-check mr-2"></i>Confirm</a>
                                @endif
                            </td>

                            <td>
                                    <!-- Cancel button -->
                                    @if ($cheque->status != 'confirmed' && $cheque->status != 'cancelled')
                                    <form action="{{ route('admin.cancel-cheque', $cheque->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this transaction?');">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fe fe-x mr-2"></i>Cancel
                                        </button>
                                    </form>
                                    @endif
                                </td>
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
