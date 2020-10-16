<?php
$conn = new mysqli('localhost', 'root', '', 'blood_bank');

if (isset($_REQUEST['rec_sub'])){
		if(isset($_POST['username'])  && isset($_POST['blood']) && isset($_POST['pass1'])){

	        $username = $_POST['username'];
	        $blood = $_POST['blood'];
	        $pass1 = $_POST['pass1'];

			$query1 = "SELECT * FROM reciever where username = '$username'" ;
			$result1 = $conn->query($query1);
			$num1 = $result1->num_rows ;

			if($num1 == 0){
				$sql="INSERT INTO reciever (username,blood, pass) values ('$username', '$blood', '$pass1')";
				$result=$conn->query($sql);
				if($result){
					header("location:index.php");
				}
			}
			else {
				header( "location:recieverreg.php" );
			}
    	}
	}
?>