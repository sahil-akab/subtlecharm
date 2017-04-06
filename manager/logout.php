<?php
        session_start();
        session_destroy();
        setcookie("PHPSESSID",  session_id(),time()-1);
?>
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title>Logout</title>
        <style>
            div.image
{
    position: fixed;
    bottom: 41px;
    top:141px;
    right: 400;
    width: 400px;
    height: 300px;
    padding:20px;
    margin:50px;
    border: 3px solid #73AD21;
    background-color:#ccccff;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    bottom:0;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
body{background-color:#cccccc;background-image: url("./images/n_c_bckg.jpg");}
h1{color:#00e922;}
        </style>
    
    </head>
    -->
    
    
    
    
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
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../admin/admin_login.php">Administrative login</a></li>
      <li><a href="../participant_login.php">Participant login</a></li>
      <li><a href="../manager/manager_login.php">Manager Login</a></li>
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
         <center> <h2>YOU HAVE BEEN SUCCESSFULLY LOGGED OUT</h2> </center>
     </div>

 </div>
        
    </body>
</html>
