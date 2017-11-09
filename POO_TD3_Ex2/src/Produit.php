<?php 


abstract class Produit
{
   protected  $price = 0;

   protected $amount = 0;

   public static $compteur = 0 ;

	public function __construct($price, $amount) {
		$this->price = $price;
		$this->amount = $amount;

      self::$compteur++;
	}

   public abstract function calcul();  

}

?>

