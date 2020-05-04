<?PHP
include "core/categoriec.php";
$categoriec=new categoriec();
if (isset($_POST["id"])){
	$categoriec->supprimercategorie($_POST["id"]);
	header('Location: listecat.php');
}

?>