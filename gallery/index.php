<?php
if(!session_id()){
    session_start();
}?>
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
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/album.css"/>
        <link rel="stylesheet" href="../css/roundIcons.css">
        
        <link rel="stylesheet" href="../css/fakeLoader.css">





        <!--custom css-->
        <link href="../css/custom.css" rel="stylesheet">
        <!-- javascript -->
        <script src="../js/jquery-1.11.0.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script> 
        <script src="../js/respond.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/fakeLoader.js"></script>


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
                            <div class="row" style="margin-top: 80px; padding-left: 10px; padding-right: 10px;">
                                <!--								<img class="img-responsive col-lg-12" style="width:100%;padding:0px;" src="../images/researchBanner.jpg" alt="cover-img" />    -->
                            </div>

                            <div class="row gallery">
                            
                               <div class="col-lg-12">
                                    <h3 class="mb-50">Gallery</h3>
                                </div>
                                
                                <?php include('php/load-albums.php'); ?>

                            </div>

                        </div>

                        <?php include ('../php/alerts.php');  ?>
                        <?php include('../php/footer.php'); ?>
                        <?php /*include('../php/morphingSearch.php');*/ ?>




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
        <script src="../js/spin.min.js"></script>
        <script src="../js/mySpin.js"></script>
        <script src="../js/swipeview.js"></script>
        <script src="../js/jquery.bootstrap.newsbox.min.js"></script>
        <script src="../js/classie.js"></script>
<!-- -->
        <script src="../js/sidebarEffects.js"></script>
        <script src="../js/transit.js"></script>
        <script src="../js/sly.js"></script>
        <script src="../js/customSly.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/isotope-docs.min.js"></script>
        <script src="../js/scripts.js"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
       

    </body>   
</html>