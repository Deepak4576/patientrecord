<?php

session_start();

$vall=$_SESSION['Aadhar'];

$host="localhost";
$username="root";
$password="";
$dbname="signup";
$mysqli=new mysqli($host,$username,$password,$dbname);

$sql=sprintf("SELECT * from patientdaat where Aadhar='$vall' ");

$qry=sprintf("SELECT * from patientdaat1 where Aadhar='$vall' ");

$result=$mysqli->query($sql);

$getdata=$mysqli->query($qry);

$val=$result->fetch_assoc();

$data=$getdata->fetch_assoc();
?>

<!DOCTYPE >
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.5">
        <style>
            body{
                background-color:cornflowerblue;
                background-image: url("image/color-smoke.gif");
                background-position: fixed;
                background-repeat: no-repeat;
                 height:auto;
                 background-size: cover;
                 background-position:fixed;
            }
            ul{
              background-color:white;
              
              width:160;
              height:100%;
              padding:0;
              margin:0;
              position:fixed;
              overflow:auto;
              z-index: 1;
            }
            li a{
             display:block;
             padding:13px;
             color:black;
             text-decoration: none;
              margin:5px;
            }
            li a:hover{
                display:block;
                background-color:darkgray;
            }
            li a.Acctive{
                background-color:springgreen;
                
            }
            form{
               margin-left:40%;
            }
            .search{
                width:450px;
                height:45px;
                border:3px solid white;
                border-radius: 14px;
                background-color:whitesmoke;
                margin-top:45px;
                font-size: 17px;;
            }
            table{
                margin-left:290px;
                margin-top:45px;
                font-size:18px;
                border-collapse:collapse;
                border-bottom:2px solid black;
               
            }
            th{
                font-size:18px;
                background-color:orange;  
                border-bottom:2px solid black;
                padding:5px;
            }
            td{
            padding:6px;
            text-align:center;
            background-color:whitesmoke;
            border-bottom:2px solid black;
           }
           td a{
             background-color:green;
             text-decoration:none;
           }
           td:hover{
            background-color:gray;
           }
           td a:hover{
            background-color:green;
           }
           div{
            text-align:center;
            color:pink;
           
           }
          h2
          {
            margin-left:566px;
            color:pink;
           font-size:33px;
           margin-top:50px;
          }
        
        </style>
        </head>
       <body>
        <ul>
            <li><a class=Acctive href=navigation.html>DASHBOARD</a></li> 
           <li><a href=add.html>ADD</a></li> 
           <li><a href=nview.php>VIEW </a></li>
           <li><a href=about.html>ABOUT</a></li>
           <li><a href=login.html id="clk">LOGOUT</a></li>
        </ul>
        <div>
        <h1>Personal Details of Patient</h1>
        </div>
        <table>
            <tr>
                <th>Aadhar</th>
                <th>fname</th>
                <th>lname</th>
                <th>Address</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Age</th>
                <th>Date</th>
                <th>Time</th>
                <th>Nation</th>
        </tr>
        <tr>
            <td><?php echo $val["Aadhar"] ;?></td>
            <td><?php echo $val["fname"] ;?></td>
            <td><?php echo $val["lname"] ;?></td>
            <td><?php echo $val["address"] ;?></td>
            <td><?php echo $val["email"] ;?></td>
            <td><?php echo $val["contactno"] ;?></td>
            <td><?php echo $val["age"] ;?></td>
            <td><?php echo $val["date"] ;?></td>
            <td><?php echo $val["time"] ;?></td>
            <td><?php echo $val["nation"] ;?></td>
    </tr>
        <div class="table2">
        </table>
        <h2>Treatment Details of Patient</h2>
        <table style="margin-left:480px;">
          <tr>
                <th>Dname</th>
                <th>Did</th>
                <th>Health issue</th>
                <th>Treatment</th>
                <th>Amount Paid</th>
                <th>Payment Mode</th>
        </tr>
        <tr>
            <td><?php echo $data["Dname"] ;?></td>
            <td><?php echo $data["Did"] ;?></td>
            <td><?php echo $data["Health_problem"] ;?></td>
            <td><?php echo $data["Treatment"] ;?></td>
            <td><?php echo $data["Amount_paid"] ;?></td>
            <td><?php echo $data["Payment_mode"] ;?></td>
    </tr>
        </table>
        </div>
        </body>
        </html>