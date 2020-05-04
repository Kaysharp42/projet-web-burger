<?PHP
include "entites/categorie.php";
include "core/categoriec.php";


if (isset($_POST['id']) AND isset($_POST['nom'])) 
{

	$categorie1=new categorie($_POST['id'],$_POST['nom']);

$categorie1c=new categoriec();
$categorie1c->ajoutercat($categorie1);
header('Location: listecat.php');

	
}else{
	echo "vérifier les champs";
}
//*/



?>