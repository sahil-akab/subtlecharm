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
         
          <link rel="stylesheet" href="../main.css">
        <link style="stylesheet" type="text/css" href="/boot/css/bootstrap.css">
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
                $participantid=$_POST["participantid"];
                $query="select * from participant where enrollid='$participantid';";
                $result=  mysqli_query($connection, $query);
                while ($row =mysqli_fetch_assoc($result))
        {
         $participantid=$row["enrollid"];
         $collegeid=$row["collegeid"];
         $enrollid=$row["enrollid"];
         $eventname=$row["eventname"];
         $name=$row["name"];
         $phone=$row["phone"];
         $sex=$row["sex"];
         $password=$row["password"];
         ?>
        <div class="container">
        <table class="table" border="border">
            <marquee>See Credentials</marquee> 
                    <tr align="center">
                        <td rowspan="3"></TD>
                        <th colspan="6">See credentials</th>
                    </tr>
                    <tr align="left" >
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Phone</th>
                        <th>enrollid</th>
                        <th>Eventname</th>
                        <th>collegeid</th>
                        <th>Customer Password</th> 
                    </tr>
                    <tr>
                        <td align="left"><?php echo $name;?></TD>
                        <td align="left"><?php echo $sex;?></TD>
                        <td align="left"><?php echo $phone;?></TD>
                        <td align="left"><?php echo $enrollid;?></TD>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $collegeid;?></TD>
                        <td align="left"><?php echo $password;?></TD>
                    </tr>
         </table>
        <form action="participant_manage.php" method="post">
                    <input type="submit" name="change" value="change particulars"/><br />
                    <input type="text" name="participantid" value="<?php echo $participantid;?>"/><br />
        </form>            
        <?php
        
        }
      }////////////////////////////////////////////////////////////////////////////////////////////////////////////
  elseif (isset($_POST["see_all"])) //////////////////////////////////////////////////////////////////////////////////
  {
      ?>
            <div class="container">
        <table class="table" border="border">
                    <caption>See Credentials</caption> 
                    <tr align="center">
                        <td rowspan="3"></TD>
                        <th colspan="6">See credentials</th>
                    </tr>
                    <tr align="left" >
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Phone</th>
                        <th>enrollid</th>
                        <th>Eventname</th>
                        <th>collegeid</th>
                        <th>Customer Password</th>
                    </tr>
        <?php
        $participantid=$_POST["participantid"];
      $query="select * from participant;";
                $result=  mysqli_query($connection, $query);
                while ($row =mysqli_fetch_assoc($result))
        {
         $participantid=$row["enrollid"];
         $collegeid=$row["collegeid"];
         $enrollid=$row["enrollid"];
         $eventname=$row["eventname"];
         $name=$row["name"];
         $phone=$row["phone"];
         $sex=$row["sex"];
         $password=$row["password"];
         ?>
                 <tr>
                       <td align="left"><?php echo $name;?></TD>
                        <td align="left"><?php echo $sex;?></TD>
                        <td align="left"><?php echo $phone;?></TD>
                        <td align="left"><?php echo $enrollid;?></TD>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $collegeid;?></TD>
                        <td align="left"><?php echo $password;?></TD>
                    </tr>
          
        
         <?php           
  }
  ?>
        </table> </div>
        <form action="participant_manage.php" method="post">
                    <input type="submit" name="change" value="change particulars"/><br />
                    <input type="text" name="participantid" value="<?php echo $participantid;?>"/><br />
        </form>
        <?php
  }//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  elseif(isset($_POST["change"])) 
{
           $participantid=$_POST["participantid"];
                $query="select * from participant where enrollid='$participantid';";
                $result=  mysqli_query($connection, $query);
                while ($row =mysqli_fetch_assoc($result))
        {
         $participantid=$row["enrollid"];
         $collegeid=$row["collegeid"];
         $enrollid=$row["enrollid"];
         $eventname=$row["eventname"];
         $name=$row["name"];
         $phone=$row["phone"];
         $sex=$row["sex"];
         $password=$row["password"];
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
                        <th>collegeid</th>
                        <th>Customer Password</th> 
                    </tr>
                    <tr>
                        <td align="left"><?php echo $name;?></TD>
                        <td align="left"><?php echo $sex;?></TD>
                        <td align="left"><?php echo $phone;?></TD>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $collegeid;?></TD>
                        <td align="left"><?php echo $password;?></TD>
                    </tr>
                    <form action="participant_manage.php" method="post">
                    <tr>
                        <td align="left"> <input type="submit" name="change_finally" value="change it"/><br /></TD>
                        <td align="left"> <input type="text" name="name" value=""/><br /></TD>
                        <td align="left"><input type="password" name="sex" value=""/><br /></TD>
                        <td align="left"><input type="text" name="phone" value=""/><br /></TD>
                        <td align="left"><input type="text" name="eventname" value=""/><br /></TD>
                        <td align="left"><input type="text" name="collegeid" value=""/><br /></TD>
                        <td align="left"><input type="text" name="password" value=""/><br /></TD>
                    </tr>
                     </form>
         </table>
         <?php 
      }
      setcookie("participantid",$participantid,time()+(60*60*24*100));
}
elseif(isset($_POST["change_finally"]))
{
    $name=trim($_POST["name"]);
        $sex=trim($_POST["sex"]);
        $phone=trim($_POST["phone"]);
        $eventname=trim($_POST["eventname"]);
        $passsword=trim($_POST["pwd"]);
        $collegeid=trim($_POST["collegeid"]);
        $participantid=$_COOKIE["participantid"];
        if(!empty($name))
        {
            $query="update participant set name='$name' where enrollid='$participantid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($sex))
        {
            $query="update participant set sex='$sex' where enrollid='$participantid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($phone))
        {
            $query="update participant set phone='$phone' where enrollid='$participantid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($eventname))
        {
            $query="update participant set eventname='$eventname' where enrollid='$participantid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($password))
        {
            $query="update participant set password='$password' where enrollid='$participantid';";
            $result=mysqli_query($connection,$query);
        
        }
        if(!empty($collegeid))
        {
            $query="update participant set collegeid='$collegeid' where enrollid='$participantid';";
            $result=mysqli_query($connection,$query);
        
        }
         header("Location: ./welcome_participant.php");
    }
    }
    }
        ?>
            
            
            
            
            <br><br>
    <!---    
    <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </div>
    </body>
</html>
