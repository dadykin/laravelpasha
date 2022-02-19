@extends('chunks.template')
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center vh">
            
            <div class="col-lg-4 auth">
                
                <h2 class="card-title text-center py-4">Форма восстановления пароля</h2>
               <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="custom-form-floating">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input placeholder="{{ __('E-Mail Address') }}" id="email"
                                    type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-2 mb-0">
                                <button type="submit" class="btn btn-primary text-white">
                                    {{ __('Send Password Reset Link') }}
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