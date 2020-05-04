<?php 
include "config.php";
require
           require '../entities/transaction.php';
            require '../core/transactionC.php';

$id = $_POST['id'];

if($id > 0){

	// Check record exists
	$checkRecord = mysqli_query($con,"SELECT * FROM commandes WHERE id=".$id);
	//$totalrows = mysqli_num_rows($checkRecord);
if($checkRecord->getOrderStatus()==0){$checkRecord->setOrderStatus(0);}
//if($totalrows > 0){
		// Delete record
		//$query = "DELETE FROM commandes WHERE id=".$id;
		//mysqli_query($con,$query);
		

		echo 1;
		exit;
	//}
}

echo 0;
exit;






?>