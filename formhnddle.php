<?php
$host="localhost";
$username="root";
$password="";
$dbname="signup";
$mysqli=new mysqli($host,$username,$password,$dbname);
if($mysqli->connect_errno)
{
    die("connection error");
}
?>