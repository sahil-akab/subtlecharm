<?php
        //accesssible even if not logged in
?>
<html>
    <head>
        <meta charset="UTF-8">
      <head>
          <link rel="stylesheet" href="../main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
 <div class="container" background-color="#f87">
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../welcome.php">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../admin/admin_login.php">Administrative login</a></li>
      <li><a href="../participant_login.php">Participant login</a></li>
      <li><a href="manager_login.php">Manager Login</a></li>
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
     <form action="./manager_login_processing.php" method="post">  

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
    
           Manager id:<input type="text" name="pid" class="form-control input-sm" value=""/><br/>
  
  
</div>

<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
    Password:<input type="password" name="pd" class="form-control input-sm" value=""/><br/>
</div>
<div class="col-md-4"></div>
</div>
     
     
     
<br/>
<div class="row">
    <div class="col-md-6"></div>  
    <div class="col-md-6">
        
        
<input type="submit" class="btn btn-primary" value="Login">
        
    </div>  
    
    
    
</div>
    </form>
 </div>
        
    </body>
</html>
