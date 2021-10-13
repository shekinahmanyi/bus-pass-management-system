<?php
   require('includes/connection.php');
  if(!empty($_POST['submit'])){
  $date =  date('Y-m-d H:i:s'); 
  // passes
  $pass = $_POST['pass_number'];
  $name = $_POST['name'];
  $tel_number = $_POST['tel_number'];
  $ICN = $_POST['ICN'];
  $category = $_POST['category'];
  $source= $_POST['source'];
  $destination= $_POST['destination'];
  $cost = $_POST['Cost'];
  //insert  data
  mysqli_query($con,"insert into pass(pass_number,name,tel_number,identity_card_number,category,source,destination,cost,date) values('$pass','$name','$tel_number','$ICN','$category','$source','$destination','$cost','$date')");
  echo"<script>alert('Added successfully');</script>";
}
?>

<html !DOCTYPE>
	<head>
		<title>Add Pass</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
        <?php include_once('includes/sidebar.php');?>
      <?php include_once('includes/header.php');?>
			<!--
				NO, Pass number, Contact Number, Email,creation date actions(u/d)
			-->
            <main>
        <h1 class="page-header">Add Pass</h1><br><br>
     <form class="contact-form" action="" method="post">
     <label>Pass number</label>
			<input type="number" name="pass_number"><br><br>
			<label>name</label>
			<input type="text" name="name"><br><br>
            <label>tel_number</label>
			<input type="number" name="tel_number"><br><br>
            <label>Identity Card Number</label>
            <input type="number" name="ICN"><br><br>
            <label>Category</label>
			<input type="text" name="category"><br><br>
            <label>Source</label>
			<input type="text" name="source"><br><br>
            <label>Destination</label>
			<input type="text" name="destination"><br><br>
            <label>Cost</label>
			<input type="number" name="Cost"><br><br>
            <input type="submit" name="submit" value="Add">
</form>
       </main>  
	 
</body>
</html>