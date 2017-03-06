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
		<link rel="stylesheet" href="../css/deptCustomLink.css">

		<!--custom css-->
		<link href="../css/custom.css" rel="stylesheet">
		<link href="style/academic-style.css" rel="stylesheet">
		<!-- javascript -->
		<script src="../js/jquery-1.11.0.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script> 
		<script src="../js/respond.js"></script>
		<script src="../js/custom.js"></script>
		<script src="../js/fakeLoader.js"></script>
		<style>
			/* Custom, iPhone Retina */
			@media only screen and (min-width : 320px){
				.profile{
					min-width: 94%;
				}
			}

			/* Extra Small Devices, Phones */
			@media only screen and (min-width : 480px){
				.profile{
					min-width: 94%;
				}
			}

			/* Small Devices, Tablets */
			@media only screen and (min-width : 768px){
				.profile{
					min-width: 94%;
				}
			}


			/* Medium Devices, Desktops */
			@media only screen and (min-width : 992px){
				.profile{
					min-width: 98%;
				}
			}

			/* Large Devices, Wide Screens */
			@media only screen and (min-width : 1200px){
				.profile{
					min-width: 98%;
				}
			}


		</style>
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
				<?php include ('../php/navbar.php');  ?>
			</div>
		</div>
		<div id="st-container" class="st-container">
			<?php include('../php/offCanvasMenu.php'); ?>
			<!-- content push wrapper -->
			<div class="st-pusher">	
				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner">
						<div class="container">
							<!--        <div class="row">-->
							<div class="row" style="margin-top: 80px; padding-left: 10px; padding-right: 10px;">
								<img class="img-responsive col-lg-12" style="width:100%;padding:0px;" src="../images/researchBanner.jpg" alt="cover-img" /> 
							</div>



							<div class="row">
								<div class="col-lg-9">
									<div class="row wow fadeIn" style="padding-top: 12px;background-color: #fff;margin-left: 10px;margin-top: 6px;margin-right: 6px;">

										<h4 class="col-lg-4 pull-left">
											<i class="fa fa-bookmark" style="color:#2980b9"></i>
											<span>&nbsp;<strong>Faculty Profile</strong></span>

										</h4>
										<ul class="pagination pagination-sm profile-pagination pull-right">
											<li class="active"><a href="#" data-value="page1">1</a></li>
											<li><a href="#" data-value="page2">2</a></li>
											<li><a href="#" data-value="page3">3</a></li>
											<li><a href="#" data-value="page4">4</a></li>
											<li><a href="#" data-value="page5">5</a></li>
										</ul>
									</div>
									<div class="profile-page">
										<div id="page">

										</div> 
									</div> 
								</div>
								<div class="col-lg-3">
									<div class="content-right wow fadeIn">
										<h4 style="margin-left:10px;">
											<!--											<i class="fa fa-bookmark" style="color:#2980b9"></i>-->
											<span>&nbsp;<strong>Departmental Activites</strong></span>
										</h4>
										<section class="link-arrow">
											<p><a href="cs_faculty.php">Faculty Profile</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Academic Calender</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Fests</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Value Added Courses</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Computer Academy</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Achievements</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Best Practices</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Career Opportunity</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Seminars &amp; Workshops</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Guest Lectures</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Activities</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Development Program</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Gallery</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Moodle</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Blog</a></p>
										</section>
										<section class="link-arrow">
											<p><a href="#">Newsletter</a></p>
										</section>
									</div>




									<div class="row" style="margin-left:2px; margin-right: 2px;">
										<div class="content-right wow fadeIn">
											<?php include ('../php/sideMenu.php'); ?>
										</div>



										<!--
<div class="content-right wow fadeIn" style="height:153px;padding:10px;overflow-y:scroll;overflow-x:hidden;">
<div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="310" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote></div></div>
</div>
-->

									</div>

								</div>
							</div>


							<div class="row">

							</div>
						</div>	
						<?php include ('../php/alerts.php');  ?>
						<?php include('../php/footer.php'); ?>
						<?php include('../php/morphingSearch.php'); ?>




					</div> <!--/st-content-inner--> 
				</div><!-- this is the wrapper for the content--> 
			</div> <!--st-pusher--> 
		</div> <!--st-container--> 

		<script src="../js/cbpFWTabs.js"></script>
		<script>
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
		</script>
		<script src="../js/modernizr.custom.js"></script>
		<script src="../js/modernizr.custom.academics.js"></script>
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
		<script src="../js/scripts.js"></script>
		<script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
			}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<script>


			$("document").ready(function(){
				var activePage='page1';
				$.ajax({
					url:'snipets/'+activePage+'.php',
					success:function(data){
						$('#page').html(data);
					},
					error:function(data){
						alert('failed to load data');
					}
				});
				$('.profile-pagination li a').click(function(){
					$(this).parent().siblings().removeClass('active');
					$(this).parent().addClass('active');
				});
				$('.profile-pagination li a').click(function(){
					var activePage=this.getAttribute('data-value');
					$.ajax({
						url:'snipets/'+activePage+'.php',
						success:function(data){
							$('#page').html(data);
						},
						error:function(data){
							alert('failed to load data');
						}
					});

				});

			});
		</script>
	</body>   
</html>