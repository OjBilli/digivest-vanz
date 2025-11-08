@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">USERS WIRE TRANSFER TABLE</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
        </ol>
    </div>

</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users Wire Transfer Table</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead >
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Reference</th>
                            <th>Amount</th>
                            <th>Bank Name</th>
                            <th>Account number</th>
                            <th>Account type</th>
                            <th>Transfer type</th>
                            <th>Country</th>
                            <th>Swift Code</th>
                            <th>Email</th>
                            <th>Narration</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wires as $wire)
                        <tr>
                            <th scope="row">{{ $wire->id }}</th>
                            <td>{{ $user->email }}</td>
                            <td>{{ $wire->reference }}</td>
                            <td>{{ $wire->amount }}</td>
                            <td>{{ $wire->bank_name }}</td>
                            <td>{{ $wire->account_number}}</td>
                            <td>{{ $wire->account_type }}</td>
                            <td>{{ $wire->transfer_type }}</td>
                            <td>{{ $wire->country}}</td>
                            <td>{{ $wire->swift_code }}</td>
                            <td>{{ $wire->email }}</td>
                            <td>{{ $wire->narration }}</td>
                            <td>{{ $wire->status }}</td>
                            <td>

                                @if ($wire->status != 'confirmed')
                                <a href="{{ route('admin.confirm-wires', $wire->id)}}" class="btn btn-success"><i
                                    class="fe fe-check mr-2"></i>Confirm</a>
                                @endif
                            </td>

                             <td>
                                    <!-- Cancel button -->
                                    @if ($wire->status != 'confirmed' && $wire->status != 'cancelled')
                                    <form action="{{ route('admin.cancel-wire', $wire->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this transaction?');">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fe fe-x mr-2"></i>Cancel
                                        </button>
                                    </form>
                                    @endif
                                </td>
                            <td>


                                <a href="{{ route('admin.wire-edit', $wire->id)}}" class="btn btn-warning"><i
                                    class="fe fe-check mr-2"></i>EDIT</a>

                            </td>

                            <td>
                                <!-- Delete button -->
                                <form action="{{ route('admin.delete-wire', $wire->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this transaction?');">
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
