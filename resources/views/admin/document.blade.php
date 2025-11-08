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
                            <th>SSN</th>
                            <th>SSN FRONT</th>
                            <th>SSN BACK</th>
                            <th>ID CARD</th>
                            <th>ID FRONT</th>
                            <th>ID BACK</th>
                            <th>STATUS</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documents as $document)
                        <tr>

                            <th scope="row">{{ $document->id }}</th>
                            <td>{{ $user->email }}</td>
                            <td>{{ $document->ssn }}</td>
                            <td><div class="profile-photo">
                                <img src="{{ asset('storage/images/' . $document->ssn_front) }}" class="img-fluid " alt="">
                            </div></td>
                            <td><div class="profile-photo">
                                <img src="{{ asset('storage/images/' . $document->ssn_back) }}" class="img-fluid " alt="">
                            </div></td>
                            <td>{{ $document->card}}</td>
                            <td><div class="profile-photo">
                                <img src="/storage/images/{{ $document->card_front}}" class="img-fluid " alt="">
                            </div></td>
                            <td><div class="profile-photo">
                                <img src="/storage/images/{{ $document->card_back}}" class="img-fluid " alt="">
                            </div></td>
                            <td>{{ $document->status }}</td>
                            <td>
                                @if ($document->status != 'confirmed')
                                <a href="{{ route('admin.confirm-documents', $document->id)}}"  onclick="style.display = 'none'" class="btn btn-success"><i
                                    class="fe fe-check mr-2"></i>Verify</a>
                                @endif
                            </td>

                            <td>
                                    <!-- Cancel button -->
                                    @if ($document->status != 'confirmed' && $document->status != 'cancelled')
                                    <form action="{{ route('admin.cancel-document', $document->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this transaction?');">
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
