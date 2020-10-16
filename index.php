<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
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
        <a class="nav-link" href="avail.php"><span style="color:rgb(182, 6, 6"> Availability</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="hospitalreg.php"><span style="color:rgb(182, 6, 6"> Hospital Registration</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="recieverreg.php"><span style="color:rgb(182, 6, 6"> Reciever Registration</span></a>
      </li>
    </ul>
  </div>
</nav>
<!--Main content -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
       <div class="don-content">
            <h2>Donate Blood,</h2>
            <br>
            <h2>It can save lives</h2>
            <br>
            <div class="button-container">
                <button class="logbtn"><a href="hospitallogin.php"><span style="color:rgb(182, 6, 6);">Hospial Login</span></a></button>
                <button class="logbtn"><a href="recieverlogin.php"><span style="color:rgb(182, 6, 6);">Reciever's Login</span></a></button>
                <br>
                <br>
                <p>Don't have account? <a href="recieverreg.php"><span style="color:white;"><u>Register</u></span></a></p>
            </div>
        </div>
    </div>
   
    <div class="col-md-8">
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th colspan="3" style="text-align:center">Common Blood Types</th>
                </tr>
                <tr>
                <th scope="col">Blood Type</th>
                <th scope="col">Donate Blood To</th>
                <th scope="col">Recieve Blood From</th>
                </tr>
                <tr>
                <td scope="col">A+</td>
                <td scope="col">A+ AB+</td>
                <td scope="col">A+ A- O+ O-</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td scope="row">O+</td>
                <td>	O+ A+ B+ AB+</td>
                <td>	O+ O-</td>
                </tr>
                <tr>
                <td scope="row">B+</td>
                <td>B+ AB+</td>
                <td>B+ B- O+ O-</td>
                </tr>
                <tr>
                <td scope="row">AB+</td>
                <td>AB+</td>
                <td>Everyone</td>
                </tr>
                <tr>
                <td scope="row">A-</td>
                <td>	A+ A- AB+ AB-</td>
                <td>A- O-</td>
                </tr>
                <tr>
                <td scope="row">O-</td>
                <td>Everyone</td>
                <td>O-</td>
                </tr>
                <tr>
                <td scope="row">B-</td>
                <td>	B+ B- AB+ AB-</td>
                <td>B- O-</td>
                </tr>
                <tr>
                <td scope="row">AB-</td>
                <td>	AB+ AB-</td>
                <td>AB- A- B- O-</td>
                </tr>
            </tbody>
        </table>
    </div>
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