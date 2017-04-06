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
                $query="select * from event;";
                $result=  mysqli_query($connection, $query);
        ?>
         <div class="fixed">
        <form action="manager_registration_processing.php" method="post">
            Name:<input type="text" name="name" value=""/><br />
            Sex:<input type="password" name="sex" value=""/><br />
            Phone:<input type="text" name="phone" value=""/><br />
            password:<input type="text" name="pwd" value=""/><br />
            event name:<input type="text" name="eventname" value=""/><br />
           
        
            event id:<select name="eventid">
                            yty
                            <?php 
                            while($row= mysqli_fetch_assoc($result))
                            {
                                $eventid=$row["eventid"];
                            
                            ?>
                            <option><?php echo $eventid; ?></option>
                            <?php
                            }
                            ?>
                    </select>
            <input type="submit" name="submit" value="submit"/><br />
            </form>
        </div>
    </body>
</html>
