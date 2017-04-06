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
        <link rel="stylesheet" type="text/css" href="../css/c_l.css"/>
    </head>
    <body>
        <?php
            session_start();
    if(isset($_SESSION["auth"]))
    {    
    if($_SESSION["auth"]==session_id())
    {
        ?>
                <ul>
                <li><a class="active" href="./manager.php">Manager</a></li>
                <li><a href="./participant.php">Participant</a></li>
                <li><a href="./event.php">Event</a></li>
                <li><a href="./fixture_admin.php">change fixture</a></li>
                <li><a href="./logout.php">logout</a></li>
            </ul>
       <?php
       $_SESSION["auth"]=session_id();
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
    ?></br><br>
    <center><h1>You've been successfully loggedin </h1>
        
    </center>
    </body>
</html>
