<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/index.style.blade.css') }}">
    <title>Login / Register</title>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f9f9f9;
            padding-top: 56px; /* Adjust this value based on your navbar height */
        }
        form {
            width: 100%;
            max-width: 400px;
        }
        .toggle-btn {
            cursor: pointer;
            color: #007bff;
            text-decoration: underline;
        }
        H2{
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    @include('partials.navbar')
    
    <!-- Authentication -->
    <div class="text-center w-100">
        <h2 id="auth-title">SIGN IN</h2>
        <form id="auth-form" class="mx-auto" method="POST" action="{{ route('auth.submit') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div id="register-fields" style="display: none;">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" name="password_confirmation">
                </div>
            </div>
            <button type="submit" class="btn btn-dark w-100">Submit</button>
        </form>
        <p class="mt-3">
            <span id="toggle-text">Don't have an account?</span>
            <span class="toggle-btn" onclick="toggleAuth()">Sign up</span>
        </p>
    </div>

    <script>
        function toggleAuth() {
            const isLogin = document.getElementById('auth-title').innerText === 'SIGN IN';
            document.getElementById('auth-title').innerText = isLogin ? 'SIGN UP' : 'SIGN IN';
            document.getElementById('register-fields').style.display = isLogin ? 'block' : 'none';
            document.getElementById('toggle-text').innerText = isLogin ? 'Already have an account?' : "Don't have an account?";
            document.querySelector('.toggle-btn').innerText = isLogin ? 'Sign in' : 'Sign up';
        }
    </script>
</body>
</html>
