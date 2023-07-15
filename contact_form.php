<?php

   $connection = mysqli_connect('localhost','root','','contact_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $request = 'insert into `contact_form`(`name`, `email`,`number`, `subject`,`message`) values("'.$name.'","'.$email.'","'.$number.'","'.$subject.'","'.$message.'") ';
      mysqli_query($connection, $request);
      

      header('location:submit.html'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>