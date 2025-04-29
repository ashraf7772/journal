<!DOCTYPE html>              <!--Where staff view student reflections-->
<html lang="en">             <!--address for this is 127.0.0.1:8000/staff/student/2-->
<head>                       <!--and then you obviously add http infront ^^-->
    <meta charset="UTF-8">
    <title>Student Reflections - Journal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: linear-gradient(to right, #667eea, #764ba2);
            font-family: Arial, sans-serif;
            color: #ffffff;
            padding: 50px;
            margin: 0;
        }
        .container {
            background: #ffffff;
            color: #764ba2;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
        }
        h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }
        .refItem {
            margin-bottom: 30px;
            padding: 20px;
            background: #f6f6f6;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .refItem h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .refItem p {
            font-size: 18px;
            margin-bottom: 15px;
        }
        a {
            text-decoration: none;
            color: #764ba2;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover {
            color: #5b3c88;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Reflections for {{ $student->name }}</h1>
        <p>Submitted: {{ $reflections->first()->created_at }}</p> <!-- This Shows the first reflection date -->

        @foreach($reflections as $reflection)
            <div class="refItem">              <!--"the foreach($reflections as $reflection)" thing is a BLADE Directive -->
                <h3>Concrete Experience</h3>   <!-- ^^ it loops through the data for you  -->
                <p>{{ $reflection->experience }}</p>

                <h3>Reflective Observation</h3>
                <p>{{ $reflection->observation }}</p>

                <h3>Abstract Conceptualisation</h3>
                <p>{{ $reflection->conceptualisation }}</p>

                <h3>Active Experimentation</h3>
                <p>{{ $reflection->experimentation }}</p>
            </div>
        @endforeach

        <a href="{{ route('staff.dashboard') }}">Back to Staff Dashboard</a>
    </div>

</body>
</html>
