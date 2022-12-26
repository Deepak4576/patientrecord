
<?php
session_start();
$val=$_SESSION['adhar'];
$host="localhost";
$username="root";
$password="";
$dbname="signup";
$mysqli=new mysqli($host,$username,$password,$dbname);

if($mysqli->connect_errno)
{
    die("connection error");
}


$sql = "INSERT INTO patientdaat1 (Aadhar,Dname,Did,Health_problem,Treatment,Amount_paid,Payment_Mode)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssssss",
                  $val,
                  $_POST["dname"],
                  $_POST["did"],
                  $_POST["health"],
                  $_POST["treatment"],
                  $_POST["amount"],
                  $_POST["option"]);
                  
if ($stmt->execute()) {
    
    echo '<script>alert("record saved successfully");</script>' ;
    include "navigation.html";
    $flag=1;

} 
else
 
    $flag=0;
?>

