@extends('layouts.apps')
@section('content')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">View User Deposit</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                        class="fe fe-layout  mr-2 fs-14"></i>ADMIN DASHBOARD</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </div>

</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users Deposits</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>EMAIL</th>
                            <th>Card Holder</th>
                            <th>Card Number</th>
                            <th>STATUS</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($virtuals as $virtual)
                        <tr>

                            <th scope="row">{{ $virtual->id }}</th>
                            <td>{{ $user->email }}</td>
                            <td>{{ $virtual->card_holder }}</td>
                            <td>{{ $virtual->card_number }}</td>
                            <td>{{ $virtual->status }}</td>
                            <td>
                                @if ($virtual->status != 'confirmed')
                                <a href="{{ route('admin.confirm-virtuals', $virtual->id)}}"  onclick="style.display = 'none'" class="btn btn-success"><i
                                    class="fe fe-check mr-2"></i>Verify</a>
                                @endif
                            </td>

                             <td>
                                    <!-- Cancel button -->
                                    @if ($virtual->status != 'confirmed' && $virtual->status != 'cancelled')
                                    <form action="{{ route('admin.cancel-virtual', $virtual->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this transaction?');">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fe fe-x mr-2"></i>Cancel
                                        </button>
                                    </form>
                                    @endif
                                </td>
                            <td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- table-responsive -->
        </div>


        <script type="text/javascript">

            var Text = 'hello';

               function setInput(button) {
                  var buttonVal = button.name;
                  button.style.display = 'none'; // insert this line
                  textbox = document.getElementById('input_' + buttonVal);
                  textbox.value = Text ;
               }
           </script>

    </div>
</div>
@endsection
