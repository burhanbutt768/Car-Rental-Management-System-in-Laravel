<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Car Rental System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{asset('/images/1.jpg')}}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
        } 
        .login-container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px; 
            border-radius: 10px;
            max-width: 400px;
            margin: 100px auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-label {
            font-size: 1.1rem;
        }
        .form-control {
            border-radius: 20px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 20px;
            color: white;
            font-size: 1.2rem;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body> 

    <div class="login-container">
        <h2>Admin Login</h2>
        <form id="loginForm" method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Email validation regex
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                event.preventDefault(); // Prevent form submission
                return;
            }

            if (password.length < 6) {
                alert('Password must be at least 6 characters long.');
                event.preventDefault(); // Prevent form submission
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
