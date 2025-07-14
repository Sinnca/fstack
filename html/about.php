
<?php
require_once '../config/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <h1>Rizz Webpage</h1>
    <nav>
    <div> <a href="hahaha11.html">Home</a></div>
    <div> <a href="about.html">About</a></div>
    <div> <a href="contact.html">Contact</a></div>
    <div> <a href="ts.html">Tech Stacks</a></div>
    </nav>
    <img src="https://i.pinimg.com/736x/f4/05/a3/f405a3b8eea98fbdc14c1cc1a80caa2d.jpg" alt="Profile" class="profile-pic">
    
    <main style="font-size: 30px; text-align: center; margin: 20px; margin-left:30px">Riz Ivan G. Verana
            
    <a href="https://github.com/Sinnca" class="github"><br>GitHub</a>
        <p>List of registered users</p>
        <?php

            $sql = "SELECT * FROM users";
            $data = mysqli_query($conn, $sql);

            if ($data && mysqli_num_rows($data) > 1){
                while ($user_details = mysqli_fetch_assoc($data)){
                    echo "Registered Users: " . $user_details['id'] . "<br>";
                    echo "Username: " . $user_details['username'];
                } 
            } else  {
                    echo "No registered users found.";
                }
        ?>
    
        <p>List of Consultants</p>
        <?php
        $sql = "SELECT * FROM consultants";
        $data = mysqli_query($conn, $sql);

        if ($data && mysqli_num_rows($data) > 1) {
            while ($c_details = mysqli_fetch_assoc($data)){
                echo "Expertise: " . $c_details['expertise'];
                echo " Username: " . $c_details['username'] . "<br>";
            } 
        } else {
            echo "No consultants found";
        }
        ?>
</body>
</html>
<style>
    .github{
        margin-top: 10px;
    }
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
            margin-top: 30px;
        }
    .profile-pic {
        display: block;
        margin: 30px auto 0 auto;
        margin-top: 120px;
        width: 450px;
        height: 350px;
        border-radius: 50%;
        object-fit: cover;
    }
    p{
        display: flex;
        margin: 100px;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 30px;
    }
    body{
        background-color: rgb(237, 240, 240);
    }
    .Back {
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