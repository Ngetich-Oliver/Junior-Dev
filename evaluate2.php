<?php

$host = "localhost";
$dbname = "iebc";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection error: " . $mysqli->connect_error);
}

$name = $_POST["name"];
$gender = $_POST["gender"];
$nationality = $_POST["nationality"];
$passport = $_POST["passport"];
$idnumber = $_POST["idnumber"];
$voterid = $_POST["voterId"];
$county = $_POST["county"];
$location = $_POST["location"];

$sql = "INSERT INTO citizen_by_registration (name, gender, nationality, passport,id_number, voter_id, county, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);
$prepareStmt = mysqli_stmt_prepare($stmt, $sql);

if ($prepareStmt) {
    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $gender, $nationality, $passport, $idnumber, $voterid, $county, $location);
    mysqli_stmt_execute($stmt);
    echo "Success";
    header("Location: result.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
$conn->close();
?>


