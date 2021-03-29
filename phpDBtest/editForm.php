<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
   if (isset($_GET['id']) && is_numeric($_GET['id']) && !empty($_GET['id'])) {
       require 'DB.php';
       $student=getStudent($_GET['id']);
   	if ($student!=null) {
   	?>
   	   <form action="edit.php" method="post">
   	   	<input type="hidden" name="id" value="<?php echo $student['id']; ?>">
     	Name:<input type="text" name="name" value="<?php echo $student['name']; ?>"><br>
     	Age:<input type="number" name="age" value="<?php echo $student['age']; ?>"><br>
     	City:
         <select name="city">
         	<option <?php if($student['city']=='Almaty'){ echo 'selected';}?> value="Almaty">Almaty</option>
         	<option <?php if($student['city']=='Uralsk'){ echo 'selected';}?> value="Uralsk">Uralsk</option>
         	<option <?php if($student['city']=='Astana'){ echo 'selected';}?> value="Astana">Astana</option>
         	<option <?php if($student['city']=='Shymkent'){ echo 'selected';}?> value="Shymkent">Shymkent</option>
         </select>
         <button type="submit">Save</button>
     </form>
   <?php
      }else{
      	?>
            <h1 style="text-align: center;">ERROR 404</h1>
      	 <?php
      }
   	}
   	
?>
</body>
</html>
