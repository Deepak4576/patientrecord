
<?php
session_start();

$host="localhost";
$username="root";
$password="";
$dbname="signup";

$mysqli=new mysqli($host,$username,$password,$dbname);

$val=$_POST["serh"];

$_SESSION['Aadhar']=$val;

$sql=sprintf("SELECT * from patientdaat where Aadhar='$val' ");

$result=$mysqli->query($sql);

$val=$result->fetch_assoc();

?>
<!DOCTYPE >
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.5">
        <style>
            body{
                background-color:cornflowerblue;
                background-image: url("image/26687e627cef833fb420dd844a76f063.jpg");
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
                margin-top:15px;
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
            margin-left:620px;
            margin-top:15px;
           font-size:25px;
           color:darkred;
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
        <form action="search.php" method="POSt">
            <p><input class="search" type="search" id="serch" name="serh" placeholder="Search..."></p>
        </form>
        <div>
        <?php
        if(!$val)
        {
         echo "No record found...";
         exit;
        }
        ?>
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
            <p>
            
            <td class="view"><a href="view.php">VIEW</a></td>
    </p>
    </tr>
        </table>
        </body>
        </html>
       