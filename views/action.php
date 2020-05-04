<?php 
session_start();
include"../config.php";	
		

	if (isset($_POST['action'])) {
    
		require_once('../db/DbConnect.php');
        $db   = new DbConnect();
        $conn = $db->connect();

        require "../entities/cart.php";
        require "../core/cartC.php";

        require "../entities/produit.php";
        require "../core/produitC.php";

		if (isset($_POST['wId'])) {
			$objproduit = new produitC($conn);
			$objproduit->setId($_POST['wId']);
			$produit = $objproduit->getproduitById();

		}
    	
    	$objCart = new cartC($conn);

		switch ($_POST['action']) {
			case 'add':
      			
               $objCart->setCid($_SESSION['id']);
			 	$objCart->setPid($produit['id']);
			 	$objCart->setTitle($produit['nom']);
			 	$objCart->setQuantity(1);
			 	$promid=$produit['id'];
$sql="SELECT * from promotion where idproduit =$promid ";
$db = config::getConnexion();
$idPromo=$db->query($sql);
$prix = -1;
foreach($idPromo as $nn){
 $prix = $nn['pourcentage'];
 $date_debut=$nn['datedebut'];
 $date_fin=$nn['datefin'];
}
if($prix!=-1){         $objCart->setTotalAmount($produit['prix']-($produit['prix']*($prix/100)));}
else{			$objCart->setTotalAmount($produit['prix']); }

			 	if($objCart->addItem()) {
			 		echo json_encode( ["status" => 1, "msg" => "Added to cart."] );
					exit;
			 	} else {
			 		echo json_encode( ["status" => 0, "msg" => "Opps!! Something went wrong."] );
					exit;
			 	}

				break;

            case 'update':
		    	$objCart->setCid($_SESSION['id']);
			 	$objCart->setPid($produit['id']);
			 	$objCart->setQuantity($_POST['quantity']);
			 	$promid=$produit['id'];
$sql="SELECT * from promotion where idproduit =$promid ";
$db = config::getConnexion();
$idPromo=$db->query($sql);
$prix = -1;
foreach($idPromo as $nn){
 $prix = $nn['pourcentage'];
 $date_debut=$nn['datedebut'];
 $date_fin=$nn['datefin'];
}
if($prix!=-1){        $objCart->setTotalAmount(($produit['prix']-($produit['prix']*($prix/100)))*$_POST['quantity']);
 }
else{			$objCart->setTotalAmount($produit['prix']*$_POST['quantity']); }

			 	

			 	if($objCart->updateItem()) {
			 		$data = $objCart->calculatePrices();

			 		echo json_encode( ["status" => 1, "msg" => "Cart updated.", 'data' => $data] );
					exit;
			 	} else {
			 		echo json_encode( ["status" => 0, "msg" => "Opps!! Something went wrong."] );
					exit;
			 	}

				break;

			case 'remove':
		    	$objCart->setCid($_SESSION['id']);
			 	$objCart->setId($_POST['cartId']);

			 	if($objCart->removeItem()) {
			 		$data = $objCart->calculatePrices();

			 		echo json_encode( ["status" => 1, "msg" => "Cart item deleted.", 'data' => $data] );
					exit;
			 	} else {
			 		echo json_encode( ["status" => 0, "msg" => "Opps!! Something went wrong."] );
					exit;
			 	}

				break;

			case 'clear':
		    	$objCart->setCid($_SESSION['id']);
			 	
			 	if($objCart->removeAllItems()) {

			 		echo json_encode( ["status" => 1, "msg" => "Cart is clear."] );
					exit;
			 	} else {
			 		echo json_encode( ["status" => 0, "msg" => "Opps!! Something went wrong."] );
					exit;
			 	}

				break;
			default:
				# code...
				break;
		}
	} else {
		header('location: index.php');
	}
 ?>