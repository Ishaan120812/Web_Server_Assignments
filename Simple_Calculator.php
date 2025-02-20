<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        #main_div{
            background-color: black;
            width: 400px;
            border-radius: 10px;
            margin-left: 36%;
            height: 350px;
        }
        label{
            color: white;
        }

        form {
            text-align: center;
            max-width: 400px;
            padding-top: 20px;
        }
        input, select, button {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button{
            background-color: #FC8B19;
            font-weight: bold;
            font-size: 20px
        }
        .error {
            text-align: center;
            color: red;
            font-size: 60px;

        }
        .result {
            text-align: center;
            color: green;
            font-size: 60px;
        }

        #main_heading{
            text-align: center;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1 id="main_heading">PHP Calculator</h1>
    <div id="main_div">
        <form method="POST" action="" class="form" >
            <label for="number1">Enter First Number:</label>
            <input type="text" id="number1" name="number1" required><br>

            <label for="number2">Enter Second Number:</label>
            <input type="text" id="number2" name="number2" required><br>

            <label for="operation">Select Operation:</label><br>
            <select id="operation" name="operation" required>
                <option value="">Select operation</option>
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select>

            <button type="submit">Calculate</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operation = $_POST['operation'];

        $error = "";
        $result = "";

        if (!is_numeric($number1) || !is_numeric($number2)) {
            $error = "Both inputs must be valid numbers.";
        } else {
            $number1 = (float)$number1;
            $number2 = (float)$number2;

            // Perform the selected operation
            switch ($operation) {
                case "add":
                    $result = $number1 + $number2;
                    break;
                case "subtract":
                    $result = $number1 - $number2;
                    break;
                case "multiply":
                    $result = $number1 * $number2;
                    break;
                case "divide":
                    if ($number2 == 0) {
                        $error = "Division by zero is not allowed.";
                    } else {
                        $result = $number1 / $number2;
                    }
                    break;
                default:
                    $error = "Invalid operation selected.";
            }
        }

        if ($error) {
            echo "<p class='error'>$error</p>";
        } else {
            $operationSymbol = "";
            switch ($operation) {
                case "add":
                    $operationSymbol = "+";
                    break;
                case "subtract":
                    $operationSymbol = "-";
                    break;
                case "multiply":
                    $operationSymbol = "*";
                    break;
                case "divide":
                    $operationSymbol = "/";
                    break;
            }
            echo "<p  class='result'>Result: $number1 $operationSymbol $number2 = $result</p>";
        }
    }
    ?>
</body>
</html>
