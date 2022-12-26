
<?php

session_start();
$Aadhar=$_SESSION['adhar'];

$host="localhost";
$username="root";
$password="";
$dbname="signup";
$mysqli=new mysqli($host,$username,$password,$dbname);

if($mysqli->connect_errno)
{
    die("connection error");
}
   $fname=$_POST['fname'];
   $mname=$_POST['mname'];
   $lname=$_POST['lname'];
   $add=$_POST['add'];
   $mail=$_POST['mail'];
   $contact=$_POST["cntct"];
   $age=$_POST['age'];
   $date=$_POST['date'];
   $time=$_POST['time'];
   $option=$_POST['option']; 

   $qry="UPDATE patientdaat SET fname='$fname',mname='$mname',lname='$lname' ,address='$add', 
   email='$mail',contactno='$contact',age='$age',date='$date',time='$time',nation='$option' where Aadhar='$Aadhar' ";

   if($reult=$mysqli->query($qry))
   {
     include "next1.php";
   }
  
?>

