<?php  session_start();

if(isset($_POST['armor']) && $_POST['armor']!="") $_SESSION['armor'] = $_POST['armor'];
if(isset($_POST['armorpercent']) && $_POST['armorpercent']!="") $_SESSION['armorpercent'] = $_POST['armorpercent'];
if(isset($_POST['allres']) && $_POST['allres']!="") $_SESSION['allres'] = $_POST['allres'];
if(isset($_POST['allrespercent']) && $_POST['allrespercent']!="") $_SESSION['allrespercent'] = $_POST['allrespercent'];
if(isset($_POST['dmgreduct']) && $_POST['dmgreduct']!="") $_SESSION['dmgreduct'] = $_POST['dmgreduct'];
if(isset($_POST['meleereduct']) && $_POST['meleereduct']!="") $_SESSION['meleereduct'] = $_POST['meleereduct'];
if(isset($_POST['rangedreduct']) && $_POST['rangedreduct']!="") $_SESSION['rangedreduct'] = $_POST['rangedreduct'];
if(isset($_POST['elitereduct']) && $_POST['elitereduct']!="") $_SESSION['elitereduct'] = $_POST['elitereduct'];

?>
