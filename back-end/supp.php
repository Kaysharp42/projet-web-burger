<?php
require_once "ex3.php";

$pr=new promotion('','','','','');

$pr->Supprimez($_POST['idpr']);

header('Location: promotion.php');


?>