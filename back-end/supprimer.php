<?PHP
include "core/produitc.php";
$produitc=new produitc();
if (isset($_POST["id"])){
	$produitc->supprimerproduit($_POST["id"]);
	header('Location: listeprod.php');
}

?>