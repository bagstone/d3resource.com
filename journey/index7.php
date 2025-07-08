<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Diablo 3: Season 7 Journey Tracker</title>
<!--	<script src="http://us.battle.net/d3/static/js/tooltips.js"></script> -->
	<script src="/_script/jquery-3.0.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main-style.css" />
</head>
<body>

<div id="maindiv">

<h1>Diablo 3: Season 7 Journey Tracker</h1>

<span class="subtitle">Click on a task you have completed to keep track of your Season Journey progress!<br />(Clicking on a column header will check/uncheck the entire chapter.)<br />Select the categories below to highlight all related tasks that are part of the Season Journey.</span>

<!--<br /><br />

<span class="red">NOTE - undocumented post-PTR changes: Kulle T7 (up from T6), Greed T13 (instead of Rakanoth), 3 gems to 70 (up from 65).</span>-->

<div id="legenddiv">
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
	<span class="categories" id="conquests">Conquests</span>
	<span class="categories" id="misc">Misc</span>
</div>

<div id="conqdiv" class="hidden">
<p>List of conquests in Season 7 (click <a href="http://www.diablofans.com/forums/diablo-iii-general-forums/diablo-iii-general-discussion/208371-ptr-season-7-conquests" target="_blank">here for screenshots</a> with full wording):</p>
<table class="conqtablelayout">
	<tr>
		<td class="conqlabel">Softcore:</td>
		<td id="conq-a" class="conqitem">
			<span class="conqtitle">Avarice</span><br />
			<span class="conqdesc">50m gold streak</span>
		</td>
		<td id="conq-b" class="conqitem soloconq">
			<span class="conqtitle">The Thrill</span><br />
			<span class="conqdesc">GR 45 w/o set items</span>
		</td>
		<td id="conq-c" class="conqitem">
			<span class="conqtitle">Sprinter</span><br />
			<span class="conqdesc">Campaign in 1 hour</span>
		</td>
		<td id="conq-d" class="conqitem gemconq">
			<span class="conqtitle">On a Good Day</span><br />
			<span class="conqdesc">3 gems to rank 65</span>
		</td>
		<td id="conq-e" class="conqitem soloconq">
			<span class="conqtitle">Divinity</span><br />
			<span class="conqdesc">GR75 solo</span>
		</td>
	</tr>
	<tr>
		<td class="conqlabel">Hardcore:</td>
		<td id="conq-f" class="conqitem">
			<span class="conqtitle">Avaritia</span><br />
			<span class="conqdesc">50m gold streak</span>
		</td>
		<td id="conq-g" class="conqitem soloconq">
			<span class="conqtitle">Super Human</span><br />
			<span class="conqdesc">GR 45 w/o set items</span>
		</td>
		<td id="conq-h" class="conqitem">
			<span class="conqtitle">Speed Racer</span><br />
			<span class="conqdesc">Campaign in 1 hour</span>
		</td>
		<td id="conq-i" class="conqitem gemconq">
			<span class="conqtitle">I Can't Stop</span><br />
			<span class="conqdesc">3 gems to rank 65</span>
		</td>
		<td id="conq-j" class="conqitem soloconq">
			<span class="conqtitle">Lionhearted</span><br />
			<span class="conqdesc">GR75 solo</span>
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
		<td id="td-sj1c" class="cat1 sjtable sjitem kill">Rakanoth</td>
		<td id="td-sj2c" class="cat2 sjtable sjitem kill">Siegebreaker<br />(Hard, level 60+)</td>
		<td id="td-sj3c" class="cat3 sjtable sjitem kill">Maghda<br />(Master, level 70)</td>
		<td id="td-sj4c" class="cat4 sjtable sjitem kill">Leoric<br />(T4, level 70)</td>
		<td id="td-sj5c" class="cat5 sjtable sjitem kill">Kulle<br />(T7, level 70)</td>
		<td id="td-sj6c" class="cat6 sjtable sjitem kill">Urzael (T10)</td>
		<td id="td-sj7c" class="cat7 sjtable sjitem kill">Adria (T13)</td>
		<td id="td-sj8c" class="cat8 sjtable sjitem kill">Greed (Vault)<br />(T13)</td>
		<td id="td-sj9c" class="cat9 sjtable sjitem kill">Azmodan (T13) in<br />under 20 seconds</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1d" class="cat1 sjtable sjitem kill">Izual</td>
		<td id="td-sj2d" class="cat2 sjtable sjitem kill">Cydaea<br />(Hard, level 60+)</td>
		<td id="td-sj3d" class="cat3 sjtable sjitem kill">Belial<br />(Master, level 70)</td>
		<td id="td-sj4d" class="cat4 sjtable sjitem kill">Araneae<br />(T2, level 70)</td>
		<td id="td-sj5d" class="cat5 sjtable sjitem kill">Butcher<br />(T6, level 70)</td>
		<td id="td-sj6d" class="cat6 sjtable sjitem kill">Malthael (T10)</td>
		<td id="td-sj7d" class="cat7 sjtable sjitem kill">Diablo (T13)</td>
		<td id="td-sj8d" class="cat8 sjtable sjitem kill">Ghom (T13) in<br />under 30 seconds</td>
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
		<td id="td-sj3f" class="cat3 sjtable sjitem bounties">Full bounty run</td>
		<td id="td-sj4f" class="cat4 sjtable sjitem artisans">Enchant socket<br />into weapon</td>
		<td id="td-sj5f" class="cat5 sjtable sjitem kadala">Get legendary<br />from Kadala</td>
		<td id="td-sj6f" class="cat6 sjtable sjitem artisans">Craft a Flawless<br />Royal gem</td>
		<td id="td-sj7f" class="cat7 sjtable sjitem gems">One 30+<br />augment</td>
		<td id="td-sj8f" class="cat8 sjtable sjitem gems">Two 40+<br />augments</td>
		<td id="td-sj9f" class="cat9 sjtable sjitem gems">Three 50+<br />augments</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1g" class="cat1 sjtable sjitem misc">Socket 5 gems</td>
		<td id="td-sj2g" class="cat2 sjtable sjitem artisans">All artisans<br />level 12</td>
		<td id="td-sj3g" class="cat3 sjtable sjitem artisans">Craft an<br />Imperial gem</td>
		<td id="td-sj4g" class="cat4 sjtable sjitem ubers">A1 keywarden<br />(T4)</td>
		<td id="td-sj5g" class="cat5 sjtable sjitem conqgems gems">One gem to<br />rank 25</td>
		<td id="td-sj6g" class="cat6 sjtable sjitem conqgems gems">Three gems to<br />rank 35</td>
		<td id="td-sj7g" class="cat7 sjtable sjitem conqgems gems">Three gems<br />to rank 45</td>
		<td id="td-sj8g" class="cat8 sjtable sjitem conqgems gems">Three gems<br />to rank 55</td>
		<td id="td-sj9g" class="cat9 sjtable sjitem conqgems gems">Three gems<br />to rank 70</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1h" class="cat1 sjtable sjitem artisans">Blacksmith<br />level 10</td>
		<td id="td-sj2h" class="cat2 sjtable sjitem artisans">Craft item<br />at Blacksmith</td>
		<td id="td-sj3h" class="cat3 sjtable sjitem artisans">Learn 5 recipes</td>
		<td id="td-sj4h" class="cat4 sjtable sjitem ubers">A2 keywarden<br />(T4)</td>
		<td id="td-sj5h" class="cat5 sjtable sjitem setdung">Complete a<br />Set Dungeon</td>
		<td id="td-sj6h" class="cat6 sjtable sjitem setdung">Master a<br />Set Dungeon</td>
		<td id="td-sj7h" class="cat7 sjtable sjitem conquests">Complete<br />1 conquest</td>
		<td id="td-sj8h" class="cat8 sjtable sjitem conquests">Complete<br />2 conquests</td>
		<td id="td-sj9h" class="cat9 sjtable sjitem conquests">Complete<br />3 conquests</td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1i" class="cat1 sjtable sjitem artisans">Jeweler<br />level 10</td>
		<td id="td-sj2i" class="cat2 sjtable sjitem artisans">Craft ring/amu<br />at Jeweler</td>
		<td id="td-sj3i" class="cat3 sjtable sjitem artisans">Learn 5 designs</td>
		<td id="td-sj4i" class="cat4 sjtable sjitem ubers">A3 keywarden<br />(T4)</td>
		<td id="td-sj5i" class="cat5 sjtable sjitem ubers">A1 Machine<br />(T1)</td>
		<td id="td-sj6i" class="cat6 sjtable sjitem ubers">A3 Machine<br />(T10)</td>
		<td id="td-sj7i" class="cat7 sjtable sjitem ubers artisans">Craft Hellfire<br />Amulet</td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1j" class="cat1 sjtable sjitem artisans">Mystic<br />level 10</td>
		<td id="td-sj2j" class="cat2 sjtable sjitem artisans">Enchant at<br />Mystic</td>
		<td id="td-sj3j" class="cat3 sjtable sjitem artisans">Transmogrify<br />an item</td>
		<td id="td-sj4j" class="cat4 sjtable sjitem ubers">A4 keywarden<br />(T4)</td>
		<td id="td-sj5j" class="cat5 sjtable sjitem ubers">A2 Machine<br />(T1)</td>
		<td id="td-sj6j" class="cat6 sjtable sjitem ubers">A4 Machine<br />(T10)</td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
		<td class="sjtable empty"></td>
	</tr>
	<tr class="sjtable">
		<td id="td-sj1k" class="cat1 sjtable rewards current">(No reward)</td>
		<td id="td-sj2k" class="cat2 sjtable rewards">1<sup>st</sup> Haedrig<br />(head+hands)</td>
		<td id="td-sj3k" class="cat3 sjtable rewards">2<sup>nd</sup> Haedrig<br />(feet+shoulders;<br />wiz: belt+neck)</td>
		<td id="td-sj4k" class="cat4 sjtable rewards">3<sup>rd</sup> Haedrig,<br />portrait frame,<br />unicorn pet</td>
		<td id="td-sj5k" class="cat5 sjtable rewards">Portrait<br />frame</td>
		<td id="td-sj6k" class="cat6 sjtable rewards">Portrait<br />frame</td>
		<td id="td-sj7k" class="cat7 sjtable rewards">Portrait<br />frame</td>
		<td id="td-sj8k" class="cat8 sjtable rewards">Stash tab,<br />portrait frame</td>
		<td id="td-sj9k" class="cat9 sjtable rewards">Portrait<br />frame</td>
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

<div id="bottomdiv">
	Haedrig's Gift contains the following class sets in Season 7:
	<br />
	Barbarian: <a href="http://us.battle.net/d3/en/item/helm-of-the-wastes" target="_blank">Wrath of the Wastes</a> - 
	Crusader: <a href="http://us.battle.net/d3/en/item/rolands-visage" target="_blank">Roland's Legacy</a> - 
	Demon Hunter: <a href="http://us.battle.net/d3/en/item/accursed-visage" target="_blank">Unhallowed Essence</a>
	<br />
	Monk: <a href="http://us.battle.net/d3/en/item/mask-of-the-searing-sky" target="_blank">Raiment of a Thousand Storms</a> - 
	Witch Doctor: <a href="http://us.battle.net/d3/en/item/helltooth-mask" target="_blank">Helltooth Harness</a> - 
	Wizard: <a href="http://us.battle.net/d3/en/item/tal-rashas-guise-of-wisdom" target="_blank">Tal Rasha's Elements</a>
	<br /><br /><br />
	<a href="http://www.diablofans.com/forums/diablo-iii-general-forums/diablo-iii-general-discussion/211245-s7-season-journey-tracker" target="_blank">Link to Diablofans forum thread for more info, some tips, and feedback.</a>
</div>

</div>

<script>
function loadSettings() {
	$.each(localStorage, function(key, value){
		$('td#'+key).addClass(value);
	})
};

// set sjitem
function setSJ(i, j) {
	if(!$('#td-sj'+i+''+j).hasClass('done')) {
		$('#td-sj'+i+''+j).addClass('done');
		localStorage.setItem('td-sj'+i+j, 'done')
	}
}

// unset sjitem
function unsetSJ(i, j) {
	if($('#td-sj'+i+''+j).hasClass('done')) {
		$('#td-sj'+i+''+j).removeClass('done');
		localStorage.setItem('td-sj'+i+j, 'not')
	}
}

// set conqitem
function setConq(i) {
	if(!$('#conq'+i).hasClass('done')) {
		$('#conq-'+i).addClass('done');
		localStorage.setItem('conq-'+i, 'done')
	}
}

// unset conqitem
function unsetConq(i) {
	if($('#conq-'+i).hasClass('done')) {
		$('#conq-'+i).removeClass('done');
		localStorage.setItem('conq-'+i, 'not')
	}
}

// check completed chapters
function checkComplete() {
	var criterion = [0, 9, 10, 10, 10, 10, 10, 9, 8, 7];
	var current = 1;
	while($('td.sjitem.done.cat'+current).length == criterion[current]) {
		$('#td-sj'+current+'k, #complete'+current).removeClass('current');
		$('#td-sj'+current+'k, #complete'+current).addClass('complete');
		$('#complete'+current).html('Complete!');
		current++;
	}
	
	// mark the current
	if(current<10) {
		$('#td-sj'+current+'k, #complete'+current).addClass('current');
		$('#complete'+current).html('Current');
	}
	
	// mark all above as incomplete
	for(i=current+1; i < 10; i++) {
		$('#td-sj'+i+'k, #complete'+i).removeClass('current');
		$('#td-sj'+i+'k, #complete'+i).removeClass('complete');
		$('#complete'+i).html('');
	}
}

// toggle entire column by clicking on header
$('th.header').click(function(event) {
	var criterion = [0, 9, 10, 10, 10, 10, 10, 9, 8, 7];
	var col = this.id.substr(3,4);
	var s = 'abcdefghij';
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
	} else if(sjid === 'td-sj9f' && status === 'done') {
		setSJ('8', 'f'); setSJ('7', 'f'); setSJ('7', 'g'); setSJ('6', 'g'); setSJ('5', 'g');
	} else if(sjid === 'td-sj8f' && status === 'done') {
		setSJ('7', 'f'); setSJ('5', 'g');
	} else if(sjid === 'td-sj7f' && status === 'done') {
		setSJ('5', 'g');
	} else if(sjid === 'td-sj7f' && status === 'not') {
		unsetSJ('9', 'f'); unsetSJ('8', 'f');
	} else if(sjid === 'td-sj8f' && status === 'not') {
		unsetSJ('9', 'f');
		
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
		unsetSJ('9', 'g'); unsetSJ('8', 'g'); unsetSJ('7', 'g'); unsetSJ('6', 'g'); unsetSJ('9', 'f'); unsetSJ('8', 'f'); unsetSJ('7', 'f');
	} else if(sjid === 'td-sj6g' && status === 'not') {
		unsetSJ('9', 'g'); unsetSJ('8', 'g'); unsetSJ('7', 'g'); unsetSJ('9', 'f');
	} else if(sjid === 'td-sj7g' && status === 'not') {
		unsetSJ('9', 'g'); unsetSJ('8', 'g'); unsetSJ('9', 'f');
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
	
	// bounty logic
	} else if(sjid === 'td-sj3f' && status === 'done') {
		setSJ('1', 'f');
	} else if(sjid === 'td-sj1f' && status === 'not') {
		unsetSJ('3', 'f');
	
	// artisan logic
	} else if(sjid === 'td-sj7i' && status === 'done') {
		setSJ('1', 'i');
	} else if(sjid === 'td-sj2g' && status === 'done') {
		setSJ('1', 'h'); setSJ('1', 'i'); setSJ('1', 'j');
	} else if(sjid === 'td-sj2i' && status === 'done') {
		setSJ('1', 'i');
	} else if(sjid === 'td-sj1i' && status === 'not') {
		unsetSJ('2', 'i'); unsetSJ('2', 'g'); unsetSJ('7', 'i');
	} else if(sjid === 'td-sj2j' && status === 'done') {
		setSJ('1', 'j');
	} else if(sjid === 'td-sj1j' && status === 'not') {
		unsetSJ('2', 'j'); unsetSJ('2', 'g');
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
	
	// set dungeons
	} else if(sjid === 'td-sj6h' && status === 'done') {
		setSJ('5', 'h');
	} else if(sjid === 'td-sj5h' && status === 'not') {
		unsetSJ('6', 'h');
	
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

	// if 1/2/3 conquests done than check off sjitem
	if($('.conqitem.done').length == 0) { unsetSJ('7', 'h'); unsetSJ('8', 'h'); unsetSJ('9', 'h'); }
	else if($('.conqitem.done').length == 1) { setSJ('7', 'h'); unsetSJ('8', 'h'); unsetSJ('9', 'h'); }
	else if($('.conqitem.done').length == 2) { setSJ('7', 'h'); setSJ('8', 'h'); unsetSJ('9', 'h'); }
	else if($('.conqitem.done').length > 2) { setSJ('7', 'h'); setSJ('8', 'h'); setSJ('9', 'h'); }

	// if 3 gems to 65 conq is done, check all conq leveling sjitems
	if(conqid === 'conq-d' || conqid === 'conq-d') {
		if($('#conq-d').hasClass('done') || $('#conq-i').hasClass('done')) {
			setSJ('5', 'g'); setSJ('6', 'g'); setSJ('7', 'g'); setSJ('8', 'g');
		} else if(!$('#conq-d').hasClass('done') && !$('#conq-i').hasClass('done')) {
			unsetSJ('9', 'g');
		}
	}

	// if gr45 w/o sets check solo grs
	if(conqid === 'conq-b' || conqid === 'conq-g') {
		if($('#conq-b').hasClass('done') || $('#conq-g').hasClass('done')) {
			setSJ('4', 'b'); setSJ('5', 'b'); setSJ('6', 'b');
		}
	}

	// if gr75 check solo grs
	if(conqid === 'conq-e' || conqid === 'conq-j') {
		if($('#conq-e').hasClass('done') || $('#conq-j').hasClass('done')) {
			setSJ('4', 'b'); setSJ('5', 'b'); setSJ('6', 'b'); setSJ('7', 'b'); setSJ('8', 'b'); setSJ('9', 'b');
		}
	}
	
	// sprinter checks first two bosses
	if(conqid === 'conq-c' || conqid === 'conq-h') {
		if($('#conq-c').hasClass('done') || $('#conq-h').hasClass('done')) {
			setSJ('1', 'c'); setSJ('1', 'd');
		}
	}
	
	// all but avarice conquests require max level
	if(conqid != 'conq-a' && conqid != 'conq-f') {
		if(status === 'done') {
			setSJ('1', 'b'); setSJ('2', 'b');
		}
		// all but avarice/sprinter require a normal rift at least
		if(conqid != 'conq-c' && conqid != 'conq-h') {
			setSJ('1', 'a');
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

$(document).ready(function() {
	loadSettings();
	checkComplete();
});
</script>

</body>
</html>
