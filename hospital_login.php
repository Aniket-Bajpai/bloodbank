
<?php
session_start();

$error='';

$conn = new mysqli('localhost', 'root', '', 'blood_bank');
if(isset($_POST['submit'])){
    if(empty($_POST['hospemail']) || empty($_POST['pass'])){
        $error="Username and password is invalid";
    }
    else{
        $hospemail=$_POST['hospemail'];
        $pass=$_POST['pass'];
        $query1 = "SELECT * FROM hospital WHERE hospemail='$hospemail' AND pass='$pass'";
        $result1 = $conn->query($query1);
			$rows = $result1->num_rows ;
        if($rows == 1)
        {
            $_SESSION['hosauth']=$result1->fetch_assoc();
            header("location:hospitaldash.php");
        }
        else{
            unset($_SESSION['hosauth']);
            header("location:hospitallogin.php");
            }        
    }
}

?>


