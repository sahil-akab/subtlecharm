<?php
    session_start();
    if(isset($_SESSION["part"]))
    {    
    if($_SESSION["part"]==session_id())
    {
            //1.creating connection
        require_once("./include/dbconnection.php");
        echo "2";
         $enrollid=$_COOKIE["enrollid"];
    if(isset($_POST["submit"]))
    {
        echo "---3--";
        $name=trim($_POST["name"]);
        $sex=trim($_POST["sex"]);
        $phone=trim($_POST["phone"]);
        $collegeid=trim($_POST["collegeid"]);
        $eventname=trim($_POST["eventname"]);
        $password=trim($_POST["password"]);
        if(!empty($name))
        {
            $query="update participant set name='$name' where enrollid='$enrollid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($sex))
        {
            $query="update participant set sex='$sex' where enrollid='$enrollid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($phone))
        {
            $query="update participant set phone='$phone' where enrollid='$enrollid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($collegeid))
        {
            $query="update participant set collegeid='$collegeid' where enrollid='$enrollid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($eventname))
        {
            $query="update participant set eventname='$eventname' where enrollid='$enrollid';";
            $result=mysqli_query($connection,$query);
        }
        if(!empty($password))
        {
            $query="update participant set password='$password' where enrollid='$enrollid';";
            $result=mysqli_query($connection,$query);
            echo $password;
             echo $eventname;
             echo $collegeid;
             echo $phone;
              echo $sex;
              echo $name;
        }
         header("Location: ./welcome_participant.php");
    }
 else {
     echo "--4--"
?>
<html>
        <head><title>See Credentials</title></head>
        <link rel="stylesheet" type="text/css" href="./css/pahla.css" />
        <link rel="stylesheet" type="text/css" href="./css/c_l.css"/>
       <body img src="./images/n_c_bckg.jpg">
        <?php
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
                     <form action="change_credentials_user.php" method="post">
                    <tr>
                        <td align="left"> <input type="submit" name="submit" value="submit"/><br /></TD>
                        <td align="left"> <input type="text" name="name" value=""/><br /></TD>
                        <td align="left"><input type="password" name="sex" value=""/><br /></TD>
                        <td align="left"><input type="text" name="phone" value=""/><br /></TD>
                        <td align="left"><input type="text" name="collegeid" value=""/><br /></TD>
                        <td align="left"><input type="text" name="eventname" value=""/><br /></TD>
                        <td align="left"><input type="text" name="password" value=""/><br /></TD>
                    </tr>
                     </form>   
                </table>
        </body>     
    </html>   
        <?php
 }
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
