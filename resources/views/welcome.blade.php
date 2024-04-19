<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        /* Your existing Tailwind CSS styles */

        /* Additional custom styles for centering and cards */
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #8872B7;
        }

        .card-container {
            border: 2px solid #4F3A6D; /* Thin border */
            border-radius: 10px; /* Border radius */
            overflow: hidden; /* Hide overflow to prevent border doubling */
        }

        .card {
            background-color: #6A599D;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>

<body class="antialiased">
    <div class="center">
        <div class="card-container">
            <div class="card">
                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- The login form fields go here -->
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>

            <div class="card">
                <!-- Register Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- The register form fields go here -->
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
