<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>registration Page</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-image: url('background.jpg'); /* تغيير الخلفية */
    background-size: cover;
    background-position: center;
    color: #333; /* لون النص */
  }
  .signup-container {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); /* لون خلفية المربع مع تعتيم */
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
  .signup-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #555; /* لون العنوان */
  }
  .signup-container input[type="text"],
  .signup-container input[type="email"],
  .signup-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc; /* لون حدود الحقول */
    border-radius: 5px;
    box-sizing: border-box;
  }
  .signup-container button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50; /* لون زر تسجيل المستخدم الجديد */
    color: white; /* لون نص زر تسجيل المستخدم الجديد */
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .signup-container button:hover {
    background-color: #45a049; /* لون زر تسجيل المستخدم الجديد عند التحويم */
  }
</style>
</head>
<body>

<div class="signup-container">
  <h2>Registration Page</h2>
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <button type="submit">Registration</button>
  </form>
</div>

</body>
</html>
