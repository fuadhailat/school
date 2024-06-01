<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #bdc3c7, #2c3e50);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            text-align: center;
            margin-bottom: 30px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        form {
            display: flex;
            justify-content: center;
        }
        form button {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Admin Page</h1>
    <p>Only accessible by the admin user.</p>
    <a href="{{ route('admin.users') }}">
        <button>Users</button>
    </a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
