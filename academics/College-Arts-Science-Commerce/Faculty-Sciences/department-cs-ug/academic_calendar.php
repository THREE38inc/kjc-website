<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST'].""; /*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristu Jayanti College, Bengaluru</title>
    <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
    <meta name="author" content="Three38 inc" />
    <link rel="shortcut icon" href="../../../../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../../../../css/component.css" />
    <link rel="stylesheet" href="../../../../css/font-awesome.css">
    <link rel="stylesheet" href="../../../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../css/roundIcons.css">
    <link rel="stylesheet" href="../../../../css/hoverEffect.css">
    <link rel="stylesheet" href="../../../../css/morphing.css">
    <link rel="stylesheet" href="../../../../css/navTabs.css">
    <link rel="stylesheet" href="../../../../css/animate.css">
    <link rel="stylesheet" href="../../../../css/fakeLoader.css">
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../../../../css/custom.css" rel="stylesheet">
    <link href="../../../../css/innerpage.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../../../../js/jquery-1.11.0.min.js"></script>
    <script src="../../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../../js/respond.js"></script>
    <script src="../../../../js/custom.js"></script>
    <script src="../../../../js/fakeLoader.js"></script>


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
									 <img src="images/academic-calendar.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp; Academic<strong> Calendar </strong></span></h4>
                                    
                                    
                                    <table border="1" class="table table-bordered table-hover">
  <tr>
    <td width="64"><p align="center">Sl. No</p></td>
    <td width="266"><p align="center">Title of the Event</p></td>
    <td width="164"><p align="center">Date</p></td>
    <td width="167"><p align="center">Organizing Department</p></td>
    <td width="217"><p align="center">Convener<br />
      (Name, Contact No., E-mail ID)</p></td>
  </tr>
  <tr>
    <td width="64"><p align="center">1</p></td>
    <td width="266"><p align="center">Industrial Visit to ISRO</p></td>
    <td width="164"><p align="center">10-07-2017</p></td>
    <td width="167"><p align="center">Computer Science Dept</p></td>
    <td width="217"><p align="center">Dr. Anthony -9845332389<br />
      <a href="mailto:anthonyvincent@kristujayanti.com">anthonyvincent@kristujayanti.com</a></p></td>
  </tr>
  <tr>
    <td width="64"><p align="center">2</p></td>
    <td width="266"><p align="center">&ldquo;Workshop on Hardware Descriptive    Language - Verilog&rdquo;</p></td>
    <td width="164"><p align="center">21-08-2017 to 24-08-2017</p></td>
    <td width="167"><p align="center">Electronics Department</p></td>
    <td width="217"><p align="center">Mr. Nagendra -9342044199<br />
      <a href="mailto:nagendra@kristujayanti.com">nagendra@kristujayanti.com</a></p></td>
  </tr>
  <tr>
    <td width="64"><p align="center">3</p></td>
    <td width="266"><p align="center">&nbsp;</p>
      <p align="center">&ldquo;Workshop on Statistical Computing and    Graphics tool – R&rdquo;</p></td>
    <td width="164"><p align="center">28-08-2017 to 31-08-2017</p></td>
    <td width="167"><p align="center">Statistic Department</p></td>
    <td width="217"><p align="center">Mrs. Suni – 9342981869<br />
      <a href="mailto:suni.a@kristujayanti.com">suni.a@kristujayanti.com</a></p></td>
  </tr>
  <tr>
    <td width="64"><p align="center">4</p></td>
    <td width="266"><p align="center">&nbsp;</p>
      <p align="center">&ldquo;National Conference on Computing    Intelligence&rdquo; NCCI 2017</p></td>
    <td width="164"><p align="center">15-09-2017</p></td>
    <td width="167"><p align="center">Computer Science Dept</p></td>
    <td width="217"><p align="center">Dr. Nagarajan – 8072243785<br />
      <a href="mailto:nagarajan@kristujayanti.com">nagarajan@kristujayanti.com</a></p></td>
  </tr>
  <tr>
    <td width="64"><p>&nbsp;</p>
      <p align="center">5</p></td>
    <td width="266"><p align="center">FDP on Statistical Computing and    Graphics tool </p></td>
    <td width="164"><p align="center">16-10-2017 &amp; 17-10-2017</p></td>
    <td width="167"><p align="center">Statistic Department</p></td>
    <td width="217"><p align="center">Mrs. Suni – 9342981869<br />
      <a href="mailto:suni.a@kristujayanti.com">suni.a@kristujayanti.com</a></p></td>
  </tr>
  <tr>
    <td width="64"><p align="center">6</p></td>
    <td width="266"><p align="center">Workshop on &ldquo;Robotics&rdquo;</p></td>
    <td width="164"><p align="center">09-12-2017</p></td>
    <td width="167"><p align="center">Computer Science Dept</p></td>
    <td width="217"><p align="center">Mrs. Vinothina – 8861511222<br />
      <a href="mailto:vinothina.v@kristujayanti.com">vinothina.v@kristujayanti.com</a></p></td>
  </tr>
  <tr>
    <td width="64"><p align="center">7</p></td>
    <td width="266"><p align="center">Xactitude 2K18 – Inter-collegiate Fest</p></td>
    <td width="164"><p align="center">24-01-2018 </p></td>
    <td width="167"><p align="center">Computer Science Dept</p></td>
    <td width="217"><p align="center">Mr. Prathap &amp; Mrs. Kalaiselvi<br />
      9036967080, 9731778310<br />
      <a href="mailto:prathap.g@kristujayanti.com">prathap.g@kristujayanti.com</a> <br />
      <a href="mailto:kalaiselvi@kristujayanti.com">kalaiselvi@kristujayanti.com</a></p></td>
  </tr>
  <tr>
    <td width="64"><p align="center">8</p></td>
    <td width="266"><p align="center">Galaxia 2K18 – Science Exhibition </p></td>
    <td width="164"><p align="center">24-01-2018 &amp; 25-01-2018</p></td>
    <td width="167"><p align="center">Computer Science Dept</p></td>
    <td width="217"><p align="center">Mr. Amjad Khan – 9986728791<br />
      <a href="mailto:amjadhkhan@kristujayanti.com">amjadhkhan@kristujayanti.com</a></p></td>
  </tr>
</table>
                               
                                    <!--<iframe src="http://www.google.com/calendar/embed?src=web%40kristujayanti.com&ctz=Asia/Calcutta" style="border: 0;width:100%;" width="750" height="600" frameborder="0" scrolling="no" ></iframe>-->




								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Programs Offered </strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bca.php">BCA
                                            <font size=1>(Bachelor of Computer Applications)</font></a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_csme.php">B.Sc. CSME <font size=1>(Computer Science, Mathematics, Electronics)</font></a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_csms.php">B.Sc. CSMS
                                            <font size=1>(Computer Science, Mathematics, Statistics)</font></a></p>
                                    </section>
                                </div>
                                
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span> <strong>Activities</strong></span>
                                        </h4>
                                        
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="vission_mission_goals.php">Vision,Mission and Goals</a></p>
                                    </section>
                                        
                                        <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php" style="color: #2980b9;font-weight: bold;">Academic Calender</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="fests.php">Fests</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="value_added_certificate_courses.php">Value Added & Certificate Courses</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="computer_academy.php">Computer Academy</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="achivements.php">Achievements</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="best_practices.php">Best Practices</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="carer_opportunity.php">Career Opportunity</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="seminars_workshop.php">Seminars & Workshops</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="guest_lectures.php">Guest Lectures</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="activities.php">Activities</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty_development_program.php">Faculty Development Program</a></p>
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
                    </div>
                    </div>
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
    <script src="../../../../js/modernizr.custom.js"></script>
    <script src="../../../../js/spin.min.js"></script>
    <script src="../../../../js/mySpin.js"></script>
    <script src="../../../../js/swipeview.js"></script>
    <script src="../../../../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../../../../js/classie.js"></script>
    <script src="../../../../js/morphingSearch.js"></script>
    <script src="../../../../js/sidebarEffects.js"></script>
    <script src="../../../../js/transit.js"></script>
    <script src="../../../../js/sly.js"></script>
    <script src="../../../../js/customSly.js"></script>
    <script src="../../../../js/wow.min.js"></script>
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
