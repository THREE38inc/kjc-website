<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,11); /*$ROOT is the base URL & should on top of every PAGE */?> 
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
											<span>&nbsp;<font size="5">Guidelines </font> <strong> Login</strong></span>
                                    </h4>
                                    
 		<div class="alert alert-dismissible alert-success">
 
	
                               <p><b> 1. </b>Kindly use Mozilla Firefox as your default browser to fill up the form. It may not work properly with internet explorer or Google chrome. <a href="http://www.mozilla.org/en-US/firefox/new/">[Download Mozilla Firefox browser]</a></p>
 
 <p><b>2. </b> If the session expires if it remains idle for 10 minutes. Use the "Save" button towards the bottom of the E-form page to avoid session from getting expired.</p>
 
<p><b>3.</b> Refer the User ID and Password shared through your email at the time of registration.</p>
</div>
				
									<center><a href="http://www.tcsion.com/EForms/loginAction.do?subAction=ViewLoginPage&orgId=368&formId=926" target="_blank" class="btn btn-primary btn-sm">CLCIK HERE TO PROCEED TO LOGIN PAGE </a></center>



								</div>
                            </div>
                            <div class="col-lg-3">
                            
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                       <span>&nbsp;Law <strong> Admission</strong></span>
                                    </h4>
                                      <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="admission.php">LL.B. Admission </a></p>
                                    </section>
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="document_required.php">Documents required for Admission Law</a></p>
                                    </section>
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="admission_enquiry.php">Admission Enquiry</a></p>
                                    </section>

                                   

                                </div>
								<div class="well">
 <p><font size=2 color='#5cafee'>New users can click the link below to get online application form and the instructions to fill the application form</font></p>
									  <center><a href="admission_guidelines.php" class="btn btn-primary btn-xs">Online Application Form</a></center>
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

Law Programme: Rs 300/- <br>
</font> 
                       
  </div>
</div>   
 </div>
                                 
 <div class="list-group">
                                  <a href="#" class="list-group-item active">Counselling Results</a>
									  
									   <a href="#" class="list-group-item">
										   <font size=2>LAW Counselling result held on 10<sup>th</sup> June 2017</font>
                                        </a>
                                       

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

							</div></div></div>
							
						<?php include ('../../php/alerts.php');  ?>
						<?php include('../../php/footer.php'); ?>
					</div>   



				</div> <!--/st-content-inner--> 
		  </div> <!--st-pusher--> 
	 <!--st-container--> 

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