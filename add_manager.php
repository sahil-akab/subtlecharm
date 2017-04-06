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
        session_start();
    if(isset($_SESSION["part"]))
    {    
    if($_SESSION["part"]==session_id())
    {
        require_once("./include/dbconnection.php");
         $enrollid=$_COOKIE["enrollid"];
         $query="select * from participant where enrollid='$enrollid';";
         $result=mysqli_query($connection,$query);
         //if(isset($result))
             //echo "sdkhaj";
        while($row =mysqli_fetch_assoc($result))
         {
            
             $eventname=$row["eventname"];
         }
         echo $eventname;
         $query2="select * from manager where eventname='$eventname';";
         $result2= mysqli_query($connection, $query2);
         // if(isset($result))
             echo "dhiugj";
         while($row2= mysqli_fetch_assoc($result2))
         {
             echo "jhfjh";
             $manid=$row2["manid"];
         }
         $query3="update participant set managerid='$manid' where enrollid='$enrollid';";
         $result3= mysqli_query($connection, $query3);
    }
    else
        echo "anadar";
    }
    else
        echo "bahar";
        ?>
    </body>
</html>
