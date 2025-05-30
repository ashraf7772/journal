<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration - Journal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: linear-gradient(to right, #667eea, #764ba2);
            font-family: Arial, sans-serif;
            color: #ffffff;
            text-align: center;
            padding: 50px;
            margin: 0;
        }
        h1 {
            font-size: 60px;
            margin-bottom: 20px;
        }
        .formContainer {
            background: #ffffff;
            color: #764ba2;
            padding: 40px 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .formContainer label {
            font-size: 18px;
            display: block;
            margin: 10px 0;
        }
        .formContainer input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #764ba2;
            font-size: 16px;
        }
        .formContainer button {
            background: #764ba2;
            color: #fff;
            padding: 12px 30px;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .formContainer button:hover {
            background: #5b3c88;
        }
        .formContainer .back-link {
            margin-top: 20px;
            font-size: 16px;
        }
        .formContainer .back-link a {
            text-decoration: none;
            color: #764ba2;
            font-weight: bold;
            transition: 0.3s;
        }
        .formContainer .back-link a:hover {
            color: #5b3c88;
        }
    </style>
</head>
<body>

    <h1>Students Register Here</h1>

    <div class="formContainer">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <button type="submit">Register</button>
        </form>

        <div class="back-link">
            <a href="{{ route('home') }}">Home Page</a>
        </div>
    </div>

</body>
</html>
