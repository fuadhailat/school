<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 500px;
        }
        h1 {
            text-align: center;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .top-bar a button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form div {
            margin-bottom: 15px;
        }
        form label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }
        form button {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            align-self: flex-end;
        }
        .errors {
            background-color: #e74c3c;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="top-bar">
            <a href="{{ route('admin.users') }}">
                <button>Back</button>
            </a>
        </div>
        <h1>Edit User</h1>

        @if ($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
