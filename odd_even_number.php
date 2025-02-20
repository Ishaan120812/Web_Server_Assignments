<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODD or EVEN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            background-color: lightblue;
        }
        input, button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .result {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
            font-size: 40px;
            color: green;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; text-decoration: underline">Odd or Even Checker</h1>
    <form method="POST" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST['number'];

            if ($number % 2 == 0) {
                echo "The number $number is Even.";
            } else {
                echo "The number $number is Odd.";
            }
        }
        ?>
    </div>
</body>
</html>