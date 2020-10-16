
<?php
session_start();
$error='';

$conn = new mysqli('localhost', 'root', '', 'blood_bank');
if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['pass'])){
        $error="Username and password is invalid";
    }
    else{
        $username=$_POST['username'];
        $pass=$_POST['pass'];
        $query1 = "SELECT * FROM reciever WHERE username='$username' AND pass='$pass'";
        $result1 = $conn->query($query1);
			$rows = $result1->num_rows ;
        if($rows == 1)
        {   $_SESSION['recauth']=true;
            header("location:recieverdash.php");
        }
        else{
            unset($_SESSION['recauth']);
            header("location:recieverlogin.php");
            }        
    }
}

?>


