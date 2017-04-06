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
        if(isset($_POST["change"]))
        {
            ?>
            <div class="fixed">
                <form action="manager_manage.php" method="post">
                    manager id:<input type="text" name="manids" value=""/><br />
                    <input type="submit" name="change" value="change"/><br />
                </form>
            </div>
           <?php 
        }
        elseif (isset($_POST["see"])) 
        {
            ?>
        <div class="fixed">
                <form action="manager_manage.php" method="post">
                    manager id:<input type="text" name="manids" value=""/><br />
                    <input type="submit" name="see_particular" value="see particular"/><br />
                    <input type="submit" name="see_all" value="see all"/><br />
                    <input type="submit" name="change" value="change"/><br />
                </form>
            </div>
        <?php
        }
        else 
          {
        ?>
            <div class="fixed">
                <form action="manager.php" method="post">
                    <input type="submit" name="change" value="modify"/><br />
                    <input type="submit" name="see" value="see"/><br />
                </form>
            </div>
        <?php
          }
    }
    }
        ?>
    </body>
</html>
