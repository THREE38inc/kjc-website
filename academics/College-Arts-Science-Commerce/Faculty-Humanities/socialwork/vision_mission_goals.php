<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristu Jayanti College, Bengaluru</title>
    <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
    <meta name="author" content="Three38 inc" />
    <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/images/icon.png">
    <!-- Bootstrap css -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/component.css" />
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/font-awesome.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/roundIcons.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/hoverEffect.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/morphing.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/navTabs.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/animate.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/fakeLoader.css">
    <!--		<link rel="stylesheet" href="../css/deptCustomLink.css">-->

    <!--custom css-->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/custom.css" rel="stylesheet">
    		<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/css/innerpage.css" rel="stylesheet">
    <!-- javascript -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/jquery-1.11.0.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/respond.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/custom.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/fakeLoader.js"></script>

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
            <?php require ("../../../../php/navbar.php"); ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include("../../../../php/offCanvasMenu.php"); ?>
        <!-- content push wrapper -->
        <div class="st-pusher">
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">
                    <div class="container">
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>



                        <div class="row">
                            <div class="col-lg-9">
								 <div class="content-left myWelcome wow fadeIn">

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp; Vision <strong> , Mission & Goals </strong></span></h4>
								
								<p><b>Vision</b><br>
									To reflect constantly on theory, research and practice in Social Work by focusing on the social justice foundation of the profession.</p>

								<p><b>Mission</b><br>
									To develop reflective Social Work practitioners' and social care workforce.</p>

								<p><b>Goals</b><br>
1. To link theory, practice and research in Social Work<br>
2. To prepare Social Workers with ethical competence<br>
3. To engage actively in Social Work research and training<br>
									4. To enrich the skill oriented approach towards Social Work</p>
								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Programs <strong> Offered </strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="master_socialwork.php">Masters in Social Work (MSW) </a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="phd_socialwork.php">Ph.D in Social Work</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="certificate_courses.php">Certificate Courses </a></p>
                                    </section>
                                     </div>
								
								<div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span> <strong>Activities</strong></span>
                                        </h4>
                                        
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="vision_mission_goals.php">Vision, Mission & Goals</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="membership_professional_bodies.php">Membership in Professional Bodies</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="research_activities.php">Research Activities</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="achievements.php">Achievements</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="best_practices.php">Best Practices</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="upcoming_seminars_conferences.php">Upcoming Seminars & Conferences</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php">Academic Calendar</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="consultancies_offered.php">Consultancies offered </a></p>
                                    </section>
										
										
										
									</div>
								
<div class="content-right new-content-right wow fadeIn" style="margin-left:2px; margin-right: 2px;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                    </h4>
                                    <?php include ('../../../../php/sideMenu.php'); ?>
                                </div>
                                <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                    <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
						</div></div>

                    <?php include ('../../../../php/alerts.php');  ?>
                    <?php include('../../../../php/footer.php'); ?>
                    <?php include('../../../../php/morphingSearch.php'); ?>
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
    <!--        </div> st-container -->

    <!--<script src="../js/cbpFWTabs.js"></script>-->
	
    <script>
        (function() {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();

    </script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/modernizr.custom.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/modernizr.custom.academics.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/spin.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/mySpin.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/swipeview.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/classie.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/morphingSearch.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/sidebarEffects.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/transit.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/sly.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/customSly.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/wow.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/github/kjc-website/js/scripts.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        $("document").ready(function() {
            //below code is for retrieving corresponding pages #START
            var activePage = 'page1';
            $.ajax({
                url: 'snipets/' + activePage + '.php',
                success: function(data) {
                    $('#page').html(data);
                },
                error: function(data) {
                    alert('failed to load data');
                }
            });
            $('.profile-pagination li a').click(function() {
                $(this).parent().siblings().removeClass('active');
                $(this).parent().addClass('active');
            });
            $('.profile-pagination li a').click(function() {
                var activePage = this.getAttribute('data-value');
                $.ajax({
                    url: 'snipets/' + activePage + '.php',
                    success: function(data) {
                        $('#page').html(data);
                    },
                    error: function(data) {
                        alert('failed to load data');
                    }
                });
            });
            //above code is for retrieving corresponding pages #END
        });

    </script>
</body>

</html>
