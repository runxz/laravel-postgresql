<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff; /* Light blue background color */
            text-align: center;
        }
        .form-container {
            background-color: #fff; /* White background color for the form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow effect */
        }
        .btn-green {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4caf50; /* Light green button color */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-green:hover {
            background-color: #45a049; /* Darker green color on hover */
        }
        .highlighted-text {
            color: #007bff; /* Blue color for highlighted text */
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" required><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br><br>
            <button type="submit" class="btn-green">Register</button>
        </form>
        <p>Already have an account? <a href="{{ route('login') }}" class="highlighted-text">Login Now</a></p>
    </div>
</body>
</html>
