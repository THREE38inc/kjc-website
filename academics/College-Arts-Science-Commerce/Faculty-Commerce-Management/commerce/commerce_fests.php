<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,33);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
   <!-- <script type="text/javascript">
        $crisp = [];
        CRISP_WEBSITE_ID = "bfee4615-2d13-4129-a9c2-d7b8095e3d0e";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.im/l.js";
            s.async = 1;
            //d.getElementsByTagName("head")[0].appendChild(s);
        })();

    </script>-->
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
            <?php include ('../../../../php/navbar.php');  ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include('../../../../php/offCanvasMenu.php'); ?>
        <!-- content push wrapper -->
        <div class="st-pusher">
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">
                    <div class="container">
                        <!--<div class="row">-->
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn" style="min-height: 1150px;">
                                    <img src="images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp; Department <strong> Fests</strong></span>
                                    </h4>

                                  
                                    <p align="justify">
										The Department conducts Excelsior an intra-Collegiate Fest and Adroit a National Level Inter-Collegiate Fest (UG Department) and Impulse an intra-Collegiate Fest and Commercia National Level Inter-Collegiate Fest (PG Department) </p>

                                   
                                    <p align="justify">
										<b style="color: #cd6e08;font-weight: bold;">Excelsior (Intra- collegiate UG fest): </b> The Department of Commerce organizes "Excelsior" an Intra- collegiate fest is conducted during the odd semester every year. Excelsior has been a milestone in the way to the student's overall growth. It has also made their path to success by imbibing in the students the quality of managing the given resources. Every year final year students unite in a combined and synergized effort to organize this fest. Not only does it allow the first and second year students to explore their creative and business sensibilities but it also provides a platform to exhibit textbook managerial practices in a more realistic and personal environment thus strengthening and confirming their understanding of core concepts. </p>

                                

                                    <p align="justify">
										<b style="color: #cd6e08;font-weight: bold;">Adroit (Inter - collegiate UG fest): </b> It is a National level Inter-collegiate Fest and has always been synonymous with great academics, intellect and high IQ's since the past 10 years. This event not only provides a platform for students to compete with each other but, promotes talent and explores new ideas among them. The event promises a multitude of activities and rewards for the talented. Thus, Adroit gives future business leaders a break-through from class rooms into the dynamic and even competitive corporate world through a variety of business related calendar of events, testing their skills, knowledge, expertise, as well as their attitude. </p>
                                  
                                    <p align="justify">
										<b style="color: #cd6e08;font-weight: bold;">Impulse – (Intra collegiate PG fest): </b> Impulse, an intra-collegiate fest conducted by the Department of Commerce-Post graduate studies. The objective of this fest is to provide hands on experience in order to participate in any inter-collegiate fest conducted at various colleges. The key events of this fest includes Best Manager, Business Quiz, Business Plan, Mock Stock, Human Resource Management, Balance Sheet Reading and Financial analysis etc., Final year students host this event for first year students to face the realities of corporate arena. </p>
                                
                                    <p align="justify">
										<b style="color: #cd6e08;font-weight: bold;">Commercia - Inter collegiate PG fest :</b> The Department of Commerce-Post Graduate Studies of Kristu Jayanti conducts Commercia-A National level inter-collegiate commerce fest which provides a platform for all its participants to exhibit their talents in the various commerce oriented events. COMMERCIA provides an environment for collaborating ideas which will be fueled by innovation and enthusiasm. The fest provides platform to imbibe team work, creative learning, critical thinking and exposure to realities of business world. The key events of this fest includes Best manager, Business quiz, Business plan, Mock stock, Human resource management, Balance sheet reading and Financial analysis etc., Department of Commerce-PG will be the host and other colleges across the country will take part in this mega corporate carnival. </p>
                                   
                                    <p align="justify">
										<b style="color: #cd6e08;font-weight: bold;">Jai Hind:</b> It is the Department's initiative to hold an event in honour of the Martyrs who laid their life for our country. It instils patriotism in each departmental student. The event includes a quiz programme, skits, tableau, mime and songs that extol the true Indian spirit. </p>
									<p>The overall objective of this fest is to enhance analytical and decision making skills of the students. </p>

                          
                                    <p align="justify">
										<b style="color: #cd6e08;font-weight: bold;">Yaan:</b>Department (Tourism Course) organizes 'YAAN' an Intra College Tourism Fest in connection with the World Tourism day Celebrations. Various activities like Food festival, Tourism Exhibition, Kite festival (christened as Drachen) as well as Traditional Cultural Programmes are conducted by the students.</p> 
                                  
                               

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Programs  <strong>Offered</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bcom.php">B.Com</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bcom_tourism.php">B.Com Tourism</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bcom_professioal.php">B.Com Professional</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bcom_integrated_bcom_acca.php">B.Com with ACCA</a></p>
                                    </section>



                                </div>
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Our  <strong>Activities</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_vision_mission.php"> Vision, Mission &amp; Goals   </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_fests.php" style="color: #2980b9;font-weight: bold;"> Fests </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_value_added_courses.php"> Value Added Program &amp;  Certificate courses  </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_bestpractcies.php"> Best Practices</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_carrer_opportunity.php"> Career Opportunity</a></p>
                                    </section>


                                   <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php"> Faculty Profile
                                        </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php"> Academic Calendar
                                            </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_achievements.php"> Achievements </a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_seminars_conferencesbr_workshops.php"> Seminars Conferences and Workshops </a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="news_letter.php"> News Letter </a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_other_departmrntal_activities.php"> Other departmental activities </a></p>
                                    </section>

                                </div>

                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../../../../php/sideMenu.php'); ?>
                                    </div>



                                    <!--
                                    <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                        <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="425" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                            <div class="fb-xfbml-parse-ignore">
                                                <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                            </div>
                                        </div>
                                    </div>
-->

                                </div>

                            </div>

                        </div>

                    </div>

                    <!--						                                </div>-->
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
    <!--    </div>-->
    <!--st-container-->

    <script src="../../../../js/cbpFWTabs.js"></script>
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
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../../../../js/scripts.js"></script>
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
