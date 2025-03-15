<?php

$host = "localhost";
$dbname = "iebc";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection error: " . $mysqli->connect_error);
}

$name = $_POST["FullName"];
$gender = $_POST["Gender"];
$idnumber = $_POST["IDNumber"];
$voterid = $_POST["VoterId"];
$county = $_POST["County"];
$const = $_POST["Constituency"];
$ward = $_POST["Ward"];
$location = $_POST["CurrentLoc"];

$sql = "INSERT INTO citizen_by_birth (name, gender, id_number, voter_id, county, constituency, ward, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);
$prepareStmt = mysqli_stmt_prepare($stmt, $sql);

if ($prepareStmt) {
    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $gender, $idnumber, $voterid, $county, $const, $ward, $location);
    mysqli_stmt_execute($stmt);
    echo "Success";
    header("Location: record.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
$conn->close();
?>


