<?php
	$link = mysqli_connect('localhost', 'root', '', 'bakingshops');

	if (!$link) {
	  die('Erreur de connexion');
	} else {
	  echo 'Succès... \n';
	}

	// objet
	$requete = "SELECT * FROM shops";
	if ($result = mysqli_query($link, $requete)) {
	  while ($ligne = mysqli_fetch_object($result)) {
		printf ("%s\n", $ligne->Adresse);
	  }
	} else {
	  echo "Erreur de requête de base de données.";
	}

?>