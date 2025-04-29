<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard - Journal</title>
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
        h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }
        .formContainer {
            background: #ffffff;
            color: #764ba2;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .formContainer label {
            font-size: 18px;
            display: block;
            margin: 10px 0;
        }
        .formContainer textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
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
    </style>
</head>
<body>

    <h1>Welcome to the Student Dashboard</h1>

    <div class="formContainer">
        <h2>Weekly Reflection</h2>

        <form method="POST" action="{{ route('reflection.submit') }}">
            @csrf

            <label for="experience">Concrete Experience (What happened?)</label>
            <textarea name="experience" id="experience" rows="4" required></textarea>

            <label for="observation">Reflective Observation (What did you notice?)</label>
            <textarea name="observation" id="observation" rows="4" required></textarea>

            <label for="conceptualisation">Abstract Conceptualisation (What did you learn?)</label>
            <textarea name="conceptualisation" id="conceptualisation" rows="4" required></textarea>

            <label for="experimentation">Active Experimentation (What will you try next?)</label>
            <textarea name="experimentation" id="experimentation" rows="4" required></textarea>

            <button type="submit">Submit Reflection</button>
        </form>
    </div>

</body>
</html>
