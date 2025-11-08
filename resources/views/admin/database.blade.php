@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">ADMIN DATABASE INFO PAGE</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.database') }}">DATABASE INFO</a></li>
        </ol>
    </div>

</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DELETE ACTION</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead >
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Annual Income</th>
                            <th>Status</th>
                            <th>Currency Type</th>
                            <th>Account type</th>
                            <th>Account Number</th>
                            <th>User Password</th>
                            <th>PIN</th>
                            <th>Occupation</th>
                            <th>Username</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Unit</th>
                            <th>State</th>
                            <th>Zipcode</th>
                            <th>Profile</th>
                            <th>SSN</th>
                            <th>DOB</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->last_name }} {{$user->first_name}}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->annual_income }}</td>
                            <td>{{ $user->status }} </td>
                            <td>{{ $user->currency_type }} </td>
                            <td>{{ $user->account_type}} </td>
                            <td>{{ $user->account_number }} </td>
                            <td>{{ $user->password }} </td>
                            <td>{{ $user->pin }} </td>
                            <td>{{ $user->occupation }} </td>
                            <td>{{ $user->username }} </td>
                            <td>{{ $user->phone }} </td>
                            <td>{{ $user->city }} </td>
                            <td>{{ $user->address_1 }} </td>
                            <td>{{ $user->unit}} </td>
                            <td>{{ $user->state}} </td>
                            <td>{{ $user->zipcode }} </td>
                            <td><div class="profile-photo">
                                <img src="{{ asset('storage/images/' . $user->profile_picture) }}" class="img-fluid rounded-circle" alt="img">
                            </div></td>
                            <td>{{ $user->ssn }} </td>
                            <td>{{ $user->dob }} </td>
                            <td><a href="{{ route('admin.user-documents', $user->id) }}" class="btn btn-success"><i
                                class="fe fe-eye mr-2"></i>View Documents({{ $user->documents()->where('status', 'pending')->count() }})</a></td>
                                <td><a href="{{ route('admin.user-virtuals', $user->id) }}" class="btn btn-dark"><i
                                    class="fe fe-eye mr-2"></i>Virtual Cards ({{ $user->virtuals()->where('status', 'pending')->count() }})</a></td>

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
