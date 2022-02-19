@extends('chunks.template')
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center vh">
            <div class="col-lg-4 auth">
                <h2 class="card-title text-center py-4">Сброс пароля</h2>
               <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token"
                                value="{{ $request->route('token') }}">

                            <div class="custom-form-floating">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input placeholder="{{ __('E-Mail Address') }}" id="email"
                                    type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email', $request->email) }}" required
                                    autocomplete="email" autofocus>
                                

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="custom-form-floating">
                                <label for="password">{{ __('Password') }}</label>
                                <input placeholder="{{ __('Password') }}" id="password"
                                    type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">
                                

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="custom-form-floating">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input placeholder="{{ __('Confirm Password') }}"
                                    id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                                
                            </div>

                            <div class="form-group mt-2 mb-0">
                                <button type="submit" class="btn btn-primary text-white">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center"><img src="{{ asset('assets/images/logo-white.png') }}" alt="" class="w-50 img-fluid"></div>
            </div>
        </div>
    </div>
@endsection