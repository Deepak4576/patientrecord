<?php

$ad=$_SESSION['adhar'];
$dn=$_SESSION['dname'];
$did=$_SESSION['did'];
$hp=$_SESSION['health'];
$tr=$_SESSION['treatment'];
$ap=$_SESSION['amount'];
$pm=$_SESSION['payment'];

$_SESSION['adhar']=$ad;

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
      <h1 style="text-align:center; font-size:40px; margin-top:0px;">Enter Treatment Details</h1>    
        <form action="next2.php" method="POST">
          
            <h4>Doctor name<input style="margin-left:93px;" class=txt type="text" id="adhr" name="dname" value=<?php echo $dn ;?> required></h4>
             
          <h4>Doctor ID<input style="margin-left:110px;" class=txt type="text" id="add" name="did" value=<?php echo $did;?> required></h4></p>
            
          <h4>Health Problem<input style="margin-left:71px;" class=txt type="textl" id="mail" name="health" value=<?php echo $hp;?> required></h4></p>
            
          <h4>Treatment<input style="margin-left:105px;" class=txt type="text" id="mail" name="treatment" value=<?php echo $tr;?> required></h4>

          <h4>Amount Paid<input style="margin-left:85px;" class=txt type="text" id="mail" name="amount" value=<?php echo $ap ;?> required></h4>

          <h4>Payment Mode<select style="margin-left:77px;"class="txt" id="ntn" value=<?php echo $pm ;?> name="option"></h4>
            <option>ONLINE</option>
            <option>CASH</option>
        
            <input type="submit" value="Update" class="sve">

            </form>
    </body>
</html>