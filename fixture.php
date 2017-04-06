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
         <link rel="stylesheet" type="text/css" href="./boot/css/bootstrap.min.css"/>
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
        require_once("./include/dbconnection.php");
                $query="select * from fixture;";
        $result=mysqli_query($connection,$query);
        while ($row =mysqli_fetch_assoc($result))
        {
         $date=$row["date"];
         $eventid=$row["eventid"];
                $query2="select * from event;";
                $result2=mysqli_query($connection,$query2);
        while ($row2 =mysqli_fetch_assoc($result2))
        {
            $eventid2=$row2["eventid"];
            $eventname1=$row2["eventname"];
            if($eventid2==$eventid)
                break;
        }
         $tp1=$row["tp1"];
            if($tp1==1)
                $teamname1="tbd";
            else
            {
                $query2="select * from participant;";
                $result2=mysqli_query($connection,$query2);
        while ($row2 =mysqli_fetch_assoc($result2))
        {
            $team1=$row2["enrollid"];
            $teamname1=$row2["name"];
            if($team1==$tp1)
                break;
        }
            }
         $tp2=$row["tp2"];
            if($tp2==1)
                $teamname2="tbd";
             else
            {
                $query2="select * from participant;";
                $result2=mysqli_query($connection,$query2);
        while ($row2 =mysqli_fetch_assoc($result2))
        {
            $team2=$row2["enrollid"];
            $teamname2=$row2["name"];
            if($team2==$tp2)
                break;
        }
            }
         $winner=$row["winner"];
         if($winner==1)
                $teamname3="tbd";
          else
            {
                $query2="select * from participant;";
                $result2=mysqli_query($connection,$query2);
        while ($row2 =mysqli_fetch_assoc($result2))
        {
            $team3=$row2["enrollid"];
            $teamname3=$row2["name"];
            if($team3==$tp1)
                break;
        }
            }
        ?>
                    <tr>
                        <td align="left"><?php echo $date;?></TD>
                        <td align="left"><?php echo $eventname1;?></TD>
                        <td align="left"><?php echo $teamname1;?></TD>
                        <td align="left"><?php echo $teamname2;?></TD>
                        <td align="left"><?php echo $teamname3;?></TD>
                    </tr>
                    <!-- <form action="change_credentials_user.php" method="post">
                    <tr>
                        <td align="left"> <input type="submit" name="submit" value="submit"/><br /></TD>
                        <td align="left"> <input type="text" name="name" value=""/><br /></TD>
                        <td align="left"><input type="password" name="sex" value=""/><br /></TD>
                        <td align="left"><input type="text" name="phone" value=""/><br /></TD>
                        <td align="left"><input type="text" name="collegeid" value=""/><br /></TD>
                        <td align="left"><input type="text" name="eventname" value=""/><br /></TD>
                        <td align="left"><input type="text" name="password" value=""/><br /></TD>
                    </tr>
                     </form>  ---> 
              <?php
              }
              ?>      
                </table>
        </body>     
    </html>
    </body>
</html>
