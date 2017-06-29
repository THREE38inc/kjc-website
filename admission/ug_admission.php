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
    <script type="text/javascript">$crisp=[];CRISP_WEBSITE_ID="bfee4615-2d13-4129-a9c2-d7b8095e3d0e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
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
                                        <span>&nbsp;UG<strong> Admission</strong></span>
                                    </h4>

  <p><b><u>Faculty of Commerce & Management :</u></b></p>
  <table border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed" style="margin:auto;">
  <tr>
  <td width="200" bgcolor="#dce6f1"><p><b>Programme Name</b></p></td>
  <td width="600" bgcolor="#dce6f1"><p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click the link below to view the respective Details</b></p></td>
  </tr></table>
  <table border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed" style="margin:auto;">
  <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Commerce-Management/commerce/bcom.php"><u>B.Com</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bcom_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bcom_fee.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Commerce-Management/commerce/bcom_tourism.php"><u>B.Com (Tourism)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bcom_tourism_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bcom_tourism_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Commerce-Management/commerce/bcom_professioal.php"><u>B.Com (Professional)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bcom_professional_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bcom_professional_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Commerce-Management/commerce/bcom_integrated_bcom_acca.php"><u>B.Com with ACCA</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bcom_acca_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bcom_acca_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
  <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Commerce-Management/management/bba.php"><u>BBA</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bbm_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bbm_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Commerce-Management/management/bba_integrated.php"><u>BBA <br />(Integrated with<br /> CGMA)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bbm_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bba_integrated_cgma_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>

  </table>
  
  
 <p><b><u>Faculty of Sciences: </u></b></p>  
  
<table border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed" style="margin:auto;">
 <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Sciences/department-cs-ug/bca.php"><u>BCA</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bca_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Sciences/department-cs-ug/bsc_csme.php"><u>B.Sc (CSME)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_csme_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Sciences/department-cs-ug/bsc_csms.php"><u>B.Sc (CSMS)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_csms_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
  <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Sciences/department-lifescience/bsc_bio.php"><u>B.Sc (Biotechnology)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Sciences/department-lifescience/bsc_micro.php"><u>B.Sc (Microbiology)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_mb_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
  </table> 
  
  
  <p><b><u>Faculty of Humanities: </u></b></p>  
  
 <table border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed" style="margin:auto;">
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Humanities/humanities/ba_hep.php"><u>BA (HEP)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/ba_hep_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
  <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Humanities/journalism/ba_htj.php"><u>BA (HTJ)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/ba_htj_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Humanities/journalism/ba_jpcs.php"><u>BA (JPCS)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/ba_jpcs_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
 <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Humanities/journalism/ba_jpeng.php"><u>BA (JPEng)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/ba_jpeng_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-Arts-Science-Commerce/Faculty-Humanities/journalism/ba_jpoleng.php"><u>BA (JPolEng)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/ba_jpoleng_fee.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
  </table> 
  

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Admission</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="admission.php">Admission 2017</a></p>
                                    </section>
                                        <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="why_kjc.php">Why Kristu Jayanti College ?</a></p>
                                   </section>
                                     <section class="link-arrow">   
                <p><a class="a-link-arrow" href="mba_admission.php">MBA/PGDM Admission</a></p>
                                    </section><section class="link-arrow">
                                    
                                    <p><a class="a-link-arrow" href="mca_admission.php">MCA Admission</a></p>
                                    </section><section class="link-arrow">
                                    
                                    <p><a class="a-link-arrow" href="pg_diploma.php">Post Graduate Diploma <font size=1> (For Working Executives)</font></a></p>
                                    </section><section class="link-arrow">
                                    
                                        <p><a class="a-link-arrow" href="pg_admission.php">PG Admission</a></p>
                                    </section><section class="link-arrow">
                                    
              <p><a class="a-link-arrow" href="ug_admission.php" style="color: #2980b9;font-weight: bold;">UG Admission</a></p>
                                    </section><section class="link-arrow">
                                    
          <p><a class="a-link-arrow" href="llb_admission.php">LL.B. Admission</a></p>
                                    </section><section class="link-arrow">
                                    
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
                    
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
    </div>
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
