<?php  session_start(); ?>

<?php 
$view=1;
$selfname=basename($_SERVER['PHP_SELF']);
if(isset($_GET['2'])) {
	$view=2;
} elseif(isset($_GET['1'])) {
	$view=1;
} else if(isset($_SESSION['view'])) {
	$view=$_SESSION['view'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Diablo 3 Difficulty Overview</title>
<link rel="stylesheet" type="text/css" href="main-style.css" />
<link rel="stylesheet" type="text/css" href="/_style/d3rheader.css" />
<script src="/_script/jquery-3.0.0.min.js"></script>
</head>
<body>

<?php  include('../d3rheader.php'); ?>

<div id="main">

<div class="centered"><h2>Diablo 3: Reaper of Souls - Difficulty Overview</h2></div>
<div class="centered" id="subtitle"><span>(Patch 2.6.x/2.7.x - Season 17+)</span></div>

<br />

<div id="tablediv">
<table class="difftable">
</table>
</div>

<br /><br /><br />

<div id="legend">
	<span>Notes:</span><br />
	<span class="legend">&bull; "2<sup>nd</sup> 50%" means there is a 50% chance for a second drop (and 100% for one drop).</span><br />
	<span class="legend">&bull; Sources are the official <a href="http://us.battle.net/d3/en/game/guide/gameplay/game-difficulty" target="_blank">Game Guide</a>, datamined, or data gathered by the community where not officially available.</span><br />
	<span class="legend">&bull; If you prefer static images, use those links (sporadically updated): <a href="../difficulties.png" target="_blank">Current</a> | 
<a href="../difficulties-s10-16.png" target="_blank">Seasons 10-16</a> | 
<a href="../difficulties-s7-9.png" target="_blank">Seasons 7-9</a> | 
<a href="../difficulties-s5-6.png" target="_blank">Seasons 5+6</a> | 
<a href="../difficulties-s4.png" target="_blank">Season 4</a> | 
<a href="../difficulties-ptr.png" target="_blank">PTR (if different)</a></span><br />
	<span class="legend">&bull; For feedback, questions, or any updated data contact me on <a href="https://www.diablofans.com/members/85801-bagstone" target="_blank">Diablofans</a> or <a href="https://www.reddit.com/user/bagstone" target="_blank">Reddit</a>.</span>
</div>

<br /><br /><br />

<?php  if($view==1) { ?>
	<a href="<?php echo $selfname?>?2">Switch to alternative view: rows/columns transposed</a><br />
<?php  } elseif($view==2) { ?>
	<a href="<?php echo $selfname?>?1">Switch to alternative view: rows/columns transposed</a><br />
<?php  } ?>


</div>

<br /><br /><br />

<div id="bottom-box">
<div id="customize-button">
Customize...
</div>
<div id="customize-content" class="hidden">
<h3>Choose difficulties to display</h3>
<div class="buttonrow">
	<a href="#" id="hidealldiffs">(Hide all)</a>&nbsp;
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-normal" value="Normal" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-hard" value="Hard" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-expert" value="Expert" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-master" value="Master" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t1" value="T1" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t2" value="T2" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t3" value="T3" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t4" value="T4" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t5" value="T5" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t6" value="T6" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t7" value="T7" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t8" value="T8" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t9" value="T9" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t10" value="T10" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t11" value="T11" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t12" value="T12" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t13" value="T13" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t14" value="T14" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t15" value="T15" />
	<input type="submit" class="yes unhidetoggle unhidediff" id="diff-t16" value="T16" />
	&nbsp;<a href="#" id="showalldiffs">(Show all)</a>
</div>
<h3>Choose values/drop rates to display</h3>
<div class="buttonrow">
	<a href="#" id="hideallsetts">(Hide all)</a>&nbsp;
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-gr" value="GR equiv." />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-hp" value="Health" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-dmg" value="Damage" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-xp" value="XP" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-gold" value="Gold" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-leg" value="Legs" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-legrift" value="Legs (rift)" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-db" value="DBs" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-key" value="Keys" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-cachemats" value="Cache mats" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-cachelegs" value="Cache legs" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-machines" value="Machines" />
	<input type="submit" class="yes unhidetoggle unhidesett" id="sett-organs" value="Organs" />
	&nbsp;<a href="#" id="showallsetts">(Show all)</a>
</div>
</div>
</div>

<?php include('../footer.php')?>

<script>
function populateTable() {
	// get JSON, parse into array first
	var cols = [];
	var values = [];
	$.getJSON('values.json', function(json) {
		$.each(json, function(index, element) {
			values.push($.map(element, function(el) { return el }));
		});
		
		// transpose for view2
		var transpValues = new Array( values[0].length );
		for (var i = 0; i < transpValues.length; i++ ) {
			transpValues[i] = new Array( values.length );
			for ( var j = 0; j < transpValues[i].length; j++ ) {
				transpValues[i][j] = values[j][i];
			}
		}

<?php  if($view==1) { ?>
		
		// non-transposed, normal view
		for (var i = 0; i < values.length; i++) {
			
			// big "row" var which will be added to table in the end
			var row = "\n\t<tr class='difftable";

			// if this isn't first row, add id
			if(i!=0) row+=" sett-"+values[i][0];
			row+="'>";
			
			for (var j = 0; j < values[i].length; j++) {
				
				// first row in JSON just contains the field ID, 2nd row short desc, skip
				if(j>1){
					row+="\n\t\t<td class='difftable";
					
					// first row: store column names; mark first row of table
					if(i==0) {
						row+=" top";
						if(j>2) cols.push(values[i][j].toLowerCase());
					}
					
					// mark left and right end of table
					if(j==2) row+=" left";
					if(j==values[i].length-1) row+=" right";
					
					// add row+col makers for toggle
					if(j>2) row+=" diff-"+cols[j-3];
					
					// those are the actual values that it's all about
					row+="'>"+values[i][j]+"</td>";
				}
			}
			row+="\n\t</tr>";
			$('table.difftable').append(row);
		}

<?php  } elseif($view==2) { ?>

		// view2: same action on transposed matrix
		for (var i = 0; i < transpValues.length; i++) {
			
			// big "row" var which will be added to table in the end
			var row = "\n\t<tr class='difftable";

			// if this isn't first row, add id
			if(i>1) row+=" diff-"+transpValues[i][0].toLowerCase();
			row+="'>";
			
			for (var j = 0; j < transpValues[i].length; j++) {
				
				row+="\n\t\t<td class='difftable wider";

				// first row: store column names; mark first row in table
				if(i==0) cols.push(transpValues[i][j]);
				
				// second row: store column names; mark first row in table
				if(i==1) row+=" top";
				
				// mark left and right end of table
				if(j==0) row+=" left";
				if(j==transpValues[i].length-1) row+=" right";
				
				// add row+col makers for toggle
				if(j>0) row+=" sett-"+cols[j];
				
				// those are the actual values that it's all about
				row+="'>"+transpValues[i][j]+"</td>";
			}
			row+="\n\t</tr>";
			
			// first row in JSON just contains the field ID, skip
			if(i!=0 && i!=2) $('table.difftable').append(row);
		}

<?php  } ?>
		
		repaintTable();
		loadSettings();
	});
};

function repaintTable() {
	$('td.difftable').removeClass('darker');
	$('tr.difftable:visible:odd td').addClass('darker');
	$('td.difftable').removeClass('last-row');
	$('tr.difftable:visible:last td').addClass('last-row');
	$('td.difftable').removeClass('last-col');
	$('td.difftable:not(:visible)').prev().addClass('last-col');
};

// toggle customize box
$('div#customize-button').click(function(event) {
	$('div#customize-content').toggleClass('hidden');
});

// load initial settings from localstorage
function loadSettings() {
	$.each(localStorage, function(key, value){
		if(key.substr(0,4)=="diff" || key.substr(0,4)=="sett") {
			if(value=="no") {
				$('.difftable.'+key).addClass('hidden');
				$('input#'+key).removeClass('yes');
				$('input#'+key).addClass('no');
			}
		}
	})
};

// toggle difficulty
$('input.unhidetoggle').click(function(event) {
	if($(event.target).hasClass("yes")) {
		localStorage.setItem(event.target.id, "no");
		$('.difftable.'+event.target.id).addClass('hidden');
		$(event.target).removeClass('yes');
		$(event.target).addClass('no');
	} else {
		localStorage.setItem(event.target.id, "yes");
		$('.difftable.'+event.target.id).removeClass('hidden');
		$(event.target).removeClass('no');
		$(event.target).addClass('yes');
	}
	repaintTable();
});

// hide all difficulties
$('a#hidealldiffs').click(function() {
	$('.difftable[class*=diff-]').addClass('hidden');
	$('input.unhidediff').removeClass('yes');
	$('input.unhidediff').addClass('no');
	repaintTable();
	$('input.unhidediff').each( function() {
		localStorage.setItem(this.id, "no");
	});
});

// show all difficulties
$('a#showalldiffs').click(function() {
	$('.difftable[class*=diff-]').removeClass('hidden');
	$('input.unhidediff').removeClass('no');
	$('input.unhidediff').addClass('yes');
	repaintTable();
	$('input.unhidediff').each( function() {
		localStorage.setItem(this.id, "yes");
	});
});

// hide all values/droprates
$('a#hideallsetts').click(function() {
	$('.difftable[class*=sett-]').addClass('hidden');
	$('input.unhidesett').removeClass('yes');
	$('input.unhidesett').addClass('no');
	repaintTable();
	$('input.unhidesett').each( function() {
		localStorage.setItem(this.id, "no");
	});
});

// show all values/droprates
$('a#showallsetts').click(function() {
	$('.difftable[class*=sett-]').removeClass('hidden');
	$('input.unhidesett').removeClass('no');
	$('input.unhidesett').addClass('yes');
	repaintTable();
	$('input.unhidesett').each( function() {
		localStorage.setItem(this.id, "yes");
	});
});

$(document).ready(function() {
	$.ajax({
		url: 'pass_value.php',
		type: 'POST',
		data: {
			'view': '<?php echo $view?>',
		}
	})
	populateTable();
});
</script>

</body>
</html>
