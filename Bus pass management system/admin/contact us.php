<?php
   require('includes/connection.php');
  if(!empty($_POST['submit'])){
  $date =  date('Y-m-d H:i:s'); 
  // Contact
  $title = $_POST['title'];
  $name = $_POST['name'];
  $email = $_POST['Email'];
  $subject = $_POST['subject'];
  $message= $_POST['message'];
  //insert page data
  mysqli_query($con,"update into page(title,name,email,subject,description,date)
   values('$title','$name','$email','$subject','$message','$date')");
  echo"<script>alert('Added successfully');</script>";
}
?>


<html !DOCTYPE>
	<head>
		<title>Contact US</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
        <?php include_once('includes/sidebar.php');?>
      <?php include_once('includes/header.php');?>
			<!--
				NO, Pass number, Contact Number, Email,creation date actions(u/d)
			-->
            <main>
        <h1 class="page-header">Contact Us</h1><br><br>
     <form class="contact-form" action="" method="Post">
	 <label>Page title</label>
            <input type="text" name="title"><br><br>
     <label>Username</label>
			<input type="text" name="name"><br><br>
			<label>Email</label>
			<input type="Email" name="Email"><br><br>
            <label>Subject</label>
			<input type="subject" name="subject"><br><br>
            <label>Message</label>
         <textarea name="message"></textarea><br><br>
        <input type="submit" name="submit" value="submit">
</form>
       </main>
	
</body>
</html>