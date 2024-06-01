<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
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
            max-width: 800px;
        }
        h1 {
            text-align: center;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .top-bar a button,
        .top-bar form button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .top-bar form {
            display: flex;
        }
        .top-bar form input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
        }
        .top-bar form button {
            border-radius: 0 5px 5px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        td a {
            color: #3498db;
            text-decoration: none;
        }
        td form {
            display: inline;
        }
        td form button {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="top-bar">
            <a href="{{ route('admin') }}">
                <button>Back</button>
            </a>
            <form action="{{ route('admin.users.search') }}" method="GET">
                <input type="text" name="query" placeholder="Search users..." value="{{ request('query') }}">
                <button type="submit">Search</button>
            </form>
        </div>
        <h1>All Users</h1>

        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
