<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff; /* Light blue background color */
            text-align: center;
        }
        .dashboard-container {
            background-color: #fff; /* White background color for the dashboard content */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow effect */
        }
        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4caf50; /* Light green button color */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #45a049; /* Darker green color on hover */
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome to the Dashboard!</h1>
        <p>This is the dashboard content. You are logged in.</p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
    </div>
</body>
</html>
