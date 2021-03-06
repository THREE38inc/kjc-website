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
		<link rel="shortcut icon" href="../../images/icon.png">
		<!-- Bootstrap css -->
		<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!--additional css-->
		<link rel="stylesheet" type="text/css" href="../../css/component.css" />
		<link rel="stylesheet" href="../../css/font-awesome.css">
		<link rel="stylesheet" href="../../css/font-awesome.min.css">
		<link rel="stylesheet" href="../../css/roundIcons.css">
		<link rel="stylesheet" href="../../css/hoverEffect.css">
		
		<link rel="stylesheet" href="../../css/navTabs.css">
		<link rel="stylesheet" href="../../css/animate.css">
		<link rel="stylesheet" href="../../css/fakeLoader.css">
		<!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
        <!--custom css-->
        <link href="../College-Arts-Science-Commerce/css/academics.css" rel="stylesheet">
		<link href="../../css/custom.css" rel="stylesheet">
		<link href="../../css/innerpage.css" rel="stylesheet">
		<link href="css/law.css" rel="stylesheet">
		<!-- javascript -->
		<script src="../../js/jquery-1.11.0.min.js"></script>
		<script src="../../bootstrap/js/bootstrap.min.js"></script> 
		<script src="../../js/respond.js"></script>
		<script src="../../js/custom.js"></script>
		<script src="../../js/fakeLoader.js"></script>

	</head>
	<body>
		<div id="fakeLoader"></div>
		<script>
			$("#fakeLoader").fakeLoader({
				timeToHide:2000,
				bgColor:"#2c3e50",
				spinner:"spinner4"
			});
		</script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=578768295582897";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div class="container-fluid">
			<div class="row">
				<?php include ('php/navbar.php');  ?>
			</div>
		</div>
		<div id="st-container" class="st-container">
			<?php include('../../php/offCanvasMenu.php'); ?>
			<!-- content push wrapper -->
			<div class="st-pusher">	
				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner">
                        
                        <div class="row" style="height: 110px;"></div>
                        
                        
                        <div class="container">
                        <!--        <div class="row">-->
                        
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn">
                                     <img src="images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                               
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                         <span>&nbsp;The College <strong>Profile</strong></span>
                                    </h4>

                                 


                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td>
                                                    Name of the College
                                                </td>
                                                <td>
                                                    Kristu Jayanti College
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Place
                                                </td>
                                                <td>
                                                    K. Narayanapura
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Nationality
                                                </td>
                                                <td>
                                                    India
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    State
                                                </td>
                                                <td>
                                                    Karnataka
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Affiliating University
                                                </td>
                                                <td>
                                                    Bangalore University
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    UGC Recognition
                                                </td>
                                                <td>
                                                    NAAC Accreditation A Grade
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Status of the college
                                                </td>
                                                <td>
                                                    Autonomous College
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Financial Category
                                                </td>
                                                <td>
                                                    Self Financing
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Type of College
                                                </td>
                                                <td>
                                                    Co-education
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    No. of departments
                                                </td>
                                                <td>
                                                    9
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    No of Programmes
                                                </td>
                                                <td>
                                                    UG: 14, PG: 12, Ph.D.: 02, PG Diploma: 3
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Year of Establishment
                                                </td>
                                                <td>
                                                    1999
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Location of the College
                                                </td>
                                                <td>
                                                    Semi-urban
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Student Strength
                                                </td>
                                                <td>
                                                    3540
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Area of the Campus
                                                </td>
                                                <td>
                                                    8.5 Acres
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    No. of Teachers
                                                </td>
                                                <td>
                                                    Teaching: Full Time 121; Part Time - 02; Non - Teaching: 40
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Total No. of Teachers Ph.D:
                                                </td>
                                                <td>
                                                    24
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Total No. of Teachers M.Phil:
                                                </td>
                                                <td>
                                                    45
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Courses:
                                                </td>
                                                <td>
                                                    <!--blank-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">
                                                    Student progression UG
                                                </td>
                                                <td>
                                                    B.Com. 80.80%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    BBM 87.69%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    BCA 86.95%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    B.Sc. 61.33%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    B.A. 88.23%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4">
                                                    Student progression PG
                                                </td>
                                                <td>
                                                    MBA 100%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    MCA 100%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    M. Sc. 100%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    MSW 100%
                                                </td>
                                            </tr>
                                        </table>
									</div></div>
                                  
                              
                            </div>
                            <div class="col-lg-3">
                      
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Courses <strong>Offered</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="BA-LLB/index.php">B.A., LL.B.</a></p>
                                    </section>
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="BCom-LLB/index.php">B.Com LL.B.</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="BBA-LLB/index.php">B.B.A., LL.B.</a></p>
                                    </section>

                                   

                                </div>
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../../php/sideMenu.php'); ?>
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
							
						<?php include ('../../php/alerts.php');  ?>
						<?php include('../../php/footer.php'); ?>
					</div>   



				</div> <!--/st-content-inner--> 
		  </div> <!--st-pusher--> 
		</div> <!--st-container--> 

	<script src="../../js/cbpFWTabs.js"></script>
	<script>
		(function() {

			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});

		})();
	</script>
	<script src="../../js/modernizr.custom.js"></script>
	<script src="../../js/spin.min.js"></script>
	<script src="../../js/mySpin.js"></script>
	<script src="../../js/swipeview.js"></script>
	<script src="../../js/jquery.bootstrap.newsbox.min.js"></script>
	<script src="../../js/classie.js"></script>
	
	<script src="../../js/sidebarEffects.js"></script>
	<script src="../../js/transit.js"></script>
	<script src="../../js/sly.js"></script>
	<script src="../../js/customSly.js"></script>
	<script src="../../js/wow.min.js"></script>
	<script src="../../js/isotope-docs.min.js"></script>
	<!--    <script src="js/res-navtabs.js"></script>-->
	<script src="../../js/scripts.js"></script>
	<script src="js/law.js"></script>
    
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
		}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	</body>   
</html>