<?php
// !!!!!!!! INSTANCIATION    //
// !!!!!!!  OBJETS

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/ProduitKilo.php");
	require_once("src/ProduitUnite.php");

	// instanciation
	$test1 = new ProduitKilo(5,2.5);
	echo "<br>".Produit::$compteur;
	echo "<br>".$test1;
	$test2 = new ProduitKilo(10,3);
	echo "<br>".Produit::$compteur;
	echo "<br>".$test2;


	// voir ce que contient $test
	var_dump($test1);
	var_dump($test2);


	echo "<br>Prix = ".$test1->calcul();
	echo "<br>Prix = ".$test2->calcul();



?>