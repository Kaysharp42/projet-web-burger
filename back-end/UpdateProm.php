<?php

require_once "ex3.php";

$prom=new promotion("","","","","");
$idp=$_POST['idp'];
$idpr=$_POST['IDPR'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$pourcentage=$_POST['Pourcentage'];

$prom->Modifier($idp,$idpr,$date1,$date2,$pourcentage);

header('Location: promotion.php');
?>