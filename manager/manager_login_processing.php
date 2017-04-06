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
         <link rel="stylesheet" type="text/css" href="../boot/css/bootstrap.css"/>
          <link rel="stylesheet" href="../main.css">
    </head>
    <body>
        <?php
                require_once("../include/dbconnection.php");
                $id=$_POST["pid"];
                $pasd=$_POST["pd"];
                $query="select * from manager where manid='$id'";
                $result=mysqli_query($connection,$query);
                while ($row =mysqli_fetch_assoc($result))
                {
                    $pd1=$row["pwd"];
                }
                if($pasd==$pd1)
                {
                    if((session_id())!=null)
                    {session_destroy();}
                    session_start();
                    setcookie("PHPSESSID",session_id(),time()-1);
                    $_SESSION["mang"]= session_id();
                    setcookie("manid",$id,time()+(60*60*24*100));
                    ?>
        <a href="./manager_logged_in.php"><center><h2>redirect to manager home page</h2></center></a>
                    <?php
                    //header("Location: ./manager_logged_in.php");
                }
             else 
                 {
                 echo "didinot matched";
                 }
        ?>
    </body>
</html>
