<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Detector</title>
    <style>
        body {
            margin: 20px;
        }
        form {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            background-color: lightgray;
        }
        input, button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button{
            background-color: lightcoral;
            font-size: 20px;
        }        
        .result {
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
            font-size: 40px;
            text-align: center;
            color: green;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; text-decoration: underline; color: red ; ">Leap Year Detector</h1>
    <form method="POST" action="">
        <label for="year" style=" font-size: 20px; font-weight: bold; " >Enter a Year:</label>
        <input type="number" id="year" name="year" min="1" required>
        <button type="submit">Check Leap Year</button>
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $year = $_POST['year'];
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                echo "$year is a Leap Year!";
            } else {
                echo "$year is Not a Leap Year.";
            }
        }
        ?>
    </div>
</body>
</html>
