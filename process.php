<?php

if ( ! filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}

if(empty($_POST["UserName"])){
    die("Username is required");
}

if(empty($_POST["citizenship"])){
    die("Citizenship is required");
}

if(strlen($_POST["Password"]) <8) {
    die("Password should be at least 8 characters");
}

if( ! preg_match("/[a-z]/i", $_POST["Password"])){
    die("Password must contain at least one letter");
}

if( ! preg_match("/[0-9]/i", $_POST["Password"])){
    die("Password must contain at least one number");
}

if($_POST["Password"] !== $_POST["ConfirmPassword"]){
    die("Password must match");
}

$password_hash = password_hash($_POST["Password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php"; 

$sql = "INSERT INTO create_account(email, name, citizenship, password_hash)
 VALUES(?,?,?,?)";

$stmt = $mysqli->stmt_init();

if( ! $stmt->prepare($sql)){
    die("SQL error: " . $mysqli->error);
} 

$stmt->bind_param("ssss", $_POST["Email"], $_POST["UserName"],
 $_POST["citizenship"], $password_hash);

if($stmt->execute()) {

    header("Location: signup_success.html");
    exit;

}else{

    die($mysqli->error . " " . $mysqli->errno);
}



//print_r($_POST);
//var_dump($password_hash);