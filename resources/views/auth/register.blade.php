@extends('chunks.template')
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center vh">
            <div class="col-lg-6 auth">
                <h2 class="card-title text-center py-4">Регистрация</h2>
                <div class="card">
                    <div class="card-body" id="reg">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Имя</label>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="name" value="{{ old('name') }}" >
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required>
                                        
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Пароль</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                        <div class="form-group">
                                            <label>Подтверить пароль</label>
                                            <input type="password" class="form-control" name="password_confirmation" required>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="form-group mb-0 mt-2">
                                <button type="submit" class="btn btn-primary text-white">
                                    Зарегистрироваться
                                </button>
                                <a class="" href=" {{ route('login') }}">
                                    Уже есть аккаунт?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center"><img src="{{ asset('assets/images/logo-white.png') }}" alt="" class="w-50 img-fluid"></div>
            </div>
        </div>
    </div>
@endsection
