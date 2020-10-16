<?php
$conn = new mysqli('localhost', 'root', '', 'blood_bank');

if (isset($_REQUEST['hosp_user'])){
		if(isset($_POST['hospname']) && isset($_POST['hospemail']) && isset($_POST['pass1'])){

	        $hospname = $_POST['hospname'];
	        $hospemail = $_POST['hospemail'];
	        
	        $pass1 = $_POST['pass1'];

			$query1 = "SELECT * FROM hospital where hospemail = '$hospemail'" ;
			$result1 = $conn->query($query1);
			$num1 = $result1->num_rows ;

			if($num1 == 0){
				$sql="INSERT INTO hospital (hospname, hospemail,  pass) values ('$hospname', '$hospemail', '$pass1')";
				$result=$conn->query($sql);
				if($result){
					header("location:index.php");
				}
			}
			else {
				header( "location:hospitalreg.php" );
			}
    	}
	}
?>