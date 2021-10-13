<?php
require('admin/includes/connection.php'); 



?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <title>Add Category</title>
    </head>
    <style>
        #formdo{
        color:white;
        }
        input[type=text]{
    width: 30%;
}
input[type=submit]{
    width: 5%;
}
        </style>
<body>
      <header>

<?php include('partials/header.php') ; ?>

    </header>
    <div id="formdo">
      <form action="" method="post"> 
          <input type= "text" name="search" placeholder="search by pass number">
          <input type="submit" value=">>">
 </form>                      
      <?php
if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $q ="SELECT * from pass where pass_number like '$search%'|| tel_number like '$search%'";
    $r = mysqli_query($con, $q);
    ?>
    <h2 align="center">Result against "<?php echo $search;?>" keyword </h2>
  
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
						<td> <a href="view-pass-details.php">View</a></td>
						<td> 
							<a href="#">Edit</a> |
							<a href="#">Delete</a>
						</td>
					</tr>
					<?php $count++; }} ?>
                    </tbody>
                     </div>           
	</body>
</html>    