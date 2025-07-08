<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Diablo 3: Season 12 Journey Tracker</title>
<!--	<script src="http://us.battle.net/d3/static/js/tooltips.js"></script> -->
	<script src="http://d3resource.com/journey/jquery-3.0.0.min.js"></script>
	<script src="http://d3resource.com/journey/jquery-ui-1.12.1/jquery-ui.min.js"></script>
	<script src="http://d3resource.com/journey/functions.js"></script>
	<link rel="stylesheet" type="text/css" href="http://d3resource.com/journey/main-style.css" />
	<link rel="stylesheet" type="text/css" href="http://d3resource.com/journey/jquery-ui-1.12.1/jquery-ui.min.css" />
</head>
<body>

<div id="maindiv">

<h1>Diablo 3: Season 12 Journey Tracker</h1>

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
<p>List of conquests in Season 12:</p>
<table class="conqtablelayout">
	<tr>
		<td class="conqlabel">Softcore:</td>
		<td id="conq-a" class="conqitem">
			<span class="conqtitle">The Thrill</span><br />
			<span class="conqdesc">GR45 w/o set items</span>
		</td>
		<td id="conq-b" class="conqitem">
			<span class="conqtitle">Curses!</span><br />
			<span class="conqdesc">350 kills TX cursed chest</span>
		</td>
		<td id="conq-c" class="conqitem">
			<span class="conqtitle">Boss Mode</span><br />
			<span class="conqdesc">All bosses in 20m on TX</span>
		</td>
		<td id="conq-d" class="conqitem">
			<span class="conqtitle">On a Good Day</span><br />
			<span class="conqdesc">3 gems to 65</span>
		</td>
		<td id="conq-e" class="conqitem">
			<span class="conqtitle">Years of War</span><br />
			<span class="conqdesc">GR55 with 6 sets</span>
		</td>
	</tr>
	<tr>
		<td class="conqlabel">Hardcore:</td>
		<td id="conq-f" class="conqitem">
			<span class="conqtitle">Super Human</span><br />
			<span class="conqdesc">GR45 w/o set items</span>
		</td>
		<td id="conq-g" class="conqitem">
			<span class="conqtitle">Stars align</span><br />
			<span class="conqdesc">350 kills TX cursed chest</span>
		</td>
		<td id="conq-h" class="conqitem">
			<span class="conqtitle">Worlds Apart</span><br />
			<span class="conqdesc">All bosses in 20m on TX</span>
		</td>
		<td id="conq-i" class="conqitem">
			<span class="conqtitle">I Can't Stop</span><br />
			<span class="conqdesc">3 gems to 65</span>
		</td>
		<td id="conq-j" class="conqitem">
			<span class="conqtitle">Dynasty</span><br />
			<span class="conqdesc">GR55 with 6 sets</span>
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
		<td id="td-sj1c" class="cat1 sjtable sjitem kill">Malthael</td>
		<td id="td-sj2c" class="cat2 sjtable sjitem kill">Diablo<br />(Hard, level 60+)</td>
		<td id="td-sj3c" class="cat3 sjtable sjitem kill">Rakanoth<br />(Master, level 70+)</td>
		<td id="td-sj4c" class="cat4 sjtable sjitem kill">Butcher<br />(T2, level 70)</td>
		<td id="td-sj5c" class="cat5 sjtable sjitem kill">Kulle (T7)</td>
		<td id="td-sj6c" class="cat6 sjtable sjitem kill">Cydaea<br />(T10)</td>
		<td id="td-sj7c" class="cat7 sjtable sjitem kill">Maghda<br />(T13)</td>
		<td id="td-sj8c" class="cat8 sjtable sjitem kill">Araneae (T13)<br />in under 30 sec.</td>
		<td id="td-sj9c" class="cat9 sjtable sjitem kill">Skel. King (T13)<br />in under 30 sec.</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1d" class="cat1 sjtable sjitem kill">Azmodan</td>
		<td id="td-sj2d" class="cat2 sjtable sjitem kill">Siegebreaker<br />(Hard, level 60+)</td>
		<td id="td-sj3d" class="cat3 sjtable sjitem kill">Izual<br />(Master, level 70+)</td>
		<td id="td-sj4d" class="cat4 sjtable sjitem kill">Urzael<br />(T4, level 70)</td>
		<td id="td-sj5d" class="cat5 sjtable sjitem kill">Ghom (T7)</td>
		<td id="td-sj6d" class="cat6 sjtable sjitem kill">Adria<br />(T10)</td>
		<td id="td-sj7d" class="cat7 sjtable sjitem kill">Belial<br />(T13)</td>
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
		<td id="td-sj6h" class="cat6 sjtable sjitem setdung">Master a<br />Set Dungeon</td>
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
		<td id="td-sj3m" class="cat3 sjtable rewards">2<sup>nd</sup> Haedrig<br />(feet+shoulders;<br />barb: feet+belt<br />DH: feet+ring)</td>
		<td id="td-sj4m" class="cat4 sjtable rewards">3<sup>rd</sup> Haedrig,<br />portrait frame,<br />wings</td>
		<td id="td-sj5m" class="cat5 sjtable rewards">Portrait<br />frame</td>
		<td id="td-sj6m" class="cat6 sjtable rewards">Portrait<br />frame</td>
		<td id="td-sj7m" class="cat7 sjtable rewards">Portrait<br />frame</td>
		<td id="td-sj8m" class="cat8 sjtable rewards">Stash tab,<br />portrait frame</td>
		<td id="td-sj9m" class="cat9 sjtable rewards">Portrait<br />frame</td>
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

<br />You're viewing a non-interactive version of someone's Season Journey progress.
<br />To track your own progress, <a href="http://d3resource.com/journey/" target="_blank">click here to get to the interactive version</a>.
<br />
<br />If you want to copy this Season Journey progress into your browser's local storage, click the button below
<br />(note that this will delete and overwrite any progress you might have currently stored!):
<br />
<br />
<span class="button bigger" id="storeprogress">Store this progress in my browser</span>
<br /><br /><br />

</div>

<!-- confirmation dialogs -->

<div id="storedialog" title="Confirm overwrite">
	Storing this progress will overwrite any previous Tracker data. Are you sure?
</div>

<script>
// check completed chapters
function checkComplete() {
	var criterion = [0, 9, 11, 11, 12, 10, 10, 8, 8, 6];
	var current = 1;
	while($('td.sjitem.done.cat'+current).length == criterion[current]) {
		$('#td-sj'+current+'m, #complete'+current).removeClass('current');
		$('#td-sj'+current+'m, #complete'+current).addClass('complete');
		$('#complete'+current).html('Complete!');
		current++;
	}
	
	// mark the current
	if(current<10) {
		$('#td-sj'+current+'m, #complete'+current).addClass('current');
		$('#complete'+current).html('Current');
	}
	
	// mark all above as incomplete
	for(i=current+1; i < 10; i++) {
		$('#td-sj'+i+'m, #complete'+i).removeClass('current');
		$('#td-sj'+i+'m, #complete'+i).removeClass('complete');
		$('#complete'+i).html('');
	}
}

// confirm storage
$(function() {
	$("#storedialog").dialog({
		autoOpen: false,
		modal: true,
		buttons: {
			"Store" : function() {
				// store action
				storeData();
				$(this).dialog("close");
				window.location.href = "http://d3resource.com/journey/";
			},
			"Cancel" : function() {
				$(this).dialog("close");
			}
		}
	});

	$("span#storeprogress").on("click", function(e) {
		e.preventDefault();
		$("#storedialog").dialog("open");
	});
});

// store data - go through all elementsm check, and set
function storeData() {
	$.each($("td.conqitem"), function(index, value) {
		if($(this).hasClass("done")) {
			localStorage.setItem(value.id, 'done');
		} else {
			localStorage.setItem(value.id, 'not');
		}
	});
	$.each($("td.sjitem"), function(index, value) {
		if($(this).hasClass("done")) {
			localStorage.setItem(value.id, 'done');
		} else {
			localStorage.setItem(value.id, 'not');
		}
	});
}

// select a category
$('span.categories').click(function(event) {
	$(event.target).toggleClass('selected<?php if(isset($_GET['blue']))echo"alt"?>');
	$('td.sjitem.'+event.target.id.toString()).toggleClass('selected<?php if(isset($_GET['blue']))echo"alt"?>');
	if(event.target.id.toString()=='conquests') {
		$('div#conqdiv').toggleClass('hidden');
		$('td.conqitem').toggleClass('selected<?php if(isset($_GET['blue']))echo"alt"?>');
	}
});

// mark sjitem
function markSJ(i, j) {
	$('#td-sj'+i+''+j).addClass('done');
}

// mark conqitem
function markConq(i) {
	$('#conq-'+i).addClass('done');
}

$(document).ready(function() {
	<?php 
	$urlparts = explode("/", $_SERVER['REQUEST_URI']);
	if(isset($urlparts[3])) {
		$conquests = str_split($urlparts[3], 1);
		foreach($conquests as $conq) {
			if(ctype_alnum($conq)) echo "\tmarkConq('".$conq."');\n";
		}
	}
	if(isset($urlparts[4])) {
		$sjitems = str_split($urlparts[4], 2);
		foreach($sjitems as $sjitem) {
			if(ctype_alnum($sjitem)) echo "\tmarkSJ('".substr($sjitem, 0, 1)."', '".substr($sjitem, 1, 1)."');\n";
		}
	}
	?>
	checkComplete();
});
</script>

</body>
</html>
