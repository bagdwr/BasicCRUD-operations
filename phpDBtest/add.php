<?php
   if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['city'])) {
   	   require 'DB.php';
   	   if(addStudent($_POST['name'],$_POST['age'],$_POST['city'])){
              header("Location:addStudent.php?success");
   	   }else{
              header("Location:addStudent.php?error");
   	   }
   }
?>