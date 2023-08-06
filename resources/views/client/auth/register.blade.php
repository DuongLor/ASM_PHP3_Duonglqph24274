@extends('client.layout.app')
@section('title', 'Đăng ký')
@section('style')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            border-radius: 1rem;
            padding: 30px;
        }

        input[type="text"],
        input[type="password"] {
            border-radius: 10rem;
        }

        button {
            border-radius: 10rem;
            background: linear-gradient(to right, #1380e6, #12d012);
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
        }

        .social-login i {
            font-size: 1.5rem;
            margin-right: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-container">

                <h3 class="text-center mb-4">Đăng ký tài khoản</h3>

                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Tên đăng nhập" name="name">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-key"></i>
                        </span>
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-key"></i>
                        </span>
                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu"
                            name="password_confirmation">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-block">Đăng ký</button>
                    </div>
                </form>
            </div>
            <div class="text-center my-3">
                <p> Nếu bạn đã có tài khoản, <a href="{{ route('login') }}" class="text-center text-primary"> đăng nhập</a>
                </p>
            </div>
        </div>
    </div>
@endsection
