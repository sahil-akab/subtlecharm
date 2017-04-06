<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        

        <?php
        require_once("./include/dbconnection.php");
                $id=$_POST["pid"];
                $pasd=$_POST["pd"];
                echo $id;
                echo $pasd;
                $query="select * from participant where enrollid='$id'";
                $result=mysqli_query($connection,$query);
                while ($row =mysqli_fetch_assoc($result))
                {
                    $pd1=$row["password"];
                }
                echo $pd1;
                if($pasd==$pd1)
                {
                    session_destroy();
                    session_start();
                    setcookie("PHPSESSID",session_id(),time()-1);
                    $_SESSION["part"]= session_id();
                   setcookie("enrollid",$id,time()+(60*60*24*100));
                    header("Location: ./welcome_participant.php");
                }
             else 
                 {
                 echo "didinot matched";
                 }
        ?>
    </body>
</html>
