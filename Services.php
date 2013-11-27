<?php
require_once('content/header.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Services</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>
        <script type="text/javascript" src="js/Copse_400.font.js"></script>
        <script type="text/javascript" src="js/imagepreloader.js"></script>
        <script type="text/javascript">
            preloadImages([
                'images/menu1_active.gif',
                'images/menu2_active.gif',
                'images/menu3_active.gif',
                'images/menu4_active.gif',
                'images/menu5_active.gif']);
        </script>
        <!--[if lt IE 9]>
                <script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
                <script type="text/javascript" src="js/html5.js"></script>
        <![endif]-->
    </head>
    <body id="page3">
        <div class="body1">
            <div class="body2">
                <div class="main">
                    <!-- header -->
                    <header>
                        <div class="wrapper">
                            <h1><a href="index.php" id="logo">First</a></h1>
                            <div class="right">
                                <nav>
                                    <ul id="top_nav">
                                        <li><a href="#">User Area</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                    </ul>
                                    <form id="search" method="post">
                                        <div>
                                            <input type="submit" class="submit" value="">
                                            <input type="text" class="input">
                                        </div>
                                    </form>
                                </nav>
                            </div>
                        </div>
                        <nav id="menu">
                            <ul>
                                <li class="nav1"><a href="index.php">Home</a></li>
                                <li class="nav2"><a href="News.php">News</a></li>
                                <li class="nav3" id="active"><a href="Services.php">Services</a></li>
                                <li class="nav4"><a href="Products.php">Products</a></li>
                                <li class="nav5"><a href="Contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
        <!-- / header -->
        <!-- content -->
        <div class="body5">
            <div class="body6">
                <div class="main">
                    <div class="wrapper">
                        <figure class="left"><img src="images/letter3.png" alt=""></figure>
                        <h2>Database contains 10 000 000 records: <span>For Your</span></h2>
                        We have 10 000 000 records of fact sales wide table saved in InfiniDB database.
                        You can search by any of the following VIN: <br/>
                        JHA31378351921141, JHA313783X1607085 , JHA313783X1519395 ,
                        JHA313783Y1867861, JHA31378311447615 , JHA31378311366104 ,
                        JHA31378361943378 , JHA31378321963580 or JHA313783Q1133300.
                    </div>
                </div>
            </div>
        </div>
        <div class="body7">
            <div class="main">
                <section id="content">

                    <div class="wrapper">
                        <article class="col2">
                            <div class="pad1">
                                <h2>Our Hybird Services 20 000 000 records</h2>
                                <br/>
                                <form id="ContactForm" method="get">
                                    <div>
                                        <div  class="wrapper">
                                            <strong>VIN:</strong>
                                            <div class="bg">
                                                <input name="searchH"  type="text" class="input" value='<?php echo $_GET["search"] ?>'></div>
                                            <a href="#" class="button" onClick="document.getElementById('ContactForm').submit()"><span><span>Search</span></span></a>
                                        </div>                                      

                                    </div>
                                </form>
                            </div>

                        </article>
                        <article class="col2">

                            <?php
                            //if has search key
                            if(!empty ($_GET["searchH"]) || (!empty ($_GET["searchR"])) ) {
                                if(!empty ($_GET["searchH"])) {
                                    $sql = 'select vin , sales_person, sales_commission ,sales_discount  from fact_sales_wide  where vin = "'
                                        . $_GET["searchH"] . '"';
                                    echo ' <div class="pad1"><h2>Our Hybird Services</h2></div>';
                                    $pqp->db->connectHybird(true);
                                    $pqp->db->query($sql);
                                }

                                if(!empty ($_GET["searchR"])) {
                                    $sql = 'select vin , sales_person, sales_commission ,sales_discount  from _fact_sales_wide  where vin = "'
                                        . $_GET["searchR"] . '"';
                                    echo ' <div class="pad1"><h2>Our Normal Services</h2></div>';
                                    $pqp->db->connectRow(true);
                                    $pqp->db->query($sql);
                                }
                            }else { ?>
                            <div class="box2" style="margin-top: 25px;">
                                <div class="box2_top">
                                    <div class="box2_bot">
                                        <div class="pad">
                                            <div class="wrapper">
                                                <figure class="left"><img src="images/marker_1.gif" alt=""></figure>
                                                <div class="cols">
                                                    <a href="#">The Result of Query will be displayed here as the following:</a>
                                                    The vin is ???? <br/>
                                                    The Sales Person is ???? <br/>
                                                    The Sales Discount is ???? <br/>
                                                    The Sales Commission is ???? 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </article>
                            <article class="col2">
                            <div class="pad1">
                                <h2>Our Normal Services 10 000 000 records </h2>
                                <br/>
                                <form id="ContactForm2" method="get">
                                    <div>
                                        <div  class="wrapper">
                                            <strong>VIN:</strong>
                                            <div class="bg">
                                                <input name="searchR"  type="text" class="input" value='<?php echo $_GET["search"] ?>'></div>
                                            <a href="#" class="button" onClick="document.getElementById('ContactForm2').submit()"><span><span>Search</span></span></a>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </article>
                        <article class="col1 pad_left1" style="margin-top: -250px;">
                            <h2>Advantages of Columnar DB</h2>
                            <ul class="list2">
                                <li><a href="#"><img src="images/icon1.jpg" alt="">Real Time Analytics</a></li>
                                <li><a href="#"><img src="images/icon2.jpg" alt="">Cost Effective</a></li>
                                <li><a href="#"><img src="images/icon3.jpg" alt="">Fast</a></li>
                                <li><a href="#"><img src="images/icon4.jpg" alt="">Safer</a></li>
                                <li class="bg_none"><a href="#"><img src="images/icon5.jpg" alt="">Time, safety, premises</a></li>
                            </ul>
                            <div class="box1">
                                <div class="box1_bot">
                                    <div class="box1_top">
                                        <div class="pad">
                                            <h2>Newsletter</h2>
										Sign up for weekly newsletter:
                                            <form id="sign_up" method="post">
                                                <div>
                                                    <input type="text" class="input">
                                                    <a href="#" onClick="document.getElementById('sign_up').submit()">Sign up</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>
        <!-- / content -->
        <!-- footer -->
        <div class="body8">
            <div class="body9">
                <div class="main">
                    <footer>
                        <div class="col_1">
                            <h3>Social Networks</h3>
                            <ul class="list3">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Flickr</a></li>
                                <li><a href="#">Blogger</a></li>
                            </ul>
                        </div>
                        <div class="col_2 pad_left1">
                            <h3>Quick Solutions</h3>
                            <div class="wrapper">
                                <ul class="list3 col_1">
                                    <li><a href="#">Management Consulting</a></li>
                                    <li><a href="#">Policy and Regulatory</a></li>
                                    <li><a href="#">Market Assessment</a></li>
                                    <li><a href="#">Program Management</a></li>
                                </ul>
                                <ul class="list3 col_1 pad_left1">
                                    <li><a href="#">Regulatory Support</a></li>
                                    <li><a href="#">Risk Assessment</a></li>
                                    <li><a href="#">Change Management</a></li>
                                    <li><a href="#">Info Technology</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_3">
                            <a href="index.php" id="footer_logo">First</a>
                            <p class="center"><a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">Website template</a><br/>designed by TemplateMonster.com</p>
                            <p class="center"><a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">3D Models</a><br/>provided by Templates.com</p>
                        </div>
                    </footer>
                </div>
                <!-- / footer -->
            </div>
        </div>
        <script type="text/javascript"> Cufon.now(); </script>
        <?php require_once('content/footer.php'); ?>