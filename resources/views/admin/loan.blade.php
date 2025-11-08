@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">USERS LOANS TABLE</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
        </ol>
    </div>

</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users Loans Table</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead >
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Reference</th>
                            <th>Amount</th>
                            <th>Narration</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($loans as $loan)
                        <tr>
                            <th scope="row">{{ $loan->id }}</th>
                            <td>{{ $user->email }}</td>
                            <td>{{ $loan->reference }}</td>
                            <td>{{ $loan->amount }}</td>
                            <td>{{ $loan->narration }}</td>
                            <td>{{ $loan->status }}</td>
                            <td>

                                @if ($loan->status != 'confirmed')
                                <a href="{{ route('admin.confirm-loans', $loan->id)}}" class="btn btn-success"><i
                                    class="fe fe-check mr-2"></i>Confirm</a>
                                @endif
                            </td>


                             <td>
                                    <!-- Cancel button -->
                                    @if ($loan->status != 'confirmed' && $loan->status != 'cancelled')
                                    <form action="{{ route('admin.cancel-loan', $loan->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this transaction?');">
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
