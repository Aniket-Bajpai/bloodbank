<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/emp.css">
    <title>Blood Donation</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><span style="color:rgb(182, 6, 6">Blood Donation</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><span style="color:rgb(182, 6, 6">Home </span></a>
      </li>
      
      <li class="nav-item">
      <a class="nav-link" href="hospitalreg.php"><span style="color:rgb(182, 6, 6"> Hospital Registration</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="recieverreg.php"><span style="color:rgb(182, 6, 6"> Reciever Registration</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="avail.php"><span style="color:rgb(182, 6, 6">Availability</span></a>
      </li>
    </ul>
  </div>
</nav>

<!-- content-->
<div class="container">
<h1 style="color:#fff;text-align:center;margin-top:100px">Reciever's Registration</h1>
<form class="regform" action="reciever_register.php" method="post">
    <label for="username" class="label" >Username:</label>
    <input class="inp" type="email" name="username" placeholder="abc@gmail.com" required>
    <br>
    <label for="blood" class="label">B-Group  :&nbsp; </label>
        <select class="inp" name="blood">
            <option value="select" selected hidden required>Select</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>   
    <br>    
    <label for="pass1" class="label">Password:&nbsp; </label>
    <input class="inp" type="password" name="pass1" required>
    <br>
    <button type="submit" name="rec_sub" >Submit</button>
</form>
</div>

</div>
<?php 
include 'footer.php';
?>

<!-- js -->
<script src="./js/jquery.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>