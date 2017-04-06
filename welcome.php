<html>

<head>
 <link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
 <div class="container" background-color="#ffde87">
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="welcome.php">Spark Sports</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./admin/admin_login.php">Administrative login</a></li>
      <li><a href="participant_login.php">Participant login</a></li>
      <li><a href="manager/manager_login.php">Manager Login</a></li>
      <li><a href="fixture.php">View Fixture</a></li>
      <li><a href="#">Contact Us</a></li>
	  <li><a href="#">About Us</a></li>
    </ul>
  </div>
</nav>
 <marquee><h3>SPORTS EVENT MANAGEMENT PLATFORM</h3></marquee>
 </div>
<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="images/football.jpg" width="780" height="200" alt="Chania">
    </div>

    <div class="item">
        <img src="images/cric.jpg"width="980" height="400"  alt="Chania">
    </div>

    <div class="item">
        <img src="images/volley.jpg"width="980" height="400"  alt="Flower">
    </div>

    <div class="item">
        <img src="images/football.jpg"width="980" height="400"  alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    <marquee><h3>NEW USER...!!!</h3></marquee>
    
    
    
 <form method="post" action="participant_new_registration_processing.php">
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
  <label for="usr">Name:</label>
  <input type="text" name="name" class="form-control input-sm" id="usr">
</div>

<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
  <label for="usr">Sex:</label>
  <input type="text" name="sex" class="form-control input-sm" id="usr">
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
  <label for="usr">Phone:</label>
  <input type="text" name="phone" class="form-control input-sm" id="usr">
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
  <label for="usr">College id:</label>
  <input type="text" name="clgid" class="form-control input-sm" id="usr">
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
  <label for="usr">Password :</label>
  <input type="text" name="password" class="form-control input-sm" id="usr">
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
  <label for="usr">Event Name:</label>
  <input type="text" name="eventname" class="form-control input-sm" id="usr">
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-6"></div>
<div class="col-md-6">
<input type="submit" class="btn btn-primary" value="Signup">
</div>
</div>
 </form>
</div>




<!-- Latest compiled and minified JavaScript -->

<script type="text/javascript" src="boot/js/bootstrap.js" >
</body>

</html>