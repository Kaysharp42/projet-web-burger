<?php
require_once "C:/wamp64/www/web/config.php";
class avisC
 {
	function ajouteravis($avis)
	{
		$sql="insert into avis (
			description,avis) values (:description,:avis)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);

        //$id=$avis->getid();
        $description=$avis->getdescription();
        $avis=$avis->getavis();

		//$req->bindValue(':id',$id);
		$req->bindValue(':description',$description);
		$req->bindValue(':avis',$avis);





            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

		function afficheravis()
	{
		//$sql="SElECT * From avis inner join formationphp.avis a on e.id= a.id";
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimeravis($id)
	{
		$sql="DELETE FROM avis where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function modifieravis($id,$nom,$prenom,$username,$adresse,$tel,$email,$password)
	{
		$db = config::getConnexion();
		$sql="UPDATE avis SET nom='".$nom."',email='".$email."',username='".$username."',adresse='".$adresse."',tel='".$tel."',password='".$password."',prenom='".$prenom."'  where id=".$id.";";
		// (,,'".$username."','".$adresse."','".$tel."','".$password."','".$nom."')where id=".$id.0;

		try
		{
        $req=$db->prepare($sql);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}


}
?>
