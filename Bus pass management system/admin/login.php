<?php
require('includes/connection.php'); 

?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's login</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.min.css">
</head>
<body>
    <h1 class="admin_head">Bus Pass MS - Admin's Login</h1>
    <div class="forms">
    <form  method="post"  action="logincheck.php" >
			<label>Username</label>
			<input type="text" name="name"><br><br>
			<label>Password</label>
			<input type="password" name="password"><br><br>
            <input type ="checkbox"> <a class="keep" href="keeplogin.php">
                 <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?>Keep me sign in</a>
            <a  class="lost" href="reset password.php">Lost password?</a><br><br>
                <input type="submit" value="Login" name="login"><br><br>
            <i class="fa fa-home"></i>
            <a href="../index.php">Back Home</a>
		</form>
</div>
</body>
</html>