<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["Query"])){
        $query = $_GET["Query"];

        echo "You searched for: " . htmlspecialchars($query);
    } 
    ?>
</body>
</html>