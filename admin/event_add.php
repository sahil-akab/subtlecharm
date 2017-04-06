 
<?php
session_start();
if(isset($_SESSION["auth"]))
    {    
    if($_SESSION["auth"]==session_id())
    {
require_once("../include/dbconnection.php");
if(isset($_POST["submit"]))
{
    $eventname=$_POST["eventname"];
    $eventid=rand(10,1000);
    $query="insert into event(eventname,eventid) 
            values('$eventname','$eventid');";
        $result=mysqli_query($connection,$query);
        echo $eventid;
        echo $eventname;
        //header("Location: ./event.php");
}
 else 
 {
?>



<?php
        //accesssible even if not logged in
?>
<html>
    <head>
        <meta charset="UTF-8">
      <head>
          <link rel="stylesheet" href="../main.css">
          <link rel="stylesheet" href="../boot/css/bootstrap.css">
</head>
<body>
 <div class="container" background-color="#f87">
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./admin/admin_login.php">Administrative login</a></li>
      <li><a href="participant_login.php">Participant login</a></li>
      <li><a href="manager">Manager Login</a></li>
      <li><a href="#">Contact Us</a></li>
	  <li><a href="#">About Us</a></li>
          <li><a href="#">Fixtures</a></li>
    </ul>
  </div>
</nav>

     <div class="clearfix"></div>
     <br/>
     <br/>
     <br/>
     <div>
         <br/><br/><br/>
     </div>
     <form action="event_add.php" method="post">  

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
           
            EventName:<input type="text" name="eventname" class="form-control input-sm" value=""/><br />
  
  
</div>

<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
    eventid:<input type="text" name="eventid" class="form-control input-sm" value=""/><br />
</div>
<div class="col-md-4"></div>
</div>
     
     
     
<br/>
<div class="row">
    <div class="col-md-6"></div>  
    <div class="col-md-6">
        
        
<input type="submit" class="btn btn-primary" value="Add">
        
    </div>  
    
    
    
</div>
    </form>
 </div>
        
    </body>
</html>





<?php
 }
    }
    }
?>