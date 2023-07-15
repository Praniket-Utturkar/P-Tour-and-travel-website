<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, guests, arrivals, leaving) values('$name','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:submit.html'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>