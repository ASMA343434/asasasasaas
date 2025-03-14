<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .login-btn {
            background-color: #1877f2;
            color: white;
        }
        .register-btn {
            background-color: #42b72a;
            color: white;
        }
        .login-btn:hover {
            background-color: #166fe5;
        }
        .register-btn:hover {
            background-color: #36a420;
        }
        h1 {
            color: #1c1e21;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Site</h1>
        <div>
            <a href="login.php" class="button login-btn">Login</a>
            <a href="register.php" class="button register-btn">Create New Account</a>
        </div>
    </div>
</body>
</html>
