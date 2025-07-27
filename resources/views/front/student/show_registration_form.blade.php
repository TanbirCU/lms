@extends('front.master')
@section('title', 'Student Registration')

@section('content')
    <div class="student-register-page">
        <div class="student-register-card">
            <h2 class="register-heading">📝 Student Registration</h2>
            <form action="" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">👤 Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="mobile">📱 Mobile Number</label>
                    <input type="tel" name="mobile" id="mobile" placeholder="e.g. 01XXXXXXXXX" pattern="01[0-9]{9}" required>
                </div>

                <div class="form-group">
                    <label for="email">📧 Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="password">🔒 Password</label>
                    <input type="password" name="password" id="password" placeholder="Create a password" required>
                </div>

                <div class="form-group">
                    <label for="confirm_password">🔁 Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Repeat your password" required>
                </div>

                <button type="submit" class="register-btn">Register</button>
            </form>
        </div>
    </div>
@endsection

@push('front_css')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .student-register-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to right, #673ab7, #2196f3);
            padding: 20px;
        }

        .student-register-card {
            background-color: #ffffff;
            border-radius: 14px;
            padding: 40px 30px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            transition: 0.3s ease;
        }

        .student-register-card:hover {
            box-shadow: 0 14px 38px rgba(0, 0, 0, 0.2);
        }

        .register-heading {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            color: #333;
            letter-spacing: 0.5px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 12px 14px;
            font-size: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #2196f3;
            outline: none;
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #2196f3;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .register-btn:hover {
            background-color: #0d47a1;
        }

        @media (max-width: 480px) {
            .student-register-card {
                padding: 30px 20px;
            }

            .register-heading {
                font-size: 22px;
            }
        }
    </style>
@endpush
