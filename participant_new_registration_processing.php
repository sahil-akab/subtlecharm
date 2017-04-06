<?php
    /*session_start();
    if(isset($_SESSION["cusno"]))
    {    
    if($_SESSION["cusno"]==session_id())
    {*/

    include("./include/dbconnection.php");  
    //  address,email(identify @)->anything || name,distibutor->string only || alphnumeric->pan || num-phn
        $name=$_POST["name"];
        $sex=$_POST["sex"];
        $phone=$_POST["phone"];
        $clgid=$_POST["clgid"];
        $password=$_POST["password"];
        $eventname=$_POST["eventname"];
        $enrollid=rand(10000000,9999999999);
        //strval ans intval are boolean,if validation is true->TRUE,false->FALSE
        //$strval=  sf_apha($strings);
        //$intval=sf_intval($number);
        //$an=sf_alphanumeric($alphanumeric);
        
?>         
     <?php
        //validation process query given to sql only when validation succeds
        //if($strval && $intval && $an)    
       $query="insert into participant(name,sex,phone,collegeid,password,eventname,enrollid) 
            values('$name','$sex','$phone','$clgid','$password','$eventname','$enrollid');";
        $result=mysqli_query($connection,$query);
        if(isset($result))
        {
            
            ?>
        
            <?php
        }
        else
        {
            echo "wrong entry";
        }

       ?>
<html>
    <head>
        <meta charset="UTF-8">
      <head>
          <link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
 <div class="container" background-color="#f87">
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="welcome.php">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./admin/admin_login.php">Administrative login</a></li>
      <li><a href="participant_login.php">Participant login</a></li>
      <li><a href="manager/manager_login.php">Manager Login</a></li>
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
     <form action="./admin_login_processing.php" method="post">  

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
    
    <h2><a href="./new_participant_enrollid.php?id=<?php echo $phone;?>"> Validate enroll id</a>
    </h2>
  
</div>

<div class="col-md-4"></div>
</div>

    </form>
 </div>
    
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>
<?php
    mysqli_close($connection);
/* }
    else
    {
        echo "get out";
    }
    }
 else 
    {
      echo "get outer";
    }*/
?>
