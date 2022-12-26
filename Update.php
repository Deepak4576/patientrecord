<?php
$val=$_GET['ad'];

$dn=$_GET['dn'];
$did=$_GET['did'];
$hp=$_GET['hp'];
$tr=$_GET['tr'];
$ap=$_GET['ap'];
$pm=$_GET['pm'];

session_start();
$_SESSION['adhar']=$val;
$_SESSION['dname']=$dn;
$_SESSION['did']=$did;
$_SESSION['health']=$hp;
$_SESSION['treatment']=$tr;
$_SESSION['amount']=$ap;
$_SESSION['payment']=$pm;

$ad=$_GET['ad'];
$Aadhar=$_GET['ad'];
$fn=$_GET['fn'];
$md=$_GET['md'];
$ln=$_GET['ln'];
$adr=$_GET['adr'];
$mail=$_GET['mail'];
$cn=$_GET['cn'];
$ag=$_GET['ag'];
$date=$_GET['date'];
$tm=$_GET['tm'];
$ntn=$_GET['ntn'];
?>
<!DOCTYPE >
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.5">
        <title>add form</title>
        <style>
         body
         {
          background-image: url("image/light-explosion.gif");
        
          background-repeat: no-repeat;
                 height:100%;
                 background-size: cover;
         }
          form{
            padding:5px;
           margin-left:260px;
            margin-top:20px;
            background-color:rgb(127, 212, 255);
            width:70%;
            height:590px;
          } 
          .txt{
            width:50%;
            height:38px;
            margin-left:100px;
        
          }
          div{
      
          padding:5px;
        
          }
          h4{
            margin-left:89px;
          }
          .btn{
            margin-left: 950px;
            margin-bottom: 400px;
            width:200px;
            height:300px;
            padding:20px;
          }
          .sve{
            margin-left: 375px;
            padding:5px;
            width:65px;
            height:27px;
            text-align: center;
            margin-top:14px;
            background-color: chartreuse;
            text-decoration: none;
          }
          .nxttt{
            margin-left:20px;
            border:1px solid white;
            padding:5px;
            width:100px;
            margin-top:12px;
            color:black;
            background-color:rgb(196, 1, 1);
            text-decoration:none;
          }
        </style>
        <style>
            body{
                background-color:cornflowerblue;
                background-image: url("image/color-water.gif");
                background-position: fixed;
                background-repeat: no-repeat;
                 height:auto;
                 background-size: cover;
                 background-position:fixed;
            }
            ul{
              background-image: url("image/66cf81f2733909e97d7ef40ec56e01bf.jpg");
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
  
        </style>

       <body>
        
        <p id="clk"></p>
        <ul>
            <li><a class=Acctive href=navigation.html>DASHBOARD</a></li> 
           <li><a href=add.html>ADD</a></li> 
           <li><a href=nview.php>VIEW </a></li>
           <li><a href=about.html>ABOUT</a></li>
           <li><a href=login.html id="clk">LOGOUT</a></li>
        </ul>
      <h1 style="text-align:center; font-size:40px; margin-top:0px;">Enter personal details</h1>    
        <form action="addupdate.php" method="POST">
          
            

          <h4>  Name<input style="margin-left:167px;width:130px" class=txt type="text" id="name" name="fname" value=<?php echo $fn ;?> required>
            <input class="txt" style="width:140px;margin-left:30px;"type="text" name="mname" value=<?php echo $md ;?> >
             <input class="txt" style="width:140px;margin-left:30px;"type="text" name="lname" value=<?php echo $ln ;?>required></h4></p>
             
          <h4>Address<input style="margin-left:150px;" class=txt type="text" id="add" name="add" value=<?php echo $adr ;?> required></h4></p>
            
          <h4> Email <input style="margin-left:161px;" class=txt type="email" id="mail" name="mail" value=<?php echo $mail;?>  required></h4></p>
            
            <h4>Contact No <input style="margin-left:123px;" class=txt type="text" id="cntct" name="cntct" value=<?php echo $cn ;?> required></h4></p>
           
           <h4>Age<input style="margin-left:177px;" class=txt type="number" id="age" name="age" value=<?php echo $ag ;?> required></h4></p>
          
            <h4>Date<input style="margin-left:170px;" class=txt type="date" name="date" value=<?php echo $date ;?> required></h4>
              
            <h4>Time <input style="margin-left:163px;" class="txt" type="time" name="time" value=<?php echo $tm ;?> required></h4></p>

            <h4>nation<select style="margin-left:159px;"class="txt" id="ntn" name="option" value=<?php echo $ntn ;?>></h4>
              <option>india</option>
              <option>AUS</option>
              <option>Africa</option>
              <option>England</option>

            <input type="submit" value="Update" name="submit" class="sve">
              
                
            </form>
            
    </body>
</html>




