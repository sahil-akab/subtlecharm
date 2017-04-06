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
        require_once("../include/dbconnection.php");
                $name=$_POST["name"];
                $sex=$_POST["sex"];
                $phone=$_POST["phone"];
                $eventname=$_POST["eventname"];
                $pwd=$_POST["pwd"];
                $eventid=$_POST["eventid"];
                $manid=rand(1,10000);
                echo $name;echo " ".$sex;echo " ".$phone;echo " ".$eventname;echo " ".$pwd;echo " ".$eventid;echo " ".$manid;
                $query="insert into manager(name,sex,phone,eventname,eventid,pwd,manid) values('$name','$sex','$phone','$eventname','$eventid','$pwd','$manid');";
                 $result=mysqli_query($connection,$query);
                 if(isset($result))
                     echo "done"." ";
                 echo "your manager id is:'$manid'";
                 
                ?>
        <a href="./manager_login.php">login</a>
    </body>
</html>
