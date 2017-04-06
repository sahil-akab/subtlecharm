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
         session_start();
    if(isset($_SESSION["mang"]))
    {    
    if($_SESSION["mang"]==session_id())
    {
        $manid=$_COOKIE["manid"];
        require_once("../include/dbconnection.php");
        //2.querying
        $query="select * from participant where managerid='$manid';";
        $result=mysqli_query($connection,$query);
        ?>
        <link rel="stylesheet" type="text/css" href="./css/b_p_i.css"/>
         <table border="border">
                    <caption>See Credentials</caption> 
                    <tr align="center">
                        <td rowspan="3"></TD>
                        <th colspan="6">See credentials</th>
                    </tr>
                    <tr align="left" >
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Phone</th>
                        <th>College id</th>
                        <th>Eventname</th>
                        <th>enrollid</th> 
                    </tr>
        <?php            
        while ($row =mysqli_fetch_assoc($result))
        {
            $name=$row["name"];
         $sex=$row["sex"];
         $phone=$row["phone"];
         $collegeid=$row["collegeid"];
         $eventname=$row["eventname"];
         $enrollid=$row["enrollid"];
         ?>
                     <tr>
                        <td align="left"><?php echo $name;?></TD>
                        <td align="left"><?php echo $sex;?></TD>
                        <td align="left"><?php echo $phone;?></TD>
                        <td align="left"><?php echo $collegeid;?></TD>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $enrollid;?></TD>
                    </tr>
        <?php
        } 
        ?>
         </table>
        <?php
    }
    }
        ?>
    </body>
</html>
