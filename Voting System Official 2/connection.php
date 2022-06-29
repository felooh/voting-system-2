<?php 

      $server = 'localhost';
      $username = "root";
      $password = "";
      $database = "voter_db";

       $conn = new mysqli('localhost','root', '','voter_db');

       if(!$conn){
              echo "<script>alert('connection failed')</script>";
       }
?>   


