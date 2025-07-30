@extends('front.master')
@section('title', 'Student Login')

@section('content')
    <div class="student-login-page">
        <div class="student-login-card">
            <h2 class="login-heading">🎓 Student Login</h2>
            <form action="{{ route('student.login') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">📧 Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="password">🔒 Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>
@endsection

@push('front_css')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .student-login-page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #4a148c, #1976d2);
            padding: 30px;
        }

        .student-login-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 40px 30px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            transition: 0.3s ease;
        }

        .student-login-card:hover {
            box-shadow: 0 14px 38px rgba(0, 0, 0, 0.2);
        }

        .login-heading {
            text-align: center;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
            font-weight: 600;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #1976d2;
            outline: none;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: #1976d2;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #004ba0;
        }

        @media (max-width: 480px) {
            .student-login-card {
                padding: 30px 20px;
            }

            .login-heading {
                font-size: 22px;
            }
        }
    </style>
@endpush
