<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.min.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <title>Dashboard</title>
   
</head>
<body>
    <input type="checkbox" id="nav-toggle">
<div class="sidebar">
<div class="sidebar-brand">
  <h2><span>BUS PMS</span></h2>
</div>
     <nav>
     <div class="sidebar-menu">
   <ul>
   <li><a href="dashboard.php" class="active"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
   <li class="dropdown-1">
   <li><a href=""><i class="far fa-folder"></i>
   <span id="category">Category</span> <i class="fa fa-caret-down"></i></a></li>
   <ul class="dropdown-container">
       <li><a href="add-category.php">Add category</a></li>
       <li><a href="manage category.php">Manage category</a></li>
       </ul>
</li>
   <li><a href=""><i class="far fa-id-card"></i>
   <span>Passes</span></a></li>
   <ul class="nav nav-second-level">                     
   <li><a href="add pass.php">Add Pass</a></li>                      
    <li><a href="manage pass.php">Manage Pass</a></li>
      </ul>
   <li><a href=""><i class="fas fa-pager"></i>
   <span>Pages</span></a>
         <ul class="nav nav-second-level">                    
        <li><a href="about us.php">About Us</a></li>                 
        <li><a href="contact us.php">Contact Us</a></li>
        </ul>
      </li>
   <li><a href=""><i class="fa fa-address-book"></i>
   <span>Enquiry</span></a>
   <ul class="nav nav-second-level">                     
   <li><a href="readenq.php">Read Enquiry</a></li>                      
    <li><a href="unreadenq.php">Unread Enquiry</a></li>
      </ul>
 </li>
   <li><a href="search.php"><i class="fas fa-search"></i><span>Search</span></a></li>
   <li><a href=""><i class="far fa-file-pdf"></i><span>Report Pass</span></a></li>
  </ul>
    </div>
    <!--end of sidebar-menu-->
    </div>  
    <!--end of sidebar-->
      </nav>
   
<script>
    $(document).ready(function(){
    $('#category').click(function(){
        $('.category-show').toggle();
    });
    });
    </script>
</body>
</html>