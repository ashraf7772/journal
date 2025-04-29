<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff Dashboard - Journal</title>
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
        h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }
        .students-list {
            text-align: left;
            display: inline-block;
            background: #ffffff;
            color: #764ba2;
            padding: 20px 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        .students-list ul {
            list-style-type: none;
            padding: 0;
        }
        .students-list ul li {
            margin-bottom: 15px;
            font-size: 18px;
        }
        .students-list ul li a {
            text-decoration: none;
            color: #764ba2;
            font-weight: bold;
            transition: 0.3s;
        }
        .students-list ul li a:hover {
            color: #5b3c88;
        }
    </style>
</head>
<body>

    <h1>Staff Dashboard</h1>
    <h2>Students List:</h2>

    <div class="students-list">
        <ul>
            @foreach($students as $student)
                <li>
                    {{ $student->name }} ({{ $student->email }})
                    <a href="{{ route('staff.viewStudent', $student->id) }}">View Reflections</a>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
