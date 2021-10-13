<?php
require('includes/connection.php'); 

$q = "SELECT * FROM users";
$r = mysqli_query($con, $q);


?>
<html !DOCTYPE>
	<head>
		<title>Read Enquiry</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
        <?php include_once('includes/sidebar.php');?>
      <?php include_once('includes/header.php');?>
			<!--
				NO, Pass number, Contact Number, Email,creation date actions(u/d)
			-->
            <main>
        <h1 class="page-header">Read Enquiry</h1><br><br>
                    <table style="width:100%" border="1px">
                        <thead>
                                <th>NO</th>
                                <th>username</th>
                                <th>email</th>
                                <th>subject</th>
                                <th>message</th>
                                <th>creation date</th>
                                <th>Action</th>
                        </thead>
                        <tbody>
					<?php 
					 $count = 1; 
					 while($users = mysqli_fetch_assoc($r)) { ?>
					<tr>
						<td> <?php echo $count; ?></td>
						<td> <?php echo $users['name']; ?> </td> 
                        <td> <?php echo $users['email']; ?> </td>
                        <td> <?php echo $users['subject']; ?> </td>
                        <td> <?php echo $users['message']; ?> </td>
                        <td> <?php echo $users['date']; ?> </td>
						<td> <a href="#">View</a></td>
						<td> 
							<a href="#">Edit</a> |
							<a href="del.php">Delete</a>
						</td>
					</tr>
					<?php $count++; } ?>
				</tbody>
                     </main>
	</body>
</html>