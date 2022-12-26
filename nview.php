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
<?php
$host="localhost";
$username="root";
$password="";
$dbname="signup";
$mysqli=new mysqli($host,$username,$password,$dbname);

$sql=sprintf("SELECT * from patientdaat");

$qry=sprintf("SELECT * from patientdaat1");

$result=$mysqli->query($sql);

$value=$mysqli->query($qry);

$rows=mysqli_num_rows($result);

if($rows)
{
   
    while($val=$result->fetch_assoc() )
    {
        $data=$value->fetch_assoc();
       
        echo "
        <tr>
        <td>".$val["Aadhar"]."</td>
        <td>".$val["fname"]."</td>
        <td>".$val["lname"]."</td>
        <td>".$val["address"]."</td>
        <td>".$val["email"]."</td>
        <td>".$val["contactno"]."</td>
        <td>".$val["age"]."</td>
        <td>".$val["date"]."</td>
        <td>".$val["time"]."</td>
        <td>".$val["nation"]."</td>
        <td><a href='nsview.php?aadhar=$val[Aadhar]'>VIEW</a></td>
        <td><a href= 'Update.php? ad=$val[Aadhar] & fn=$val[fname]  &  md=$val[mname] & ln=$val[lname] &  adr=$val[address] &  mail=$val[email] & cn=$val[contactno] & 
        ag=$val[age] & date=$val[date] & tm=$val[time] & ntn=$val[nation] & adh=$data[Aadhar] & dn=$data[Dname] & did=$data[Did] & hp=$data[Health_problem] & tr=$data[Treatment] & ap=$data[Amount_paid] &
        pm=$data[Payment_mode] '>UPDATE</a></td>
    </tr>
    ";
    }
}
?>
</table>
</body>
</html>
