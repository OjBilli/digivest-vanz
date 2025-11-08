@extends('layouts.app')

@section('content')
<main>
    <div id="Hero" data-easing="ease-in" class="hero-section justify-content-center w-tabs">
        <div class="tabs-content w-tab-content">


            <div data-w-tab="Tab 1" class="tab-pane w-pane _1 w-tab-pane w--tab-active"
                style="background-image:url(/assetss/tradehome/img/home-test.jp); background-position:center; background-size: cover; background-repeat:no-repeat;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Confirm Password') }}</div>

                                <div class="card-body">
                                    {{ __('Please confirm your password before continuing.') }}

                                    <form method="POST" action="{{ route('password.confirm') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Confirm Password') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>

</main>

@endsection
