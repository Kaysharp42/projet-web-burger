<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
session_start();
include"../config.php";	

?>
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
	
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
<?php 
require_once('../db/DbConnect.php');
            $db   = new DbConnect();
            $conn = $db->connect();

            require '../entities/customer.php';
            require '../core/customerC.php';
	    	/*$objCustomer = new customerC($conn);
	    	$objCustomer->setEmail($_SESSION['email']);
	    	//$objCustomer->getCustomerById(1);
	    	$customer = $objCustomer->getCustomerByEmailId();*/
//session_start();

	    	//$_SESSION['cid'] = $customer['id'];
	    	//$_SESSION['cid'] = $_SESSION['id'];
if(isset($_SESSION['id'])){          
            echo ('session de client id ='.$_SESSION['id']);
            require '../entities/cart.php';
            require '../core/cartC.php';
            $objCart = new cartC($conn);
			$objCart->setCid($_SESSION['id']);
			$cartItems = $objCart->getAllCartItems();
			 $cartCss = 'display: none';
        $emptyCss = 'display: block';
        if (count($cartItems) > 0) {
            $cartCss = 'display: block';
            $emptyCss = 'display: none';
        }
		}
  ?>
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
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a href="checkout.php"style="color: white;"><span class="glyphicon glyphicon-shopping-cart"></span><sup id="itemCount"><?php if(isset($_SESSION['id'])){ echo count($cartItems); } ?></sup></a>
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

************************************************
	
 <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
            <div id="result"></div>
        </div>
        <center>
    

    <div id="fullCart" class="row" style="<?=$cartCss?>">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Workshop</th>
                    <th>Seats</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                    <td>
                        <button id="clearItems" type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span> Clear
                        </button>
                    </td>
                </tr>
                </thead>
				
<?php
                    require '../entities/produit.php';
                          require '../core/produitC.php'; 
$produit= new produitC($conn);
 ?> 
                <tbody>
                    <?php 
                        $subTotal   = 0;
                        $quantity   = 0;
                        $tax        = 10;
                        foreach ($cartItems as $key => $cartItem) {
                          $subTotal += $cartItem['totalAmount'];
                          $quantity += $cartItem['quantity'];

$produit->setId($cartItem['pid']);
$produit1=$produit->getproduitById();

                                  ?>
                <tr id="item_<?= $cartItem['id']; ?>">
                    <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../back-end/<?= $cartItem['image']; ?>" style="width: 72px; height: 72px;"> </a>
                            <div style="padding-left: 10px;" class="media-body">
                                <h4 class="media-heading"><a href="#"><?= $cartItem['title']; ?></a></h4>
                               
                            </div>
                        </div>
                    </td>

                    <td class="col-sm-1 col-md-1" style="text-align: center">
                         <?php  $aze=$produit1['quantite']+1; //$aze=number_format($cartItem['quantity']); 

                         ?>

                        <select onchange="updateCart(<?= $cartItem['pid']; ?>, <?= $cartItem['id']; ?>)" class="form-control" id="seat_<?= $cartItem['id']; ?>">
                            <?php 
                                for ($i=1,$f=$aze; $i < $f ; $i++) { 
                            ?>
                            <option value="<?= $i; ?>" <?php echo ($i == $cartItem['quantity']) ? "selected" : ''; ?>><?= $i; ?></option>
                        <?php } ?>
                        </select>
 
                    </td>
                    <td class="col-sm-1 col-md-1 text-center">
                        <strong><span id="price">
<?php
$promid=$cartItem['pid'];
$sql="SELECT * from promotion where idproduit =$promid ";
$db = config::getConnexion();
$idPromo=$db->query($sql);
$prix = 0;
foreach($idPromo as $nn){
 $prix = $nn['pourcentage'];
 $date_debut=$nn['datedebut'];
 $date_fin=$nn['datefin'];
}
?>
<?php
if($prix!=0){
 ?>                        	
<del><?php echo number_format($cartItem['prix'],2)  ?> TND</del> 
                        	<?= number_format($cartItem['prix']-($cartItem['prix']*($prix/100)),2); ?> TND</span>
                        </strong>
                        <?php } ?>
<?php  if ($prix==0) {    ?>  
	<?= number_format($cartItem['prix'],2); ?> </span>
                        </strong>
<?php }  ?>
                    </td>
                    <td class="col-sm-1 col-md-1 text-center">
                        <strong><span id="totalPrice_<?= $cartItem['id']; ?>"><?= number_format( $cartItem['totalAmount'], 2 );  ?>TND</span>
                        </strong>
                    </td>
                    <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger" onclick="removeItem(<?= $cartItem['id']; ?>)">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button>
                    </td>
                </tr>
            <?php } ?>
                <tr>
                    <td colspan="4" align="right">Subtotal</td>
                    <td class="text-right">
                        <strong><span style="font-size: 18px;">&#x20b9;</span>
                            <span id="subTotal"><?= number_format( $subTotal, 2 ); ?></span>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="right">Taxes</td>
                    <td class="text-right">
                        <strong><span style="font-size: 18px;">&#x20b9;</span>
                            <span id="taxes"><?= number_format( $tax * $quantity, 2 ); ?></span>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="right">Total</td>
                    <td class="text-right">
                        <strong><span style="font-size: 18px;">&#x20b9;</span>
                            <span id="finalPrice"><?= number_format( $subTotal+($tax * $quantity), 2 ); ?></span>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="right">
                        <a href="home.php" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> buy products
                        </a>
                    </td>
                    <td >
<a href="checkoutf.php" class="btn btn-success"> Checkout <span class="glyphicon glyphicon-play"></span></a>  
                    </td>
                </tr>
                </tbody>
            </table>

   
*******************************
    <div id="emptyCart" class="row" style="<?=$emptyCss?>">
        <div class="col-md-12 text-center">
            <p><strong>Your cart is empty. <a href="home.php">Click here</a> to buy products.</strong></p>
        </div>
    </div>
	*******************************
		</div>
		</div>
		</center>
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
  
</body>
<script type="text/javascript">
    function updateCart(pId, cartId) {
        console.log($('#seat_'+cartId).val())
        $('#loader').show();
        $.ajax({
            url: "action.php",
            data: "wId=" + pId + "&action=update&quantity="+$('#seat_'+cartId).val(),
            method: "post"
        }).done(function(response) {
            console.log(response)
            var data = JSON.parse(response);
            $('#loader').hide();
            $('.alert').show();
            if(data.status == 0) {
                $('.alert').addClass('alert-danger');
                $('#result').html(data.msg);
            } else {
                $('.alert').addClass('alert-success');
                $('#result').html(data.msg);
                $('#totalPrice_'+cartId).text( data.data.totalPrice );
                $('#subTotal').text( data.data.subTotal);
                $('#taxes').text( data.data.taxes);
                $('#finalPrice').text( data.data.finalPrice);
            }
        })
    }

    function removeItem(cartId) {
        $('#loader').show();
        $.ajax({
            url: "action.php",
            data: "cartId=" + cartId + "&action=remove",
            method: "post"
        }).done(function(response) {
            console.log(response);
            var data = JSON.parse(response);
            $('#loader').hide();
            $('.alert').show();
            if(data.status == 0) {
                $('.alert').addClass('alert-danger');
                $('#result').html(data.msg);
            } else {
                $('.alert').addClass('alert-success');
                $('#result').html(data.msg);
                $('#item_'+cartId).remove();
                $('#itemCount').text( data.data.itemCount);

                if (data.data.itemCount == 0.00) {
                    $('#fullCart').hide();
                    $('#emptyCart').show();
                } else {
                    $('#subTotal').text( data.data.subTotal);
                    $('#taxes').text( data.data.taxes);
                    $('#finalPrice').text( data.data.finalPrice);
                }
            }
        })
    }

    $('#clearItems').click(function(){
        $('#loader').show();
        $.ajax({
            url: "action.php",
            data: "action=clear",
            method: "post"
        }).done(function(response) {
            console.log(response);
            var data = JSON.parse(response);
            $('#loader').hide();
            $('.alert').show();
            if(data.status == 0) {
                $('.alert').addClass('alert-danger');
                $('#result').html(data.msg);
            } else {
                $('.alert').addClass('alert-success');
                $('#result').html(data.msg);

                $('#itemCount').text( 0 );
                $('#fullCart').hide();
                $('#emptyCart').show();
            }
        })
    })

</script>
</html>