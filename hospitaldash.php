<?php 
session_start();
    if(!isset($_SESSION['hosauth']))
    {
        header("location:hospitallogin.php");
    }
    $conn = new mysqli("localhost","root","","blood_bank");
    if(isset($_POST['submit']))
    {   $hosp_id=$_SESSION['hosauth']['id'];
        $blood=$_POST['blood'];
        $sql="SELECT * FROM blood_smaple WHERE hosp_id='$hosp_id' AND blood='$blood'";
       
        $result1 = $conn->query($sql);
        $rows = $result1->num_rows ;
        $result=$result1->fetch_assoc();
        if($rows == 1)
            {   $unit = $result['unit']+$_POST['no_unit'];
                $id = $result['id'];
                $query="UPDATE blood_smaple SET unit='$unit' WHERE id='$id'";
                $conn->query($query);
            }
        else
        {
            $unit=$_POST['no_unit'];
            $blood=$_POST['blood'];
            $hosp_id=$_SESSION['hosauth']['id'];
            $query1="INSERT INTO blood_smaple (hosp_id,blood,unit) VALUES ('$hosp_id','$blood','$unit')";   
            $conn->query($query1);
        }    
    }
?>

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
  <a class="navbar-brand" href="#">Blood Donation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><span style="color:rgb(182, 6, 6">Home </span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="avail.php"><span style="color:rgb(182, 6, 6">Availability</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="hoslogout.php"><span style="color:rgb(182, 6, 6">Logout</span></a>
      </li>
    </ul>
  </div>
</nav>

<!-- Main content -->

<div class="formcon">
<form action="hospitaldash.php" method="post">
<label for="blood" class="label hosp">B-Group : </label>
    <select class="inp dashcon" name="blood" required>
    <option hidden required>Select</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    </select>
<label for="no_unit" class="label">No. of units: </label>
<input type="number" name="no_unit" min="1" required>
<button type="submit" name="submit">Submit</button>
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