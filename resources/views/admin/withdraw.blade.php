@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">USERS WITHDRAWAL TABLE</h4>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Coin</th>
                            <th>Wallet</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($withdraws as $withdraw)
                        <tr>
                            <th scope="row">{{ $withdraw->id }}</th>
                            <td>{{ $withdraw->amount }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $withdraw->currency->name }}</td>
                            <td>{{ $withdraw->wallet }}</td>
                            <td>{{ $withdraw->status }}</td>
                            <td>

                                @if ($withdraw->status != 'confirmed')
                                <a href="{{ route('admin.confirm-withdraws', $withdraw->id)}}" class="btn btn-success"><i
                                    class="fe fe-check mr-2"></i>Confirm</a>
                                @endif
                            </td>


                             <td>
                                    <!-- Cancel button -->
                                    @if ($withdraw->status != 'confirmed' && $withdraw->status != 'cancelled')
                                    <form action="{{ route('admin.cancel-withdraw', $withdraw->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this transaction?');">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">
                                            <i class="fe fe-x mr-2"></i>Cancel
                                        </button>
                                    </form>
                                    @endif
                                </td>

                            <td>
                                <!-- Delete button -->
                                <form action="{{ route('admin.delete-withdraw', $withdraw->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this transaction?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fe fe-trash mr-2"></i>Delete
                                    </button>
                                </form>
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
