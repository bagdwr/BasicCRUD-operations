<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
          if (isset($_GET['success'])) {
              ?>
                    <h2>Student added!!!</h2>
                    <a href="index.php">На главную страницу</a>
              <?php
          }
          if(isset($_GET['error']))
          {
               ?>
                    <h2>Something is wrong(((</h2>
                    <a href="index.php">На главную страницу</a>
              <?php
          }
    ?>
     <form action="add.php" method="post">
     	Name:<input type="text" name="name"><br>
     	Age:<input type="number" name="age"><br>
     	City:
         <select name="city">
         	<option value="Almaty">Almaty</option>
         	<option value="Uralsk">Uralsk</option>
         	<option value="Astana">Astana</option>
         	<option value="Shymkent">Shymkent</option>
         </select>
         <button type="submit">Add</button>
     </form>
</body>
</html>