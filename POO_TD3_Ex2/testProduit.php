<?php

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/ProduitKilo.php");
	require_once("src/ProduitUnite.php");

	// instanciation
	$prixUnite = new ProduitUnite(5,4);
	echo "<br> Nombre produit: ".Produit::$compteur;
	echo "<br>".$prixUnite;
	echo "<br>Prix = ".$prixUnite->calcul();
	echo "<br>";
	
	$prixKilo = new ProduitKilo(10,3);
	echo "<br> Nombre produit: ".Produit::$compteur;
	echo "<br>".$prixKilo;
	echo "<br>Prix = ".$prixKilo->calcul();


?>