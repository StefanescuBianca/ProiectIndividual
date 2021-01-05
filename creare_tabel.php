<?php
// conectare la serverul MySQL 
$conn = new mysqli('localhost', 'root', '', 'registration');

// verifica conexiunea
if (mysqli_connect_errno()) {
 exit('Connect failed: '. mysqli_connect_error());
}
// interogare sql pentru CREATE TABLE
$sql = "CREATE TABLE `users` (
   `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
 ) CHARACTER SET utf8 COLLATE utf8_general_ci"; 

// Executa interogarea $sql query pe server pentru a crea tabelul
if ($conn->query($sql) === TRUE) {
  echo 'Table "users" successfully created';
}
else {
 echo 'Error: '. $conn->error;
}
//inchidere conexiune
$conn->close();
?> 
