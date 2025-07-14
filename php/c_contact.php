<?php
    require_once '../config/contactdb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<p>Name & Reason</p>
<?php
    $sql = "SELECT name, reason, other_reason FROM contact_messages";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0){
            while ($c_result = mysqli_fetch_assoc($result)){
                echo "<b>Name: </b>" . htmlspecialchars($c_result['name']) ;
                
                if ($c_result['reason'] === "Other"){
                echo "<b> Other Reason: </b>" . htmlspecialchars($c_result['other_reason']) . "<br>";
                } else {
                    echo "<b> Reason: </b>" . htmlspecialchars($c_result['reason']) . "<br>";
                }
            }
        } else {
            echo "No name detected";
        }
        