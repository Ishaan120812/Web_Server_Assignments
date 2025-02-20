<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Classifier</title>
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
            background-color: lightsalmon;
        }
        input, button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button{
            background-color: lightskyblue;
            font-size: 20px;
        }
        
        .result {
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
            color: green;
            font-size: 40px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; text-decoration: underline; color: blue ; ">Grade Classifier</h1>
    <form method="POST" action="">
        <label for="marks" style="font-size: x-large " >Enter Marks (0-100):</label>
        <input type="number" id="marks" name="marks" min="0" max="100" required>
        <button type="submit">Classify Grade</button>
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $marks = $_POST['marks'];
            if ($marks >= 90) {
                echo "Your grade is: A";
            } elseif ($marks >= 80) {
                echo "Your grade is: B";
            } elseif ($marks >= 70) {
                echo "Your grade is: C";
            } elseif ($marks >= 60) {
                echo "Your grade is: D";
            } elseif ($marks >= 50) {
                echo "Your grade is: E";
            } else {
                echo "Your grade is: F";
            }
        }
        ?>
    </div>
</body>
</html>
