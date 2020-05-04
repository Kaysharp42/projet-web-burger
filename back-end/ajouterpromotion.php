<?php
include"ex3.php";

$lol=new promotion('','','','','');

$idp=$_POST['idp'];

$idpr=$_POST['IDPR'];
$pourcentage=$_POST['Pourcentage'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$lol->ajouter($idp,$idpr,$date1,$date2,$pourcentage);
header("Location: promotion.php");




?>