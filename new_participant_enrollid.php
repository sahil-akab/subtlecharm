<?php
        $phone=$_GET["id"];
        echo $phone;
        include("./include/dbconnection.php");
        $query="select * from participant where phone='$phone';";
        $result=  mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($result))
        {
            $enrollid=$row["enrollid"];
        }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="./css/c_l.css"/>
    </head>
    <body>
        <ul>
                <li><a class="active" href="./welcome.php">Home</a></li>
                <li><a href="./consumer_login.php">Log In</a></li>
                <li><a href="./employee_login.php">Employee Login</a></li>
                 <li><a href="./faq.pdf">Faqs</a></li>
                <li><a href="./initiatives.pdf">Initiatives</a></li>
                <li><a href="./contact_us.php">Contact Us</a></li>
                <li><a href="./about_us.php">Aboute Us</a></li>
            </ul><br/>
    <center><h1>you've been successfully registered</h1>
        <h2>Your customer no. is:<?php echo $enrollid;?></h2>
        <a href="./participant_login.php">NOW,LOGIN!</a>
    </center>
        
    </body>
</html>
