<?php
session_start();
    if(isset($_SESSION["part"]))
    {    
    if($_SESSION["part"]==session_id())
    {   
?>
<html>
        <head><title>See Credentials</title></head>
       <body img src="./images/n_c_bckg.jpg">
        <?php
        $enrollid=$_COOKIE["enrollid"];
        //1.creating connection
        require_once("./include/dbconnection.php");
        //2.querying
        $query="select * from participant where enrollid='$enrollid';";
        $result=mysqli_query($connection,$query);
        while ($row =mysqli_fetch_assoc($result))
        {
         $name=$row["name"];
         $sex=$row["sex"];
         $phone=$row["phone"];
         $collegeid=$row["collegeid"];
         $eventname=$row["eventname"];
         $password=$row["password"];
        }
        //4.freeing results
        mysqli_free_result($result);
        mysqli_close($connection);
        ?>
           <br /> <a href="./logout.php">Logout</a><br />
         <?php
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
                        <th>Customer Password</th> 
                    </tr>
                    <tr>
                        <td align="left"><?php echo $name;?></TD>
                        <td align="left"><?php echo $sex;?></TD>
                        <td align="left"><?php echo $phone;?></TD>
                        <td align="left"><?php echo $collegeid;?></TD>
                        <td align="left"><?php echo $eventname;?></TD>
                        <td align="left"><?php echo $password;?></TD>
                    </tr>
                </table>
        </body>     
    </html>   
        <?php
    }
    else
    {
        echo "get out";
    }
    }
 else 
    {
       header("Location: ./generic_not_logged_in.php");
      ?>
<?php
    }
 
?>
