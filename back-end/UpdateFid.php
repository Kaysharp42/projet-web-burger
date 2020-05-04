<?php

require_once "fideliteF.php";

$prom=new fideliteF();
$ref=$_POST['ref'];
$idc=$_POST['idc'];
$pts=$_POST['pts'];


$prom->modifierFidelite($ref,$idc,$pts);

header('Location: fidelite.php');
?>
