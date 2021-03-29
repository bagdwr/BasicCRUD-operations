<?php
    if (isset($_GET['id']) && is_numeric($_GET['id']) && !empty($_GET['id'])) {
    	require 'DB.php';
    	if (deleteStudent($_GET['id'])) {
    	        header("Location:delete.php?success")
    	        ?> 
    	             <h2>Student deleted!!!</h2>
                     <a href="index.php">GO back</a>
    	        <?php	    	
         }else{
         	header("Location:delete.php?error")
    	        ?> 
    	             <h2>Something is wrong(((</h2>
                     <a href="index.php">GO back</a>
    	        <?php	    	
         }
    }
?>