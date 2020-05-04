<?PHP
include "fideliteF.php";
$fideliteF1=new fideliteF();
if (isset($_POST["ref"])){
	$fideliteF1->supprimerfidelite($_POST["ref"]);
	header('Location: fidelite.php');
}

?>
