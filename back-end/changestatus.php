<?php 
	require_once('../db/DbConnect.php');
    $db   = new DbConnect();
    $conn = $db->connect();

            require '../entities/transaction.php';
            require '../core/transactionC.php';
include"../config.php";	

$objtrans= new transactionC($conn);
$objtrans->setId($_GET['tid']);
$objtrans->setCid($_GET['cid']);
if($_GET['s']==1)
{$objtrans->setOrderStatus(0);}
else{$objtrans->setOrderStatus(1);}
$objtrans->updateTransaction();








header ('location: panier_commande.php');
 ?>