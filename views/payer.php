<?php
session_start();
include"../config.php";
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Burger</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
	<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="controle.js"></script>
<link rel="stylesheet" type="text/css" href="nt.css" />
</head>

<body>

	
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="home.php">home</a></li>
                                        <li><a class="active" href="Menu.php">Menu</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                        <?php if(!isset($_SESSION['id'])){ ?>
  <script>
    $('#myModal88').modal('show');
  </script>
  <?php } ?>
   <?php if(!isset($_SESSION['id'])){ ?>
        <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>


        <?php } else{
if ($_SESSION['role']=='admin') {

    ?>
    <a href="../back-end/index.php"><span class="glyphicon glyphicon-stats" ></span></a>
<?php } ?>
    <a href="clientlog.php?action=out"><span class="glyphicon glyphicon-log-in" ></span></a>

  <?php
  }
  ?>
                                        </li>
                                    </ul>
                                </div>
                              
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->

    <div class="bradcam_area breadcam_bg overlay">
        <h3>Menu</h3>
    </div>
	<!-- //navigation -->

***************************************************
<?php 

//session_start();
echo ('session de client id ='.$_SESSION['id']);
require_once('../db/DbConnect.php');
            $db   = new DbConnect();
            $conn = $db->connect();

            require '../entities/cart.php';
            require '../core/cartC.php';
            $objCart = new cartC($conn);
			$objCart->setCid($_SESSION['id']);
 $cartItems = $objCart->getAllCartItems();
    $cartPrices = $objCart->calculatePrices($cartItems);
           require '../entities/transaction.php';
            require '../core/transactionC.php';
$objtrans= new transactionC($conn);
$objtrans->setCid($_SESSION['id']);
$objtrans->setQuantity($cartPrices['itemCount']);
$objtrans->setAmount(str_replace(',', '', $cartPrices['finalPrice']));
$objtrans->setOrderStatus(0);
$objtrans->setCreatedOn(date('Y-m-d H:i:s'));
$tId=$objtrans->saveTransaction();
/////////////////////////////////////
////////////////////////////////////
            require '../entities/produit.php';
            require '../core/produitC.php';
$produit= new produitC($conn);
if(!is_numeric($tId)){
echo"problem occured tId please try again";	
}
            require '../entities/produit_trans.php';
            require '../core/produit_transC.php';
$produit_trans= new produit_transC($conn);
foreach ($cartItems as $key => $cartItem) {
	$produit_trans->setTid($tId);
	$produit_trans->setWid($cartItem['pid']);
	$produit_trans->setQuantity($cartItem['quantity']);
/////////////////////////////////////

$produit->setId($cartItem['pid']);
$produit->setquantite($cartItem['quantity']);
//print_r($produit);
$produit1=$produit->getproduitById();
//print_r($produit1);
$tot=$produit1['quantite']-$cartItem['quantity'];
//print_r($tot);
//echo ($tot);
	$produit->setquantite($tot);
	$produit->updateqt();


////////////////////////////////////
	$produit_trans->setCreatedOn(date('Y-m-d H:i:s'));
    $orderId=$produit_trans->bookSeats();
if(!is_numeric($orderId)){
echo"problem occured  orderId please try again";	
}    
}

//$data= ' thanks for ordering &transaction id='.$tId.'&order_id='.$orderId.'&amount='.$objtrans->getAmount();
///////////////////////////////////////////////////////////////////////////////////////////////////
		if(isset($_POST['sendmail'])) {
			require '../send/PHPMailerAutoload.php';
			require '../send/credential.php';

			$mail = new PHPMailer;

		   //$mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL,'almazaya.carthage');
			$mail->addAddress($_SESSION['email']);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			/*for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}*/
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'commande ordre id '.$_SESSION['id'];
			//$mail->Body    = '<div style="border:2px solid blue;"> thanks for ordering &transaction id='.$tId.'</br> &quantite'.$objtrans->getQuantity().'<b></br> amount</b>'.$objtrans->getAmount().'</div>';

			$mail->Body ='	<div class="container">
	<table class="table table-striped">
		 	<caption><strong>products purchased</strong></caption>
		 	<thead>
		 		<tr>
		 			<th>#id</th>
		 			<th>Customer</th>
		 			<th>Quantity</th>
		 			<th>Amount</th>
		 			<th>Status</th>
		 			<th> purchase DATE</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		
		 		
		 		<tr>
		 			<td>'.$tId.'</td>
		 			<td>'.$_SESSION['nom'].'</td>
		 			<td>'.$objtrans->getQuantity().'</td>
		 			<td>'.$objtrans->getAmount().'</td>
		 			<td>'.$objtrans->getOrderStatus().'</td>
		 			<td>'.$objtrans->getCreatedOn().'</td>
		 		</tr>
		 	</tbody>
		</table></div>' ;


			$mail->AltBody = ' thanks for ordering &transaction id='.$tId.'&quantite'.$objtrans->getQuantity().'&amount='.$objtrans->getAmount();

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo ' </br> commande confirmation Message has been sent </br>';
			}
		}	
////////////////////////////////////////////////////////////////////////////////////////////////////////
require_once(__DIR__ . '/php-rest-api-master/autoload.php');

$MessageBird = new \MessageBird\Client(''); // Set your own API access key here.

$Message             = new \MessageBird\Objects\Message();
$Message->originator = 'High-T-Info';
//echo $_SESSION['tel'];
$num='+'.strval( $_SESSION['tel'] );
//echo '/'.$num;

$Message->recipients = array($num);
$Message->body       = ' merci notre  client '.$_SESSION['nom'].' de passer une commande dont id commande ='.$tId.'/ amount = '.$objtrans->getAmount().'/ quantite total produits ='.$objtrans->getQuantity();

try {
    $MessageResult = $MessageBird->messages->create($Message);
    //var_dump($MessageResult);
    echo ' </br> commande confirmation Message  to mobile '.$num.'has been sent </br>';

} catch (\MessageBird\Exceptions\AuthenticateException $e) {
    // That means that your accessKey is unknown
    echo 'wrong login';

} catch (\MessageBird\Exceptions\BalanceException $e) {
    // That means that you are out of credits, so do something about it.
    echo 'no balance';

} catch (\Exception $e) {
    echo $e->getMessage();
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////
//$data= ' thanks for ordering &transaction id='.$tId.'&quantite'.$objtrans->getQuantity().'&amount='.$objtrans->getAmount();
//echo $data;
$objCart->removeAllItems();
  
             $objTrans1 = new transactionC($conn);
	$transactions = $objTrans1->getAlltransactions();
 ?>
 ********************************************

<div class="container">
		<table class="table table-striped">
		 	<caption><strong>products purchased</strong></caption>
		 	<thead>
		 		<tr>
		 			<th>#id</th>
		 			<th>Customer</th>
		 			<th>Quantity</th>
		 			<th>Amount</th>
		 			<th>Status</th>
		 			<th> purchase DATE</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<?php 
		 			foreach ($transactions as $key => $transaction) {
		 		if($transaction['cid']==$_SESSION['id'])
		        {
		 		?>
		 		<tr>
		 			<td><a href="reportDetails.php?tid=<?= $transaction['id']; ?>"><?= $transaction['id']; ?></a></td>
		 			<td><?= $_SESSION['nom']; ?></td>
		 			<td><?= $transaction['quantity']; ?></td>
		 			<td><?= $transaction['amount']; ?></td>
		 			<td><?= $objTrans1->getOrderStatusById($transaction['orderStatus']); ?></td>
		 			<td><?= $transaction['createdOn']; ?></td>
		 		</tr>
		 	<?php  } } ?>
		 	</tbody>
		</table>
	</div>


******************************************************
	 <!-- features_room_startt -->
    <div class="Burger_President_area">
            <div class="Burger_President_here">
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="img/burgers/1.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$20</span>
                                <h3>The Burger President</h3>
                                <p>Great way to make your business appear trust <br> and relevant.</p>
                                <a href="#" class="boxed-btn3">Order Now</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="img/burgers/2.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$20</span>
                                <h3>The Burger President</h3>
                                <p>Great way to make your business appear trust <br> and relevant.</p>
                                <a href="#" class="boxed-btn3">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- features_room_end -->

    <!-- testimonial_area_start  -->
    <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        <span>Testimonials</span>
                        <h3>Happy Customers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/1.png" alt="">
                                            </div>
                                            <h4>Kristiana Chouhan</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/2.png" alt="">
                                            </div>
                                            <h4>Arafath Hossain</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/3.png" alt="">
                                            </div>
                                            <h4>A.H Shemanto</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- testimonial_area_ned  -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/1.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/2.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/3.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/4.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- instragram_area_end -->

    <!-- footer_start  -->
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                        New York
                                </h3>
                                <p>5th flora, 700/D kings road, <br> 
                                        green lane New York-1782 <br>
                                        <a href="#">info@burger.com</a></p>
                                <a class="number" href="#">+10 378 483 6782</a>

                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                    California
                                </h3>
                                <p>5th flora, 700/D kings road, <br> 
                                        green lane New York-1782 <br>
                                        <a href="#">info@burger.com</a></p>
                                <a class="number" href="#">+10 378 483 6782</a>

                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-4">
                                <div class="footer_widget">
                                        <h3 class="footer_title">
                                                Stay Connected
                                        </h3>
                                        <form action="#" class="newsletter_form">
                                            <input type="text" placeholder="Enter your mail">
                                            <button type="submit">Sign Up</button>
                                        </form>
                                        <p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
                                    </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>
  



</html>