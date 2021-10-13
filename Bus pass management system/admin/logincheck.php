<?php
require('includes/connection.php');
if(isset($_POST['login'])){
	$name = $_POST['name'];
	$password =$_POST['password'];
	$sql = "select * from admin where name = '$name' and password = '$password'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			//$_SESSION['user'] = $username;
			header('location:dashboard.php');
		}else{
			echo "<script>alert('Invalid Details');</script>";
		}
		
	}
?>

