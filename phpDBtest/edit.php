<?php
      if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['city'])) {
   	   require 'DB.php';
   	   if(updateStudent($_POST['id'], $_POST['name'], $_POST['age'],$_POST['city'])){
             header('Location:edit.php?success');
         

   	   }else{
            header('Location:edit.php?error');
   	   }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <?php
      if(isset($_GET['success'])){
      	?>
                 <h2>Student updated</h2>
                 <a href="index.php">GO back</a>
      	<?php
      }
      if(isset($_GET['error'])){
      	?>
                 <h2>Something is wrong</h2>
                 <a href="index.php">GO back</a>
      	<?php
      }

   ?>
</body>
</html>
