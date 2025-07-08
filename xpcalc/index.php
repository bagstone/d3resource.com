<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Diablo 3 Bonus Experience Calculator</title>
<link rel="stylesheet" type="text/css" href="main-style.css" />
<script src="/_script/jquery1.10.2.js"></script>
</head>
<body>

<h1>Diablo 3 Bonus Experience Calculator</h1>

<h2>This is OUTDATED - don't use this anymore, needs to be re-done (contact me if you have the new, correct formula)</h2>

<div id="main">

<p>Current bonus XP: <span id="result1" class="dfont"></span><span id="pooltext1"></span><span id="result2" class="dfont"></span><span id="pooltext2"></span></p>

<div id="diff">
	<div class="header diffheader">Difficulty</div>
	<div id="normal" data-value="0" class="dfont mutual ns">Normal<br /><span id="normalchange" class="dfont colorize"></span></div>
	<div id="hard" data-value="0.75" class="dfont mutual ns">Hard<br /><span id="hardchange" class="dfont colorize"></span></div>
	<div id="expert" data-value="1" class="dfont mutual ns">Expert<br /><span id="expertchange" class="dfont colorize"></span></div>
	<div id="master" data-value="2" class="dfont mutual ns">Master<br /><span id="masterchange" class="dfont colorize"></span></div>
	<div id="t1" data-value="3" class="dfont mutual ns">Torment I<br /><span id="t1change" class="dfont colorize"></span></div>
	<div id="t2" data-value="4" class="dfont mutual ns">Torment II<br /><span id="t2change" class="dfont colorize"></span></div>
	<div id="t3" data-value="5.5" class="dfont mutual sel">Torment III<br /><span id="t3change" class="dfont colorize"></span></div>
	<div id="t4" data-value="8" class="dfont mutual ns">Torment IV<br /><span id="t4change" class="dfont colorize"></span></div>
	<div id="t5" data-value="11.5" class="dfont mutual ns">Torment V<br /><span id="t5change" class="dfont colorize"></span></div>
	<div id="t6" data-value="16" class="dfont mutual ns">Torment VI<br /><span id="t6change" class="dfont colorize"></span></div>
</div>

<div id="items">
	<div class="header itemheader">Items on player</div>
	<div id="hrme" class="dfont box sel dropdown">
	Hellfire Ring
		<select id="hrmedd" class="ddmenu">
			<option value="0.35" selected="selected">35 %</option>
			<option value="0.45">45 %</option>
		</select>
	<br /><span id="hrmechange" class="dfont colorize"></span></div>
	<div id="leoricme" class="dfont box ns dropdown">
		Leoric's
		<select id="leoricmedd" class="ddmenu">
			<option value="0.2">20 %</option>
			<option value="0.21">21 %</option>
			<option value="0.22">22 %</option>
			<option value="0.23">23 %</option>
			<option value="0.24">24 %</option>
			<option value="0.25">25 %</option>
			<option value="0.26">26 %</option>
			<option value="0.27">27 %</option>
			<option value="0.28">28 %</option>
			<option value="0.29">29 %</option>
			<option value="0.3" selected="selected">30 %</option>
		</select>
		<br /><span id="leoricmechange" class="dfont colorize"></span></div>
	<div id="cain" class="dfont box ns dropdown">
		Cain's Set
		<select id="caindd" class="ddmenu">
			<option value="0.3" selected="selected">30 %</option>
			<option value="0.5">50 %</option>
		</select>
		<br /><span id="cainchange" class="dfont colorize"></span></div>
	<div id="ruby" class="dfont box ns dropdown">
		Ruby gem
		<select id="rubydd" class="ddmenu">
			<option value="0.05">5 %</option>
			<option value="0.07">7 %</option>
			<option value="0.09">9 %</option>
			<option value="0.11">11 %</option>
			<option value="0.13">13 %</option>
			<option value="0.15">15 %</option>
			<option value="0.17">17 %</option>
			<option value="0.19">19 %</option>
			<option value="0.21">21 %</option>
			<option value="0.23">23 %</option>
			<option value="0.25">25 %</option>
			<option value="0.27">27 %</option>
			<option value="0.29">29 %</option>
			<option value="0.31" selected="selected">31 %</option>
			<option value="0.33">33 %</option>
			<option value="0.35">35 %</option>
			<option value="0.37">37 %</option>
			<option value="0.39">39 %</option>
			<option value="0.41">41 %</option>
		</select>
		<br /><span id="rubychange" class="dfont colorize"></span></div>
</div>

<div id="players">
	<div class="header playersheader">Number of players</div>
	<div id="p1" data-value="0" class="dfont mutual ns">Single player<br /><span id="p1change" class="dfont colorize"></span></div>
	<div id="p2" data-value="0.1" class="dfont mutual ns">2 players<br /><span id="p2change" class="dfont colorize"></span></div>
	<div id="p3" data-value="0.2" class="dfont mutual ns">3 players<br /><span id="p3change" class="dfont colorize"></span></div>
	<div id="p4" data-value="0.3" class="dfont mutual sel">4 players<br /><span id="p4change" class="dfont colorize"></span></div>
</div>

<div id="follower">
	<div class="header followerheader">Rings on follower</div>
	<div id="hrfol" class="dfont box ns dropdown">
	Hellfire Ring
		<select id="hrfoldd" class="ddmenu">
			<option value="0.07" selected="selected">35 %</option>
			<option value="0.09">45 %</option>
		</select>
	<br /><span id="hrfolchange" class="dfont colorize"></span></div>
	<div id="leoricfol" class="dfont box ns dropdown">
		Leoric's
		<select id="leoricfoldd" class="ddmenu">
			<option value="0.04">20 %</option>
			<option value="0.042">21 %</option>
			<option value="0.044">22 %</option>
			<option value="0.046">23 %</option>
			<option value="0.048">24 %</option>
			<option value="0.05">25 %</option>
			<option value="0.052">26 %</option>
			<option value="0.054">27 %</option>
			<option value="0.056">28 %</option>
			<option value="0.058">29 %</option>
			<option value="0.06" selected="selected">30 %</option>
		</select>
		<br /><span id="leoricfolchange" class="dfont colorize"></span></div>
</div>

<div id="misc">
	<div class="header mischeader">Miscellaneous</div>
	<div id="cbe" data-value="0.5" class="dfont box sel simple">50% event buff<br /><span id="cbechange" class="dfont colorize"></span></div>
	<div id="shrine" data-value="0.25" class="dfont box ns simple">Experience Shrine<br /><span id="shrinechange" class="dfont colorize"></span></div>
	<div id="pool" data-value="0.25" class="dfont box ns simple">Pool of Reflection<br /><span id="poolchange" class="dfont colorize"></span></div>
</div>

</div>

<div id="notes">
<p><span class="normalfont">This is work in progress! The formula has not been officially posted yet and has just been derived from personal testing. If you spot any errors please contact me on DiabloFans - <a href="http://www.diablofans.com/forums/diablo-iii-misc-forums/theorycrafting-and-analysis/73366-d3-bonus-xp-calculator">in this thread </a> or <a href="http://www.diablofans.com/user/87517-bagstone/">via PM</a>!</span></p>

<ul>
	<li>This calculator shows bonus XP (as of Diablo 3 v2.0.1); it should match the numbers on the character screen (Pool of Reflection is displayed separately).</li>
	<li>"Abs." and "rel." refer to the absolute and relative increase when adding the respective bonus XP to the formula.</li>
	<li>The current formula for bonus XP, derived from testing, is as follows: ( 1 + difficulty + items ) * ( 1 + event buff + multiplayer + shrine ) * ( 1 + Pool of Reflection )</li>
	<li>The calculator does not check logic: you can select multiplayer and items on follower, which of course isn't possible ingame.</li>
	<li><a id="togglefont2" href="#">Click here to toggle Diablo font/normal font (also available on top right).</a></li>
	<li>If you have any comments, questions, or suggestions please leave me a post on the <a href="http://www.diablofans.com/forums/diablo-iii-misc-forums/theorycrafting-and-analysis/73366-d3-bonus-xp-calculator">thread on DiabloFans</a> or sent me a <a href="http://www.diablofans.com/user/87517-bagstone/">PM on DiabloFans</a>.</li>
</ul>
</div>

<div id="togglefontdiv"><a id="togglefont1" href="#"><span class="normalfont">Toggle font</span></a></div>

<script>
<?php  // all the variables; set <varname>val for the dropdown default boxes, two for all the selections (t<varname> and <varname>) ?>
var result = 0;

var tdiff = diff = 0;

var hrmeval = 0.35;
var thrme = hrme = 0;
var leoricmeval = 0.30;
var tleoricme = leoricme = 0;
var cainval = 0.30;
var tcain = cain = 0;
var rubyval = 0.31;
var truby = ruby = 0;

var tplayers = players = 0;

var hrfolval = 0.07;
var thrfol = hrfol = 0;
var leoricfolval = 0.06;
var tleoricfol = leoricfol = 0;

var tcbe = cbe = 0.5;
var tshrine = shrine = 0;
var tpool = pool = 0;

<?php  // site vars ?>
var dfont = true;

<?php  // retrieve SESSION variables ?>
<?php if(isset($_SESSION['diff'])){?>		 if("<?php echo $_SESSION['diff']?>" != "") { 		  tdiff = diff = "<?php echo $_SESSION['diff']?>"; }<?php }?>
<?php if(isset($_SESSION['hrmeval'])){?>	 if("<?php echo $_SESSION['hrmeval']?>" != "") { 	  hrmeval = "<?php echo $_SESSION['hrmeval']?>"; }<?php }?>
hrmeval = (parseFloat(hrmeval, 10));
<?php if(isset($_SESSION['hrme'])){?>		 if("<?php echo $_SESSION['hrme']?>" != "") { 		  thrme = hrme = "<?php echo $_SESSION['hrme']?>"; }<?php }?>
thrme = hrme = (parseFloat(hrme, 10));
<?php if(isset($_SESSION['leoricmeval'])){?> if("<?php echo $_SESSION['leoricmeval']?>" != "") {  leoricmeval = "<?php echo $_SESSION['leoricmeval']?>"; }<?php }?>
leoricmeval = (parseFloat(leoricmeval, 10));
<?php if(isset($_SESSION['leoricme'])){?>	 if("<?php echo $_SESSION['leoricme']?>" != "") { 	  tleoricme = leoricme = "<?php echo $_SESSION['leoricme']?>"; }<?php }?>
tleoricme = leoricme = (parseFloat(leoricme, 10));
<?php if(isset($_SESSION['cainval'])){?>	 if("<?php echo $_SESSION['cainval']?>" != "") { 	  cainval = "<?php echo $_SESSION['cainval']?>"; }<?php }?>
cainval = (parseFloat(cainval, 10));
<?php if(isset($_SESSION['cain'])){?>		 if("<?php echo $_SESSION['cain']?>" != "") { 		  tcain = cain = "<?php echo $_SESSION['cain']?>"; }<?php }?>
tcain = cain = (parseFloat(cain, 10));
<?php if(isset($_SESSION['rubyval'])){?>	 if("<?php echo $_SESSION['rubyval']?>" != "") { 	  rubyval = "<?php echo $_SESSION['rubyval']?>"; }<?php }?>
rubyval = (parseFloat(rubyval, 10));
<?php if(isset($_SESSION['ruby'])){?>		 if("<?php echo $_SESSION['ruby']?>" != "") { 		  truby = ruby = "<?php echo $_SESSION['ruby']?>"; }<?php }?>
truby = ruby = (parseFloat(ruby, 10));
<?php if(isset($_SESSION['players'])){?>	 if("<?php echo $_SESSION['players']?>" != "") { 	  tplayers = players = "<?php echo $_SESSION['players']?>"; }<?php }?>
<?php if(isset($_SESSION['hrfolval'])){?>	 if("<?php echo $_SESSION['hrfolval']?>" != "") { 	  hrfolval = "<?php echo $_SESSION['hrfolval']?>"; }<?php }?>
hrfolval = (parseFloat(hrfolval, 10));
<?php if(isset($_SESSION['hrfol'])){?>		 if("<?php echo $_SESSION['hrfol']?>" != "") { 		  thrfol = hrfol = "<?php echo $_SESSION['hrfol']?>"; }<?php }?>
thrfol = hrfol = (parseFloat(hrfol, 10));
<?php if(isset($_SESSION['leoricfolval'])){?>if("<?php echo $_SESSION['leoricfolval']?>" != "") { leoricfolval = "<?php echo $_SESSION['leoricfolval']?>"; }<?php }?>
leoricfolval = (parseFloat(leoricfolval, 10));
<?php if(isset($_SESSION['leoricfol'])){?>	 if("<?php echo $_SESSION['leoricfol']?>" != "") { 	  tleoricfol = leoricfol = "<?php echo $_SESSION['leoricfol']?>"; }<?php }?>
tleoricfol = leoricfol = (parseFloat(leoricfol, 10));
<?php if(isset($_SESSION['cbe'])){?>		 if("<?php echo $_SESSION['cbe']?>" != "") { 		  tcbe = cbe = "<?php echo $_SESSION['cbe']?>"; }<?php }?>
tcbe = cbe = (parseFloat(cbe, 10));
<?php if(isset($_SESSION['shrine'])){?>		 if("<?php echo $_SESSION['shrine']?>" != "") { 	  tshrine = shrine = "<?php echo $_SESSION['shrine']?>"; }<?php }?>
tshrine = shrine = (parseFloat(shrine, 10));
<?php if(isset($_SESSION['pool'])){?>		 if("<?php echo $_SESSION['pool']?>" != "") { 		  tpool = pool = "<?php echo $_SESSION['pool']?>"; }<?php }?>
tpool = pool = (parseFloat(pool, 10));

<?php  // make CSS adjustments based on retrieved SESSION vars: ?>

<?php  // set mutual exclusive bonuses ?>
switch(diff) {
	case "0":
		setActiveMutual("normal"); break;
	case "0.75":
		setActiveMutual("hard"); break;
	case "1":
		setActiveMutual("expert"); break;
	case "2":
		setActiveMutual("master"); break;
	case "3":
		setActiveMutual("t1"); break;
	case "4":
		setActiveMutual("t2"); break;
	case "5.5":
		setActiveMutual("t3"); break;
	case "8":
		setActiveMutual("t4"); break;
	case "11.5":
		setActiveMutual("t5"); break;
	case "16":
		setActiveMutual("t6"); break;
}

switch(players) {
	case "0":
		setActiveMutual("p1"); break;
	case "0.1":
		setActiveMutual("p2"); break;
	case "0.2":
		setActiveMutual("p3"); break;
	case "0.3":
		setActiveMutual("p4"); break;
}

<?php  // set values of items with dropdown ?>
$("#hrmedd").val(hrmeval);
$("#leoricmedd").val(leoricmeval);
$("#caindd").val(cainval);
$("#rubydd").val(rubyval);
$("#hrfoldd").val(hrfolval);
$("#leoricfoldd").val(leoricfolval);

<?php  // set boxess active/inactive ?>
if((hrme!=0 && $("#hrme").hasClass('ns')) || (hrme==0 && $("#hrme").hasClass('sel'))) { $("#hrme").toggleClass('sel ns'); }
if((leoricme!=0 && $("#leoricme").hasClass('ns')) || (leoricme==0 && $("#leoricme").hasClass('sel'))) { $("#leoricme").toggleClass('sel ns'); }
if((cain!=0 && $("#cain").hasClass('ns')) || (cain==0 && $("#cain").hasClass('sel'))) { $("#cain").toggleClass('sel ns'); }
if((ruby!=0 && $("#ruby").hasClass('ns')) || (ruby==0 && $("#ruby").hasClass('sel'))) { $("#ruby").toggleClass('sel ns'); }
if((hrfol!=0 && $("#hrfol").hasClass('ns')) || (hrfol==0 && $("#hrfol").hasClass('sel'))) { $("#hrfol").toggleClass('sel ns'); }
if((leoricfol!=0 && $("#leoricfol").hasClass('ns')) || (leoricfol==0 && $("#leoricfol").hasClass('sel'))) { $("#leoricfol").toggleClass('sel ns'); }
if((cbe!=0 && $("#cbe").hasClass('ns')) || (cbe==0 && $("#cbe").hasClass('sel'))) { $("#cbe").toggleClass('sel ns'); }
if((shrine!=0 && $("#shrine").hasClass('ns')) || (shrine==0 && $("#shrine").hasClass('sel'))) { $("#shrine").toggleClass('sel ns'); }
if((pool!=0 && $("#pool").hasClass('ns')) || (pool==0 && $("#pool").hasClass('sel'))) { $("#pool").toggleClass('sel ns'); }

<?php  // get site-related SESSION vars (and handle them) ?>
<?php if(isset($_SESSION['dfont'])){?>if("<?php echo $_SESSION['dfont']?>" != "") { dfont = "<?php echo $_SESSION['dfont']?>"; }<?php }?>
if(dfont=="false") { $(".dfont").addClass('nodfont'); $(".dfont").removeClass('dfont'); }

updateFields();

function setActiveMutual(item) {
	if($('div#'+item).hasClass('ns')) {
		$('div#'+item).siblings('.sel').addClass('ns');
		$('div#'+item).siblings('.sel').removeClass('sel');
		$('div#'+item).addClass('sel');
		$('div#'+item).removeClass('ns');
	}
}

function updateFields() {
	
	<?php  // update fields for mutual exclusive bonuses (players, difficulty level) ?>
	tdiff = diff = parseFloat($('div#diff').children('.sel').data('value'));
	passValues("diff", parseFloat($('div#diff').children('.sel').data('value')));
	tplayers = players = parseFloat($('div#players').children('.sel').data('value'));
	passValues("players", parseFloat($('div#players').children('.sel').data('value')));

	<?php  // update fields for simple selections ?>
	if($('div#cbe').hasClass('sel')) tcbe = cbe = 0.5;
	else tcbe = cbe = 0;
	passValues("cbe", cbe);
	if($('div#shrine').hasClass('sel')) tshrine = shrine = 0.25;
	else tshrine = shrine = 0;
	passValues("shrine", shrine);
	if($('div#pool').hasClass('sel')) tpool = pool = 0.25;
	else tpool = pool = 0;
	passValues("pool", pool);
	
	<?php  // update fields for bonuses with dropdown menu ?>
	if($('div#hrme').hasClass('sel')) thrme = hrme = hrmeval;
	else thrme = hrme = 0;
	passValues("hrme", hrme);
	passValues("hrmeval", hrmeval);
	if($('div#leoricme').hasClass('sel')) tleoricme = leoricme = leoricmeval;
	else tleoricme = leoricme = 0;
	passValues("leoricme", leoricme);
	passValues("leoricmeval", leoricmeval);
	if($('div#cain').hasClass('sel')) tcain = cain = cainval;
	else tcain = cain = 0;
	passValues("cain", cain);
	passValues("cainval", cainval);
	if($('div#ruby').hasClass('sel')) truby = ruby = rubyval;
	else truby = ruby = 0;
	passValues("ruby", ruby);
	passValues("rubyval", rubyval);

	if($('div#hrfol').hasClass('sel')) thrfol = hrfol = hrfolval;
	else thrfol = hrfol = 0;
	passValues("hrfol", hrfol);
	passValues("hrfolval", hrfolval);
	if($('div#leoricfol').hasClass('sel')) tleoricfol = leoricfol = leoricfolval;
	else tleoricfol = leoricfol = 0;
	passValues("leoricfol", leoricfol);
	passValues("leoricfolval", leoricfolval);

	<?php  // calc ?>
	result = calcResult();
	
	<?php  // show result - if pool is selected, show char screen result separately ?>
	if(pool != 0) {
		document.getElementById('result1').innerHTML = result+" %";
		document.getElementById('pooltext1').innerHTML = " - on character screen: ";
		document.getElementById('result2').innerHTML = Math.round((result+100)/(1+pool)-100)+" %";
		document.getElementById('pooltext2').innerHTML = " (Pool of Reflection not included)";
	} else {
		document.getElementById('result1').innerHTML = result+" %";
		document.getElementById('pooltext1').innerHTML = "";
		document.getElementById('result2').innerHTML = "";
		document.getElementById('pooltext2').innerHTML = "";
	}
	
	<?php  // set all the displays: result and absolute/relative change for all the boxes ?>
	document.getElementById('normalchange').innerHTML = 	diffAbs("normal")+" % abs. / "+diffRel("normal")+" % rel.";
	document.getElementById('hardchange').innerHTML = 		diffAbs("hard")+" % abs. / "+diffRel("hard")+" % rel.";
	document.getElementById('expertchange').innerHTML = 	diffAbs("expert")+" % abs. / "+diffRel("expert")+" % rel.";
	document.getElementById('masterchange').innerHTML = 	diffAbs("master")+" % abs. / "+diffRel("master")+" % rel.";
	document.getElementById('t1change').innerHTML = 		diffAbs("t1")+" % abs. / "+diffRel("t1")+" % rel.";
	document.getElementById('t2change').innerHTML = 		diffAbs("t2")+" % abs. / "+diffRel("t2")+" % rel.";
	document.getElementById('t3change').innerHTML = 		diffAbs("t3")+" % abs. / "+diffRel("t3")+" % rel.";
	document.getElementById('t4change').innerHTML = 		diffAbs("t4")+" % abs. / "+diffRel("t4")+" % rel.";
	document.getElementById('t5change').innerHTML = 		diffAbs("t5")+" % abs. / "+diffRel("t5")+" % rel.";
	document.getElementById('t6change').innerHTML = 		diffAbs("t6")+" % abs. / "+diffRel("t6")+" % rel.";
	document.getElementById('cbechange').innerHTML = 		diffAbs("cbe")+" % abs. / "+diffRel("cbe")+" % rel.";
	document.getElementById('shrinechange').innerHTML = 	diffAbs("shrine")+" % abs. / "+diffRel("shrine")+" % rel.";
	document.getElementById('poolchange').innerHTML = 		diffAbs("pool")+" % abs. / "+diffRel("pool")+" % rel.";
	document.getElementById('p1change').innerHTML = 		diffAbs("p1")+" % abs. / "+diffRel("p1")+" % rel.";
	document.getElementById('p2change').innerHTML = 		diffAbs("p2")+" % abs. / "+diffRel("p2")+" % rel.";
	document.getElementById('p3change').innerHTML = 		diffAbs("p3")+" % abs. / "+diffRel("p3")+" % rel.";
	document.getElementById('p4change').innerHTML = 		diffAbs("p4")+" % abs. / "+diffRel("p4")+" % rel.";
	document.getElementById('hrmechange').innerHTML = 		diffAbs("hrme")+" % abs. / "+diffRel("hrme")+" % rel.";
	document.getElementById('leoricmechange').innerHTML = 	diffAbs("leoricme")+" % abs. / "+diffRel("leoricme")+" % rel.";
	document.getElementById('cainchange').innerHTML = 		diffAbs("cain")+" % abs. / "+diffRel("cain")+" % rel.";
	document.getElementById('rubychange').innerHTML = 		diffAbs("ruby")+" % abs. / "+diffRel("ruby")+" % rel.";
	document.getElementById('hrfolchange').innerHTML = 		diffAbs("hrfol")+" % abs. / "+diffRel("hrfol")+" % rel.";
	document.getElementById('leoricfolchange').innerHTML = 	diffAbs("leoricfol")+" % abs. / "+diffRel("leoricfol")+" % rel.";
}

<?php  // calculate the XP (also used for temporary calculations) ?>
function calcResult(param, value) {

	<?php  // optional variable allocation if we want to calc a temp result ?>
	
<?php  //  would be nice if this would work (more flexibility), find the error ?>
<?php 	//if(param!="") { window['t'+param] = value; } else { window['t'+param] = param; } ?>
<?php  	//console.log("param: "+param+"; value: "+value); ?>

	if(param=="diff")		{ tdiff = value; }		else { tdiff = diff; }
	if(param=="hrme")		{ thrme = value; }		else { thrme = hrme; }
	if(param=="hrfol")		{ thrfol = value; }		else { thrfol = hrfol; }
	if(param=="leoricme")	{ tleoricme = value; }	else { tleoricme = leoricme; }
	if(param=="leoricfol")	{ tleoricfol = value; }	else { tleoricfol = leoricfol; }
	if(param=="cain")		{ tcain = value; }		else { tcain = cain; }
	if(param=="ruby")		{ truby = value; }		else { truby = ruby; }
	if(param=="cbe")		{ tcbe = value; }		else { tcbe = cbe; }
	if(param=="players")	{ tplayers = value; }	else { tplayers = players; }
	if(param=="shrine")		{ tshrine = value; }	else { tshrine = shrine; }
	if(param=="pool")		{ tpool = value; }		else { tpool = pool; }
	
	
//	console.log((1+parseFloat(tdiff,10)+parseFloat(thrme,10)+parseFloat(thrfol,10)+parseFloat(tleoricme, 10)+parseFloat(tleoricfol,10)+parseFloat(tcain,10)+parseFloat(truby,10)));
	<?php  // change only THIS formula! ?>
	return Math.round((1+tdiff+thrme+thrfol+tleoricme+tleoricfol+tcain+truby)*(1+tcbe+tplayers+tshrine)*(1+tpool)*100) - 100;
}

<?php  // calculate the absolute difference ?>
function diffAbs(divid) {

	var abs = 0;
	
	<?php  // calculate absolute difference for mutual exclusive bonuses (players, difficulty level) ?>
	if($('div#'+divid).hasClass('mutual') && $('div#'+divid).hasClass('ns')) {
		abs = calcResult($('div#'+divid).parent().attr('id'), $('div#'+divid).data('value')) - result;
	}

	<?php  // calculate absolute difference for simple selections ?>
	if($('div#'+divid).hasClass('simple') && $('div#'+divid).hasClass('sel')) {
		abs = calcResult(divid, 0) - result;
	} else if($('div#'+divid).hasClass('simple') && $('div#'+divid).hasClass('ns')) {
		abs = calcResult(divid, $('div#'+divid).data('value')) - result;
	}
	
	<?php  // calculate difference for bonuses with dropdown menu ?>
	if($('div#'+divid).hasClass('dropdown') && $('div#'+divid).hasClass('sel')) {
		abs = calcResult(divid, 0) - result;
	} else if($('div#'+divid).hasClass('dropdown') && $('div#'+divid).hasClass('ns')) {
		abs = calcResult(divid, parseFloat($('div#'+divid+' :selected').val(),10)) - result;
	}
	
	return abs;
}

<?php  // calculate the relative difference ?>
function diffRel(divid) {

	var rel = 0;

	<?php  // calculate relative difference for mutual exclusive bonuses (players, difficulty level) ?>
	if($('div#'+divid).hasClass('mutual') && $('div#'+divid).hasClass('ns')) {
		rel = (calcResult($('div#'+divid).parent().attr('id'), $('div#'+divid).data('value'))+100)/(result+100);
	}

	<?php  // calculate relative difference for simple selections ?>
	if($('div#'+divid).hasClass('simple') && $('div#'+divid).hasClass('sel')) {
		rel = (calcResult(divid, 0)+100)/(result+100);
	} else if($('div#'+divid).hasClass('simple') && $('div#'+divid).hasClass('ns')) {
		rel = (calcResult(divid, $('div#'+divid).data('value'))+100)/(result+100);
	}
	
	<?php  // calculate relative for bonuses with dropdown menu ?>
	if($('div#'+divid).hasClass('dropdown') && $('div#'+divid).hasClass('sel')) {
		rel = (calcResult(divid, 0)+100)/(result+100);
	} else if($('div#'+divid).hasClass('dropdown') && $('div#'+divid).hasClass('ns')) {
		rel = (calcResult(divid, parseFloat($('div#'+divid+' :selected').val(),10))+100)/(result+100);
	}
	
	<?php  // make the box's text green or red based on positive or negative result ?>
	if(rel == 0) {
		$('span#'+divid+'change').removeClass('negative');
		$('span#'+divid+'change').removeClass('positive');
	} else if(rel>1){
		rel = Math.round((rel-1)*100);
		$('span#'+divid+'change').addClass('positive');
		$('span#'+divid+'change').removeClass('negative');
	} else if(rel<1) {
		rel = Math.round((1-rel)*100);
		$('span#'+divid+'change').addClass('negative');
		$('span#'+divid+'change').removeClass('positive');
	}
	
	return rel;
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

<?php  // initialize ?>
$(document).ready(function() {
	updateFields();
});

<?php  // mark selected and deselected boxes correctly on load depending on default setting ?>
$('div.mutual').click(function() {
	$(this).siblings('.sel').addClass('ns');
	$(this).siblings('.sel').removeClass('sel');
	$(this).addClass('sel');
	$(this).removeClass('ns');
	updateFields();
});

<?php  // the basic interaction: click to select or deselect ?>
$('div.box').click(function() {
	$(this).toggleClass('sel ns');
	updateFields();
});

<?php  // update variables if a dropdown menu is clicked ?>
$('select').change(function() {
	window[this.parentNode.id+'val'] = parseFloat($(this).val(), 10);
	updateFields();
});

<?php  // font toggle click ?>
$('a#togglefont1, a#togglefont2').click(function() {
	if($(".dfont")[0]) {
		$(".dfont").addClass('nodfont');
		$(".dfont").removeClass('dfont');
		dfont = "false";
	} else {
		$(".nodfont").addClass('dfont');
		$(".nodfont").removeClass('nodfont');
		dfont = "true";
	}
	passValues("dfont", dfont);
});
</script>

</body>
</html>
