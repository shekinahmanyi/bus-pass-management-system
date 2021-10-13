<?php
require('includes/connection.php'); 

$q = "SELECT * FROM pass";
$r = mysqli_query($con, $q);


?>
<html !DOCTYPE>
	<head>
		<title>Manage Pass</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
        <?php include_once('includes/sidebar.php');?>
      <?php include_once('includes/header.php');?>
			<!--
				NO, Pass number, Contact Number, Email,creation date actions(u/d)
			-->
            <main>
        <h1 class="page-header">Manage Pass</h1><br><br>
                    <table style="width:100%" border="1px">
                        <thead>
                                <th>NO</th>
                               <th>Pass Number</th>
                                <th>Full Name</th>
                                <th>Contact Number</th>
                                <th>Category</th>
                                <th>Creation Date</th>
                                <th>Action</th>
                        </thead>
                        <tbody>
					<?php 
					 $count = 1; 
					 while($pass = mysqli_fetch_assoc($r)) { ?>
					<tr>
						<td> <?php echo $count; ?></td>
						<td> <?php echo $pass['pass_number']; ?> </td>
						<td> <?php echo $pass['name']; ?> </td> 
                        <td> <?php echo $pass['tel_number']; ?> </td>
                        <td> <?php echo $pass['category']; ?> </td>
                        <td> <?php echo $pass['date']; ?> </td>
						<td> <a href="#">View</a></td>
						<td> 
							<a href="#">Edit</a> |
							<a href="#">Delete</a>
						</td>
					</tr>
					<?php $count++; } ?>
				</tbody>
                     </main>
	</body>
</html>