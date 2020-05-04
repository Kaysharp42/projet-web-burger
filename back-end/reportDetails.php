<?php 
	require_once('../db/DbConnect.php');
    $db   = new DbConnect();
    $conn = $db->connect();

            require '../entities/produit_trans.php';
            require '../core/produit_transC.php';
                $objproduit_trans = new produit_transC($conn);
    $objproduit_trans->settId($_GET['tid']);
	$produit_transs = $objproduit_trans->getproduit_transsByTid();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../library/css/bootstrap.min.css">
<link rel="stylesheet" id="font-awesome-style-css" href="http://phpflow.com/code/css/bootstrap3.min.css" type="text/css" media="all">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
     
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>gesion panier-commande</title>
    <link rel="icon" href="images/icone.ico">


    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
<link href='style.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='script.js' type='text/javascript'></script>
             <br><script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>    

 <link href='style.css' rel='stylesheet' type='text/css'>
        <script src='script.js' type='text/javascript'></script>
</head>
<body>
	<div class="container">
		 	<caption><strong>commande detaillée</strong></caption>

		<table class="table table-striped" cellpadding="10%">
		 	<thead>
		 		<tr>
		 			<th>#id</th>
		 			<th>Title</th>
		 			<th>Quantity</th>
		 			<th>Amount</th>
		 			<th>bought By</th>
		 			<th>purchase  Date</th>
		 			<th><a href="panier_commande.php">go back</a></th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<?php 
		 			foreach ($produit_transs as $key => $produit_trans) {
		 		?>
		 		<tr>
		 			<td><?= $produit_trans['id']; ?></td>
		 			<td><img width="60" height="30" src="../back-end/<?= $produit_trans['image']; ?>"></td>
		 			<td><?= $produit_trans['quantity']; ?></td>
		 			<td><?= ($produit_trans['quantity'] * $produit_trans['prix']); ?></td>
		 			<td><?= $produit_trans['nom']; ?></td>
		 			<td><?= $produit_trans['createdOn']; ?></td>
		 		</tr>
		 	<?php } ?>
		 	</tbody>
		</table>
	</div>

</body>
</html>