<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1; /* لون الخلفية */
  }
  .login-container {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff; /* لون خلفية المربع */
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
  .login-container h2 {
    text-align: center;
    color: #333; /* لون العنوان */
  }
  .login-container input[type="email"],
  .login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc; /* لون حدود الحقول */
    border-radius: 5px;
    box-sizing: border-box;
  }
  .login-container button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50; /* لون زر تسجيل الدخول */
    color: white; /* لون نص زر تسجيل الدخول */
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .login-container button:hover {
    background-color: #45a049; /* لون زر تسجيل الدخول عند التحويم */
  }
</style>
</head>
<body>

<div class="login-container">
  <h2>Login</h2>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
</div>

</body>
</html>
