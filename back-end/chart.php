<?php
session_start(); 
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
    $link = new \PDO(   'mysql:host=localhost;dbname=webb;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
    
    $handle = $link->prepare('select createdOn, quantity from commandes_p group by createdOn'); 
    $handle->execute(); 
    $result = $handle->fetchAll(PDO::FETCH_OBJ);
        
    foreach($result as $row){
        array_push($dataPoints, array("label"=> $row->createdOn, "y"=> $row->quantity));
    }
    $link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
    
?>













<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Charts</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="css/premiere_ligne.css">

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
    <script type="text/javascript">
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light1", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "COMMANDES"
    },
    data: [{
        type: "column", //change type to bar, line, area, pie, etc  
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li >
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                          <a href="table.php">
                            <i class="fas fa-table"></i>Gerer Clients</a>
                        </li>
                        <li >
                            <a href="statistiquesClient.php">
                                <i class="fas fa-table"></i>statistique commande hh</a>
                        </li>                        
<li >
                            <a href="produit.php">
                                <i class="fas fa-tachometer-alt"></i>Add Product</a>
                            
                        </li>


 <li>
                            <a href="listeprod.php">
                                <i class="fas fa-chart-bar"></i>Liste produits</a>
                        </li>



<li>
                            <a href="categorie.php">
                                <i class="fas fa-tachometer-alt"></i>Add Categorie</a>
                            
                        </li>



                        <li>

                        <a href="categorie.html">
                                <i class="fas fa-chart-bar"></i>Liste categorie</a>
                        </li>
                         <li>
                            <a href="panier_commande.php">
                                <i class="fas fa-table"></i>panier_commande</a>
                        </li>
                         <li>
<a href="promotion.php">
<i class="far fa-check-square"></i>Promotion</a>
</li>
<li>
<a href="fidelite.php">
<i class="fas fa-calendar-alt"></i>Fidelite</a>
</li>
<li class="active">
<a href="chart.php">
<i class="fas fa-chart-bar"></i>statistiques</a>
</li>  
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Mailbox</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                    
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>mohamed jbali</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>anwer mosbah</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p> reclamation number 111 </p>
                                                    <span>mourouj 1 , 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>reclamation number 127</p>
                                                    <span>ariana , Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>reclamation number 124</p>
                                                    <span>el kram, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">november 5, 2019 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>client  account  has been blocked</p>
                                                    <span class="date">november 4, 2019 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">november 6, 2019 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/<?php echo ($_SESSION['prenom']);?>.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo ($_SESSION['prenom']);?> <?php echo ($_SESSION['nom']);?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/<?php echo ($_SESSION['prenom']);?>.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo ($_SESSION['prenom']);?> <?php echo ($_SESSION['nom']);?></a>
                                                    </h5>
                                                    <span class="email"><?php echo ($_SESSION['email']);?> </span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
             
             <?PHP
include "../core/statC.php";
$stat1C=new statC();
$stat2C=new statC();
$stat3C=new statC();
$stat4C=new statC();
$A=new statC();
$B=new statC();
#$C=new statC();
$A->A();
$B->B();
#$C->C();
$listeBestcustomer=$stat1C->Abest_customer();
#$listeBestcategorie=$stat2C->Abest_categorie();
$listeBestproduct=$stat3C->Abest_product();
#$total_sold=$stat4C->total_gain();
#echo  $total_sold[0];
?>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div >
                            <table class="solds" cellpadding="75%" border="2">
                                <tr>
                                    <td>
                                        <table  cellpadding="75%" align="left">
                                            <tr><td>$</td></tr>
                                            <tr><td>TND    2150</td></tr>
                                            <tr><td>Total earnings</td></tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </br>
                    <div class="copyright">
                                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                </div>
                    <div id="HTMLtoPDF">
                        <h5 >Best product</h5>
                        
                             
                            <table align="center" cellpadding="15%" border="2" width="600px">
                                <tr class="premiere_ligne">
                                    <td align="center">ID product</td>
                                    <td align="center">Name</td>
                                    <td align="center">Quantity sold</td>
                                    <td align="center">Price</td>
                                    <td align="center">Sales</td>
                                </tr>
    <?PHP
foreach($listeBestproduct as $row1){
    ?>
                                <tr align="center">
                                    <td><?PHP echo $row1['id_product']; ?></td>
                                    <td><?PHP echo $row1['name']; ?></td>
                                    <td><?PHP echo $row1['quantity_sold']; ?></td>
                                    <td><?PHP echo $row1['price_sold']; ?></td>
                                    <td><?PHP echo $row1['sales']; ?></td>
                                </tr>
<?PHP
}
?>
                             </table>
                           
                         </br> </br>
                            <h5 >Best customers</h5>
                          

                            <table align="center" cellpadding="15%" border="2" width="600px">
                                <tr class="premiere_ligne">
                                    <td align="center">ID customer</td>
                                    <td align="center"> First name</td>
                                    <td align="center">Last name</td>
                                    <td align="center">Email</td>
                                    <td align="center">Money spent</td>
                                </tr>
    <?PHP
foreach($listeBestcustomer as $row){
    ?>
                                <tr align="center">
                                    <td><?PHP echo $row['id_customer']; ?></td>
                                    <td><?PHP echo $row['first_name']; ?></td>
                                    <td><?PHP echo $row['last_name']; ?></td>
                                    <td><?PHP echo $row['email']; ?></td>
                                    <td><?PHP echo $row['money_spent']; ?></td>
                                </tr>
<?PHP
}
?>
                             </table>
                           
                       
                       </br> </br>
                             <h5 >Best categorie</h5>
                             
                             
                                 <table align="center" cellpadding="15%" border="2" width="600px" >
                                <tr class="premiere_ligne">
                                    <td align="center">ID categorie</td>
                                    <td align="center">name</td>
                                    <td align="center">Total sold</td>
                                </tr>
   
                             </table>
                         </div>
                           <a href="#" onclick="HTMLtoPDF ()"> Imprimer</a> 
                            </br> </br> 
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 IDEART. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/jspdf.js"></script>
    <script src="js/jquery-2.13.js"></script>
    <script src="js/pdfFromHTML.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


</body>

</html>
<!-- end document-->
