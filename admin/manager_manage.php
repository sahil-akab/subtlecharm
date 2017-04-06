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
        <link rel="stylesheet" type="text/css" href="../css/pahla.css" />
        <link rel="stylesheet" type="text/css" href="../css/c_l.css"/>
       <body img src="../images/n_c_bckg.jpg">
    </head>
    <body>
        <?php
        session_start();
        if(isset($_SESSION["auth"]))
    {    
    if($_SESSION["auth"]==session_id())
    {
         require_once("../include/dbconnection.php");
     if(isset($_POST["see_particular"]))//////////////////////////////////////////////////////////////////////
      {
                $manid=$_POST["manids"];
                $query="select * from manager where manid='$manid';";
                $result=  mysqli_query($connection, $query);
                while ($row =mysqli_fetch_assoc($result))
        {
         $manid=$row["manid"];
         $eventid=$row["eventid"];
         $eventname=$row["eventname"];
         $name=$row["name"];
         $phone=$row["phone"];
         $sex=$row["sex"];
         $pwd=$row["pwd"];
         ?>
        <link rel="stylesheet" type="text/css" href="../css/b_p_i.css"/>
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
                        <th>manager id</th>
                        <th>Eventname</th>
                        <th>Eventid</th>
                        <th>Customer Password</th> 
                    </tr>
                    <tr>
                        <td align="left"><?php echo $name;?></TD>
                        <td align="left"><?php echo $sex;?></TD>
                        <td align="left"><?php echo $phone;?></TD>
                        <td align="left"><?php echo $manid;?></TD>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $eventid;?></TD>
                        <td align="left"><?php echo $pwd;?></TD>
                    </tr>
         </table>
        <form action="manager_manage.php" method="post">
                    <input type="submit" name="change" value="change particulars"/><br />
                    <input type="text" name="manids" value="<?php echo $manid;?>"/><br />
        </form>            
        <?php
        
        }
        ?>
        </table>
        <?php
      }////////////////////////////////////////////////////////////////////////////////////////////////////////////
  elseif (isset($_POST["see_all"])) //////////////////////////////////////////////////////////////////////////////////
  {
      ?>
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
                        <th>manager id</th>
                        <th>Eventname</th>
                        <th>Eventid</th>
                        <th>Customer Password</th> 
                    </tr>
        <?php
        $manid=$_POST["manids"];
      $query="select * from manager;";
                $result=  mysqli_query($connection, $query);
                while ($row =mysqli_fetch_assoc($result))
        {
         $manid=$row["manid"];
         $eventid=$row["eventid"];
         $eventname=$row["eventname"];
         $name=$row["name"];
         $phone=$row["phone"];
         $sex=$row["sex"];
         $pwd=$row["pwd"];
         ?>
                 <tr>
                        <td align="left"><?php echo $name;?></TD>
                        <td align="left"><?php echo $sex;?></TD>
                        <td align="left"><?php echo $phone;?></TD>
                        <td align="left"><?php echo $manid;?></TD>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $eventid;?></TD>
                        <td align="left"><?php echo $pwd;?></TD>
                    </tr>
            
         <?php           
  }
  ?>
                    </table>
        <form action="manager_manage.php" method="post">
                    <input type="submit" name="change" value="change particulars"/><br />
                    <input type="text" name="manids" value="<?php echo $manid;?>"/><br />
        </form>
        <?php
  }//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  elseif(isset($_POST["change"])) 
{
           $manid=$_POST["manids"];
                $query="select * from manager where manid='$manid';";
                $result=  mysqli_query($connection, $query);
                while ($row =mysqli_fetch_assoc($result))
        {
         $manid=$row["manid"];
         $eventid=$row["eventid"];
         $eventname=$row["eventname"];
         $name=$row["name"];
         $phone=$row["phone"];
         $sex=$row["sex"];
         $pwd=$row["pwd"];
         ?>
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
                        <th>Eventname</th>
                        <th>Customer Password</th> 
                    </tr>
                    <tr>
                        <td align="left"><?php echo $name;?></TD>
                        <td align="left"><?php echo $sex;?></TD>
                        <td align="left"><?php echo $phone;?></TD>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $pwd;?></TD>
                    </tr>
                    <form action="manager_manage.php" method="post">
                    <tr>
                        <td align="left"> <input type="submit" name="change_finally" value="change it"/><br /></TD>
                        <td align="left"> <input type="text" name="name" value=""/><br /></TD>
                        <td align="left"><input type="password" name="sex" value=""/><br /></TD>
                        <td align="left"><input type="text" name="phone" value=""/><br /></TD>
                        <td align="left"><input type="text" name="eventname" value=""/><br /></TD>
                        <td align="left"><input type="text" name="pwd" value=""/><br /></TD>
                    </tr>
                     </form>
         </table>
         <?php 
      }
      setcookie("manid",$manid,time()+(60*60*24*100));
}
elseif(isset($_POST["change_finally"]))
{
    $name=trim($_POST["name"]);
        $sex=trim($_POST["sex"]);
        $phone=trim($_POST["phone"]);
        $eventname=trim($_POST["eventname"]);
        $pwd=trim($_POST["pwd"]);
        $manid=$_COOKIE["manid"];
        if(!empty($name))
        {
            $query="update manager set name='$name' where manid='$manid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($sex))
        {
            $query="update manager set sex='$sex' where manid='$manid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($phone))
        {
            $query="update manager set phone='$phone' where manid='$manid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($eventname))
        {
            $query="update manager set eventname='$eventname' where manid='$manid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($password))
        {
            $query="update manager set pwd='$password' where manid='$manid';";
            $result=mysqli_query($connection,$query);
        
        }
         header("Location: ./welcome_participant.php");
    }
    }}
        ?>
    </body>
</html>
