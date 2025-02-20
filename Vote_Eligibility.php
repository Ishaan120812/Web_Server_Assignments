<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Eligibility Checker</title>
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
        }

        .result {
            font-weight: bold;
            margin-top: 20px;
            font-size: 40px;
            text-align: center;
            color: green;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; text-decoration: underline; color: blue ; ">Voting Eligibility Checker</h1>
    <form method="POST" action="">
        <label for="age">Enter Your Age:</label>
        <input type="number" id="age" name="age" min="0" required>
        <button type="submit">Check Eligibility</button>
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $age = $_POST['age'];
            if ($age >= 18) {
                echo "You are eligible to vote.";
            } else {
                echo "You are not eligible to vote. You need to be at least 18 years old.";
            }
        }
        ?>
    </div>
</body>
</html>
