@extends('chunks.template')
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center vh">
            
            <div class="col-lg-4 auth">
                
                <h2 class="card-title text-center py-4">Войти</h2>
               <div class="card">
                    <div class="card-body">
                        <form  method="POST" action="{{ route('login') }}">
                            @csrf
                            @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Пароль</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Запомнить меня</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Войти</button>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <a  href="{{ route('password.request') }}">
                                            Забыли пароль?
                                        </a>
                                        <a href="{{ route('register') }}">
                                            Зерегистрироваться
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center"><img src="{{ asset('assets/images/logo-white.png') }}" alt="" class="w-50 img-fluid"></div>
            </div>
        </div>
    </div>
@endsection