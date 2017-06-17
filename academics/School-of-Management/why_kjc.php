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
    <link rel="shortcut icon" href="../../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../../css/component.css" />
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/roundIcons.css">
    <link rel="stylesheet" href="../../css/hoverEffect.css">
    <link rel="stylesheet" href="../../css/morphing.css">
    <link rel="stylesheet" href="../../css/navTabs.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/fakeLoader.css">
    <link href="../../css/owl.carousel.min.css" rel="stylesheet" />
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../../css/custom.css" rel="stylesheet">
    <link href="../../css/innerpage.css" rel="stylesheet">
    <link href="css/manSchool.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../../js/jquery-1.11.0.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/respond.js"></script>
    <script src="../../js/custom.js"></script>
    <script src="../../js/fakeLoader.js"></script>
	<script language="javascript" type="text/javascript">
var win=null;
function NewWindow(mypage,myname,w,h,scroll,pos){
if(pos=="random"){LeftPosition=(screen.width)?Math.floor(Math.random()*(screen.width-w)):200;TopPosition=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):200;}
if(pos=="center"){LeftPosition=(screen.width)?(screen.width-w)/2:100;TopPosition=(screen.height)?(screen.height-h)/2:200;}
else if((pos!="center" && pos!="random") || pos==null){LeftPosition=0;TopPosition=20}
settings='width='+w+',height='+h+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=no,dialog=yes';
win=window.open(mypage,myname,settings);}

</script>

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
        <?php include('../../php/offCanvasMenu.php'); ?>
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
									<img src="images/banner_activities.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp;Why <strong> Kristu Jayanti College ?</strong></span></h4>
								
				  <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Academic Excellence</h3>
  </div>
  <div class="panel-body">
<li>Ranked as 2nd Best BCA College in India</li>
<li>Ranked as 9th Best Commerce College in India </li>
<li>Ranked as 14th Best Arts College in India</li>
<li>Rated as 17th Best Science College in India</li>
<li>Ranked as 2nd,3rd,4th positions in Arts, Commerce & Science among Top 10 Colleges in Bangalore.</li>
  </div>
</div>
                                  
 <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Re-engineering Domain Skills</h3>
  </div>
  <div class="panel-body">
      <li>    International, National and State level conferences and symposia</li>
      <li>Path-breaking Value Added / Certificate programs in various domains</li>
      <li>Professional Training for specific careers - Company Secretary ship, CA & CIMA</li>
      <li>Innovative Work shops and Exhibitions</li>
      <li>Enriching Industrial Visits</li>
      <li>Job-oriented internships</li>
      <li>Global synergy through academic collaborations with International Universities </li>

  </div>
</div>

                                    
   <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Holistic Excellence</h3>
  </div>
  <div class="panel-body">
      <li>Consecutive Champions at Bangalore University Youth Festival 'Yuvajanotsava'</li>
      <li>Consecutive winners in western music at the Inter-University Youth Festivals (South Zone and National Level)</li>
      <li>Undisputed victors in various national and state level inter-college academic, literary and cultural fests</li>
      <li>Success ful organization of intra-college academic, literary and cultural fests</li>
      <li>Triumphant winners at zonal and University level basket ball, foot ball and volley ball</li>
      <li>A unique inter-college fest only for dance - 'Nrityanjali'</li>
      <li>Musical and the at rical production s every year</li>
      <li>Expert training and workshops in theater, dance and music</li>
      <li>Expert coaching in football, volleyball and basket ball</li>

  </div>
</div>
                                    
                                    <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Social Transformation</h3>
  </div>
  <div class="panel-body">
      <li>Village Exposure Programmes for social sensitization</li>
      <li>'Bhavishyajyothi' programme to support under privileged students</li>
      <li>Social transformation through Outreach Programmes</li>
  </div>
</div>
                                    
                                     <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Insights from Leaders</h3>
  </div>
  <div class="panel-body">
      <li> Vichaarmanthan - an interaction with Global and Indian Visionaries</li>
      <li>Vinimay - Leadership Talk Series</li>
      <li>3i - Industry Institution Interface</li>
      <li>Re-invigorating Expert Lectures</li>
      <li>Industry savvy 'Tech-talks' </li>
  </div>
</div>
                                    
                                       <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Centre for Placement & Corporate Relations</h3>
  </div>
  <div class="panel-body">
      <li>Talent Transformation Team- enhancing employability</li>
      <li>Nodal centre for pool campus hiring and placement extension services</li>
      <li>Placement Aptitude Training</li>
      <li>Functional competency building</li>
      <li>More than 60 corporate s recruit students on campus</li>
  </div>
</div>

                                    
                                       <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">IT Support System</h3>
  </div>
  <div class="panel-body">
      <li> Continuous Internet Connectivity with High End networking technologies</li>
      <li>Collaboration with TCS for Campus Enterprise and Learning Management Solutions</li>
      <li>E-Learning Management System supplemented by E-resources and data bases</li>
  </div>
</div>




								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp; MBA &amp; PGDM<strong> Admission</strong></span>
                                    </h4>
                                 <section class="link-arrow">   
                <p><a class="a-link-arrow" href="admission.php">MBA/PGDM Admission</a></p>
                                    </section>
                                        <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="why_kjc.php" style="color: #2980b9;font-weight: bold;">Why Kristu Jayanti College ?</a></p>
                                   </section>
                                    
									
									<section class="link-arrow">
                                    
                                        <p><a class="a-link-arrow" href="documets_required_pg.php">Documents required for Admission (PG)</a></p>
                                    </section>
                                   
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="admission_enquiry.php">Admission Enquiry</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="admission_international_students.php">Admission International Students</a></p>
                                    </section>
                                   
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="online_fee_payment.php">Online Fee Payment Details</a></p>
                                    </section>
									  <div class="well">
 <p><font size=2 color='#5cafee'>New users can click the link below to get online application form and the instructions to fill the application form</font></p>
                                  <a href="admission_guidelines.php" class="btn btn-primary btn-xs">Online Application Form</a>
</div>
                                    
                                     <div class="well">
 <p><font size=2 color='#5cafee'>Registered user can click the link below to view / update the details</font></p>
                                 <center><a href="admission_guidelines_login.php" class="btn btn-primary btn-xs">Login Here</a></center> 
</div>
                                    
                      
                        <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Application & Prospectus FeePayment option</h3>
  </div>
  <div class="panel-body">
    <font size=2>1. Fee payment in College office<br>
2. online payment<br>
        3. Payment through demand draft<br></font>
  </div>
                            <div class="panel panel-default">
  <div class="panel-body">
<font size=2>
MBA Programme: Rs 900/- <br>
PGDM Programme: Rs 900/- <br>
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
                                   

                                
                                    
									
                               
								
								
									
<div class="content-right new-content-right wow fadeIn" style="margin-left:2px; margin-right: 2px;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                    </h4>
                                    <?php include ('../../php/sideMenu.php'); ?>
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

                    <?php include ('../../php/alerts.php');  ?>
                    <?php include('../../php/footer.php'); ?>
                    <?php include('../../php/morphingSearch.php'); ?>
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
     <script src="../../js/modernizr.custom.js"></script>
    <script src="../../js/spin.min.js"></script>
    <script src="../../js/mySpin.js"></script>
    <script src="../../js/swipeview.js"></script>
    <script src="../../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../../js/classie.js"></script>
    <script src="../../js/morphingSearch.js"></script>
    <script src="../../js/sidebarEffects.js"></script>
    <script src="../../js/transit.js"></script>
    <script src="../../js/sly.js"></script>
    <script src="../../js/customSly.js"></script>
    <script src="../../js/wow.min.js"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../../js/scripts.js"></script>
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
