<?php  session_start();

// view 1 or 2
if(isset($_POST['view'])) {
	echo $_POST['view'];
	$_SESSION['view'] = $_POST['view'];
}

?>
