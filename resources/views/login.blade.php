<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url('/path/to/image.png'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: white;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: rgba(0, 0, 0, 0.7); /* Transparent black background */
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: none;
        }
        .form-check-input {
            margin-right: 5px;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #4CAF50; /* Green button color */
            color: white;
        }
        .btn-primary:hover {
            background-color: #45a049;
        }
        a {
            color: white;
            text-decoration: none;
            margin-top: 10px;
            display: block;
        }
        a:hover {
            text-decoration: underline;
        }
        .alert {
            color: red;
            margin-bottom: 15px;
        }
        .home-button {
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .home-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <!-- Menampilkan pesan error validasi -->
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
        <a href="home">Login</a>
        </form>
        <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>
        <a href="/" class="home-button">HOME</a>
    </div>
</body>
</html>
