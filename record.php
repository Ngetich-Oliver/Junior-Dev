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

    <form action="">
        <fieldset>
            <legend><font face="times new roman" size="5px">Result</font></legend>
            <?php
            $sql = "SELECT * FROM citizen_by_birth;";
            $result = mysqli_query($conn, $sql);
            $checkResult = mysqli_num_rows($result);

            if($checkResult > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "id: " . $row['id'] . "<br>" . "Your details: " . "<br>" . $row['name'] . "<br>" . $row['gender'] . "<br>" . $row['id_number'] . "<br>" . $row['voter_id'] . "<br>" . $row['county'] . "<br>" . $row['constituency'] . "<br>" . $row['ward'] . "<br>" . $row['location'] . "<br>";
                    if($row['county'] == $row['location']){
                        echo "You are eligible to vote at your current location, in your respective polling station. <br><br>";
            
                    }else{
                        echo "You are not a registered voter at your current location. Please visit the nearest IEBC office to change your polling station.<br><br>";
                    }
                }
                

            }
            ?>
    </fieldset>
    </form>
    <button id="logout">Logout</button>
    <script src="index.js"></script>

</body>
</html>