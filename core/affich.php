<?php
/**
 * 
 */
include "../configgg.php";

class aff
{
	
	function best_product(){

		$sql="SELECT DISTINCT b.id_product, p.prix, p.nom, p.image FROM best_product b inner join produit p where p.id=b.id_product ORDER BY b.quantity_sold DESC LIMIT 3";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
}



 ?>