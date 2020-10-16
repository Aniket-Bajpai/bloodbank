
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
        <a class="nav-link" href="index.php"><span style="color:rgb(182, 6, 6">Home</span></a>
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

<!-- content -->

<h1 style="color:white;text-align:center;margin-top:100px">Reciever's Login</h1>
<form class="regform" action="reciever_login.php" method="post">
<label for="username" class="label">Username:</label>
<input class="inp" type="email" name="username" placeholder="username@gmail.com" required>
<br>
<label for="pass" class="label">Password :</label>
<input class="inp" type="password" name="pass" required>
<br>
<button type="submit" name="submit">Login</button>
</form>

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