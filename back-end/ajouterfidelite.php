<?php
include"fideliteF.php";

$lol=new fideliteF();

$idf=$_POST['idf'];

$idc=$_POST['idc'];

$pts=$_POST['pts'];

$lol->ajouterfidelite($idf,$idc,$pts);
header("Location: fidelite.php");




?>
