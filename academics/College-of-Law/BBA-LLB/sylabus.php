<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."";/*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristu Jayanti College, Bengaluru</title>
    <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
    <meta name="author" content="Three38 inc" />
    <link rel="shortcut icon" href="../../../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../../../css/component.css" />
    <link rel="stylesheet" href="../../../css/font-awesome.css">
    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../css/roundIcons.css">
    <link rel="stylesheet" href="../../../css/hoverEffect.css">
    <link rel="stylesheet" href="../../../css/morphing.css">
    <link rel="stylesheet" href="../../../css/navTabs.css">
    <link rel="stylesheet" href="../../../css/animate.css">
    <link rel="stylesheet" href="../../../css/fakeLoader.css">
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../../../css/custom.css" rel="stylesheet">
    <link href="../../../css/innerpage.css" rel="stylesheet">
    <link href="../css/law.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../../../js/jquery-1.11.0.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../js/respond.js"></script>
    <script src="../../../js/custom.js"></script>
    <script src="../../../js/fakeLoader.js"></script>
    <style>
        .link-arrow a.a-link-arrow::before {
            left: 0px;
            z-index: -1;
            width: 100%;
            background: #f3f3f3;
        }
        
        .link-arrow {
            /* background: rgba(149,165,166,0.4); */
            background: rgba(255, 255, 255, 0);
        }
        
        .link-arrow a.a-link-arrow {
            left: 10px;
        }
        
        .menu-list ul li {
            background: transparent;
        }
        
        .side-menu {
            background: transparent;
        }
        
        .content-right {
            background: transparent;
            box-shadow: none;
        }

    </style>
</head>

<body>
    
    <div id="fakeLoader"></div>
    <script>
        $("#fakeLoader").fakeLoader({
            timeToHide: 2000,
            bgColor: "#2c3e50",
            spinner: "spinner4"
        });

    </script>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=578768295582897";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
    <div class="container-fluid">
        <div class="row">
            <?php include ('php/navbar.php');  ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include('../../../php/offCanvasMenu.php'); ?>
        <!-- content push wrapper -->
        <div class="st-pusher">
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">
                    <div class="container">
                        <!--        <div class="row">-->
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn">
                                    <img src="../../../images/clg_history.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                  
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
										<span>&nbsp;<font size="5">B.B.A., LL.B.</font><strong>Sylabus</strong></span>
                                    </h4>

                              
                                    <p align="justify">
                                        
                                        Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph's Province of the Carmelites of Mary Immaculate (CMI), the first indigenous religious congregation in India. This congregation is the embodiment of the dream and vision of Saint Kuriakose Elias Chavara who was a nineteenth century educationist and social reformer in India. Kuriakose Chavara was born in 1805, in Kainakary, Kerala. In 1829 he was ordained as priest after his early schooling in the native village and priestly studKristu Jayanti College Founderies at Pallipuram seminary in Alapuzha.
                                    </p>
                                    <p align="justify">
                                        Kuriakose Elias Chavara though he hailed from an upper caste Syrian Christian family, he played a major role in educating the people of the lower ranks of society. In 1846, Kuriakose Elias established St. Joseph's Press at Mannanam- a remote hamlet near the town of Kottayam in Central Kerala. This was the third printing press in Kerala and the first press founded by a Keralite without the help of foreigners. From this printing press came the first Malayalam newspaper Nasrani Deepika which later became a daily in 1887 and is circulated even today as Deepika. He also started a school at Mannanam in 1846. He was responsible for introducing noon day meals in schools, a practice later adopted by the rulers of Travancore and then by the Indian government. In 1864, while he was serving as the Vicar General of Syrian Catholics, he ordered to start a school along with every church which was successful in making free education available for everyone. Thus schools in Kerala came to be known as 'pallikudam'.
                                    </p>


                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Course <strong>B.B.A., LL.B.</strong></span>
                                    </h4>
                                    


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="structure.php">Course Structure</a></p>
                                    </section>
                                    
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="sylabus.php">Sylabus</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="entry.php">Entry Requirements</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="placements.php">Placements</a></p>
                                    </section>


                                </div>
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../../../php/sideMenu.php'); ?>
                                    </div>



                                   <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                    <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="425" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                        </div>
                                    </div>
                                </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <!--						                                </div>-->
                    <?php include ('../../../php/alerts.php');  ?>
                    <?php include('../../../php/footer.php'); ?>
                    <?php include('../../../php/morphingSearch.php'); ?>
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
    </div>
    <!--st-container-->

    <script src="../../../js/cbpFWTabs.js"></script>
    <script>
        (function() {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();

    </script>
    <script src="../../../js/modernizr.custom.js"></script>
    <script src="../../../js/spin.min.js"></script>
    <script src="../../../js/mySpin.js"></script>
    <script src="../../../js/swipeview.js"></script>
    <script src="../../../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../../../js/classie.js"></script>
    <script src="../../../js/morphingSearch.js"></script>
    <script src="../../../js/sidebarEffects.js"></script>
    <script src="../../../js/transit.js"></script>
    <script src="../../../js/sly.js"></script>
    <script src="../../../js/customSly.js"></script>
    <script src="../../../js/wow.min.js"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../../../js/scripts.js"></script>
    <script src="../js/law.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
