<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,10);/*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristu Jayanti College, Bengaluru</title>
    <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
    <meta name="author" content="Three38 inc" />
    <link rel="shortcut icon" href="../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/roundIcons.css">
    <link rel="stylesheet" href="../css/hoverEffect.css">
    <link rel="stylesheet" href="../css/morphing.css">
    <link rel="stylesheet" href="../css/navTabs.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/innerpage.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/respond.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/fakeLoader.js"></script>
<!--old style-->
<!--
    <style>
        .link-arrow {
            background: rgba(255, 255, 255, 1.0);
            box-shadow: 0px 2px 3px -1px #ccc;
            border-radius: 2px;
        }
        
        .new-content-right {
            background: transparent;
            box-shadow: none;
        }
        
        .new-content-right .side-menu {
            background: transparent;
        }
        
        .menu-list ul li {
            height: 25px;
            line-height: 25px;
            margin: 10px auto;
        }

    </style>
-->
<!--    new style-->
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
    <script type="text/javascript">$crisp=[];CRISP_WEBSITE_ID="bfee4615-2d13-4129-a9c2-d7b8095e3d0e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
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
            <?php include ('../php/navbar.php');  ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include('../php/offCanvasMenu.php'); ?>
        <!-- content push wrapper -->
        <div class="st-pusher">
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">
                    <div class="container">
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">
                        </div>
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn" style="min-height:1077px;">
                                    <img src="../images/principal.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Message from <strong>The Principal</strong></span>
                                    </h4>

                               
                                    <p style="text-align:justify;"> A few years ago, there was an attempt to encapsulate and treasure down in the burrows of the earth, all the available accrued knowledge of this globe, for future generations to explore and discover. Future generations may or may not be interested in such a time capsule from the past.
                                    </p>
                                    <br/>

                                    <p style="text-align:justify;"> At Kristu Jayanti College, the academic fraternity is an active community of learners who pursue knowledge as an active and dynamic phenomenon with infinite and immense possibilities. We invest in the younger generations to instill in them the passion for knowledge and the seeds of research and learning. We strive to build a community of learners and teachers who believe that learning is not possible without teaching and teaching is not at all possible without learning.
                                    </p>
                                    <br/>

                                    <p style="text-align:justify;"> The academic fraternity of Kristu Jayanti College strives to inherit the passion and vision of the 19th century visionary, Blessed Saint Kuriakose Elias Chavara reaching to us through the Carmelites of Mary Immaculate (CMI)Congregation of Priests who provide the leadership for this noble institution named after the supreme guru, Jesus Christ, whose birth is commemorated in the name of Kristu Jayanti. Jesus said: Truth will liberate you. (John 8:32). Pursuit of knowledge is the pursuit of truth that should lead us to the motto and vision of this institution: "Light and Prosperity".
                                    </p>
                                    <br/>

                                    <p style="text-align:justify;"> Within the significant one decade of existence, Kristu Jayanti College has placed itself prominently in the educational map of India with an 'A' grade by National Assessment and Accreditation Council and the college figuring prominently in various ratings. We welcome all aspiring young minds to join this enthusiastic family of Jayantians in pursuing knowledge to serve the world at large.
                                    </p>

                                    <br/> Fr. Josekutty P.D, CMI
                                    <br/> Principal
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Learn <strong>About us</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="founder.php">Founder</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="history.php">History</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="vision_mission_goals.php">Vision, Mission &amp; Goals</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="core_values.php">Core Values</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="educational_philosophy.php">Educational Philosophy</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="profile.php">Profile</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="milestones.php">Milestones</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="management.php">Management</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="message.php" style="color: #2980b9;font-weight: bold;">Principal's Message</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="autonomous.php">Autonomous Info</a></p>
                                    </section>



                                </div>

                                <div class="content-right new-content-right wow fadeIn" style="margin-left:2px; margin-right: 2px;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                    </h4>
                                    <?php include ('../php/sideMenu.php'); ?>
                                </div>




                                <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                    <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="320" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>


                    </div>

                    <?php include ('../php/alerts.php');  ?>
                    <?php include('../php/footer.php'); ?>
                    <?php include('../php/morphingSearch.php'); ?>
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
<!--    </div>-->
    <!--st-container-->

    <!--    <script src="../js/cbpFWTabs.js"></script>-->
    <script>
        (function() {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();

    </script>
    <script src="../js/modernizr.custom.js"></script>
    <script src="../js/spin.min.js"></script>
    <script src="../js/mySpin.js"></script>
    <script src="../js/swipeview.js"></script>
    <script src="../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/morphingSearch.js"></script>
    <script src="../js/sidebarEffects.js"></script>
    <script src="../js/transit.js"></script>
    <script src="../js/sly.js"></script>
    <script src="../js/customSly.js"></script>
    <script src="../js/wow.min.js"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../js/scripts.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        $('.panel-heading').on('click', function(e) {
            if ($(this).parents('.panel').children('.panel-collapse').hasClass('in')) {
                e.preventDefault();
                e.stopPropagation();
            }
        });

    </script>

</body>

</html>
