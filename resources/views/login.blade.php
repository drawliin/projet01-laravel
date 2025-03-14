

@extends("layouts.layout")

@section('style')
    <style>
        .container{
            padding: 20px;
            background: white;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            padding: 20px;
            width: 50%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-login {
            width: 100%;
            border-radius: 8px;
        }
    </style>
@endsection

@section('title', 'Login Page')

@section('content')
    <div class="login-container">
        <h4 class="text-center mb-4">Login</h4>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-login">Login</button>
        </form>
        <p class="text-center mt-3">
            <a href="#">Forgot password?</a> | <a href="#">Sign Up</a>
        </p>
    </div>
@endsection