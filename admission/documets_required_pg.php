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
                        <!--        <div class="row">-->
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn">
                                   <!-- <img src="../images/clg_history.jpg" class="img-responsive" style="margin-bottom:20px;" />-->
                             
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Documents required at the time of Interview<strong> (Original plus Two Copies)</strong></span>
                                    </h4>

                                  
     <p> 1.	Original Marks Card ( X, XII & Degree (All Semester / Year wise marks cards)
         (foreign students Both - translation original & Original Marks Card)</p>

                                    <p>2.	Transfer Certificate</p>

                                    <p>3.	Provisional / Degree Certificate</p>

                                    <p>4.	Conduct Certificate</p>

                                    <p>5.	Migration Certificate (if applicable)</p>

                                    <p>6.	Caste Certificate (if applicable)</p>

                                    <p>7.	AIU Equivalency Certificate (for students who have done their qualifying examination in any curriculum other than Indian Educational Curriculum)</p>

                                    <p>8.	Five Passport size Photos</p>

                                    <p>9.	First year fees</p>

                                    <p><b>In addition to the above, NRI and Foreign Students should produce:</b><br>
a. Valid Passport<br>
b. Residential Permit from the Commissioner of Police Bengaluru (for foreign students only<br>
                                        c. HIV Test Certificate</p>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Admission</strong></span>
                                    </h4>
													<div class="list-group">
										<a href="#" class="list-group-item active"><font size="3">Online Application Form</font></a>
										
									  
								    <a href="admission_guidelines.php" class="list-group-item">
									<font size=2><b>Click here to Apply online</b></font><br>
									<font size=2><u>Application Fee</u></font><br>
									<font size="2">UG course: Rs 250/- <br>
PG course: Rs 500/- <br>
MCA Programme: Rs 500/- <br>
MBA Programme: Rs 900/- <br>
PGDM Programme: Rs 900/- <br>
Law Programmes: Rs 300/- <br>
1 year PG Diploma Programme (Working Executives): Rs 250/-</font>
                                        </a>
										
										
										
										
										<a href="admission.php" class="list-group-item">
										   <font size=2>Admission 2017</font>
                                        </a>
										<a href="admission_enquiry.php" class="list-group-item">
										   <font size=2>Admission Enquiry</font>
                                        </a>
                                       </div>
									
										<div class="list-group">
											<a href="#" class="list-group-item active"><font size="3">Programmes Offered</font> <br> <font size="2">Eligibility &amp Fee Structure</font> </a><br>
									  
							<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="mba_admission.php">MBA/PGDM Admission</a></p>
                                    </section>
                                    <section class="link-arrow">

                                        <p><a class="a-link-arrow" href="mca_admission.php">MCA Admission</a></p>
                                    </section>
                                    
                                    <section class="link-arrow">

                                        <p><a class="a-link-arrow" href="pg_admission.php">PG Admission</a></p>
                                    </section>
                                    <section class="link-arrow">

                                        <p><a class="a-link-arrow" href="ug_admission.php">UG Admission</a></p>
                                    </section>
                                    <section class="link-arrow">

                                        <p><a class="a-link-arrow" href="llb_admission.php">LL.B. Admission</a></p>
                                    </section>
									<section class="link-arrow">

                                        <p><a class="a-link-arrow" href="pg_diploma.php">Post Graduate Diploma <font size=1> (For Working Executives)</font></a></p>
                                    </section>
											<section class="link-arrow">

                                        <p><a class="a-link-arrow" href="admission_international_students.php">Admission International Students</a></p>
                                    </section>
                                       </div>
									
									
									
									
									
									
									<div class="list-group">
                                  <a href="#" class="list-group-item active">Counselling Results</a>
									  
									   <a href="pg_counselling_result_july_01_2017.php" class="list-group-item">
										   <font size=2>PG Counselling result held on 01<sup>st</sup> July 2017</font>
                                        </a>
                                       </div>
									
                                  
                        <div class="list-group">
						<a href="#" class="list-group-item active"><font size="3">Documents Required</font> <br> <font size="2">For Interview &amp; Admission</font> </a>
									  
						<a href="documets_required_ug.php" class="list-group-item">
							<font size=2>UG Applicants</font>
                                        </a>
	    <a href="documets_required_pg.php" class="list-group-item">
										   <font size=2>PG Applicants</font>
                                        </a>
                                       </div>
 
                                   

                                </div>
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;Quick Links</span>
                                        </h4>

                                        <?php include ('../php/sideMenu.php'); ?>
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
                    <?php include ('../php/alerts.php');  ?>
                    <?php include('../php/footer.php'); ?>
                    
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
    </div>
    <!--st-container-->

    <script src="../js/cbpFWTabs.js"></script>
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

</body>

</html>
