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
                            <th>COIN</th>
                            <th>AMOUNT</th>
                            <th>STATUS</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deposits as $deposit)
                        <tr>

                            <th scope="row">{{ $deposit->id }}</th>
                            <td>{{ $user->email }}</td>
                            <td>{{ $deposit->currency->name}}</td>
                            <td>{{ number_format($deposit->amount) }}</td>
                            <td>{{ $deposit->status }}</td>
                            <td>
                                @if ($deposit->status != 'confirmed')
                                <a href="{{ route('admin.confirm-deposits', $deposit->id)}}"  onclick="style.display = 'none'" class="btn btn-success"><i
                                    class="fe fe-check mr-2"></i>Confirm</a>
                                @endif
                            </td>

                              <td>
                                    <!-- Cancel button -->
                                    @if ($deposit->status != 'confirmed' && $deposit->status != 'cancelled')
                                    <form action="{{ route('admin.cancel-deposit', $deposit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this transaction?');">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">
                                            <i class="fe fe-x mr-2"></i>Cancel
                                        </button>
                                    </form>
                                    @endif
                                </td>

                            <td>
                                <!-- Delete button -->
                                <form action="{{ route('admin.delete-deposit', $deposit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this transaction?');">
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
