<?php
// !!!!!! DECLARATION    //
// !!!!!! CLASSE

require_once('Produit.php');
class ProduitKilo extends Produit{

	// constructeur avec parametres
	public function __construct($prix,$poid){
		parent::__construct($prix,$poid);
	}

	public function __toString(){
		return "<hr>Information :".
			"<br> Prix au Kilo : ".$this->price.
			"<br> Poids : ".$this->amount."<hr>";
	}

	public function calcul(){
		return $this->price*$this->amount;
	}











	
}



