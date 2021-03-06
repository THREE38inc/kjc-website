<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST'].""; $imgNum = mt_rand(1,11); /*$ROOT is the base URL & should on top of every PAGE */?> 
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
                                       <img src="../images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                      
                                        <h4 class="mainheading"><i class="fa fa-bookmark"></i>
											<span>&nbsp;<font size="5">B.A., LL.B.</font> <strong>Course Structure</strong></span>
                                        </h4>

                                   

                                        <table border="0" class=" table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td width="77" valign="top"><p align="center"><strong>Semester</strong></p></td>
                                                    <td width="243" valign="top"><p align="center"><strong>Course Title</strong></p></td>
                                                    <td width="77" valign="top"><p align="center"><strong>Semester</strong></p></td>
                                                    <td width="242" valign="top"><p align="center"><strong>Course Title</strong></p></td>
                                                </tr>
                                                <tr>
                                                    <td width="77"><p align="center"><strong>I</strong></p></td>
                                                    <td width="243" valign="top"><ol>
                                                        <li>Kannada/Special English/ (Kannada is compulsory for all those who have studied Kannada as a subject at the SSLC /PUC/+2 level </li>
                                                        <li>Sociology-I</li>
                                                        <li>Political Science-I</li>
                                                        <li>Elements of research</li>
                                                        </ol></td>
                                                    <td width="77"><p><strong>&nbsp;</strong></p>
                                                        <p align="center"><strong>VI </strong></p></td>
                                                    <td width="242" valign="top"><p>&nbsp;</p>
                                                        <ol>
                                                            <li>Company Law </li>
                                                            <li>Property Law </li>
                                                            <li>Administrative Law </li>
                                                            <li>Family Law - II: Mohammedan Law &amp; Indian Succession Act </li>
                                                        </ol></td>
                                                </tr>
                                                <tr>
                                                    <td width="77" valign="top"><p align="center"><strong>&nbsp;</strong></p>
                                                        <p align="center"><strong>II </strong></p></td>
                                                    <td width="243" valign="top"><ol>
                                                        <li>English </li>
                                                        <li>Sociology-II </li>
                                                        <li>Political Science-II </li>
                                                        <li>Economics-I</li>
                                                        </ol></td>
                                                    <td width="77"><p align="center"><strong>VII </strong></p></td>
                                                    <td width="242" valign="top"><ol>
                                                        <li>Environmental    Law</li>
                                                        <li>Labour    Law</li>
                                                        <li>Criminal    Law - II: Criminal Procedure Code. </li>
                                                        <li>Jurisprudence</li>
                                                        </ol>
                                                        <p>&nbsp;</p></td>
                                                </tr>
                                                <tr>
                                                    <td width="77"><p align="center"><strong>III</strong></p></td>
                                                    <td width="243" valign="top"><p>&nbsp;</p>
                                                        <ol>
                                                            <li>History-I </li>
                                                            <li>Political Science-III </li>
                                                            <li>Economics-II </li>
                                                            <li>Constitution</li>
                                                        </ol></td>
                                                    <td width="77"><p align="center"><strong>VIII</strong></p></td>
                                                    <td width="242" valign="top"><ol>
                                                        <li>Clinical    course-I: Professional Ethics and Professional Accounting System</li>
                                                        <li>Public    International Law</li>
                                                        <li>Optional-I:    Human Rights Law and Practice / Right to Information</li>
                                                        <li>Optional-II:    Banking Law / Insurance Law</li>
                                                        </ol>
                                                        <p>&nbsp;</p></td>
                                                </tr>
                                                <tr>
                                                    <td width="77"><p align="center"><strong>IV</strong></p></td>
                                                    <td width="243" valign="top"><p>&nbsp;</p>
                                                        <ol>
                                                            <li>Economics-III </li>
                                                            <li>History-II</li>
                                                            <li>Contract-I</li>
                                                            <li>Psychology</li>
                                                        </ol></td>
                                                    <td width="77" rowspan="2"><p align="center"><strong>IX</strong></p></td>
                                                    <td width="242" rowspan="2" valign="top"><ol>
                                                        <li>Clinical course-II: Alternative Dispute Resolution Systems</li>
                                                        <li>Civil Procedure Code and Limitation Act</li>
                                                        <li>Optional-III:    Intellectual Property Rights-I / Penology &amp; Victimology</li>
                                                        <li>Optional-IV: Interpretation of Statutes &amp; Principles of    Legislation / Competition Law </li>
                                                        <li>Clinical course-III: Drafting, Pleading and Conveyance </li>
                                                        </ol></td>
                                                </tr>
                                                <tr>
                                                    <td width="77" rowspan="2"><p align="center"><strong>V</strong></p></td>
                                                    <td width="243" rowspan="2" valign="top"><p>&nbsp;</p>
                                                        
                                                        <ol>
                                                            <li>Contract-II</li>
                                                            <li>Law of Torts </li>
                                                            <li>Family Law-I: Hindu Law </li>
                                                            <li>Criminal Law-I: Indian Penal Code </li>
                                                        </ol></td>
                                                </tr>
                                                <tr>
                                                    <td width="77"><p align="center"><strong>X</strong></p></td>
                                                    <td width="242" valign="top"><ol>
                                                        <li>Law    of Evidence</li>
                                                        <li>Taxation</li>
                                                        <li>Optional - V: Intellectual Property Rights-II / White Collar    Crimes </li>
                                                        <li>Optional-    VI: Women and Criminal Law &amp; Law relating to child / Law Relating to    International Trade</li>
                                                        <li>Clinical course-IV: Moot Court exercise and Internship </li>
                                                        </ol>
                                                        <p>&nbsp;</p></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;Course <strong>B.A., LL.B.</strong></span>
                                        </h4>
                                       


                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="structure.php">Course Structure</a></p>
                                        </section>


                                        <!--
<section class="link-arrow">
<p><a class="a-link-arrow" href="sylabus.php">Sylabus</a></p>
</section>
-->


                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="entry.php">Entry Requirements</a></p>
                                        </section>


                                    </div>
                                    <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;Courses <strong>Offered</strong></span>
                                        </h4>
                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="../BA-LLB/index.php">B.A., LL.B.</a></p>
                                        </section>
										
										 <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="../BCom-LLB/index.php">B.Com LL.B.</a></p>
                                        </section>


                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="../BBA-LLB/index.php">B.B.A., LL.B.</a></p>
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
