<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Diablo 3: Season 35 Journey Tracker</title>
<!--	<script src="http://us.battle.net/d3/static/js/tooltips.js"></script> -->
	<script src="/_script/jquery-3.0.0.min.js"></script>
	<script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>
	<script src="functions.js"></script>
	<link rel="stylesheet" type="text/css" href="main-style.css" />
	<link rel="stylesheet" type="text/css" href="/_style/d3rheader.css" />
	<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.min.css" />
</head>
<body>

<?php  include('../d3rheader.php'); ?>

<div id="maindiv">

<h1>Diablo 3: Season 35 Journey Tracker</h1>

<div id="legenddiv">
	<span class="categories" id="conquests">Conquests</span>
	<span class="categories" id="rift">Rifts</span>
	<span class="categories" id="solo">Solo GRs</span>
	<span class="categories" id="kill">Bosses</span>
	<span class="categories" id="cube">Cube</span>
	<span class="categories" id="artisans">Artisans</span>
	<span class="categories" id="gems">Leg. gems</span>
	<span class="categories" id="ubers">Ubers</span>
	<span class="categories" id="kadala">Kadala</span>
	<span class="categories" id="bounties">Bounties</span>
	<span class="categories" id="setdung">Set dungeons</span>
	<span class="categories" id="misc">Misc</span>
</div>

<div id="conqdiv" class="hidden">
<p>List of conquests in Season 35:</p>
<table class="conqtablelayout">
	<tr>
		<td class="conqlabel">Softcore:</td>
		<td id="conq-a" class="conqitem">
			<span class="conqtitle">Avarice</span><br />
			<span class="conqdesc">50m gold streak</span>
		</td>
		<td id="conq-b" class="conqitem">
			<span class="conqtitle">Speed Demon</span><br />
			<span class="conqdesc">TX rift in under 2mins</span>
		</td>
		<td id="conq-c" class="conqitem">
			<span class="conqtitle">Boss Mode</span><br />
			<span class="conqdesc">All bosses in 20m on TX</span>
		</td>
		<td id="conq-d" class="conqitem">
			<span class="conqtitle">Divinity</span><br />
			<span class="conqdesc">GR75 solo</span>
		</td>
		<td id="conq-e" class="conqitem">
			<span class="conqtitle">Masters of the Universe</span><br />
			<span class="conqdesc">Master 8 set dungeons</span>
		</td>
	</tr>
	<tr>
		<td class="conqlabel">Hardcore:</td>
		<td id="conq-f" class="conqitem">
			<span class="conqtitle">Avaritia</span><br />
			<span class="conqdesc">50m gold streak</span>
		</td>
		<td id="conq-g" class="conqitem">
			<span class="conqtitle">Need for Speed</span><br />
			<span class="conqdesc">TX rift in under 2mins</span>
		</td>
		<td id="conq-h" class="conqitem">
			<span class="conqtitle">Worlds Apart</span><br />
			<span class="conqdesc">All bosses in 20m on TX</span>
		</td>
		<td id="conq-i" class="conqitem">
			<span class="conqtitle">Lionhearted</span><br />
			<span class="conqdesc">GR75 solo</span>
		</td>
		<td id="conq-j" class="conqitem">
			<span class="conqtitle">Masters of Sets</span><br />
			<span class="conqdesc">Master 8 set dungeons</span>
		</td>
	</tr>
</table>
</div>

<table class="sjtablelayout">
	<tr class="sjtable">
		<th id="th-1" class="sjtable header">Chapter I</th>
		<th id="th-2" class="sjtable header">Chapter II</th>
		<th id="th-3" class="sjtable header">Chapter III</th>
		<th id="th-4" class="sjtable header">Chapter IV</th>
		<th id="th-5" class="sjtable header">Slayer</th>
		<th id="th-6" class="sjtable header">Champion</th>
		<th id="th-7" class="sjtable header">Destroyer</th>
		<th id="th-8" class="sjtable header">Conqueror</th>
		<th id="th-9" class="sjtable header">Guardian</th>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1a" class="cat1 sjtable sjitem rift">Normal Rift</td>
		<td id="td-sj2a" class="cat2 sjtable sjitem rift">Expert Rift</td>
		<td id="td-sj3a" class="cat3 sjtable sjitem rift">Master Rift</td>
		<td id="td-sj4a" class="cat4 sjtable sjitem rift">T1 Rift</td>
		<td id="td-sj5a" class="cat5 sjtable sjitem rift">T5 Rift</td>
		<td id="td-sj6a" class="cat6 sjtable sjitem rift">T10 Rift in<br />under 6 minutes</td>
		<td id="td-sj7a" class="cat7 sjtable sjitem rift">T12 Rift in<br />under 6 minutes</td>
		<td id="td-sj8a" class="cat8 sjtable sjitem rift">T13 Rift in<br />under 5 minutes</td>
		<td id="td-sj9a" class="cat9 sjtable sjitem rift">T13 Rift in<br />under 4 minutes</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1b" class="cat1 sjtable sjitem misc">Level 50</td>
		<td id="td-sj2b" class="cat2 sjtable sjitem misc">Level 70</td>
		<td id="td-sj3b" class="cat3 sjtable sjitem kadala">Buy item<br />from Kadala</td>
		<td id="td-sj4b" class="cat4 sjtable sjitem solo">GR20 solo</td>
		<td id="td-sj5b" class="cat5 sjtable sjitem solo">GR30 solo</td>
		<td id="td-sj6b" class="cat6 sjtable sjitem solo">GR40 solo</td>
		<td id="td-sj7b" class="cat7 sjtable sjitem solo">GR50 solo</td>
		<td id="td-sj8b" class="cat8 sjtable sjitem solo">GR60 solo</td>
		<td id="td-sj9b" class="cat9 sjtable sjitem solo">GR70 solo</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1c" class="cat1 sjtable sjitem kill">Adria</td>
		<td id="td-sj2c" class="cat2 sjtable sjitem kill">Malthael<br />(Hard, level 60+)</td>
		<td id="td-sj3c" class="cat3 sjtable sjitem kill">Cydaea<br />(Master, level 70+)</td>
		<td id="td-sj4c" class="cat4 sjtable sjitem kill">Rakanoth<br />(T2, level 70)</td>
		<td id="td-sj5c" class="cat5 sjtable sjitem kill">Butcher<br />(T7)</td>
		<td id="td-sj6c" class="cat6 sjtable sjitem kill">Araneae<br />(T10)</td>
		<td id="td-sj7c" class="cat7 sjtable sjitem kill">Azmodan<br />(T13)</td>
		<td id="td-sj8c" class="cat8 sjtable sjitem kill">Siegebreaker (T13)<br />in under 30 sec.</td>
		<td id="td-sj9c" class="cat9 sjtable sjitem kill">Urzael (T13)<br />in under 20 sec.</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1d" class="cat1 sjtable sjitem kill">Ghom</td>
		<td id="td-sj2d" class="cat2 sjtable sjitem kill">Kulle<br />(Hard, level 60+)</td>
		<td id="td-sj3d" class="cat3 sjtable sjitem kill">Diablo<br />(Master, level 70+)</td>
		<td id="td-sj4d" class="cat4 sjtable sjitem kill">Maghda<br />(T4, level 70)</td>
		<td id="td-sj5d" class="cat5 sjtable sjitem kill">Izual<br />(T7)</td>
		<td id="td-sj6d" class="cat6 sjtable sjitem kill">Belaial<br />(T10)</td>
		<td id="td-sj7d" class="cat7 sjtable sjitem kill">Skeleton King<br />(T13)</td>
		<td id="td-sj8d" class="cat8 sjtable sjitem kill">Greed (T13)</td>
		<td class="sjtable empty"></td>
	</tr>
	<tr class="sjtable">
		<td class="sjtable empty"></td>
		<td id="td-sj2e" class="cat2 sjtable sjitem cube">Unlock<br />Kanai's Cube</td>
		<td id="td-sj3e" class="cat3 sjtable sjitem cube">Extract one<br />Cube power</td>
		<td id="td-sj4e" class="cat4 sjtable sjitem cube">Upgrade rare<br />to legendary</td>
		<td id="td-sj5e" class="cat5 sjtable sjitem cube">Equip all three<br />Cube slots</td>
		<td id="td-sj6e" class="cat6 sjtable sjitem cube">Convert a<br />set item</td>
		<td id="td-sj7e" class="cat7 sjtable sjitem cube">Extract 20<br />Cube powers</td>
		<td id="td-sj8e" class="cat8 sjtable sjitem cube">Reforge a<br />legendary</td>
		<td id="td-sj9e" class="cat9 sjtable sjitem cube">Extract 40<br />Cube powers</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1f" class="cat1 sjtable sjitem bounties">5 bounties</td>
		<td id="td-sj2f" class="cat2 sjtable sjitem misc">Fully equip<br />follower</td>
		<td id="td-sj3f" class="cat3 sjtable sjitem artisans">Craft an<br />Imperial gem</td>
		<td id="td-sj4f" class="cat4 sjtable sjitem artisans">Reforge socket<br />on weapon</td>
		<td id="td-sj5f" class="cat5 sjtable sjitem kadala">Get legendary<br />from Kadala</td>
		<td id="td-sj6f" class="cat6 sjtable sjitem artisans">Craft a Flawless<br />Royal gem</td>
		<td class="sjtable empty"></td>
		<td id="td-sj8f" class="cat8 sjtable sjitem gems">One 50+<br />augment</td>
		<td class="sjtable empty"></td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1g" class="cat1 sjtable sjitem misc">Socket 5 gems</td>
		<td id="td-sj2g" class="cat2 sjtable sjitem artisans">All artisans<br />level 12</td>
		<td id="td-sj3g" class="cat3 sjtable sjitem bounties">Act I<br />bounty cache</td>
		<td id="td-sj4g" class="cat4 sjtable sjitem ubers">Keywarden<br />Act 1 (T4)</td>
		<td id="td-sj5g" class="cat5 sjtable sjitem conqgems gems">One gem to<br />rank 25</td>
		<td id="td-sj6g" class="cat6 sjtable sjitem conqgems gems">Three gems to<br />rank 35</td>
		<td id="td-sj7g" class="cat7 sjtable sjitem conqgems gems">Three gems<br />to rank 45</td>
		<td id="td-sj8g" class="cat8 sjtable sjitem conqgems gems">Three gems<br />to rank 55</td>
		<td id="td-sj9g" class="cat9 sjtable sjitem conqgems gems">Three gems<br />to rank 70</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1h" class="cat1 sjtable sjitem artisans">Blacksmith<br />level 10</td>
		<td id="td-sj2h" class="cat2 sjtable sjitem artisans">Craft lvl70 item<br />at Blacksmith</td>
		<td id="td-sj3h" class="cat3 sjtable sjitem bounties">Act II<br />bounty cache</td>
		<td id="td-sj4h" class="cat4 sjtable sjitem ubers">Keywarden<br />Act 2 (T4)</td>
		<td id="td-sj5h" class="cat5 sjtable sjitem setdung">Complete a<br />Set Dungeon</td>
		<td id="td-sj6h" class="cat6 sjtable sjitem setdung">Complete an<br />Echoing NM</td>
		<td id="td-sj7h" class="cat7 sjtable sjitem conquests">Complete<br />1 conquest</td>
		<td id="td-sj8h" class="cat8 sjtable sjitem conquests">Complete<br />2 conquests</td>
		<td id="td-sj9h" class="cat9 sjtable sjitem conquests">Complete<br />3 conquests</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1i" class="cat1 sjtable sjitem artisans">Jeweler<br />level 10</td>
		<td id="td-sj2i" class="cat2 sjtable sjitem artisans">Craft level 70<br />item at Jeweler</td>
		<td id="td-sj3i" class="cat3 sjtable sjitem bounties">Act III<br />bounty cache</td>
		<td id="td-sj4i" class="cat4 sjtable sjitem ubers">Keywarden<br />Act 3 (T4)</td>
		<td id="td-sj5i" class="cat5 sjtable sjitem ubers">(A1) Realm of<br />Regret (T1)</td>
		<td id="td-sj6i" class="cat6 sjtable sjitem ubers">(A3) Realm of<br />Terror (T10)</td>
		<td id="td-sj7i" class="cat7 sjtable sjitem ubers">Craft Hellfire<br />Amulet</td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1j" class="cat1 sjtable sjitem artisans">Mystic<br />level 10</td>
		<td id="td-sj2j" class="cat2 sjtable sjitem artisans">Enchant at<br />Mystic</td>
		<td id="td-sj3j" class="cat3 sjtable sjitem bounties">Act IV<br />bounty cache</td>
		<td id="td-sj4j" class="cat4 sjtable sjitem ubers">Keywarden<br />Act 4 (T4)</td>
		<td id="td-sj5j" class="cat5 sjtable sjitem ubers">(A2) Realm of<br /> Putridness (T1)</td>
		<td id="td-sj6j" class="cat6 sjtable sjitem ubers">(A4) Realm of<br />Fright (T10)</td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
	</tr>
	<tr class="sjtable">
		<td class="sjtable empty"></td>
		<td id="td-sj2k" class="cat2 sjtable sjitem artisans">Transmogrify<br />at Mystic</td>
		<td id="td-sj3k" class="cat3 sjtable sjitem bounties">Act V<br />bounty cache</td>
		<td id="td-sj4k" class="cat4 sjtable sjitem artisans">Learn 5 jewel-<br />crafter designs</td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
	</tr>
	<tr class="sjtable">
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
		<td id="td-sj4l" class="cat4 sjtable sjitem artisans">Learn 5 black-<br />smith recipes</td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1m" class="cat1 sjtable rewards current">(No reward)</td>
		<td id="td-sj2m" class="cat2 sjtable rewards">1<sup>st</sup> Haedrig<br />(head+hands)<br />transmog (lvl 70)</td>
		<td id="td-sj3m" class="cat3 sjtable rewards">2<sup>nd</sup> Haedrig<br />(feet+shoulders)</td>
		<td id="td-sj4m" class="cat4 sjtable rewards">3<sup>rd</sup> Haedrig<br />portrait frame</td>
		<td id="td-sj5m" class="cat5 sjtable rewards">Portrait<br />frame</td>
		<td id="td-sj6m" class="cat6 sjtable rewards">Portrait<br />frame</td>
		<td id="td-sj7m" class="cat7 sjtable rewards">Portrait<br />frame</td>
		<td id="td-sj8m" class="cat8 sjtable rewards">Stash tab,<br />portrait frame</td>
		<td id="td-sj9m" class="cat9 sjtable rewards">Pet,<br />portrait frame</td>
	</tr>
	<tr class="sjtable">
		<td id="complete1" class="completion current">Current</td>
		<td id="complete2" class="completion"></td>
		<td id="complete3" class="completion"></td>
		<td id="complete4" class="completion"></td>
		<td id="complete5" class="completion"></td>
		<td id="complete6" class="completion"></td>
		<td id="complete7" class="completion"></td>
		<td id="complete8" class="completion"></td>
		<td id="complete9" class="completion"></td>
	</tr>
</table>

<br /><br />

<span class="subtitle">Clicking on a column header will check/uncheck the entire chapter.</span>

<div id="bottomdiv">
	Haedrig's Gift contains the following class sets this season:
	<br />
	Barbarian: <a href="https://us.diablo3.com/en/item/helm-of-the-wastes-Unique_Helm_Set_01_p2" target="_blank">Wrath of the Wastes</a> - 
	Crusader: <a href="https://us.diablo3.com/en/item/rolands-visage-Unique_Helm_Set_01_p1" target="_blank">Roland's Legacy</a> - 
	Demon Hunter: <a href="https://us.diablo3.com/en/item/accursed-visage-Unique_Helm_Set_03_p2" target="_blank">Unhallowed Essence</a>
	<br />
	Monk: <a href="https://us.diablo3.com/en/item/mask-of-the-searing-sky-Unique_Helm_Set_08_x1" target="_blank">Raiment of a Thousand Storms</a> - 
	Witch Doctor: <a href="https://us.diablo3.com/en/item/helltooth-mask-Unique_Helm_Set_16_x1" target="_blank">Helltooth Harness</a> - 
	Wizard: <a href="https://us.diablo3.com/en/item/tal-rashas-guise-of-wisdom-Unique_Helm_010_x1" target="_blank">Tal Rasha's Elements</a>
	<br />
	Necromancer: <a href="https://us.diablo3.com/en/item/rathmas-skull-helm-P6_Necro_Set_1_Helm" target="_blank">Bones of Rathma</a>
	<br /><br /><br />
	<a href="http://www.diablofans.com/forums/diablo-iii-general-forums/diablo-iii-general-discussion/211245-season-journey-tracker" target="_blank">Link to Diablofans forum thread for more info, some tips, and feedback.</a>
</div>

</div>

<!-- confirmation dialogs -->
<!--
<div id="resetdialog" title="Confirm reset">
	Do you really want to reset ALL data? This will erase your current Season Journey data from your local browser storage.
</div>
-->
<script>
// create link with all progress
function createShareLink() {
	var link = "http://d3resource.com/journey/share/";
	$.each($("td.conqitem"), function(index, value) {
		if($(this).hasClass("done")) {
			link+=value.id.slice(-1);
		}
	});
	link+="/";
	$.each($("td.sjitem"), function(index, value) {
		if($(this).hasClass("done")) {
			link+=value.id.slice(-2);
		}
	});	
	return link;
}

// share dialog
$(function() {
	$("#sharedialog").dialog({
		autoOpen: false,
		modal: false,
		buttons: {
			"Close" : function() {
				$(this).dialog("close");
			}
		}
	});

	$("span#shareprogress").on("click", function(e) {
		e.preventDefault();
		$("#sharedialog").dialog("open");
		$("input#shareinput").val(createShareLink());
		$("input#shareinput").select();
		document.execCommand("copy");
	});
});

// "reset all" button: safety net
$(function() {
	$("#resetdialog").dialog({
		autoOpen: false,
		modal: true,
		buttons: {
			"Reset" : function() {
				// reset action
				resetAll();
				checkComplete();
				$(this).dialog("close");
			},
			"Cancel" : function() {
				$(this).dialog("close");
			}
		}
	});

	$("span#resetall").on("click", function(e) {
		e.preventDefault();
		$("#resetdialog").dialog("open");
	});
});

// toggle entire column by clicking on header
$('th.header').click(function(event) {
	var criterion = [0, 9, 11, 11, 12, 10, 10, 8, 8, 6];
	var col = this.id.substr(3,4);
	var s = 'abcdefghijkl';
	if($('.cat'+col+'.done').length != criterion[col]) {
		for(var i=0; i<s.length; i++) {
			setSJ(col, s.charAt(i));
		}
	} else {
		for(var i=0; i<s.length; i++) {
			unsetSJ(col, s.charAt(i));
		}
	}
	
	checkComplete();
});

// toggle season journey item
$('td.sjitem').click(function(event) {
	var sjid = $(this).attr('id');
	var status = 'done';
	if($(this).hasClass('done')) {
		status = 'not';
		unsetSJ(event.target.id.substring(5,6), event.target.id.substring(6,7));
	} else {
		setSJ(event.target.id.substring(5,6), event.target.id.substring(6,7));
	}

	// check Nephalem Rift logic
	if(sjid === 'td-sj9a' && status === 'done') {
		setSJ('8', 'a'); setSJ('7', 'a'); setSJ('6', 'a'); setSJ('5', 'a'); setSJ('4', 'a'); setSJ('3', 'a'); setSJ('2', 'a'); setSJ('1', 'a');
	} else if(sjid === 'td-sj8a' && status === 'done') {
		setSJ('7', 'a'); setSJ('6', 'a'); setSJ('5', 'a'); setSJ('4', 'a'); setSJ('3', 'a'); setSJ('2', 'a'); setSJ('1', 'a');
	} else if(sjid === 'td-sj7a' && status === 'done') {
		setSJ('6', 'a'); setSJ('5', 'a'); setSJ('4', 'a'); setSJ('3', 'a'); setSJ('2', 'a'); setSJ('1', 'a');
	} else if(sjid === 'td-sj6a' && status === 'done') {
		setSJ('5', 'a'); setSJ('4', 'a'); setSJ('3', 'a'); setSJ('2', 'a'); setSJ('1', 'a');
	} else if(sjid === 'td-sj5a' && status === 'done') {
		setSJ('4', 'a'); setSJ('3', 'a'); setSJ('2', 'a'); setSJ('1', 'a');
	} else if(sjid === 'td-sj4a' && status === 'done') {
		setSJ('3', 'a'); setSJ('2', 'a'); setSJ('1', 'a');
	} else if(sjid === 'td-sj3a' && status === 'done') {
		setSJ('2', 'a'); setSJ('1', 'a');
	} else if(sjid === 'td-sj2a' && status === 'done') {
		setSJ('1', 'a');
	} else if(sjid === 'td-sj1a' && status === 'not') {
		unsetSJ('9', 'a'); unsetSJ('8', 'a'); unsetSJ('7', 'a'); unsetSJ('6', 'a'); unsetSJ('5', 'a'); unsetSJ('4', 'a'); unsetSJ('3', 'a'); unsetSJ('2', 'a');
	} else if(sjid === 'td-sj2a' && status === 'not') {
		unsetSJ('9', 'a'); unsetSJ('8', 'a'); unsetSJ('7', 'a'); unsetSJ('6', 'a'); unsetSJ('5', 'a'); unsetSJ('4', 'a'); unsetSJ('3', 'a');
	} else if(sjid === 'td-sj3a' && status === 'not') {
		unsetSJ('9', 'a'); unsetSJ('8', 'a'); unsetSJ('7', 'a'); unsetSJ('6', 'a'); unsetSJ('5', 'a'); unsetSJ('4', 'a');
	} else if(sjid === 'td-sj4a' && status === 'not') {
		unsetSJ('9', 'a'); unsetSJ('8', 'a'); unsetSJ('7', 'a'); unsetSJ('6', 'a'); unsetSJ('5', 'a');
	} else if(sjid === 'td-sj5a' && status === 'not') {
		unsetSJ('9', 'a'); unsetSJ('8', 'a'); unsetSJ('7', 'a'); unsetSJ('6', 'a');
	} else if(sjid === 'td-sj6a' && status === 'not') {
		unsetSJ('9', 'a'); unsetSJ('8', 'a'); unsetSJ('7', 'a');
	} else if(sjid === 'td-sj7a' && status === 'not') {
		unsetSJ('9', 'a'); unsetSJ('8', 'a');
	} else if(sjid === 'td-sj8a' && status === 'not') {
		unsetSJ('9', 'a');
	
	// check GR logic
	} else if(sjid === 'td-sj9b' && status === 'done') {
		setSJ('8', 'b'); setSJ('7', 'b'); setSJ('6', 'b'); setSJ('5', 'b'); setSJ('4', 'b'); 
	} else if(sjid === 'td-sj8b' && status === 'done') {
		setSJ('7', 'b'); setSJ('6', 'b'); setSJ('5', 'b'); setSJ('4', 'b'); 
	} else if(sjid === 'td-sj7b' && status === 'done') {
		setSJ('6', 'b'); setSJ('5', 'b'); setSJ('4', 'b'); 
	} else if(sjid === 'td-sj6b' && status === 'done') {
		setSJ('5', 'b'); setSJ('4', 'b'); 
	} else if(sjid === 'td-sj5b' && status === 'done') {
		setSJ('4', 'b'); 
	} else if(sjid === 'td-sj4b' && status === 'not') {
		unsetSJ('9', 'b'); unsetSJ('8', 'b'); unsetSJ('7', 'b'); unsetSJ('6', 'b'); unsetSJ('5', 'b'); 
	} else if(sjid === 'td-sj5b' && status === 'not') {
		unsetSJ('9', 'b'); unsetSJ('8', 'b'); unsetSJ('7', 'b'); unsetSJ('6', 'b'); 
	} else if(sjid === 'td-sj6b' && status === 'not') {
		unsetSJ('9', 'b'); unsetSJ('8', 'b'); unsetSJ('7', 'b');
	} else if(sjid === 'td-sj7b' && status === 'not') {
		unsetSJ('9', 'b'); unsetSJ('8', 'b'); 
	} else if(sjid === 'td-sj8b' && status === 'not') {
		unsetSJ('9', 'b');

	// check legendary gems logic: augmenting (+set leveling)
	} else if(sjid === 'td-sj8f' && status === 'done') {
		setSJ('5', 'g');
		
	// check legendary gems logic: leveling (+unset augmenting)
	} else if(sjid === 'td-sj9g' && status === 'done') {
		setSJ('8', 'g'); setSJ('7', 'g'); setSJ('6', 'g'); setSJ('5', 'g');
	} else if(sjid === 'td-sj8g' && status === 'done') {
		setSJ('7', 'g'); setSJ('6', 'g'); setSJ('5', 'g');
	} else if(sjid === 'td-sj7g' && status === 'done') {
		setSJ('6', 'g'); setSJ('5', 'g');
	} else if(sjid === 'td-sj6g' && status === 'done') {
		setSJ('5', 'g');
	} else if(sjid === 'td-sj5g' && status === 'not') {
		unsetSJ('9', 'g'); unsetSJ('8', 'g'); unsetSJ('7', 'g'); unsetSJ('6', 'g'); unsetSJ('8', 'f');
	} else if(sjid === 'td-sj6g' && status === 'not') {
		unsetSJ('9', 'g'); unsetSJ('8', 'g'); unsetSJ('7', 'g');
	} else if(sjid === 'td-sj7g' && status === 'not') {
		unsetSJ('9', 'g'); unsetSJ('8', 'g');
	} else if(sjid === 'td-sj8g' && status === 'not') {
		unsetSJ('9', 'g');
	
	// check level 50/70
	} else if(sjid === 'td-sj2b' && status === 'done') {
		setSJ('1', 'b');
	} else if(sjid === 'td-sj1b' && status === 'not') {
		unsetSJ('2', 'b');

	// cube logic
	} else if(sjid === 'td-sj9e' && status === 'done') {
		setSJ('2', 'e'); setSJ('3', 'e'); setSJ('7', 'e');
	} else if(sjid === 'td-sj7e' && status === 'done') {
		setSJ('2', 'e'); setSJ('3', 'e');
	} else if(sjid === 'td-sj7e' && status === 'not') {
		unsetSJ('9', 'e');
	} else if(sjid === 'td-sj5e' && status === 'done') {
		setSJ('2', 'e'); setSJ('3', 'e');
	} else if(sjid === 'td-sj3e' && status === 'not') {
		unsetSJ('9', 'e'); unsetSJ('7', 'e');
	} else if(sjid === 'td-sj3e' || sjid === 'td-sj4e' || sjid === 'td-sj5e' || sjid === 'td-sj6e' ||  sjid === 'td-sj8e') {
		if(status === 'done') {
			setSJ('2', 'e');
		}
	} else if(sjid ==='td-sj2e' && status === 'not') {
		unsetSJ('9', 'e'); unsetSJ('8', 'e'); unsetSJ('7', 'e'); unsetSJ('6', 'e'); unsetSJ('5', 'e'); unsetSJ('4', 'e'); unsetSJ('3', 'e');
	
	// artisan logic
	} else if(sjid === 'td-sj7i' && status === 'done') {
		setSJ('1', 'i');
	} else if(sjid === 'td-sj2g' && status === 'done') {
		setSJ('1', 'h'); setSJ('1', 'i'); setSJ('1', 'j');
	} else if(sjid === 'td-sj2i' && status === 'done') {
		setSJ('1', 'i');
	} else if(sjid === 'td-sj1i' && status === 'not') {
		unsetSJ('2', 'i'); unsetSJ('2', 'g'); unsetSJ('7', 'i');
//	} else if(sjid === 'td-sj2j' && status === 'done') {
//		setSJ('1', 'j');
	} else if(sjid === 'td-sj1j' && status === 'not') {
		unsetSJ('2', 'g');
	} else if(sjid === 'td-sj1h' && status === 'not') {
		unsetSJ('2', 'g');
	} else if(sjid === 'td-sj4f' && status === 'done') {
		setSJ('2', 'j');
	} else if(sjid === 'td-sj2j' && status === 'not') {
		unsetSJ('4', 'f');
	
	// kadala
	} else if(sjid === 'td-sj5f' && status === 'done') {
		setSJ('3', 'b');
	} else if(sjid === 'td-sj3b' && status === 'not') {
		unsetSJ('5', 'f');
	
	// conquests
	} else if(sjid === 'td-sj9h' && status === 'done') {
		setSJ('7', 'h'); setSJ('8', 'h');
	} else if(sjid === 'td-sj8h' && status === 'done') {
		setSJ('7', 'h');
	} else if(sjid === 'td-sj7h' && status === 'not') {
		unsetSJ('9', 'h'); unsetSJ('8', 'h');
	} else if(sjid === 'td-sj8h' && status === 'not') {
		unsetSJ('9', 'h');

	}
	
	checkComplete();
});

// toggle conquest
$('td.conqitem').click(function(event) {
	var conqid = $(this).attr('id');
	var status = 'done';
	if($(this).hasClass('done')) {
		status = 'not';
		unsetConq(this.id.substring(5,6));
	}
	else {
		setConq(this.id.substring(5,6));
	}

	// all conquests require max level
	if(status === 'done') {
		setSJ('1', 'b'); setSJ('2', 'b');
	}
	
	// if 1/2/3 conquests done than check off sjitem
	if($('.conqitem.done').length == 0) { unsetSJ('7', 'h'); unsetSJ('8', 'h'); unsetSJ('9', 'h'); }
	else if($('.conqitem.done').length == 1) { setSJ('7', 'h'); unsetSJ('8', 'h'); unsetSJ('9', 'h'); }
	else if($('.conqitem.done').length == 2) { setSJ('7', 'h'); setSJ('8', 'h'); unsetSJ('9', 'h'); }
	else if($('.conqitem.done').length > 2) { setSJ('7', 'h'); setSJ('8', 'h'); setSJ('9', 'h'); }

	// if gr45 w/o sets check solo grs
/*	if(conqid === 'conq-c' || conqid === 'conq-h') {
		if($('#conq-c').hasClass('done') || $('#conq-h').hasClass('done')) {
			setSJ('4', 'b'); setSJ('5', 'b'); setSJ('6', 'b');
		}
	}*/

/*	// sprinter checks first two bosses
	if(conqid === 'conq-a' || conqid === 'conq-f') {
		if($('#conq-a').hasClass('done') || $('#conq-f').hasClass('done')) {
			setSJ('1', 'c'); setSJ('1', 'd');
		}
	}*/

	// all but avarice conquests require max level
	if(conqid != 'conq-a' && conqid != 'conq-f') {
		if(status === 'done') {
			setSJ('1', 'b'); setSJ('2', 'b');
		}
		// all but avarice/sprinter (currently not on) require a normal rift at least
		if(conqid != 'conq-a' && conqid != 'conq-f') {
			setSJ('1', 'a');
		}
	}

	// speed demon checks first 6 rifts
	if(conqid === 'conq-b' || conqid === 'conq-g') {
		if($('#conq-b').hasClass('done') || $('#conq-g').hasClass('done')) {
			setSJ('1', 'a'); setSJ('2', 'a'); setSJ('3', 'a'); setSJ('4', 'a'); setSJ('5', 'a'); setSJ('6', 'a');
		}
	}
	
	// boss mode checks most of the bosses
	if(conqid === 'conq-c' || conqid === 'conq-h') {
		if($('#conq-c').hasClass('done') || $('#conq-h').hasClass('done')) {
			setSJ('1', 'c'); setSJ('1', 'd'); setSJ('2', 'c'); setSJ('2', 'd'); setSJ('3', 'c'); setSJ('3', 'd'); setSJ('4', 'c'); setSJ('4', 'd'); setSJ('5', 'c'); setSJ('5', 'd'); setSJ('6', 'c'); setSJ('6', 'd');
		}
	}

	// if gr75 check solo grs + rift
	if(conqid === 'conq-d' || conqid === 'conq-i') {
		if($('#conq-d').hasClass('done') || $('#conq-i').hasClass('done')) {
			setSJ('4', 'b'); setSJ('5', 'b'); setSJ('6', 'b'); setSJ('7', 'b'); setSJ('8', 'b'); setSJ('9', 'b'); setSJ('1', 'a');
		}
	}
	
	checkComplete();
});

// select a category
$('span.categories').click(function(event) {
	$(event.target).toggleClass('selected<?php if(isset($_GET['blue']))echo"alt"?>');
	$('td.sjitem.'+event.target.id.toString()).toggleClass('selected<?php if(isset($_GET['blue']))echo"alt"?>');
	if(event.target.id.toString()=='conquests') {
		$('div#conqdiv').toggleClass('hidden');
		$('td.conqitem').toggleClass('selected<?php if(isset($_GET['blue']))echo"alt"?>');
	}
});


// countdown from https://www.w3schools.com/howto/howto_js_countdown.asp
// Set the date we're counting down to
var countDownDateNA = new Date("Apr 03, 2021 0:00:00 UTC").getTime();
var countDownDateEU = new Date("Apr 02, 2021 15:00:00 UTC").getTime();
var countDownDateAsia = new Date("Apr 02, 2021 8:00:00 UTC").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

	// Get todays date and time
	var now = new Date().getTime();

	// Find the distance between now an the count down date
	var distanceNA = countDownDateNA - now;
	if (distanceNA < 0) {
		document.getElementById("countdown_na").innerHTML = "STARTED";
	} else {
		var daysNA = Math.floor(distanceNA / (1000 * 60 * 60 * 24));
		var hoursNA = Math.floor((distanceNA % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutesNA = Math.floor((distanceNA % (1000 * 60 * 60)) / (1000 * 60));
		var secondsNA = Math.floor((distanceNA % (1000 * 60)) / 1000);
		document.getElementById("countdown_na").innerHTML = daysNA + "d " + hoursNA.pad(2) + "h " + minutesNA.pad(2) + "m " + secondsNA.pad(2) + "s ";
	}

	var distanceEU = countDownDateEU - now;
	if (distanceEU < 0) {
		document.getElementById("countdown_eu").innerHTML = "STARTED";
	} else {
		var daysEU = Math.floor(distanceEU / (1000 * 60 * 60 * 24));
		var hoursEU = Math.floor((distanceEU % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutesEU = Math.floor((distanceEU % (1000 * 60 * 60)) / (1000 * 60));
		var secondsEU = Math.floor((distanceEU % (1000 * 60)) / 1000);
		document.getElementById("countdown_eu").innerHTML = daysEU + "d " + hoursEU.pad(2) + "h " + minutesEU.pad(2) + "m " + secondsEU.pad(2) + "s ";
	}

	var distanceAsia = countDownDateAsia - now;
	if (distanceAsia < 0) {
		document.getElementById("countdown_asia").innerHTML = "STARTED";
	} else {
		var daysAsia = Math.floor(distanceAsia / (1000 * 60 * 60 * 24));
		var hoursAsia = Math.floor((distanceAsia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutesAsia = Math.floor((distanceAsia % (1000 * 60 * 60)) / (1000 * 60));
		var secondsAsia = Math.floor((distanceAsia % (1000 * 60)) / 1000);
		document.getElementById("countdown_asia").innerHTML = daysAsia + "d " + hoursAsia.pad(2) + "h " + minutesAsia.pad(2) + "m " + secondsAsia.pad(2) + "s ";
	}
	
	if(distanceNA < 0 && distanceEU < 0 && distanceAsia <0) {
		clearInterval(x);
	}
}, 1000);

Number.prototype.pad = function(size) {
  var s = String(this);
  while (s.length < (size || 2)) {s = "0" + s;}
  return s;
}

$(document).ready(function() {
	loadSettings();
	checkComplete();
});
</script>

</body>
</html>
