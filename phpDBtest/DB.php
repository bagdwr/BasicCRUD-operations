<?php
     try{
         $connection=new PDO('mysql:host=localhost;dbname=PHPdbTest','root','');
     }catch (PDOException $ex){
           echo $ex->getMessage();
      }

      function getAll(){
         global $connection;
      	 $query=$connection->prepare('SELECT *FROM students');
         $query->execute();
         $results=$query->fetchAll();

         return $results;
      }

      function addStudent($name, $age, $city){
      	  global $connection;
          $query=$connection->prepare('INSERT INTO students values(:id,:name,:age,:city);');

          $rows=$query->execute(array(':id'=>null,':name'=>$name,':age'=>$age, ':city'=>$city));
          return $rows>0;
      }
      function deleteStudent($id){
      	  global $connection;
      	  $query=$connection->prepare('DELETE from students where id=:sid');
      	  $rows=$query->execute(array(':sid'=>$id));

      	  return $rows>0;
      }
      function getStudent($id){
      	  global $connection;
      	  $query=$connection->prepare('SELECT *FROM students where id=:std');
      	  $query->execute(array(':std'=>$id));

      	  return $query->fetch();
      }
      function updateStudent($id, $name, $age, $city){
      	  global $connection;
      	  $query=$connection->prepare('Update students set name=:n, age=:a, city=:c where id=:i');
      	  $rows=$query->execute(array(':n'=>$name, ':a'=>$age, ':c'=>$city, ':i'=>$id));

      	  return $rows>0;
      }
?>