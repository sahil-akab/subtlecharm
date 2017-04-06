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
        if(isset($_SESSION["auth"]))
    {    
    if($_SESSION["auth"]==session_id())
    {
         require_once("../include/dbconnection.php");
     if(isset($_POST["see_particular"]))//////////////////////////////////////////////////////////////////////
      {
                $eventid=$_POST["eventid"];
                $query="select * from event where eventid='$eventid';";
                $result=  mysqli_query($connection, $query);
                while ($row =mysqli_fetch_assoc($result))
        {
         $eventid=$row["eventid"];
         $eventname=$row["eventname"];
         $managerid=$row["managerid"];
         ?>
         <table border="border">
              <marquee><h3>See credentials</h3></marquee>
              <div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
                  
                    <tr align="center">
                        
                        <th colspan="6">See credentials</th>
                    </tr>
                    <tr align="left" >
                        <th>Name</th>
                        <th>id</th>
                        <th>managerid</th>
                    </tr>
                    </div>
<div class="col-md-4"></div>
</div>

              <br/>
              <br/>
              <br/>
               
              <div class="col-md-4"></div>
</div>
              
                    <tr>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $eventid;?></TD>
                        <td align="left"><?php echo $managerid;?></TD>
                    </tr>
                    
         </table>
        <div class="row">
        <div class="col-md-4"></div>
<div class="form-group col-md-4">
        <form action="event_manage.php" method="post">
                    <input type="submit" name="change" value="change particulars"/><br />
                    <input type="text" name="eventid" value="<?php echo $eventid;?>"/><br />
        </form>
        
   <div class="col-md-4"></div>
</div>
        
        <?php
        
        }
      }////////////////////////////////////////////////////////////////////////////////////////////////////////////
  elseif (isset($_POST["see_all"])) //////////////////////////////////////////////////////////////////////////////////
  {
      ?>
        <table border="border">
             <div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
                    <marquee>See Credentials</marquee> 
                    <tr align="center">
                       
                        <th colspan="6">See credentials</th>
                    </tr>
                    <tr align="left" >
                        <th>Name</th>
                        <th>id</th>
                        <th>managerid</th>
                    </tr>
                    <div class="col-md-4"></div>
</div>
        <?php
        $eventid=$_POST["eventid"];
      $query="select * from event;";
                $result=  mysqli_query($connection, $query);
                while ($row =mysqli_fetch_assoc($result))
        {
         $eventid=$row["eventid"];
         $eventname=$row["eventname"];
         $managerid=$row["managerid"];
         ?>
                 <tr>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $eventid;?></TD>
                        <td align="left"><?php echo $managerid;?></TD>
                    </tr>
          <div class="col-md-4"></div>
</div>
         <?php           
  }
  ?>
            
 
                    </table> 
         <div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
        <form action="event_manage.php" method="post">
                    <input type="submit" name="change" value="change particulars"/><br />
                    <input type="text" name="eventid" value="<?php echo $eventid;?>"/><br />
                    
        </form>
     <div class="col-md-4"></div>
</div>
 <div class="col-md-4"></div>
</div>
        
        <?php
  }//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  elseif(isset($_POST["change"])) 
{
           $eventid=$_POST["eventid"];
                $query="select * from event where eventid='$eventid';";
                $result=  mysqli_query($connection, $query);
                while ($row =mysqli_fetch_assoc($result))
        {
         $eventname=$row["eventname"];
         $eventid=$row["eventid"];
         $managerid=$row["managerid"];
         ?>
         <table border="border">
                    <caption>See Credentials</caption> 
                    <tr align="center">
                        <td rowspan="3"></TD>
                        <th colspan="6">See credentials</th>
                    </tr>
                    <tr align="left" >
                        <th>Eventname</th>
                        <th>Managerid</th> 
                    </tr>
                    <tr>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $managerid;?></TD>
                    </tr>
                    <form action="event_manage.php" method="post">
                    <tr>
                        <td align="left"> <input type="submit" name="change_finally" value="change it"/><br /></TD>
                        <td align="left"><input type="text" name="eventname" value=""/><br /></TD>
                        <td align="left"><input type="text" name="managerid" value=""/><br /></TD>
                    </tr>
                     </form>
         </table>
         <?php 
      }
      setcookie("eventid",$eventid,time()+(60*60*24*100));
}
elseif(isset($_POST["change_finally"]))
{
        $eventname=trim($_POST["eventname"]);
        $managerid=trim($_POST["managerid"]);
        $eventid=$_COOKIE["eventid"];
        if(!empty($eventname))
        {
            $query="update event set eventname='$eventname' where eventid='$eventid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($managerid))
        {
            $query="update event set managerid='$managerid' where eventid='$eventid';";
            $result=mysqli_query($connection,$query);
             
        }
         header("Location: ./welcome_participant.php");
    }
    }
    }
        ?>
    </body>
</html>
