
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/avail.css">
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

<br>
    <div class="container">
    <h2 style="color:#fff;margin-left:400px">Available Blood Group</h2>
    <div class="centerdiv">

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Hospital</th>
                    <th>Email</th>
                    <th>Blood-Group</th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $conn = new mysqli('localhost', 'root', '', 'blood_bank');
                    $query1 = "SELECT hospital.id, hospital.hospname, hospital.hospemail,blood_smaple.blood,blood_smaple.unit FROM hospital
                        JOIN blood_smaple ON hospital.id=blood_smaple.hosp_id
                    " ;
			        $result1 = $conn->query($query1);
            
                    while($row = $result1->fetch_assoc()){ 
                    ?>
                        <tr>   
                            <td><?php echo $row['hospname']; ?></td>
                            <td><?php echo $row['hospemail']; ?></td>
                            <td><?php echo $row['blood']; ?></td>
                            <td><?php echo $row['unit']; ?></td>
                        </tr>
                    <?php } 
                        
                    
                ?>
            </tbody>
        </table>
    </div>
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