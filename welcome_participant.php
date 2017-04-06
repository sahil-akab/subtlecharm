<?php
    session_start();
    if(isset($_SESSION["part"]))
    {    
    if($_SESSION["part"]==session_id())
    {
        echo "";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" type ="text/css" href="./css/n_c.css"/>
          <link rel="stylesheet" type ="text/css" href="./css/new.css"/>
           <link rel="stylesheet" type ="text/css" href="./css/old.css"/>
    </head>
    <body>
       
         <ul>
                <li><a class="active" href="./welcome.php">Home</a></li>
                <li><a href="./admin/admin_login.php">Administrative LOgin</a></li>
                <li><a href="./manager/manager_login.php">Manager Login</a></li>
            </ul>
        
        <h2>You've been logged in successfully</h2>
        <ul class="major">
            
                <li> <a class="active" href="./change_credentials_user.php">Change credentials</a></li>
                <li><a href="./see_credentials_user.php">See credentials</a></li>
                    <li><a href="./delete_account_user.php">Delete account</a></li>
                    <li><a href="./add_manager.php">ADD manager</a></li>
            <!--<li><a href="./book_cylinder.php">Book Cylinder</a></li>
        <li> <a href="./prevbookings.php">See Previous Bookings</a></li>-->
            <li> <a href="./logout.php">Logout</a></li>
        </ul>
         <ul class="minor">
             <li><a href="./contact_us.php">Contact Us</a></li>
                <li><a href="./about_us.php">About Us</a></li>
               <li><a href="./faq.pdf">Faqs</a></li>
                <li><a href="./initiatives.pdf">Initiatives</a></li>
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
        echo "you've been logged out already";
        ?><a href="./consumer_login.php">Login</a>
        <?php
    }
        ?>
    </body>
</html>
