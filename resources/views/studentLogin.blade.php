<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Login - Journal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: linear-gradient(to right, #667eea, #764ba2);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }
        .loginContainer {
            background: #ffffff;
            color: #764ba2;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .loginContainer h1 {
            margin-bottom: 20px;
            font-size: 30px;
        }
        .loginContainer input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #764ba2;
        }
        .loginContainer button {
            background: #764ba2;
            color: #fff;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
        }
        .loginContainer button:hover {
            background: #5b3c88;
        }
    </style>
</head>
<body>

    <div class="loginContainer">
        <h1>Student Login</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
