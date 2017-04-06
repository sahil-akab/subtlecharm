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
        echo $_COOKIE["manid"];
        ?>
    
                <ul>
                   
                   
                    <li><a href="./see_participant.php"><h3>see participant</h3></a></li>
                    <!---<li><a href="./event.php"><h3>see next Event</h3></a></li>-->
                    <li><a href="./logout.php"><h3>logout</h3></a></li>
                
            </ul>
   
       <?php
    }
    else
    {
        echo "get out";
    }
    }
 else 
    {
            echo "already out";
    }
        ?>
    </body>
</html>
