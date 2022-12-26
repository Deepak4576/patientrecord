<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $host="localhost";
    $username="root";
    $password="";
    $dbname="signup";
    $mysqli=new mysqli($host,$username,$password,$dbname);
    
    if($mysqli->connect_errno)
    {
        die("connection error");
    }
    
    $sql = sprintf("SELECT * FROM register
                    WHERE hid = '%s'",
                   $mysqli->real_escape_string($_POST["hid"]));
    
    $result = $mysqli->query($sql);
    
    
    $user = $result->fetch_assoc();

    $paSS=$_POST["pass"];

    //$val=(password_verify($_POST["pass"], $user["Password"]));


    if ($user) {
        
         if(!password_verify($_POST["pass"], $user["Password"]))
         //if(strcmp($_POST["hid"],$user["Hid"]))
         {
           // echo "login successful";
            header("Location: navigation.html");

            //session_start();
            
            //session_regenerate_id();
            
          //  $_SESSION["user_id"] = $user["id"];
            
           // header("Location: login.html");
          //  exit;
        }
        else
        echo "password or hospital id not matched";
    }
    else
    {
      
    echo '<script> alert("incorrect credentials")</script>';
    include "login.html"; 
    $is_invalid = true;
}
}
?>