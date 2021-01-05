<?php
// conectare la serverul MySQL 
$conn = new mysqli('localhost', 'root', '', 'registration');

// verifica conexiunea
if (mysqli_connect_errno()) {
 exit('Connect failed: '. mysqli_connect_error());
}

// Setarea pt. lucru cu format UTF-8
$conn->query('SET character_set_client="utf8",character_set_connection="utf8",character_set_results="utf8";');
?>