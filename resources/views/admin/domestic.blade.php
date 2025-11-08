@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">USERS DOMESTIC TABLE</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
        </ol>
    </div>

</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users Domestic Table</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead >
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Reference</th>
                            <th>Amount</th>
                            <th>Bank</th>
                            <th>Account Name</th>
                            <th>Account Number</th>
                            <th>Account type</th>
                            <th>Narration</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($domestics as $domestic)
                        <tr>
                            <th scope="row">{{ $domestic->id }}</th>
                            <td>{{ $user->email }}</td>
                            <td>{{ $domestic->reference }}</td>
                            <td>{{ $domestic->amount }}</td>
                            <td>{{ $domestic->bank_name }}</td>
                            <td>{{ $domestic->account_name }}</td>
                            <td>{{ $domestic->account_number }}</td>
                            <td>{{ $domestic->account_type }}</td>
                            <td>{{ $domestic->narration }}</td>
                            <td>{{ $domestic->status }}</td>
                            <td>

                                @if ($domestic->status != 'confirmed')
                                <a href="{{ route('admin.confirm-domestics', $domestic->id)}}" class="btn btn-success"><i
                                    class="fe fe-check mr-2"></i>Confirm</a>
                                @endif
                            </td>
                             <td>
                                    <!-- Cancel button -->
                                    @if ($domestic->status != 'confirmed' && $domestic->status != 'cancelled')
                                    <form action="{{ route('admin.cancel-domestic', $domestic->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this transaction?');">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fe fe-x mr-2"></i>Cancel
                                        </button>
                                    </form>
                                    @endif
                                </td>
                            <td>
                            <td>


                                <a href="{{ route('admin.domestic-edit', $domestic->id)}}" class="btn btn-warning"><i
                                    class="fe fe-check mr-2"></i>EDIT</a>

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
