<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Name"], $_POST["Number"], $_POST["Message"])){
        $name = $_POST["Name"];
        $number = $_POST["Number"];
        $message = $_POST["Message"];

        if (!is_numeric($number)) {
            echo "Invalid Contact Number";
            exit;
        }

        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Number: " . htmlspecialchars($number) . "<br>";
        echo "Message: " . htmlspecialchars($message) . "<br>";
    }
    ?>




</body>
</html>
    <style>
        h1 {
            text-align: center;
            font-size: 50px;
        }
        nav {
            display: flex;
            font-family: 'Courier New', Courier, monospace;
            font-size: 20px;
            justify-content: space-evenly;
        }
        nav div{
            margin: 0%;
            margin-top: 10px;
        }
    .head{
        font-family: 'Courier New', Courier, monospace;
        font-size: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .Name{
        font-size: 30px;
        justify-content: center;
        padding: 10px 10px;
        margin: 20px;
        margin-left: 53px;

    }
    .Number{
        font-size: 30px;
        justify-content: center;
        padding: 10px 10px;
        margin: 20px;
    }
    .Message{
        font-size: 30px;
        justify-content: center;
        padding: 10px 10px;
        margin: 20px;
        margin-left: 37px;
    }
    .Back, .Submit {
    display: inline-block;
    padding: 10px 30px;
    font-size: 30px;
    margin: 20px;
    background-color: #eee;
    color: #333;
    text-decoration: none;
    border: 2px solid #333;
    border-radius: 8px;
    text-align: center;
    cursor: pointer;
}
</style>