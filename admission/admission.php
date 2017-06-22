<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website";/*$ROOT is the base URL & should on top of every PAGE */?> 
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
    <script language="javascript" type="text/javascript">
        var win = null;

        function NewWindow(mypage, myname, w, h, scroll, pos) {
            if (pos == "random") {
                LeftPosition = (screen.width) ? Math.floor(Math.random() * (screen.width - w)) : 200;
                TopPosition = (screen.height) ? Math.floor(Math.random() * ((screen.height - h) - 75)) : 200;
            }
            if (pos == "center") {
                LeftPosition = (screen.width) ? (screen.width - w) / 2 : 100;
                TopPosition = (screen.height) ? (screen.height - h) / 2 : 200;
            } else if ((pos != "center" && pos != "random") || pos == null) {
                LeftPosition = 0;
                TopPosition = 20
            }
            settings = 'width=' + w + ',height=' + h + ',top=' + TopPosition + ',left=' + LeftPosition + ',scrollbars=' + scroll + ',location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=no,dialog=yes';
            win = window.open(mypage, myname, settings);
        }

    </script>
</head>

<body>
    <script type="text/javascript">
        $crisp = [];
        CRISP_WEBSITE_ID = "bfee4615-2d13-4129-a9c2-d7b8095e3d0e";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.im/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();

    </script>
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
                                    <img src="../images/clg_history.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                 
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Admission 2017</strong></span>
                                    </h4>


									<p align=justify>Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Prov ince of the Carmelites of Mary Immaculate (CMI). The college is affiliated to Bangalore University and is reaccredited with highest grade 'A' by NAAC in Second Cycle of Accreditation. The college is recognized by UGC under the category 2(f) & 12(B). The college was accorded autonomous status from 2013 by the University Grants Commission, Government of Karnataka & the Bangalore University. In India Today - Nielsen survey 2017 the college is ranked 2nd Best BCA College, 9th Best Commerce College, 17th Best Science College & 14th Best Arts College in India and 2nd,3rd,4th positions in Arts, Commerce & Science among Top 10 Colleges in Bangalore.</p>
									<p>Kristu Jayanti College is secular in nature and welcomes students from all castes, religions, creed and languages to be a part of the Kristu Jayanti family.</p>

                                    <!--<div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Admission Drive in Jaipur</h3>
                                        </div>
                                        <div class="panel-body">
                                            <p><b><font color="#FF0000" size="2"><u>MBA/PGDM &amp; All PG/UG Counselling:</u> </font></b>
                                                <a href="admission_guidelines.php">
                                                    <font size=2>(Apply Online Now)</font>
                                                </a>
                                                <br />
                                                <font size="2" color="#990000"><b>Counselling will be held on 30<sup>th</sup> April, 2017</b></font><br/>
                                                <font color="#" size="2"><b><u>Venue:</u></b> St. Anselm's Pink City Senior Secondary School, Jaipur</font><br />
                                                <font color="#" size="2"><b><u>Time:</u></b> 09.30 AM Onwards</font>
                                            </p>
                                        </div>
                                    </div>-->

                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Admission Drive in Bengaluru</h3>
                                        </div>
                                        <div class="panel-body">
											 
											<p><b>Admissions to all UG Programmes are Open</b></p>
											<p>* Online Application Forms are available in our website (Hard copies are not available).<br>
												* Applicants can either apply online on their own or apply from college campus</p>
											
											
											 <div class="well well-sm">
                                                        <center>UG COUNSELLING</center>
                                                    </div>
											
											
											<div class="panel panel-default">
  <div class="panel-body">
   <p><font color="#FF0000" size="2"><u>BCom / BCom Professional / BCom Tourism / BCom with ACCA Programmes: </u> </font><br />
   <font size="2"> Applicants can apply online. <a href="admission_guidelines.php" class="btn btn-primary btn-xs">Apply Online</a><br>
	   <b>Selected applicants will be intimated through email and sms. </b></font>
</div>
</div>
											
											<div class="panel panel-default">
  <div class="panel-body">
    <p><font color="#FF0000" size="2"><u>BA Programmes: </u> </font><br />
                                                            <font size="2"><b>Aspiring Candidates can apply online and walk-in for an interview with the admission officer in the college campus.</b> </font>
                                                           
                                                               <a href="admission_guidelines.php" class="btn btn-primary btn-xs">Apply Online</a>
                                                           <br />
                                                            <font color="#" size="2"><b><u>Venue:</u></b> Kristu Jayanti College, Bengaluru</font><br />
                                                            <font color="#" size="2"><b><u>Time:</u></b> 09.00 AM </font><br />
                                                            <a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()" target="_blank">
                                                                <font size=2>Click here for Admission process</font> </a><br>
																Qualifying Mathematics test syllabus for BCA <a href="#">View syllabus</a><br>
																Qualifying Accountancy test syllabus for BBA <a href="#">View syllabus</a></p></div></div>
											
											<div class="well well-sm">
                                                <center>LAW PROGRAMMES COUNSELLING</center>
                                            </div>
											
								 <p><font color="#FF0000" size="2"><u>B.A., LL.B. / B.B.A., LL.B. / B.Com LL.B. Programmes: </u> </font><br />
                                                            <font size="2" color="#990000"><b>Next Counselling will be held on 30<sup>th</sup> June, 2017</b> </font>
                                                           
                                                               <a href="admission_guidelines.php" class="btn btn-primary btn-xs">Apply Online</a>
                                                           <br />
                                                            <font color="#" size="2"><b><u>Venue:</u></b> Kristu Jayanti College, Bengaluru</font><br />
                                                            <font color="#" size="2"><b><u>Time:</u></b> 09.00 AM </font><br />
                                                            <a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()" target="_blank">
                                                                <font size=2>Click here for Admission process</font> </a>
                                                  

                                                        

                                            <div class="well well-sm">
                                                <center>PG COUNSELLING</center>
                                            </div>
                                            <p><font color="#FF0000" size="2"><u>MBA / PGDM Programme: </u> </font><br />
                                               <b>Aspiring Candidates can apply online and walk-in for an interview with the admission officer in the college campus.</b>
                                               <a href="admission_guidelines.php" class="btn btn-primary btn-xs">Apply Online</a><br />
                                                <font color="#" size="2"><b><u>Venue:</u></b> Kristu Jayanti College, Bengaluru</font><br />
                                                <font color="#" size="2"><b><u>Time:</u></b> 09.00 AM </font><br />
                                                <a href="pop_up_admission/mba_admission_status.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()" target="_blank">
                                                    <font size=2>Click here for Admission process</font>
                                                </a>


                                                <p><font color="#FF0000" size="2"><u>PG Programmes: </u> </font><br />
                                                    <font size="2" color="#990000"><b>Next Counselling will be held on 01<sup>st</sup> July, 2017</b></font>
                                                    <a href="admission_guidelines.php" class="btn btn-primary btn-xs">Apply Online</a><br />
                                                    <font color="#" size="2"><b><u>Venue:</u></b> Kristu Jayanti College, Bengaluru
                                                    </font><br />
                                                    <font color="#" size="2"><b><u>Time:</u></b> 09.00 AM </font><br />
                                                    <a href="pop_up_admission/mcom_admission_status.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()" target="_blank">
                                                        <font size=2>Click here for Admission process</font>
													</a></div></div>
									
									<div class="alert alert-info">
  
										<p><b><u>NRI Candidates</u></b><br />
	 Applicants or parents can meet the Admission Officer in the college campus, in advance, to enquire about the status of admissions.</p>
</div>

<div class="alert alert-dismissible alert-success">
 
	<p><b><u>Foreign Nationals</u></b><br>
	Aspiring candidates seeking admissions to UG / PG programmes can avail the bona fide certificate, which will be issued in the month of March 2017, for VISA application, by submitting the following documents:<br>
<b>*</b> Original marks card<br>
<b>*</b> Translated copy of marks card<br>
<b>*</b> Copy of passport<br>
		<b>*</b> First year tuition fee</p>

<p>We have Intensive English Language Course for International students coming from Non-English speaking countries.<br>
<b>*</b> The above Course will commence in the first week of January 2017<br>
<b>*</b> Duration of this programme is four months<br>
<b>*</b> The Bona fide certificate will be issued in the month of December 2016<br>
<b>*</b> Candidates can later apply for regular degree or postgraduate programme
	<a href="admission_international_students.php" class="btn btn-primary btn-xs">For more details click here</a></p>
</div>
									
									<blockquote>
										<p><u>for further clarifications or issues</u><br>
Contact Mob No: +91 9449451111<br> E-mail: admission@kristujayanti.com
</blockquote>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Admission</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="admission.php" style="color: #2980b9;font-weight: bold;">Admission 2017</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="why_kjc.php">Why Kristu Jayanti College ?</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="mba_admission.php">MBA/PGDM Admission</a></p>
                                    </section>
                                    <section class="link-arrow">

                                        <p><a class="a-link-arrow" href="mca_admission.php">MCA Admission</a></p>
                                    </section>
                                    <section class="link-arrow">

                                        <p><a class="a-link-arrow" href="pg_diploma.php">Post Graduate Diploma <font size=1> (For Working Executives)</font></a></p>
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

                                        <p><a class="a-link-arrow" href="documets_required_pg.php">Documents required for Admission (PG)</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="documets_required_ug.php">Documents required for Admission (UG)</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="admission_enquiry.php">Admission Enquiry</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="admission_international_students.php">Admission International Students</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="scholarship_scheme.php">Scholarship Scheme (KJSS)</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="online_fee_payment.php">Online Fee Payment Details</a></p>
                                    </section>


                                    <div class="well">
                                        <p>
                                            <font size=2 color='#5cafee'>New users can click the link below to get online application form and the instructions to fill the application form</font>
                                        </p>
                                        <a href="admission_guidelines.php" class="btn btn-primary btn-xs">Online Application Form</a>
                                    </div>

                                    <div class="well">
                                        <p>
                                            <font size=2 color='#5cafee'>Registered user can click the link below to view / update the details</font>
                                        </p>
                                        <center><a href="admission_guidelines_login.php" class="btn btn-primary btn-xs">Login Here</a></center>
                                    </div>


                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Application & Prospectus FeePayment option</h3>
                                        </div>
                                        <div class="panel-body">
                                            <font size=2>1. Fee payment in College office<br> 2. online payment<br> 3. Payment through demand draft<br></font>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                               <font size=2>UG course: Rs 250/- <br>
PG course: Rs 500/- <br>
MCA Programme: Rs 500/- <br>
MBA Programme: Rs 900/- <br>
PGDM Programme: Rs 900/- <br>
Law Programmes: Rs 300/-  <br>
1 year PG Diploma Programme
(Working Executives): Rs 250/-</font> 
                                               

                                            </div>
                                        </div>
                                    </div>

                                  <div class="list-group">
                                  <a href="#" class="list-group-item active">Counselling Results</a>
									  
									   <a href="mba_pgdm_counselling_result_june_10_2017.php" class="list-group-item">
										   <font size=2>MBA/PGDM Counselling result held on 10<sup>th</sup> June 2017</font>
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
                    <?php include('../php/morphingSearch.php'); ?>
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->

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
