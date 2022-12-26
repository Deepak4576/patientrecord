<?php

if (empty($_POST["hosp"])) {
    die("Name is required");
}

if (strlen($_POST["pass"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["pass"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["pass"])) {
    die("Password must contain at least one number");
}

if ($_POST["pass"] !== $_POST["cnfrmpas"]) {
    die("Passwords not matched");
}

$password_hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);

//$mysqli = require __DIR__ . "/database.php";
$host="localhost";
$username="root";
$password="";
$dbname="signup";
$mysqli=new mysqli($host,$username,$password,$dbname);

if($mysqli->connect_errno)
{
    die("connection error");
}

$sql = "INSERT INTO register (hid, hname, password)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["hid"],
                  $_POST["hosp"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: signup_success.html");
    exit;
    
} 

else
 {
    
   echo "hospital with"+$_POST[hid]+"is already exist";
}
?>


