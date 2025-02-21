<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
</head>
<body>
    <h1>Student Login</h1>
    <form action="{{ route('student.authenticate') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Login</button>
        <a href="{{ route('home') }}">Home Page</a>
    </form>
</body>
</html>
