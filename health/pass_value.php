<?php  session_start();

if(isset($_POST['mylife']) && $_POST['mylife']!="") $_SESSION['mylife'] = $_POST['mylife'];
if(isset($_POST['myvit']) && $_POST['myvit']!="") $_SESSION['myvit'] = $_POST['myvit'];
if(isset($_POST['testlife']) && $_POST['testlife']!="") $_SESSION['testlife'] = $_POST['testlife'];
if(isset($_POST['testvit']) && $_POST['testvit']!="") $_SESSION['testvit'] = $_POST['testvit'];

?>
