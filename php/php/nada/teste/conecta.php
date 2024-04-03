<?php

 try{

 	$conn = new PDO('mysql:host=localhost:8080; dbname=teste','root','usbw');

 	   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 } catch (PDOException $e) {

 	 echo 'error: ' . $e->getmessage();
 }

?>
