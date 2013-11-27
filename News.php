<?php
require_once('content/header.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>News</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>
        <script type="text/javascript" src="js/Copse_400.font.js"></script>
        <script type="text/javascript" src="js/imagepreloader.js"></script>

        <link class="include" rel="stylesheet" type="text/css" href="js/plot/jquery.jqplot.min.css" />
        <link type="text/css" rel="stylesheet" href="js/plot/examples/syntaxhighlighter/styles/shCoreDefault.min.css" />
        <link type="text/css" rel="stylesheet" href="js/plot/examples/syntaxhighlighter/styles/shThemejqPlot.min.css" />


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
    <body id="page2">
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
                                <li class="nav2" id="active"><a href="News.php">News</a></li>
                                <li class="nav3"><a href="Services.php">Services</a></li>
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
                        <figure class="left"><img src="images/letter2.png" alt=""></figure>
                        <h2>The Latest News About <span>Our Company</span></h2>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
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
                                <h2>Latest Statistics</h2>


                                <script>
                                    $(document).ready(function(){
                                        var data =<?php
$sql = 'select sales_person, count(*) as total
from fact_sales_wide
where sales_person is not null
group by sales_person
limit 7';
$pqp->db->connectHybird(true);
$pqp->db->queryChart($sql);
?>

        var plot1 = jQuery.jqplot ('chart1', [data],
        {
            seriesDefaults: {
                // Make this a pie chart.
                renderer: jQuery.jqplot.PieRenderer,
                rendererOptions: {
                    // Put data labels on the pie slices.
                    // By default, labels show the percentage of the slice.

                    showDataLabels: true
                }
            },
            legend: { show:true, location: 'e' }
        }
    );
    });
                                </script>



                                <div id="chart1" style="width:600px; height:250px;"></div>

                                <b>
                                Comparison between Col and Row DB CRUD [Orange=>R, Blue=>C]</b><br/>
                                <script>
                                    $(document).ready(function(){
                                        var s1 = [3.05, 6.09, 5, 4];
                                        var s2 = [17, 2,5 ,3 ];
                                        var ticks = ['Select', 'Insert', 'Update', 'Delete'];

                                        plot2 = $.jqplot('chart2', [s1, s2], {
                                            seriesDefaults: {
                                                renderer:$.jqplot.BarRenderer,
                                                pointLabels: { show: true }
                                            },
                                            axes: {
                                                xaxis: {
                                                    renderer: $.jqplot.CategoryAxisRenderer,
                                                    ticks: ticks
                                                }
                                            }
                                        });

                                        $('#chart2').bind('jqplotDataHighlight',
                                        function (ev, seriesIndex, pointIndex, data) {
                                            $('#info2').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
                                        }
                                    );

                                        $('#chart2').bind('jqplotDataUnhighlight',
                                        function (ev) {
                                            $('#info2').html('Nothing');
                                        }
                                    );
                                    });
                                </script>
                                <br/><br/>
                                <div id="chart2" style="width:600px; height:250px;"></div>


                                <!-- Don't touch this! -->
                                <script class="include" type="text/javascript" src="js/plot/jquery.jqplot.min.js"></script>
                                <script type="text/javascript" src="js/plot/examples/syntaxhighlighter/scripts/shCore.min.js"></script>
                                <script type="text/javascript" src="js/plot/examples/syntaxhighlighter/scripts/shBrushJScript.min.js"></script>
                                <script type="text/javascript" src="js/plot/examples/syntaxhighlighter/scripts/shBrushXml.min.js"></script>
                                <!-- End Don't touch this! -->

                                <script type="text/javascript" src="js/jqplot.pieRenderer.min.js"></script>
                                <script type="text/javascript" src="js/jqplot.donutRenderer.min.js"></script>
                                <script class="include" type="text/javascript" src="js/plot/plugins/jqplot.barRenderer.min.js"></script>
                                <script class="include" type="text/javascript" src="js/plot/plugins/jqplot.pieRenderer.min.js"></script>
                                <script class="include" type="text/javascript" src="js/plot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
                                <script class="include" type="text/javascript" src="js/plot/plugins/jqplot.pointLabels.min.js"></script>



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