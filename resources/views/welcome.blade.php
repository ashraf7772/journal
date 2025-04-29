<!DOCTYPE html>                    <!--Just use this as home page because theres no time -->    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Journal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: linear-gradient(to right, #667eea, #764ba2);
            font-family: Arial, sans-serif;
            color: #ffffff;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 60px;
            margin-bottom: 20px;
        }
        p {
            font-size: 20px;
            margin-bottom: 40px;           
        }
        .buttons {
            margin-top: 30px;
        }
        .buttons a {
            background: #ffffff;
            color: #764ba2;
            text-decoration: none;
            padding: 12px 25px;       /*.buttons a and .buttons a:hover*/ 
            border-radius: 5px;       /*target the anchor tags*/ 
            margin: 10px;
            font-weight: bold;
            transition: 0.3s;
        }
        .buttons a:hover {
            background: #764ba2;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <h1>Journal</h1>
    <p>Welcome to the Journal platform for student reflection and growth.</p>

    <div class="buttons">
        <a href="{{ route('login.form') }}">Login</a>
        <a href="{{ route('register.form') }}">Register</a>
    </div>

</body>
</html>
