<?php 
session_start();
if (isset($_SESSION['role'])) {
   header("location: admin.php");
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=dbs, initial-scale=1.0">
    <link rel="stylesheet" href="plugin/css/bootstrap.min.css">
    <link rel="stylesheet" href="gg.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <title>Document</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Login</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="./backend/login.php" method="post">
      <div class="input-container">
        <input type="text" name="email" id="email" required="required"/>
        <label for="email">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" id="password" required="required"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
      <button type= "submit" name="submit" ><span>Next</span></button>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form method="post" action="backend/register.php">
      <div class="input-container">
        <input type="text" name="name" id="Name" required="required"/>
        <label for="Name">Name</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="Email" name="email" id="Email" required="required"/>
        <label for="Email">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" id="Confirm Password" required="required"/>
        <label for="Confirm Password">Confirm Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="submit"><span>Register</span></button>
      </div>
    </form>
  </div>
</div>
<!-- Portfolio--><a id="portfolio" href="http://pkshopy.com/farooqshad/" title="View my portfolio!"><i class="fa fa-link"></i></a>
	</div>
</div>
<script src="l.js"></script>
</body>
</html>