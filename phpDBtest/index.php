<?php
    require 'DB.php';
    $students=getAll();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List of students</title>
</head>
<body>
	<table>
		<thead>
			
                      <tr>
                           <td>ID</td>
                           <td>name</td>
                           <td>Age</td>
                           <td>City</td>
                           <td>Edit</td>
                           <td>Delete</td>
                      </tr>
		</thead>
		<tbody>
    <?php 
            if ($students!=null) {
            	foreach ($students as $std) {
    ?>
                      <tr>
                           <td><?php echo($std['id']) ?></td>
                           <td><?php echo($std['name']) ?></td>
                           <td><?php echo($std['age']) ?></td>
                           <td><?php echo($std['city']) ?></td>
                           <td><a href="editForm.php?id=<?php echo $std['id'];?>">Edit</a></td>
                           <td><a href="delete.php?id=<?php echo $std['id'];?>">Delete</a></td>
                      </tr>
            	
            	<?php
            	}
            }
                ?>	
        </tbody>
  </table>
  <a href="addStudent.php">Добавить студента</a>
  <style>
  	  td{
  	  	border:1px solid black;
  	  	padding: 5px;
  	  }
  </style>
</body>
</html>