<?php

$host = "localhost";
$dbname = "iebc";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection error: " . $mysqli->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-repeat: no-repeat;
            background-size: cover;
        }
        a{
            float: right;
            margin-top:20px;
            margin-right:20px;
            font-family: arial black;
            font-size:15px;
        }
    </style>
</head>
<body background="logo.jpg.jpg">
<nav class="iebc">
    <div class="logo">
    <h1>IEBC</h1>
    <div class="two">
<ul>
    <li><a href="#about-us">About Us</a></li>
    <li><a href="#services">Services</a></li>
   <li><a href="#management">Managemement</a></li> 
    <li><a href="#contact">Contact Us</a></li>
    <li> <a href="create.php">Sign Up</a></li>
    <li> <a href="Login.php">Login</a></li>
</ul>
    </div>
</nav>

    <p><a href="logout.php">Log Out</a></p>
    <form action="">
        <fieldset>
            <legend><font face="times new roman" size="5px">Result</font></legend>
    <?php
    $sql = "SELECT * FROM citizen_by_registration;";
    $result = mysqli_query($conn, $sql);
    $checkResult = mysqli_num_rows($result);

    if($checkResult > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "id: " . $row['id'] . "<br>" . "Your details: " . "<br>" . $row['name'] . "<br>" . $row['gender'] . "<br>" . $row['nationality'] . "<br>" . $row['passport'] . "<br>" . $row['id_number'] . "<br>" . $row['voter_Id'] . "<br>" . $row['county'] . "<br>" . $row['location'] . "<br>";
            if($row['county'] == $row['location']){
                echo "You are eligible to vote at your current location, in your respective polling station.<br><br>";
    
            }else{
                echo "You are not a registered voter at your current location. Please visit the nearest IEBC office to change your polling station.<br><br>";
            }
        }
    }
    ?>
    </fieldset>
    </form>
    <footer>
    <p>IEBC your vote,your future</p>
</footer>
</body>
</html>