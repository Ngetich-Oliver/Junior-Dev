<?php

$is_invalid = false;

if( $_SERVER["REQUEST_METHOD"] === "POST"){

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM create_account WHERE name ='%s'", $mysqli->real_escape_string($_POST["UserName"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if($user){

        if(password_verify($_POST["Password"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

                header("Location: citizen.php");
            exit;
                
        }
    }

    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEBC Website</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-repeat: no-repeat;
            background-size: cover;
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

    

    <form method="post">
        <legend>
            <fieldset>
            <h1> Welcome to the IEBC online platform. <br> </h1>

<?php if($is_invalid): ?>
    <em>Invalid Login</em>
    <?php endif; ?>
    
                <p><label for="UserName">UserName</label>
                <input type="text" name="UserName" id="UserName" value="<?= htmlspecialchars($_POST["UserName"] ?? "") ?>" required autofocus></p>
                <p><label for="Password">Password</label>
                <input type="password" name="Password" id="Password" required autofocus></p>
                <button id="Login">Login</button><br>
            </fieldset>
        </legend>
    </form>
    <footer>
    <p>IEBC your vote,your future</p>
</footer>
</body>
</html>
