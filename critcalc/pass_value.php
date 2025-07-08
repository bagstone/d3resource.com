<?php  session_start();

if(isset($_POST['mychc']) && $_POST['mychc']!="") $_SESSION['mychc'] = $_POST['mychc'];
if(isset($_POST['mychd']) && $_POST['mychd']!="") $_SESSION['mychd'] = $_POST['mychd'];
if(isset($_POST['testchc']) && $_POST['testchc']!="") $_SESSION['testchc'] = $_POST['testchc'];
if(isset($_POST['testchd']) && $_POST['testchd']!="") $_SESSION['testchd'] = $_POST['testchd'];

?>
