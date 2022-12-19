<?php
   $name = $_POST["name"];
   $email = $_POST["email"];
//    $number = $_POST["number"];
//    $date = $_POST["date"];

   $connection = new mysqli("localhost", "root", "2310249", "clinic");
   $stmt = $connection->prepare("insert into patients(name,email)values(?,?)");
   $stmt->bind_param("ss",$name, $email);
   // $stmt = $connection->prepare("select * from patients");
   $stmt->execute();

   
   echo ("done");
?>
