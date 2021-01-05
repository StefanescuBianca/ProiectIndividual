<?php
include 'conn.php';

// interogare sql pentru CREATE TABLE
$sql = "CREATE TABLE `quiz` (
   `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_user` varchar(100) NOT NULL ,
  `Câte planete se rotesc în jurul Soarelui?` varchar(100) NOT NULL,
  `Care dintre urmatoarele planete sunt planete pitice?` varchar(100) NOT NULL,
  `Care este planeta cea mai apropiată de Soare?` varchar(100) NOT NULL,
  `Planeta pe care se afla cel mai înalt munte` varchar(200) NOT NULL,
  `Cand s-a format Sistemul Solar?` varchar(100) NOT NULL,
  `Câte planete pitice se rotesc în jurul Soarelui?` varchar(100) NOT NULL,
  `Care este cel mai masiv obiect al Sistemului Solar?` varchar(100) NOT NULL,
  `Ce planete sunt numite „giganți de gheață”?` varchar(100) NOT NULL,
  `Cum se numesc planetele din Sistemul Solar?` varchar(100) NOT NULL,
  `Care este planeta cea mai mare ca marime?` varchar(100) NOT NULL
 ) CHARACTER SET utf8 COLLATE utf8_general_ci"; 
 // Executa interogarea $sql query pe server pentru a crea tabelul
if ($conn->query($sql) === TRUE) {
  echo 'Table "quiz" successfully created';
}
else {
 echo 'Error: '. $conn->error;
}
//inchidere conexiune
$conn->close();
?>