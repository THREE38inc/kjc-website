<?php 
	$year = $_REQUEST['year'];
	$month = $_REQUEST['month'];
	$mode = $_REQUEST['mode'];
    if($mode=="openlink")
    { 
        $url=$_REQUEST['url'];
        if(!(@include "../../../../../events/".$year."/".$month."/".$url)) echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 event-tab'><div><b>You seem to have clicked a wrong link ....</b><br/></div></div>";
    }
    else
	if(!(@include "../../../../../events/".$year."/".$month."/index.php")) echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 event-tab'><div><b>No News To be  Displayed for month ".$month." </b><br/></div></div>";
?>
