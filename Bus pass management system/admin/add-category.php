<?php
require('includes/connection.php');
if(!empty($_POST['submit'])){
  $date =  date('Y-m-d H:i:s'); 
  // category
  $name = $_POST['name'];
  //insert  data
  mysqli_query($con,"insert into category(name,date) values('$name','$date')");
  echo"<script>alert('Added successfully');</script>";
}
?>    

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Add Category</title>
    <style>
        input[type=submit]{
    margin:10px;
    width: 100px;
    height: 30px;
    background-color:#00008f;
    color:white;
    border-radius: 3px;
    font-size: medium;
    align-items: center;
}
form{
    font-size:20px;
}
</style>
</head>
<body>
      <!-- navbar side -->
      <?php include_once('includes/sidebar.php');?>
      <?php include_once('includes/header.php');?>
        <!-- end navbar side -->
        <main>
      <h1 class="category">Add Category</h1><br><br>
      <div>
      <form action="" method="post"> 
      <div class="form-group"> <label>Category Name</label>
       <input type="text" name="name" value="" >
     </div>
     <p><input type="submit"  name="submit"  value="Add"></p>
</div>
 </form>                      
  </div>
</main>  

</body>
</html>
