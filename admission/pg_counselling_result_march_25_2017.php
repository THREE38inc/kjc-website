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
                                    <br/>
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>PG Counselling Result on 25th March 2017 </strong></span>
                                    </h4>

                                  
                               <p>Applicants provisionally selected for various PG programmes after the counseling held on March 25, 2017. <b>Selected applicants are requested to take admission on or before <font color="#FF0000"> April 10<sup>th</sup>, 2017 ,</font> by submitting all available original documents and paying fee for first year.</b></p>
<table border="1" cellspacing="2" cellpadding="1" width="800" align="center">
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p><strong>App. No.</strong></p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p><strong>Name</strong></p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p><strong>Course Selected</strong></p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ0480</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>STEEVE MATHEW ABRAHAM</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MCA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ0996</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>BETTINA BIJU JACOB</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MA English Literature</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1164</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>AKSHAYA ANN ROSE SANTHOSH</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>M.Com</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1167</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>ROJA H</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MA English Literature</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1205</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>SHREETA NARESH VASANT</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSc [Psychology]</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1221</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>VIVEK MATHEW ABRAHAM</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MA Mass Communication</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1250</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>SANGAVI K R</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MA English Literature</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1251</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>DON JOHNSON</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MCA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1285</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>SRUJITH J KUMAR</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MCom FA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1309</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>FREEDA JELLY MARTHARINE J</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSc [Psychology]</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1322</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>DHANISHA M</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSW</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1324</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>ROSHNI R</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>M.Com. FA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1348</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>MARIA K PANICKER</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MCA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1367</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>PATRICIA MARIA WEIGHTMAN</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSc [Psychology]</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1388</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>JOSEPH COLIN</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSW</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1389</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>MANJU SAREN S</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>M.Com. FA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1425</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>TANMAY TANAJI SHINDE </p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MCA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1426</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>AKSHITHA Y</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>M.Com.</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1427</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>BHAVYA N</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>M.Com.</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1450</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>RAJITHA N</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSc [Psychology]</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1453</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>ALLWIN MICHAEL</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSc [Microbiology]</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1479</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>ANUSREE K O</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>M.Com. FA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1489</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>ANUJA THOMAS</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MCA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1542</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>SAINI MADHAVI</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MCA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1551</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>AKSHAYA P</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSc [Biotechnology]</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1553</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>JINCY JOHNSON</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSc [Biotechnology]</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1588</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>CHITRA V NAIR</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MA English Literature</p></td>
  </tr>
   <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1594</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>NITHIN MATHEW</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>M.Com. FA with CGMA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1715</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>ROSNEARA KHATUN</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MA Mass Communication</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1732</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>SHREYA PAUL</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>M.Com. FA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1744</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>ASWATHY A S</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>M.Com. FA</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1808</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>PREETI RANI</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSc [Microbiology]</p></td>
  </tr>
  <tr>
    <td width="94" nowrap="nowrap" valign="bottom"><p>17KJ1810</p></td>
    <td width="315" nowrap="nowrap" valign="bottom"><p>AVANTIKA RANA</p></td>
    <td width="198" nowrap="nowrap" valign="bottom"><p>MSc [Microbiology]</p></td>
  </tr>
</table>




<p><b><u>Waiting List:</u></b></p>

  <p>Those who are in the waiting list can contact the Admission Office  after <b>April 18, 2017</b></p>
 
  <table border="1" cellspacing="2" cellpadding="1" width="800" align="center">
       <tr>
      <td width="133" nowrap="nowrap" valign="bottom"><p><strong>App. No.</strong></p></td>
      <td width="216" nowrap="nowrap" valign="bottom"><p><strong>Name</strong></p></td>
      <td width="198" nowrap="nowrap" valign="bottom"><p><strong>Course Selected</strong></p></td>
    </tr>
    <tr>
      <td width="133" nowrap="nowrap" valign="bottom"><p>17KJ0668</p></td>
      <td width="216" nowrap="nowrap" valign="bottom"><p>MEHAK JAIN</p></td>
      <td width="198" nowrap="nowrap" valign="bottom"><p>MA English Literature</p></td>
    </tr>
    <tr>
      <td width="133" nowrap="nowrap" valign="bottom"><p>17KJ1615</p></td>
      <td width="216" nowrap="nowrap" valign="bottom"><p>JUDITH NEHA K</p></td>
      <td width="198" nowrap="nowrap" valign="bottom"><p>M.Com.</p></td>
    </tr>
    <tr>
      <td width="133" nowrap="nowrap" valign="bottom"><p>17KJ1730</p></td>
      <td width="216" nowrap="nowrap" valign="bottom"><p>NIKHILL MENNON</p></td>
      <td width="198" nowrap="nowrap" valign="bottom"><p>MSc [Psychology]</p></td>
    </tr>
  </table>

  <p><b><u>DOCUMENTS REQUIRED</u></b><br />
  (Original Plus Two Copies)<br />
  
  1.	Original Marks Card ( X, XII &amp; Degree)<br />
  2.	Transfer Certificate<br />
  3.	Provisional / Degree Certificate<br />
  4.	Conduct Certificate<br />
  5.	Migration Certificate (if applicable)<br />
  6.	Caste Certificate (if applicable)<br />
  7.	AIU Equivalency Certificate (for students who have done their qualifying  examination in any curriculum other than Indian Educational Curriculum)<br />
  8.	Five Passport size  Photos<br />
  9.	First year fees</p>

<p><b><u>In addition to the above, NRI and Foreign Students should produce:</u></b><br />
a.	Valid Passport<br />
b.	Residential Permit from the Commissioner of Police Bengaluru (for foreign students only<br />
c.	HIV Test Certificate</p>

                     

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                      
                                     <?php include('right-admission.php');?>
                                   
                                           
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
