<?php
require_once('content/header.php');
?>

<!--
<div id="login">
    <div id="logintxtblank">
        <div id="loginheading">
            <h4>Search By:</h4>
        </div>
        <form>
            <center style="margin-left: 50px;">
                <div id="username" style="width:200px">VIN of fact_sales_wide:</div>
                <div id="input">
                    <label>
                        <input name="search" type="text" class="input" id="textfield" value="" />
                    </label>
                </div>
                <div id="loginbutton">
                    <input type="submit" value="Search"/>
                </div>
            </center>
        </form>
    </div>
</div>

<div id="contentmid">
    <div class="midheading">
        <h2>
            HybirdProright database 20 000 000 records:
        </h2>
    </div>


    <div class="midtxt"><span class="midboldtxt">
            We have 20 000 000 records of fact sales wide table saved in HybirdProright database
        </span><br />
        
    </div>




    <div class="midheading" style="margin-top:100px">
        <h2>
            My Sql database 10 000 000 records:
        </h2>
    </div>
    <div class="midtxt"><span class="midboldtxt">
            We have 10 000 000 records of fact sales wide table saved in MySQl database
        </span><br />
        You can search by any of the following VIN: <br/>
        JHA31378351921141, JHA313783X1607085 , JHA313783X1519395 ,
        JHA313783Y1867861, JHA31378311447615 , JHA31378311366104 ,
        JHA31378361943378 , JHA31378321963580 or JHA313783Q1133300.
    </div>

<?php
if(!empty ($_GET["search"])) {
//                            $sql = 'select vin , sales_person   from _fact_sales_wide where vin = "' . $_GET["search"] . '"';
//                            $pqp->db->query($sql);
}
?>
</div>


 start new design-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>
        <script type="text/javascript" src="js/Copse_400.font.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="js/imagepreloader.js"></script>
        <script type="text/javascript">
            preloadImages([
                'images/menu1_active.gif',
                'images/menu2_active.gif',
                'images/menu3_active.gif',
                'images/menu4_active.gif',
                'images/marker_right_active.jpg',
                'images/marker_left_active.jpg',
                'images/menu5_active.gif']);
        </script>
        <!--[if lt IE 9]>
                <script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
                <script type="text/javascript" src="js/html5.js"></script>
        <![endif]-->
    </head>
    <body id="page1">
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
                                <li class="nav1" id="active"><a href="index.php">Home</a></li>
                                <li class="nav2"><a href="News.php">News</a></li>
                                <li class="nav3"><a href="Services.php">Services</a></li>
                                <li class="nav4"><a href="Products.php">Products</a></li>
                                <li class="nav5"><a href="Contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
        <div class="body3">
            <div class="body4">
                <div class="main">
                    <div class="slogan">
                        <div id="slider">
                            <img src="images/text1.jpg" alt="">
                            <img src="images/text2.jpg" alt="">
                            <img src="images/text3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header -->
        <!-- content -->
        <div class="body5">
            <div class="body6">
                <div class="main">
                    <div class="wrapper">
                        <figure class="left"><img src="images/letter1.png" alt=""></figure>
                        <h2>Welcome to <span>First Company</span>!</h2>
					First is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website templates</a> created by TemplateMonster.com. This website template is optimized for 1024 X 768 res. It is <br>
							also XHTML &amp; CSS valid. This template goes with two packages – with PSD source files and without them.
                    </div>
                </div>
            </div>
        </div>
        <div class="body7">
            <div class="main">
                <section id="content">
                    <div class="wrapper">
                        <article class="col1">
                            <div class="box1"><div class="box1_bot"><div class="box1_top">
                                        <div class="pad"><div class="pad1">
                                                <h2 class="center">Think.</h2>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                                <div class="wrapper center">
                                                    <a href="#" class="button"><span><span>More</span></span></a>
                                                </div>
                                            </div></div>
                                    </div></div></div>
                        </article>
                        <article class="col1 pad_left1">
                            <div class="box1"><div class="box1_bot"><div class="box1_top">
                                        <div class="pad">
                                            <div class="pad1">
                                                <h2 class="center">Choose.</h2>
                                                <p>Veritatis quasi architecto beatae bitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                                                <div class="wrapper center">
                                                    <a href="#" class="button"><span><span>More</span></span></a>
                                                </div>
                                            </div></div>
                                    </div></div></div>
                        </article>
                        <article class="col1 pad_left1">
                            <div class="box1"><div class="box1_bot"><div class="box1_top">
                                        <div class="pad">
                                            <div class="pad1">
                                                <h2 class="center">Succeed.</h2>
                                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                                <div class="wrapper center">
                                                    <a href="#" class="button"><span><span>More</span></span></a>
                                                </div>
                                            </div></div>
                                    </div></div></div>
                        </article>
                    </div>
                    <div class="wrapper">
                        <article class="col2">
                            <div class="pad1">
                                <h2>Features Overview</h2>
                                <p class="pad_bot1">This <a href="http://blog.templatemonster.com/2011/02/28/free-website-template-efficient-business/" target="_blank" rel="nofollow">Free Business Website Template</a> goes with two packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplateMonster.com. The basic package (without PSD source is available for anyone without registration).</p>
                                <p class="pad_bot2">
									This website template has several pages: Home, News, Services, Products, Contact (note that contact us form – doesn’t work).</p>
                                <div class="wrapper line1 marg_bot1">
                                    <ul class="col1 list1">
                                        <li><a href="#">Sed ut perspiciatis unde omnis</a></li>
                                        <li><a href="#">Accusantium doloremque laudantium</a></li>
                                        <li><a href="#">Aperiam eaque ipsa quae</a></li>
                                        <li><a href="#">Beatae vitae dicta explicabo minima</a></li>
                                        <li><a href="#">Nemo enim ipsam voluptatem</a></li>
                                    </ul>
                                    <ul class="list1 pad_left1 left">
                                        <li><a href="#">Neque porro quisquam est qui</a></li>
                                        <li><a href="#">Dolorem ipsum quia dolor sit amet</a></li>
                                        <li><a href="#">Consectetur, adipisci velit</a></li>
                                        <li><a href="#">Numquam emodi tempora incidnt</a></li>
                                        <li><a href="#">Magnam aliquam quaerat</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="button"><span><span>Read More</span></span></a>
                            </div>
                        </article>
                        <article class="col1 pad_left1">
                            <h2>Advantages</h2>
                            <ul class="list2">
                                <li><a href="#"><img src="images/icon1.jpg" alt="">Starting up</a></li>
                                <li><a href="#"><img src="images/icon2.jpg" alt="">Finance and grants</a></li>
                                <li><a href="#"><img src="images/icon3.jpg" alt="">Taxes, returns &amp; payroll</a></li>
                                <li><a href="#"><img src="images/icon4.jpg" alt="">Employment &amp; skills</a></li>
                                <li class="bg_none"><a href="#"><img src="images/icon5.jpg" alt="">Health, safety, premises</a></li>
                            </ul>
                            <div class="box1"><div class="box1_bot"><div class="box1_top">
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
                                    </div></div></div>
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
                            <p class="center"><a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">Website template</a><br/>
							designed by TemplateMonster.com</p>
                            <p class="center">
                                <a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">3D Models</a><br/>
							provided by Templates.com</p>
                        </div>
                    </footer>
                </div>
                <!-- / footer -->
            </div>
        </div>
        <script type="text/javascript"> Cufon.now(); </script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider({
                    effect:'sliceDown', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
                    slices:20,
                    animSpeed:300,
                    pauseTime:9999999999,
                    startSlide:0, //Set starting Slide (0 index)
                    directionNav:true, //Next & Prev
                    directionNavHide:false, //Only show on hover
                    controlNav:false, //1,2,3...
                    controlNavThumbs:false, //Use thumbnails for Control Nav
                    controlNavThumbsFromRel:false, //Use image rel for thumbs
                    controlNavThumbsSearch: '.jpg', //Replace this with...
                    controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
                    keyboardNav:true, //Use left & right arrows
                    pauseOnHover:true, //Stop animation while hovering
                    manualAdvance:false, //Force manual transitions
                    captionOpacity:1, //Universal caption opacity
                    beforeChange: function(){},
                    afterChange: function(){},
                    slideshowEnd: function(){} //Triggers after all slides have been shown
                });

            });
        </script>
<?php require_once('content/footer.php'); ?>