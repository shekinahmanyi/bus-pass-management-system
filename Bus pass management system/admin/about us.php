<?php




?>
<html !DOCTYPE>
	<head>
		<title>About Us</title>
		<link rel="stylesheet" type="text/css" href="style.css">
        <style>
            textarea{
    width:100%;
    font-size:25px;
    height:250px;
}
input[type=submit]{
    width:30%;
    font-size:20px;
    background-color:#00008f;
    color:white;
}
            </style>
	</head>

	<body>
        <?php include_once('includes/sidebar.php');?>
      <?php include_once('includes/header.php');?>
			<!--
				NO, Pass number, Contact Number, Email,creation date actions(u/d)
			-->
            <main>
            <h1 class="page-header">About Us</h1><br><br>   
        <form action="" method="post">
            <label>Page title</label>
            <input type="text" name="title"><br><br>
            <label>Page description</label>
            <textarea name="message"></textarea><br><br>
            <input type="submit" value="Add" name="add">
        </form>
</body>
</html>