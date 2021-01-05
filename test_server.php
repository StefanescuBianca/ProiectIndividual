<?php

// initializare variabile

// conectare la baza de date
$conn = mysqli_connect('localhost', 'root', '', 'registration');

function verificare($postjson)
{
	global $conn;

	$q1 = "";
	$q2 = "";
	$q3 = "";
	$q4 = "";
	$q5 = "";
	$q6 = "";
	$q7 = "";
	$q8 = "";
	$q9 = "";
	$q10 = "";
	$mesaj = "S-a produs o eroare"; // Variabila folosita pt. mesajul ce va fi afisat pt. utilizator
	// Se verifica daca sunt primite datele de la formular

		// Se verifica daca au fost completate corect toate campurile
		// Daca au fost completate le preia in variabile, in caz contrar seteaza o variabila tip Array cu mesaj de eroare

		// Verifica daca au fost bifate butoanele
		if (isset($postjson['q1']) ) $q1 = $postjson['q1'];
		else $eroare[] = 'Selectati raspunsul pentru "Intrebarea 1"';

		if (isset($postjson['q2']) ) $q2 = $postjson['q2'];
		else $eroare[] = 'Selectati raspunsul pentru "Intrebarea 2"';

		if (isset($postjson['q3']) ) $q3 = $postjson['q3'];
		else $eroare[] = 'Selectati raspunsul pentru "Intrebarea 3"';

		if (isset($postjson['q4']) ) $q4 = $postjson['q4'];
		else $eroare[] = 'Selectati raspunsul pentru "Intrebarea 4"';

		if (isset($postjson['q5']) ) $q5 = $postjson['q5'];
		else $eroare[] = 'Selectati raspunsul pentru "Intrebarea 5"';

		if (isset($postjson['q6']) ) $q6 = $postjson['q6'];
		else $eroare[] = 'Selectati raspunsul pentru "Intrebarea 6"';

		if (isset($postjson['q7']) ) $q7 = $postjson['q7'];
		else $eroare[] = 'Selectati raspunsul pentru "Intrebarea 7"';

		if (isset($postjson['q8']) ) $q8 = $postjson['q8'];
		else $eroare[] = 'Selectati raspunsul pentru "Intrebarea 8"';

		if (isset($postjson['q9']) ) $q9 = $postjson['q9'];
		else $eroare[] = 'Selectati raspunsul pentru "Intrebarea 9"';

		if (isset($postjson['q10']) ) $q10 = $postjson['q10'];
		else $eroare[] = 'Selectati raspunsul pentru "Intrebarea 10"';

		// Daca nu exista nici un mesaj de eroare, filreaza datele cu real_escape_string() si le adauga in baza de date
		// Altfel, in cazul vreunei erori, adauga in variabila $mesaj
		if (!isset($eroare)) {

			$username = mysqli_real_escape_string($conn, $postjson['username']);
			$q1 = mysqli_real_escape_string($conn, $q1);
			$q2 = mysqli_real_escape_string($conn, $q2);
			$q3 = mysqli_real_escape_string($conn, $q3);
			$q4 = mysqli_real_escape_string($conn, $q4);
			$q5 = mysqli_real_escape_string($conn, $q5);
			$q6 = mysqli_real_escape_string($conn, $q6);
			$q7 = mysqli_real_escape_string($conn, $q7);
			$q8 = mysqli_real_escape_string($conn, $q8);
			$q9 = mysqli_real_escape_string($conn, $q9);
			$q10 = mysqli_real_escape_string($conn, $q10);

			
			$id_user_sql = "SELECT id FROM users WHERE username='$username'";
			
			$result = mysqli_query($conn, $id_user_sql);

			if($result)
			{
				$id_user = $result->fetch_row()[0];

				$sql = "INSERT INTO `quiz` (`id_user`, `Câte planete se rotesc în jurul Soarelui?`, 
				`Care dintre urmatoarele planete sunt planete pitice?`, 
				`Care este planeta cea mai apropiată de Soare?`, 
				`Planeta pe care se afla cel mai înalt munte`, 
				`Cand s-a format Sistemul Solar?`, 
				`Câte planete pitice se rotesc în jurul Soarelui?`, 
				`Care este cel mai masiv obiect al Sistemului Solar?`, 
				`Ce planete sunt numite „giganți de gheață”?`, 
				`Cum se numesc planetele din Sistemul Solar?`, 
				`Care este planeta cea mai mare ca marime?`) VALUES 
				('$id_user', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10')";
				if ($conn->query($sql) === TRUE) {
				$mesaj = '<h4>Datele au fost adaugate</h4>';
				} else $mesaj = '<h4>Datele nu au putut fi adaugate ' . mysqli_error($conn) . '</h4>';
			}
			
		} 
		else
			$mesaj = '<h4>' . implode('<br>', $eroare) . '</h4>';

	return $mesaj;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	echo verificare($_POST["data"]);
}
