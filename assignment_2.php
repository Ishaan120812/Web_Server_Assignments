
<html>
    <body style="font-size: large;">
        

        <!-- Problem 1 -->
        <H2 style="color: darkgreen; text-decoration: underline ">String Manipulation</H2>
        <form action="index.php">
            <p>Write here: <input type="text" name="userStr"></p>
            <p><input type="submit" value="Submit" name="submit1"></p>
        </form>

        <?php
            function string_manipulation()
            {
                echo "String Manipulation<br><br>";
                $userStr = strtoupper($_REQUEST["userStr"]);

                if (!str_contains($userStr, "PHP")) {
                    print("PHP word doesnt exist");
                } else {
                    echo strtr($userStr, " ", "_");
                    echo "<br>Done<br><br>";
                }
            }

            if (isset($_REQUEST["submit1"])) {
                string_manipulation();
            }
        ?>

        <!-- Problem 2 -->
        <H2 style="color: teal; text-decoration: underline ">Form Validation</H2>
        <form action="index.php">
            <p>Write here your Name: <input type="text" name="name" required></p>
            <p>Write here your Email: <input type="email" name="email" required></p>
            <p>Write here your Age: <input type="int" name="age"></p>
            <p><input type="submit" value="Submit" name="submit2"></p>
        </form>

        <?php
            function form_validation()
            {
                echo " Form Validation <br><br>";
                $name = $_REQUEST["name"];
                $email = $_REQUEST["email"];
                $age = $_REQUEST["age"];

                if ((strlen($name)) < 3) {
                    echo "<br>Name must be at least 3 characters<br>";
                } else if (!empty($age) && !is_numeric($age)) { 
                    echo "<br>Age must be a number if provided<br>";
                } else {
                    echo "Done";
                }
            }
            if (isset($_REQUEST["submit2"])) {
                form_validation();
            }

        ?>

        <!-- Problem 3 -->
        <H2 style="color: slateblue; text-decoration: underline ">Increment/Decrement Operations</H2>
        <?php
            $valueInitial = 10;
            echo "Initial value: $valueInitial<br>";

            $valueInitial++;
            echo "Value post addition (++): $valueInitial<br>";

            $valueInitial--;
            echo "Value post decrement (--): $valueInitial<br>";
        ?>

        <!-- Problem 4 -->
        <H2 style="color:Orange; text-decoration: underline" >Switch Case for Days of the Week</H2>
        <form action="index.php">
            <p>Write a number to know the day: <input type="text" name="day"></p>
            <p><input type="submit" value="Submit" name="submit4"></p>
        </form>
        <?php
        
            function Days_Number()
            {
                $day = $_REQUEST['day'];
                $weekArray = array(
                    "1" => "Monday",
                    "2" => "Tuesday",
                    "3" => "Wednesday",
                    "4" => "Thursday",
                    "5" => "Friday",
                    "6" => "Saturday",
                    "7" => "Sunday"
                );

                if (isset($weekArray[$day])) { 
                    echo "Today is $weekArray[$day]";
                } else {
                    echo "Invalid Input";
                }
            }

            if (isset($_REQUEST["submit4"])) {
                Days_Number();
            }
        ?>

        <!-- Problem 5 -->
        <H2 style="color:Green; text-decoration: underline ">Pricing System </H2>
        <form action="index.php">
            <p>Base price: $10</p>
            <p>Age: <input type="text" name="age" required></p>
            <p>
                    <label>
                        <input type="checkbox" name="student" value="true">
                        student
                    </label>
            </p>
            <p><input type="submit" value="submit" name="submit5"></p>
        </form>

        <?php

            function Ticket(){
                $age = $_REQUEST["age"];
                $finalPrice = 10;
                $isStudent = isset($_REQUEST['student']) ? true : false; 
                if ($age<12){
                $finalPrice = ($finalPrice/2);
                }
                if($age >= 60){
                    $finalPrice = (($finalPrice/100)*70); 
                if($isStudent)
                {
                    $finalPrice = (($finalPrice/100)*80);
                }
                echo "Ticket Price: $finalPrice";
                }

                if (isset($_REQUEST["submit5"])){
                    Ticket();
                }
            }

        ?>


        <!-- Problem 6 -->
        <H2 style="color:Blue; text-decoration: underline" >Pass by Value vs. Pass by Reference</H2>
        <?php
        $num = 10;
        $num2 = 10;
        function pass_by_Value($num) {
            $num = $num * 2;
            return $num;
        }

        function pass_by_Reference(&$num2) {
            $num2 = $num2 * 2;
        }
        echo "Original Value: 10<br><br>";

        echo "Pass by value " . pass_by_Value($num);
        echo "<br>We keep the original number: $num";

        pass_by_Reference($num2);
        echo "<br><br>If we use pass by reference then we change the original number: $num2";

        ?>

        <!-- Problem 7 -->
        <H2 style="color: chocolate; text-decoration: underline " >Loop with Conditions</H2>
        <?php
        for ($i = 1; $i <= 20;$i++){
            if (($i % 3)==0){
                echo "Fizz";
            }
            if (($i % 5)==0){
                echo "Buzz";
            }
            if (!(($i % 3)==0) && !(($i % 5)==0)){
                echo $i;
            }
            echo "<br>";
        }
        ?>

        <!-- Problem 8 -->
        <H2 style="color:red; text-decoration: underline" >Returning Values from Functions</H2>
        <?php
            $value1 = 10;
            $value2 = 10;

            function calculateAreaOfRectangle($value1, $value2){
            $area = $value1 * $value2;
            return $area;
            }
            function calculatePerimeterOfRectangle($value1, $value2){
                $perimeter = 2 * ($value1 + $value2);
                return $perimeter;
            }
            echo "Original values of $value1 and $value2 <br>";
            echo "Area of : " . calculateAreaOfRectangle($value1, $value2);
            echo "<br>Perimeter of : " . calculatePerimeterOfRectangle($value1, $value2);
        ?>

        <!-- Problem 9 -->
        <h2 style="color: brown; text-decoration: underline ">Bill Splitter</H2>
        <form action="index.php">
            <p>Total Bill: <input type="text" name="totalBill" required></p>
            <p>Number of people: <input type="text" name="people" required></p>
            <p>Tip: <input type="text" name="tip"></p>
            <p><input type="submit" value="Submit" name="submit9"></p>
        </form>
        <?php
            if (isset($_REQUEST["submit9"])){

            $billTotal = $_REQUEST["totalBill"];
            $nmbPeople = $_REQUEST["people"];
            $tipPercentage = $_REQUEST["tip"];

            if (empty($tipPercentage)) {
                $tipPercentage = 10;  
            }

            function addition($billTotal,$nmbPeople,$tipPercentage){
            $billTotal += ($billTotal / 100) * $tipPercentage;
            $billTotal = $billTotal/$nmbPeople;
            return $billTotal;
            }

            echo "Each person will pay: $" . addition($billTotal,$nmbPeople,$tipPercentage);

            }
        ?>
    </body>
</html>