@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">ADMIN DELETE PAGE</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.delete') }}">DELETE ACTION</a></li>
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
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->last_name }} {{$user->first_name}}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->status }} </td>
                            <td><a href="{{ route('admin.user-delete', $user->id) }}"class="btn btn-danger">Block <i class="fa fa-plus fa-spin ml-2"></i></a></td>
                            <td><a href="{{ route('admin.user-recover', $user->id) }}"class="btn btn-success">Recover <i class="fa fa-plus  ml-2"></i></a></td>
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
