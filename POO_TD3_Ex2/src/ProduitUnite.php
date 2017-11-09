<?php
// !!!!!! DECLARATION    //
// !!!!!! CLASSE

require_once('Produit.php');
class ProduitUnite extends Produit{

	// constructeur avec parametres
	public function __construct($prix,$nbProduit){
		parent::__construct($prix,$nbProduit);
	}

	public function __toString(){
		return "<hr>Information :".
			"<br> Prix à l'unité : ".$this->price.
			"<br> Quantité : ".$this->amount."<hr>";
	}

	public function calcul(){
		return $this->price*$this->amount;
	}










	
}



