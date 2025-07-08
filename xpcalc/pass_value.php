<?php  session_start();

// site vars
if(isset($_POST['dfont']) && $_POST['dfont']!="") $_SESSION['dfont'] = $_POST['dfont'];

// mutual settings
if(isset($_POST['diff']) && $_POST['diff']!="") $_SESSION['diff'] = $_POST['diff'];
if(isset($_POST['players']) && $_POST['players']!="") $_SESSION['players'] = $_POST['players'];

// on/off settings
if(isset($_POST['hrme']) && $_POST['hrme']!="") $_SESSION['hrme'] = $_POST['hrme'];
if(isset($_POST['leoricme']) && $_POST['leoricme']!="") $_SESSION['leoricme'] = $_POST['leoricme'];
if(isset($_POST['cain']) && $_POST['cain']!="") $_SESSION['cain'] = $_POST['cain'];
if(isset($_POST['ruby']) && $_POST['ruby']!="") $_SESSION['ruby'] = $_POST['ruby'];
if(isset($_POST['hrfol']) && $_POST['hrfol']!="") $_SESSION['hrfol'] = $_POST['hrfol'];
if(isset($_POST['leoricfol']) && $_POST['leoricfol']!="") $_SESSION['leoricfol'] = $_POST['leoricfol'];
if(isset($_POST['cbe']) && $_POST['cbe']!="") $_SESSION['cbe'] = $_POST['cbe'];
if(isset($_POST['shrine']) && $_POST['shrine']!="") $_SESSION['shrine'] = $_POST['shrine'];
if(isset($_POST['pool']) && $_POST['pool']!="") $_SESSION['pool'] = $_POST['pool'];

// values for dropdown
if(isset($_POST['hrmeval']) && $_POST['hrmeval']!="") $_SESSION['hrmeval'] = $_POST['hrmeval'];
if(isset($_POST['leoricmeval']) && $_POST['leoricmeval']!="") $_SESSION['leoricmeval'] = $_POST['leoricmeval'];
if(isset($_POST['cainval']) && $_POST['cainval']!="") $_SESSION['cainval'] = $_POST['cainval'];
if(isset($_POST['rubyval']) && $_POST['rubyval']!="") $_SESSION['rubyval'] = $_POST['rubyval'];
if(isset($_POST['hrfolval']) && $_POST['hrfolval']!="") $_SESSION['hrfolval'] = $_POST['hrfolval'];
if(isset($_POST['leoricfolval']) && $_POST['leoricfolval']!="") $_SESSION['leoricfolval'] = $_POST['leoricfolval'];

?>
