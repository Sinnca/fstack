<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $name = "Riz";
        // $age = 19;
        // $status = "Student";

        // $fruits = [
        //     "Apple",
        //     "favorite" => "Avocado"
        // ];
        // echo "Hello my name is $name and I'm $age and a $status at Laguna State Polytechnic University <br>";
        
        // echo "I like fruits like apple but my favorite is {$fruits["favorite"]}<br>";

        // $num1 = 10;
        // $num2 = 20;

        // echo "The addition of two number is: " . $num1 + $num2;

        // print_r($fruits);

        // $grade = 76;

        // if ($grade < 75){
        //     echo "You Failed";
        // }   else{
        //     echo "You Passed";
        // }
        // Create a script that stores a name in a variable and outputs:
        // "Hello, [name]!"
        $name = "Riz Ivan G. Verana<br>";
        echo $name;
        // Write a script that checks a numeric score and outputs:

        // "Excellent" if the score is 90 or above

        // "Good" if the score is 75 to 89

        // "Try Again" if the score is below 75
        $score = 74;
        if($score >= 90){
            echo "Your score is Excellent";
        }
            elseif ($score >= 75){
                echo "Your score is Good";
            }
                else {
                echo "Your score is Failed";
            }
        // Create a function that takes two numbers as parameters and returns their sum.
        // Call the function with any two numbers and display the result.

        $num1 = 10;
        $num2 = 30;

        function add(){
            global $num1, $num2;

            echo "<br>" . ($num1 + $num2);
        }
        add();

        // Create a function that checks if a string is more than 10 characters.
        // Return "Long string!" if true, otherwise return "Short string."
        $fname = "HAHAHAHAHAHA";

        function ValidateLength($fname){

            if (strlen($fname) > 10){
                echo "<br>Too long";
            } else {
                echo "<br>Too short";
            }
        }
        ValidateLength($fname);

        // Grade Checker
        // Write a script that checks a student’s score (0–100) and outputs:

        // “Excellent” if score is 90 or above

        // “Good” if score is between 75 and 89

        // “Pass” if score is between 60 and 74

        // “Fail” if score is below 60

        $grade = 900;
        if ($grade >= 90){
            echo "<br>Excellent";
        }   elseif ($grade >= 75){
            echo "<br>Good";
        }   elseif ($grade >= 60){
            echo "<br>Pass";
        }   else {
            echo "<br>Fail";
        }
        
        // Create a script that checks username and password variables:

        // If username is “admin” and password is “1234”, print “Access granted”

        // Otherwise, print “Access denied”

        $UserName = "Admin";
        $Password = "1234";

        if ($UserName === "Admin" && $Password === "1234"){
            echo "<br>Access Granted";
        } else {
            echo "<br>Access Denied";
        }

        // Odd or Even Number
        // Given a number, output whether it’s “Odd” or “Even”.

        $number = 10;

        if ($number % 2 === 0 ){
            echo "<br>Even";
        } else {
            echo "<br>Odd";
        }

        // Discount Calculator
        // Given the total purchase amount:

        // Apply 20% discount if amount is above 1000

        // Apply 10% discount if amount is between 500 and 1000

        // No discount if below 500
        // Print the final price after discount.

        $PurchaseAmount = 500;
        if ($PurchaseAmount >= 1000){
            $discounted = $PurchaseAmount - ($PurchaseAmount * 0.20);
            echo  "<br>Your Total with 20% discount is: $discounted";
        }  elseif ($PurchaseAmount >= 500){
            $discounted = $PurchaseAmount - ($PurchaseAmount * 0.10);
            echo "<br> Your Total with 10% discount is: $discounted";
        }  else {
            echo "<br>Your total is:  $PurchaseAmount";
        }

        // Day of the Week
        // Given a variable with a number 1–7, print the corresponding day of the week (1 = Monday, 7 = Sunday). 
        // Print “Invalid day” for numbers outside this range.
        $num = 10;
        switch ($num){
            case 7:
                echo "<br>Sunday";
                break;
            case 6:
                echo "<br>Saturday";
                break;
            case 5:
                echo "<br>Friday";
                break;
            case  4:
                echo "<br>Thursday";
                break;
            case 3:
                echo "<br>Wednesday";
                break;
            case 2: 
                echo "<br>Tuesday";
                break;
            case 1: 
                echo "<br>Monday";
                break;
            default: 
                echo "<br>Invalid";
                break;
        }

    // Password Strength Checker
    // Check a password string’s length:

    // If length is less than 6 characters, print “Too short”

    // If length is 6–10 characters, print “Medium strength”

    // If length is more than 10, print “Strong password”

    $ps = "HAHAHAA";

    function CheckPass($ps) {
        if (strlen($ps) < 6){
            echo "<br>Too Short";
        } elseif (strlen($ps) <= 10){
            echo "<br>Medium strength";
        }  else {
            echo "<br>Strong Password";
        }
    }
    CheckPass($ps);
    ?>
</body>
</html> 