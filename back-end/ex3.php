<?php



class promotion
{

private $idp;
private $idpr;
private $date1;
private $date2;
private $pourcentage;	
public function __construct($idp,$idpr,$date1,$date2,$pourcentage)
	{
		$this->idp=$idp;
		$this->idpr=$idpr;
		$this->date1=$date1;
		$this->date2=$date2;
		$this->pourcentage=$pourcentage;
	}
function getidp()
{
return ($this->idp);	
}



function affichez()
{
$host='localhost';
$user2='root';
$pass='';
$db='webb';
$occ=0;
$co = new PDO("mysql:host=$host;dbname=$db", $user2, $pass);
$sql = "SELECT * FROM promotion  ";
$list=$co->query($sql);
return $list;

}
 
    function getPromotion($id)
    {
        $host='localhost';
        $user2='root';
        $pass='';
        $db='webb';
        $occ=0;
        $co = new PDO("mysql:host=$host;dbname=$db", $user2, $pass);
        $sql = "SELECT * FROM promotion where idpromotion='".$id."'";
        $list=$co->query($sql);
        return $list;
        
    }
    
function Supprimez($idp)
{
$host='localhost';
$user2='root';
$pass='';
$db='webb';

$co = new PDO("mysql:host=$host;dbname=$db", $user2, $pass);
$sql = "DELETE FROM promotion  WHERE idpromotion = $idp";
$query=$co->prepare($sql);
$query->execute();
$etat = $query->rowCount();

} 

function Modifier($idp,$idpr,$date1,$date2,$pourcentage)
{
$host='localhost';
$user2='root';
$pass='';
$db='webb';

$co = new PDO("mysql:host=$host;dbname=$db", $user2, $pass);
$sql = "UPDATE promotion SET idproduit='$idpr' , datedebut='$date1' ,datefin='$date2' , pourcentage='$pourcentage' WHERE idpromotion='$idp'";
$query=$co->prepare($sql);
$query->execute();
$etat = $query->rowCount();
header("Location: affichezpromotion.php");
}

function ajouter($idp,$idpr,$date1,$date2,$pourcentage)
{
$host='localhost';
$user2='root';
$pass='';
$db='webb';
$co = new PDO("mysql:host=$host;dbname=$db", $user2, $pass);
$holy=" INSERT INTO promotion (idpromotion,idproduit,datedebut,datefin,pourcentage) values ('$idp','$idpr','$date1','$date2','$pourcentage')";
$query=$co->prepare($holy);
$query=$co->query($holy);

}


function calculer()
{
return $this->pourcentage*$this->date2;
}




}

//$employer=new employer('113855320','mohamed','messaoudi',13,250);

//$employer->affichez();
//$trash=$employer->calculer();
//echo "</br>";
//echo "Le pourcentage est ".$trash;


?> 
