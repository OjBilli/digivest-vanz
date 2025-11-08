@extends('layouts.app')
@section('content')

<body>


    <div class="container">
        <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
            
            <div class="uc"><b>RESET PASSWORD</b></div>
            <br />
            <br />



            <div class="inputBox">
                <input id="email" placeholder="enter your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                <label for="email">Enter Email</label>
            </div>



            <b style="color:red;"></b>
            <input type="submit" name="Reset" value="RESET">
            <div class="link-container">
                <a href="{{route('login')}}">Return to Login?</a>
            </div>
            <div class="link-container">
                <a href="{{route('register')}}">Signup</a>
            </div>

        </form>

    </div>


</body>


{{-- <div class="form-container outer">
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">

                    <h1 class="">RESET YOUR PASSWORD</h1>

                    <p class="">Enter Your Email Address</p>
                 <!--   <img src="./assets/settings/Azure.PNG" class="navbar-logo" alt="logo" width="20%"> -->

                 <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-1">
                            <input  id="email" placeholder="enter your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        </div>
                    </div>


                    <div class="row mb-0">
                        <div class="col-12 ">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}



 @endsection

