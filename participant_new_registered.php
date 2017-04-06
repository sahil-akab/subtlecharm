<?php session_start();?>
<?php
   if(isset($_POST["pid"]))//enter inside only if coming from login page
   {  
      include("./include/dbconnection.php");
            $pid=$_POST["pid"];
            $pd=$_POST["pd"];
            $query="select * from participant where enrollid='$pid';";//db name tbd
            $result=mysqli_query($connection,$query);
    if(isset($result))
    {          
            while($row=mysqli_fetch_assoc($result))
            {
                if($row["password"]==$pd)
      { $_SESSION["enrollid"]=  session_id();setcookie("enrollid",$pid,time()+(60*60*24*100));//cookie and session
       echo "successfully logged in";header("Location: ./welcome_participant.php");
      }
      else
            echo "login credentials are wrong";
         }
    }
    else 
        echo "wrong customer no.";
             mysqli_free_result($result);
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consumer Login</title>
    </head>
    <body>

    </body>
</html>
<?php
    mysqli_close($connection);
     }
   else
   {
        header("Location: ./generic_not_logged_in.php");
   }
?>
