@extends('layouts.app')


@section('content')

    <div class="vc_row wpb_row vc_row-fluid vc_custom_1455183321063">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">

                <form method="POST" action="{{ route('login') }}" class="sc_form sc_form_style_form_1 margin_top_small margin_bottom_medium">
                    @csrf
                    <div class="row mb-10">
                        <label for="email" class="col-md-10 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-10">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-10">
                        <label for="password" class="col-md-10 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-10">
                        <div class="col-md-10 offset-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-6">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
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

@endsection
