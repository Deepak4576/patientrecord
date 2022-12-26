<?php

session_start();
$adhar=$_SESSION['adhar'];

$host="localhost";
$username="root";
$password="";
$dbname="signup";
$mysqli=new mysqli($host,$username,$password,$dbname);

$Dname=$_POST['dname'];
$Did=$_POST['did'];
$hp=$_POST['health'];
$tr=$_POST['treatment'];
$ap=$_POST['amount'];
$pm=$_POST['option'];

$qry="UPDATE patientdaat1 SET Dname='$Dname',Did='$Did',Health_problem='$hp' ,Treatment='$tr', 
   Amount_paid='$ap',Payment_mode='$pm' where Aadhar='$adhar' ";

if($reult=$mysqli->query($qry))
{
include "nview.php";
echo '<script> alert("Record updated successfully")</script>';

}

   ?>
