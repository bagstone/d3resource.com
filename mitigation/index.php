<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Diablo 3 Mitigation Calculator</title>
<link rel="stylesheet" type="text/css" href="main-style.css" />
<link rel="stylesheet" type="text/css" href="/_style/d3rheader.css" />
<script src="/_script/jquery-1.11.0.min.js"></script>
</head>
<body>

<?php  include('../d3rheader.php'); ?>

<div id="main">

<h1>D3: Mitigation</h1>

<table class="center">

<tr>
	<td><input type="number" name="armor" id="armor" min="1000" max="50000" step="1" value="5000" /></td>
	<td>Armor</td>
</tr>

<tr>
	<td><input type="number" name="armorpercent" id="armorpercent" min="0" max="75" step="1" value="0" /></td>
	<td>% increased armor</td>
</tr>

<tr>
	<td><input type="number" name="allres" id="allres" min="1" max="5000" step="1" value="1000" /></td>
	<td>All resistances</td>
</tr>

<tr>
	<td><input type="number" name="allrespercent" id="allrespercent" min="0" max="75" step="1" value="0" /></td>
	<td>% increased all resistances</td>
</tr>

<tr>
	<td><input type="number" name="dmgreduct" id="dmgreduct" min="0" max="75" step="0.1" value="17" /></td>
	<td>% damage reduction</td>
</tr>

<tr>
	<td><input type="number" name="meleereduct" id="meleereduct" min="0" max="75" step="0.1" value="0" /></td>
	<td>% melee damage reduction</td>
</tr>

<tr>
	<td><input type="number" name="rangedreduct" id="rangedreduct" min="0" max="75" step="0.1" value="0" /></td>
	<td>% ranged damage reduction</td>
</tr>

<tr>
	<td><input type="number" name="elitereduct" id="elitereduct" min="0" max="75" step="0.1" value="0" /></td>
	<td>% elite damage reduction</td>
</tr>

</table>

<br />

<table class="center">

<tr>
	<th colspan="2">Mitigation versus level <span id="mlevel">?</span> monsters:</th>
</tr>

<tr>
	<td>Melee:</td>
	<td><span id="meleemit">?</span>%</tr>
</tr>

<tr>
	<td>Ranged:</td>
	<td><span id="rangedmit">?</span>%</tr>
</tr>

<tr>
	<td>Elite melee:</td>
	<td><span id="emeleemit">?</span>%</tr>
</tr>

<tr>
	<td>Elite ranged:</td>
	<td><span id="erangedmit">?</span>%</tr>
</tr>

<tr>
	<th colspan="2"><br />Improvements per affix<br />(mitigation on normal melee damage):<th>
</tr>

<tr>
	<td>130 all resistances (ancient):</td>
	<td><span id="allres130">?</span>%</td>
</tr>

<tr>
	<td>100 all resistances (non-ancient):</td>
	<td><span id="allres100">?</span>%</td>
</tr>

<tr>
	<td>78 all resistances (diamond):</td>
	<td><span id="allres78">?</span>%</td>
</tr>

<tr>
	<td>775 armor (ancient high roll):</td>
	<td><span id="armor775">?</span>%</td>
</tr>

<tr>
	<td>595 armor (non-ancient high roll):</td>
	<td><span id="armor595">?</span>%</td>
</tr>

<tr>
	<td>397 armor (other slots):</td>
	<td><span id="armor397">?</span>%</td>
</tr>

<tr>
	<td>280 armor (amethyst):</td>
	<td><span id="armor280">?</span>%</td>
</tr>

<!--
<tr>
	<th colspan="2"><br />Armor to all resistance ratio:<th>
</tr>

<tr>
	<td colspan="2" class="center"><span id="ratioarmor1">?</span> : <span id="ratioallres1">?</span></td>
</tr>

<tr>
	<td colspan="2" class="center"><span id="ratioarmor2">?</span> : <span id="ratioallres2">?</span></td>
</tr>
-->

</table>

<br />
<br />

<div>See a list of elite affixes and whether they are melee or ranged here: <a href="http://www.diablofans.com/forums/diablo-iii-general-forums/diablo-iii-general-discussion/91166-elite-affixes-types-and-damage-reduction-mechanics#c1" target="_blank">elite affix list</a></div>

<br />
<br />

<div id="footer">The purpose of this app is to quickly calculate your mitigation.<br />For feedback contact me at <a href="http://www.diablofans.com/forums/site-related/diablo-tools/85936-mitigation-calculator">Diablofans</a>.</div>

</div>

<script>
var mlevel = 70;

<?php  // retrieve SESSION variables ?>
<?php if(isset($_SESSION['armor'])){?>if("<?php echo $_SESSION['armor']?>" != "") { $("input#armor").val(<?php echo $_SESSION['armor']?>); }<?php }?>
<?php if(isset($_SESSION['armorpercent'])){?>if("<?php echo $_SESSION['armorpercent']?>" != "") { $("input#armorpercent").val(<?php echo $_SESSION['armorpercent']?>); }<?php }?>
<?php if(isset($_SESSION['allres'])){?>if("<?php echo $_SESSION['allres']?>" != "") { $("input#allres").val(<?php echo $_SESSION['allres']?>); }<?php }?>
<?php if(isset($_SESSION['allrespercent'])){?>if("<?php echo $_SESSION['allrespercent']?>" != "") { $("input#allrespercent").val(<?php echo $_SESSION['allrespercent']?>); }<?php }?>
<?php if(isset($_SESSION['dmgreduct'])){?>if("<?php echo $_SESSION['dmgreduct']?>" != "") { $("input#dmgreduct").val(<?php echo $_SESSION['dmgreduct']?>); }<?php }?>
<?php if(isset($_SESSION['meleereduct'])){?>if("<?php echo $_SESSION['meleereduct']?>" != "") { $("input#meleereduct").val(<?php echo $_SESSION['meleereduct']?>); }<?php }?>
<?php if(isset($_SESSION['rangedreduct'])){?>if("<?php echo $_SESSION['rangedreduct']?>" != "") { $("input#rangedreduct").val(<?php echo $_SESSION['rangedreduct']?>); }<?php }?>
<?php if(isset($_SESSION['elitereduct'])){?>if("<?php echo $_SESSION['elitereduct']?>" != "") { $("input#elitereduct").val(<?php echo $_SESSION['elitereduct']?>); }<?php }?>


function calcMeleeMit(v, type) {
	var tarmor=0, tallres=0, tdmgreduct=0, tmeleereduct=0;
	if(v && type && typeof(v)==="number") {
		if(type=="armor") { tarmor = v; }
		if(type=="allres") { tallres = v; }
		if(type=="dmgreduct") { tdmgreduct = v/100; }
		if(type=="meleereduct") { tmeleereduct = v/100; }
	}
	return (Math.round(( 1 -
		(1 - ($('input#armor').val()*1+tarmor)*(1+$('input#armorpercent').val()/100)/(50*mlevel+tarmor+$('input#armor').val()*(1+$('input#armorpercent').val()/100))) *
		(1 - ($('input#allres').val()*1+tallres)*(1+$('input#allrespercent').val()/100)/(5*mlevel+tallres+$('input#allres').val()*(1+$('input#allrespercent').val()/100))) *
		(1-$('input#dmgreduct').val()/100) * (1-tdmgreduct) *
		(1-$('input#meleereduct').val()/100) * (1-tmeleereduct) *
		1 ) * 100000))/1000;		
}

function calcRangedMit(v) {
	var tarmor=0, tallres=0, tdmgreduct=0, trangedreduct=0;
	if(v && type && typeof(v)==="number") {
		if(type=="armor") { tarmor = v; }
		if(type=="allres") { tallres = v; }
		if(type=="dmgreduct") { tdmgreduct = v/100; }
		if(type=="rangedreduct") { trangedreduct = v/100; }
	}
	return (Math.round(( 1 -
		(1 - ($('input#armor').val()*1+tarmor)*(1+$('input#armorpercent').val()/100)/(50*mlevel+tarmor+$('input#armor').val()*(1+$('input#armorpercent').val()/100))) *
		(1 - ($('input#allres').val()*1+tallres)*(1+$('input#allrespercent').val()/100)/(5*mlevel+tallres+$('input#allres').val()*(1+$('input#allrespercent').val()/100))) *
		(1-$('input#dmgreduct').val()/100) * (1-tdmgreduct) *
		(1-$('input#rangedreduct').val()/100) * (1-trangedreduct) *
		1 ) * 100000))/1000;
}

function calcEMeleeMit(v) {
	var tarmor=0, tallres=0, tdmgreduct=0, tmeleereduct=0, telitereduct=0;
	if(v && type && typeof(v)==="number") {
		if(type=="armor") { tarmor = v; }
		if(type=="allres") { tallres = v; }
		if(type=="dmgreduct") { tdmgreduct = v/100; }
		if(type=="meleereduct") { tmeleereduct = v/100; }
		if(type=="elitereduct") { telitereduct = v/100; }
	}
	return (Math.round(( 1 -
		(1 - ($('input#armor').val()*1+tarmor)*(1+$('input#armorpercent').val()/100)/(50*mlevel+tarmor+$('input#armor').val()*(1+$('input#armorpercent').val()/100))) *
		(1 - ($('input#allres').val()*1+tallres)*(1+$('input#allrespercent').val()/100)/(5*mlevel+tallres+$('input#allres').val()*(1+$('input#allrespercent').val()/100))) *
		(1-$('input#dmgreduct').val()/100) * (1-tdmgreduct) *
		(1-$('input#meleereduct').val()/100) * (1-tmeleereduct) *
		(1-$('input#elitereduct').val()/100) * (1-telitereduct) *
		1 ) * 100000))/1000;
}

function calcERangedMit(v) {
	var tarmor=0, tallres=0, tdmgreduct=0, trangedreduct=0, telitereduct=0;
	if(v && type && typeof(v)==="number") {
		if(type=="armor") { tarmor = v; }
		if(type=="allres") { tallres = v; }
		if(type=="dmgreduct") { tdmgreduct = v/100; }
		if(type=="rangedreduct") { trangedreduct = v/100; }
		if(type=="elitereduct") { telitereduct = v/100; }
	}
	return (Math.round(( 1 -
		(1 - ($('input#armor').val()*1+tarmor)*(1+$('input#armorpercent').val()/100)/(50*mlevel+tarmor+$('input#armor').val()*(1+$('input#armorpercent').val()/100))) *
		(1 - ($('input#allres').val()*1+tallres)*(1+$('input#allrespercent').val()/100)/(5*mlevel+tallres+$('input#allres').val()*(1+$('input#allrespercent').val()/100))) *
		(1-$('input#dmgreduct').val()/100) * (1-tdmgreduct) *
		(1-$('input#rangedreduct').val()/100) * (1-trangedreduct) *
		(1-$('input#elitereduct').val()/100) * (1-telitereduct) *
		1 ) * 100000))/1000;
}

function calcResults() {
	$('span#meleemit').text( calcMeleeMit() );
	$('span#rangedmit').text( calcRangedMit() );
	$('span#emeleemit').text( calcEMeleeMit() );
	$('span#erangedmit').text( calcERangedMit() );
	
	$('span#allres130').text( Math.round((calcMeleeMit(130, "allres") - calcMeleeMit()) * 1000)/1000 );
	$('span#allres100').text( Math.round((calcMeleeMit(100, "allres") - calcMeleeMit()) * 1000)/1000 );
	$('span#allres78').text( Math.round((calcMeleeMit(78, "allres") - calcMeleeMit()) * 1000)/1000 );
	$('span#armor775').text( Math.round((calcMeleeMit(775, "armor") - calcMeleeMit()) * 1000)/1000 );
	$('span#armor595').text( Math.round((calcMeleeMit(595, "armor") - calcMeleeMit()) * 1000)/1000 );
	$('span#armor397').text( Math.round((calcMeleeMit(397, "armor") - calcMeleeMit()) * 1000)/1000 );
	$('span#armor280').text( Math.round((calcMeleeMit(280, "armor") - calcMeleeMit()) * 1000)/1000 );
	
	passValues("armor", $('input#armor').val());
	passValues("armorpercent", $('input#armorpercent').val());
	passValues("allres", $('input#allres').val());
	passValues("allrespercent", $('input#allrespercent').val());
	passValues("dmgreduct", $('input#dmgreduct').val());
	passValues("meleereduct", $('input#meleereduct').val());
	passValues("rangedreduct", $('input#rangedreduct').val());
	passValues("elitereduct", $('input#elitereduct').val());
}

function passValues(param, value) {
	$.ajax({
		type: "POST",
		url: "pass_value.php",
		data: param+'='+value,
		dataType: 'json',
		cache: false,
		success: function(response) {
		}
	});
}

$(function() {
	$('input#armor').change( calcResults );
	$('input#armorpercent').change( calcResults );
	$('input#allres').change( calcResults );
	$('input#allrespercent').change( calcResults );
	$('input#dmgreduct').change( calcResults );
	$('input#elitereduct').change( calcResults );
	$('input#meleereduct').change( calcResults );
	$('input#rangedreduct').change( calcResults );
});

$(document).ready(function() {
	$('input#armor').change();
	$('span#mlevel').text(mlevel);
});
</script>

</body>
</html>
