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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <table border="border">
                    <caption>See Credentials</caption> 
                    <tr align="center">
                       
                        <th colspan="6">See credentials</th>
                    </tr>
                    <tr align="left" >
                        <th>date</th>
                        <th>eventid</th>
                        <th>Team1</th>
                        <th>Team2</th>
                        <th>winner</th>
                    </tr>
        <?php
        require_once("../include/dbconnection.php");
        if(isset($_POST["submit"]))    
        {
            $date=$_POST["date"];
            
                $query="select * from fixture where date='$date';";
        $result=mysqli_query($connection,$query);
        while ($row =mysqli_fetch_assoc($result))
        {
            $date=$row["date"];
            setcookie("date",$date,time()+(60*60*24*100));
            $eventid=$row["eventid"];
            $tp1=$row["tp1"];
            $tp2=$row["tp2"];
            $winner=$row["winner"];
        }
        ?>
                     <tr>
                        <td align="left"><?php echo $date;?></TD>
                        <td align="left"><?php echo $eventid;?></TD>
                        <td align="left"><?php echo $tp1;?></TD>
                        <td align="left"><?php echo $tp2;?></TD>
                        <td align="left"><?php echo $winner;?></TD>
                    </tr>
                     <form action="fixture_admin.php" method="post">
                    <tr>
                        
                        <td align="left"> <input type="date" name="date" value=""/><br /></TD>
                        <td align="left"> <input type="text" name="eventid" value="<?php echo $eventid?>"/><br /></TD>
                        <td align="left"><input type="text" name="tp1" value=""/><br /></TD>
                        <td align="left"><input type="text" name="tp2" value=""/><br /></TD>
                        <td align="left"><input type="text" name="winner" value=""/><br /></TD>
                        <td align="left"> <input type="submit" name="change" value="submit"/><br /></TD>
                    </tr>
                     </form>
        </table>      
        <?php
        }
        elseif(isset($_POST["change"]))
        {
            $date=$_COOKIE["date"];
             $tps1=trim($_POST["tp1"]);
        $tps2=trim($_POST["tp2"]);
        $eventids=trim($_POST["eventid"]);
        $dates=trim($_POST["date"]);
        $winners=trim($_POST["winner"]);
            if(!empty($tp1))
        {
            $query="update fixture set tp1='$tps1' where date='$date' and eventid='$eventids';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($tp2))
        {
            $query="update fixture set tp2='$tps2' where date='$date' and eventid='$eventids';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($winner))
        {
            $query="update fixture set winner='$winners' where date='$date' and eventid='$eventids';";
            $result=mysqli_query($connection,$query);
        }
       if(!empty($dates))
        {
            $query="update fixture set date='$dates' where tp1='$tps2' and tp2='$tps1' and eventid='$eventids';";
            $result=mysqli_query($connection,$query);
           
        }
        $query10="select * from fixture where date='$dates' and eventid='$eventids';";
        $result10= mysqli_query($connection, $query10);
        while ($row10 =mysqli_fetch_assoc($result10))
        {
            $tp10=$row10["tp1"];
            $tp20=$row10["tp2"];
            $winner=$row10["winner"];
            $tp10=$row10["tp1"];
            $date10=$row10["date"]
            ?>
            <tr>
                        <td align="left"><?php echo $date10;?></TD>
                        <td align="left"><?php echo $eventids;?></TD>
                        <td align="left"><?php echo $tp10;?></TD>
                        <td align="left"><?php echo $tp20;?></TD>
                        <td align="left"><?php echo $winner;?></TD>
                    </tr>
        }
        ?>
</table>
        <a href="./admin_logged_in.php">admin home</a>
        <?php
        }
        }
        else 
        {
        ?>
        <form action="fixture_admin.php" method="post">
                    <tr>
                        <td align="left"> <input type="submit" name="submit" value="submit"/><br /></TD>
                        <td align="left"> <input type="date" name="date" value=""/><br /></TD>
                        
                    </tr>
         </form>
        </table> 
<?php
        }
?>
    </body>
</html>
