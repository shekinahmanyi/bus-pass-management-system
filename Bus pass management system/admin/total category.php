<?php
require('includes/connection.php'); 

$q = "SELECT * FROM category";
$r = mysqli_query($con, $q);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage category</title>
</head>
<body>
<?php include_once('includes/sidebar.php');?>
      <?php include_once('includes/header.php');?>
			<!--
				NO, category date,creation date, actions(u/d)
			-->
            <main>
        <h1 class="page-header">Manage Category</h1><br><br>
                    <table style="width:100%" border="1px">
                        <thead>
                                <th>NO</th>
                               <th>Category name</th>
                                <th>Creation Date</th>
                                <th>Action</th>
                           </thead>
                            <tbody>
					<?php 
					 $count = 1; 
					 while($category = mysqli_fetch_assoc($r)) { ?>
					<tr>
						<td> <?php echo $count; ?></td>
						<td> <?php echo $category['name']; ?> </td>
						<td> <?php echo $category['date']; ?> </td> 
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