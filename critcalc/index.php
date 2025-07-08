<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Diablo 3 CHC vs CHD Calculator</title>
<link rel="stylesheet" type="text/css" href="main-style.css" />
<link rel="stylesheet" type="text/css" href="/_style/d3rheader.css" />
<script src="/_script/jquery-1.11.0.min.js"></script>
</head>
<body>

<?php  include('../d3rheader.php'); ?>

<div id="main">

<h1>D3: CHC vs CHD</h1>
<span>(Critical hit chance versus critical hit damage)</span><br />
<span>For a more theoretical in-depth explanation check out <a href="https://maxroll.gg/d3/resources/critical-hit-chance-hit-damage-explained" target="_blank">sVr's Maxroll.gg article!</a></span>

<br /><br />

<table class="center">

<tr>
	<th colspan="2" class="toptable">Item choice:</th>
	<th id="spacercolumn"></th>
	<th colspan="2" class="toptable">Current stats:</th>
	<th id="spacercolumn"></th>
	<th class="toptable">Winner:</th>
</tr>

<tr>
	<td><input type="number" name="testchc" id="testchc" min="4.5" max="10" step="0.5" value="6" /></td>
	<td><span class="chc">% CHC</span></td>

	<td></td>
	
	<td><input type="number" name="mychc" id="mychc" min="5" max="100" step="0.5" value="50" /></td>
	<td><span class="chc">% CHC</span></td>

	<td></td>
	
	<td><span id="winner"></span></td>
</tr>

<tr>
	<td><input type="number" name="testchd" id="testchd" min="25" max="100" step="1" value="50" /></td>
	<td><span class="chd">% CHD</span></td>

	<td></td>
	
	<td><input type="number" name="mychd" id="mychd" min="50" max="750" step="1" value="450" /></td>
	<td><span class="chd">% CHD</span></td>

	<td></td>

	<td><span id="winnercomment"></span></td>
</tr>

<tr>
	<td colspan="7" id="tdcomment"><br />For "current stats" include buffs but exclude the stats from the item on the left.</td>
</tr>

</table>

<br />

<h3>Table comparing <span id="testchc"></span> with <span id="testchd"></span></h3>

<table class="center" id="chcchd">

<tr>
	<td colspan="22">Critical hit damage</td>
</tr>

<tr>
	<td rowspan="24"><div class="rotated270">Critical hit chance</div></td>
	<td></td>
	<td class="lrborder">240</td>
	<td class="lrborder">260</td>
	<td class="lrborder">280</td>
	<td class="lrborder">300</td>
	<td class="lrborder">320</td>
	<td class="lrborder">340</td>
	<td class="lrborder">360</td>
	<td class="lrborder">380</td>
	<td class="lrborder">400</td>
	<td class="lrborder">420</td>
	<td class="lrborder">440</td>
	<td class="lrborder">460</td>
	<td class="lrborder">480</td>
	<td class="lrborder">500</td>
	<td class="lrborder">520</td>
	<td class="lrborder">540</td>
	<td class="lrborder">560</td>
	<td class="lrborder">580</td>
	<td class="lrborder">600</td>
	<td class="lrborder">620</td>
	<td rowspan="24"><div class="rotated90 chc">CHC better by... %</div></td>
</tr>

<tr>
	<td class="tbborder">30</td>
	<td class="chcchd" id="id24030"></td>
	<td class="chcchd" id="id26030"></td>
	<td class="chcchd" id="id28030"></td>
	<td class="chcchd" id="id30030"></td>
	<td class="chcchd" id="id32030"></td>
	<td class="chcchd" id="id34030"></td>
	<td class="chcchd" id="id36030"></td>
	<td class="chcchd" id="id38030"></td>
	<td class="chcchd" id="id40030"></td>
	<td class="chcchd" id="id42030"></td>
	<td class="chcchd" id="id44030"></td>
	<td class="chcchd" id="id46030"></td>
	<td class="chcchd" id="id48030"></td>
	<td class="chcchd" id="id50030"></td>
	<td class="chcchd" id="id52030"></td>
	<td class="chcchd" id="id54030"></td>
	<td class="chcchd" id="id56030"></td>
	<td class="chcchd" id="id58030"></td>
	<td class="chcchd" id="id60030"></td>
	<td class="chcchd" id="id62030"></td>
</tr>

<tr>
	<td class="tbborder">32</td>
	<td class="chcchd" id="id24032"></td>
	<td class="chcchd" id="id26032"></td>
	<td class="chcchd" id="id28032"></td>
	<td class="chcchd" id="id30032"></td>
	<td class="chcchd" id="id32032"></td>
	<td class="chcchd" id="id34032"></td>
	<td class="chcchd" id="id36032"></td>
	<td class="chcchd" id="id38032"></td>
	<td class="chcchd" id="id40032"></td>
	<td class="chcchd" id="id42032"></td>
	<td class="chcchd" id="id44032"></td>
	<td class="chcchd" id="id46032"></td>
	<td class="chcchd" id="id48032"></td>
	<td class="chcchd" id="id50032"></td>
	<td class="chcchd" id="id52032"></td>
	<td class="chcchd" id="id54032"></td>
	<td class="chcchd" id="id56032"></td>
	<td class="chcchd" id="id58032"></td>
	<td class="chcchd" id="id60032"></td>
	<td class="chcchd" id="id62032"></td>
</tr>

<tr>
	<td class="tbborder">34</td>
	<td class="chcchd" id="id24034"></td>
	<td class="chcchd" id="id26034"></td>
	<td class="chcchd" id="id28034"></td>
	<td class="chcchd" id="id30034"></td>
	<td class="chcchd" id="id32034"></td>
	<td class="chcchd" id="id34034"></td>
	<td class="chcchd" id="id36034"></td>
	<td class="chcchd" id="id38034"></td>
	<td class="chcchd" id="id40034"></td>
	<td class="chcchd" id="id42034"></td>
	<td class="chcchd" id="id44034"></td>
	<td class="chcchd" id="id46034"></td>
	<td class="chcchd" id="id48034"></td>
	<td class="chcchd" id="id50034"></td>
	<td class="chcchd" id="id52034"></td>
	<td class="chcchd" id="id54034"></td>
	<td class="chcchd" id="id56034"></td>
	<td class="chcchd" id="id58034"></td>
	<td class="chcchd" id="id60034"></td>
	<td class="chcchd" id="id62034"></td>
</tr>

<tr>
	<td class="tbborder">36</td>
	<td class="chcchd" id="id24036"></td>
	<td class="chcchd" id="id26036"></td>
	<td class="chcchd" id="id28036"></td>
	<td class="chcchd" id="id30036"></td>
	<td class="chcchd" id="id32036"></td>
	<td class="chcchd" id="id34036"></td>
	<td class="chcchd" id="id36036"></td>
	<td class="chcchd" id="id38036"></td>
	<td class="chcchd" id="id40036"></td>
	<td class="chcchd" id="id42036"></td>
	<td class="chcchd" id="id44036"></td>
	<td class="chcchd" id="id46036"></td>
	<td class="chcchd" id="id48036"></td>
	<td class="chcchd" id="id50036"></td>
	<td class="chcchd" id="id52036"></td>
	<td class="chcchd" id="id54036"></td>
	<td class="chcchd" id="id56036"></td>
	<td class="chcchd" id="id58036"></td>
	<td class="chcchd" id="id60036"></td>
	<td class="chcchd" id="id62036"></td>
</tr>

<tr>
	<td class="tbborder">38</td>
	<td class="chcchd" id="id24038"></td>
	<td class="chcchd" id="id26038"></td>
	<td class="chcchd" id="id28038"></td>
	<td class="chcchd" id="id30038"></td>
	<td class="chcchd" id="id32038"></td>
	<td class="chcchd" id="id34038"></td>
	<td class="chcchd" id="id36038"></td>
	<td class="chcchd" id="id38038"></td>
	<td class="chcchd" id="id40038"></td>
	<td class="chcchd" id="id42038"></td>
	<td class="chcchd" id="id44038"></td>
	<td class="chcchd" id="id46038"></td>
	<td class="chcchd" id="id48038"></td>
	<td class="chcchd" id="id50038"></td>
	<td class="chcchd" id="id52038"></td>
	<td class="chcchd" id="id54038"></td>
	<td class="chcchd" id="id56038"></td>
	<td class="chcchd" id="id58038"></td>
	<td class="chcchd" id="id60038"></td>
	<td class="chcchd" id="id62038"></td>
</tr>

<tr>
	<td class="tbborder">40</td>
	<td class="chcchd" id="id24040"></td>
	<td class="chcchd" id="id26040"></td>
	<td class="chcchd" id="id28040"></td>
	<td class="chcchd" id="id30040"></td>
	<td class="chcchd" id="id32040"></td>
	<td class="chcchd" id="id34040"></td>
	<td class="chcchd" id="id36040"></td>
	<td class="chcchd" id="id38040"></td>
	<td class="chcchd" id="id40040"></td>
	<td class="chcchd" id="id42040"></td>
	<td class="chcchd" id="id44040"></td>
	<td class="chcchd" id="id46040"></td>
	<td class="chcchd" id="id48040"></td>
	<td class="chcchd" id="id50040"></td>
	<td class="chcchd" id="id52040"></td>
	<td class="chcchd" id="id54040"></td>
	<td class="chcchd" id="id56040"></td>
	<td class="chcchd" id="id58040"></td>
	<td class="chcchd" id="id60040"></td>
	<td class="chcchd" id="id62040"></td>
</tr>

<tr>
	<td class="tbborder">42</td>
	<td class="chcchd" id="id24042"></td>
	<td class="chcchd" id="id26042"></td>
	<td class="chcchd" id="id28042"></td>
	<td class="chcchd" id="id30042"></td>
	<td class="chcchd" id="id32042"></td>
	<td class="chcchd" id="id34042"></td>
	<td class="chcchd" id="id36042"></td>
	<td class="chcchd" id="id38042"></td>
	<td class="chcchd" id="id40042"></td>
	<td class="chcchd" id="id42042"></td>
	<td class="chcchd" id="id44042"></td>
	<td class="chcchd" id="id46042"></td>
	<td class="chcchd" id="id48042"></td>
	<td class="chcchd" id="id50042"></td>
	<td class="chcchd" id="id52042"></td>
	<td class="chcchd" id="id54042"></td>
	<td class="chcchd" id="id56042"></td>
	<td class="chcchd" id="id58042"></td>
	<td class="chcchd" id="id60042"></td>
	<td class="chcchd" id="id62042"></td>
</tr>

<tr>
	<td class="tbborder">44</td>
	<td class="chcchd" id="id24044"></td>
	<td class="chcchd" id="id26044"></td>
	<td class="chcchd" id="id28044"></td>
	<td class="chcchd" id="id30044"></td>
	<td class="chcchd" id="id32044"></td>
	<td class="chcchd" id="id34044"></td>
	<td class="chcchd" id="id36044"></td>
	<td class="chcchd" id="id38044"></td>
	<td class="chcchd" id="id40044"></td>
	<td class="chcchd" id="id42044"></td>
	<td class="chcchd" id="id44044"></td>
	<td class="chcchd" id="id46044"></td>
	<td class="chcchd" id="id48044"></td>
	<td class="chcchd" id="id50044"></td>
	<td class="chcchd" id="id52044"></td>
	<td class="chcchd" id="id54044"></td>
	<td class="chcchd" id="id56044"></td>
	<td class="chcchd" id="id58044"></td>
	<td class="chcchd" id="id60044"></td>
	<td class="chcchd" id="id62044"></td>
</tr>

<tr>
	<td class="tbborder">46</td>
	<td class="chcchd" id="id24046"></td>
	<td class="chcchd" id="id26046"></td>
	<td class="chcchd" id="id28046"></td>
	<td class="chcchd" id="id30046"></td>
	<td class="chcchd" id="id32046"></td>
	<td class="chcchd" id="id34046"></td>
	<td class="chcchd" id="id36046"></td>
	<td class="chcchd" id="id38046"></td>
	<td class="chcchd" id="id40046"></td>
	<td class="chcchd" id="id42046"></td>
	<td class="chcchd" id="id44046"></td>
	<td class="chcchd" id="id46046"></td>
	<td class="chcchd" id="id48046"></td>
	<td class="chcchd" id="id50046"></td>
	<td class="chcchd" id="id52046"></td>
	<td class="chcchd" id="id54046"></td>
	<td class="chcchd" id="id56046"></td>
	<td class="chcchd" id="id58046"></td>
	<td class="chcchd" id="id60046"></td>
	<td class="chcchd" id="id62046"></td>
</tr>

<tr>
	<td class="tbborder">48</td>
	<td class="chcchd" id="id24048"></td>
	<td class="chcchd" id="id26048"></td>
	<td class="chcchd" id="id28048"></td>
	<td class="chcchd" id="id30048"></td>
	<td class="chcchd" id="id32048"></td>
	<td class="chcchd" id="id34048"></td>
	<td class="chcchd" id="id36048"></td>
	<td class="chcchd" id="id38048"></td>
	<td class="chcchd" id="id40048"></td>
	<td class="chcchd" id="id42048"></td>
	<td class="chcchd" id="id44048"></td>
	<td class="chcchd" id="id46048"></td>
	<td class="chcchd" id="id48048"></td>
	<td class="chcchd" id="id50048"></td>
	<td class="chcchd" id="id52048"></td>
	<td class="chcchd" id="id54048"></td>
	<td class="chcchd" id="id56048"></td>
	<td class="chcchd" id="id58048"></td>
	<td class="chcchd" id="id60048"></td>
	<td class="chcchd" id="id62048"></td>
</tr>

<tr>
	<td class="tbborder">50</td>
	<td class="chcchd" id="id24050"></td>
	<td class="chcchd" id="id26050"></td>
	<td class="chcchd" id="id28050"></td>
	<td class="chcchd" id="id30050"></td>
	<td class="chcchd" id="id32050"></td>
	<td class="chcchd" id="id34050"></td>
	<td class="chcchd" id="id36050"></td>
	<td class="chcchd" id="id38050"></td>
	<td class="chcchd" id="id40050"></td>
	<td class="chcchd" id="id42050"></td>
	<td class="chcchd" id="id44050"></td>
	<td class="chcchd" id="id46050"></td>
	<td class="chcchd" id="id48050"></td>
	<td class="chcchd" id="id50050"></td>
	<td class="chcchd" id="id52050"></td>
	<td class="chcchd" id="id54050"></td>
	<td class="chcchd" id="id56050"></td>
	<td class="chcchd" id="id58050"></td>
	<td class="chcchd" id="id60050"></td>
	<td class="chcchd" id="id62050"></td>
</tr>

<tr>
	<td class="tbborder">52</td>
	<td class="chcchd" id="id24052"></td>
	<td class="chcchd" id="id26052"></td>
	<td class="chcchd" id="id28052"></td>
	<td class="chcchd" id="id30052"></td>
	<td class="chcchd" id="id32052"></td>
	<td class="chcchd" id="id34052"></td>
	<td class="chcchd" id="id36052"></td>
	<td class="chcchd" id="id38052"></td>
	<td class="chcchd" id="id40052"></td>
	<td class="chcchd" id="id42052"></td>
	<td class="chcchd" id="id44052"></td>
	<td class="chcchd" id="id46052"></td>
	<td class="chcchd" id="id48052"></td>
	<td class="chcchd" id="id50052"></td>
	<td class="chcchd" id="id52052"></td>
	<td class="chcchd" id="id54052"></td>
	<td class="chcchd" id="id56052"></td>
	<td class="chcchd" id="id58052"></td>
	<td class="chcchd" id="id60052"></td>
	<td class="chcchd" id="id62052"></td>
</tr>

<tr>
	<td class="tbborder">54</td>
	<td class="chcchd" id="id24054"></td>
	<td class="chcchd" id="id26054"></td>
	<td class="chcchd" id="id28054"></td>
	<td class="chcchd" id="id30054"></td>
	<td class="chcchd" id="id32054"></td>
	<td class="chcchd" id="id34054"></td>
	<td class="chcchd" id="id36054"></td>
	<td class="chcchd" id="id38054"></td>
	<td class="chcchd" id="id40054"></td>
	<td class="chcchd" id="id42054"></td>
	<td class="chcchd" id="id44054"></td>
	<td class="chcchd" id="id46054"></td>
	<td class="chcchd" id="id48054"></td>
	<td class="chcchd" id="id50054"></td>
	<td class="chcchd" id="id52054"></td>
	<td class="chcchd" id="id54054"></td>
	<td class="chcchd" id="id56054"></td>
	<td class="chcchd" id="id58054"></td>
	<td class="chcchd" id="id60054"></td>
	<td class="chcchd" id="id62054"></td>
</tr>

<tr>
	<td class="tbborder">56</td>
	<td class="chcchd" id="id24056"></td>
	<td class="chcchd" id="id26056"></td>
	<td class="chcchd" id="id28056"></td>
	<td class="chcchd" id="id30056"></td>
	<td class="chcchd" id="id32056"></td>
	<td class="chcchd" id="id34056"></td>
	<td class="chcchd" id="id36056"></td>
	<td class="chcchd" id="id38056"></td>
	<td class="chcchd" id="id40056"></td>
	<td class="chcchd" id="id42056"></td>
	<td class="chcchd" id="id44056"></td>
	<td class="chcchd" id="id46056"></td>
	<td class="chcchd" id="id48056"></td>
	<td class="chcchd" id="id50056"></td>
	<td class="chcchd" id="id52056"></td>
	<td class="chcchd" id="id54056"></td>
	<td class="chcchd" id="id56056"></td>
	<td class="chcchd" id="id58056"></td>
	<td class="chcchd" id="id60056"></td>
	<td class="chcchd" id="id62056"></td>
</tr>

<tr>
	<td class="tbborder">58</td>
	<td class="chcchd" id="id24058"></td>
	<td class="chcchd" id="id26058"></td>
	<td class="chcchd" id="id28058"></td>
	<td class="chcchd" id="id30058"></td>
	<td class="chcchd" id="id32058"></td>
	<td class="chcchd" id="id34058"></td>
	<td class="chcchd" id="id36058"></td>
	<td class="chcchd" id="id38058"></td>
	<td class="chcchd" id="id40058"></td>
	<td class="chcchd" id="id42058"></td>
	<td class="chcchd" id="id44058"></td>
	<td class="chcchd" id="id46058"></td>
	<td class="chcchd" id="id48058"></td>
	<td class="chcchd" id="id50058"></td>
	<td class="chcchd" id="id52058"></td>
	<td class="chcchd" id="id54058"></td>
	<td class="chcchd" id="id56058"></td>
	<td class="chcchd" id="id58058"></td>
	<td class="chcchd" id="id60058"></td>
	<td class="chcchd" id="id62058"></td>
</tr>

<tr>
	<td class="tbborder">60</td>
	<td class="chcchd" id="id24060"></td>
	<td class="chcchd" id="id26060"></td>
	<td class="chcchd" id="id28060"></td>
	<td class="chcchd" id="id30060"></td>
	<td class="chcchd" id="id32060"></td>
	<td class="chcchd" id="id34060"></td>
	<td class="chcchd" id="id36060"></td>
	<td class="chcchd" id="id38060"></td>
	<td class="chcchd" id="id40060"></td>
	<td class="chcchd" id="id42060"></td>
	<td class="chcchd" id="id44060"></td>
	<td class="chcchd" id="id46060"></td>
	<td class="chcchd" id="id48060"></td>
	<td class="chcchd" id="id50060"></td>
	<td class="chcchd" id="id52060"></td>
	<td class="chcchd" id="id54060"></td>
	<td class="chcchd" id="id56060"></td>
	<td class="chcchd" id="id58060"></td>
	<td class="chcchd" id="id60060"></td>
	<td class="chcchd" id="id62060"></td>
</tr>

<tr>
	<td class="tbborder">62</td>
	<td class="chcchd" id="id24062"></td>
	<td class="chcchd" id="id26062"></td>
	<td class="chcchd" id="id28062"></td>
	<td class="chcchd" id="id30062"></td>
	<td class="chcchd" id="id32062"></td>
	<td class="chcchd" id="id34062"></td>
	<td class="chcchd" id="id36062"></td>
	<td class="chcchd" id="id38062"></td>
	<td class="chcchd" id="id40062"></td>
	<td class="chcchd" id="id42062"></td>
	<td class="chcchd" id="id44062"></td>
	<td class="chcchd" id="id46062"></td>
	<td class="chcchd" id="id48062"></td>
	<td class="chcchd" id="id50062"></td>
	<td class="chcchd" id="id52062"></td>
	<td class="chcchd" id="id54062"></td>
	<td class="chcchd" id="id56062"></td>
	<td class="chcchd" id="id58062"></td>
	<td class="chcchd" id="id60062"></td>
	<td class="chcchd" id="id62062"></td>
</tr>

<tr>
	<td class="tbborder">64</td>
	<td class="chcchd" id="id24064"></td>
	<td class="chcchd" id="id26064"></td>
	<td class="chcchd" id="id28064"></td>
	<td class="chcchd" id="id30064"></td>
	<td class="chcchd" id="id32064"></td>
	<td class="chcchd" id="id34064"></td>
	<td class="chcchd" id="id36064"></td>
	<td class="chcchd" id="id38064"></td>
	<td class="chcchd" id="id40064"></td>
	<td class="chcchd" id="id42064"></td>
	<td class="chcchd" id="id44064"></td>
	<td class="chcchd" id="id46064"></td>
	<td class="chcchd" id="id48064"></td>
	<td class="chcchd" id="id50064"></td>
	<td class="chcchd" id="id52064"></td>
	<td class="chcchd" id="id54064"></td>
	<td class="chcchd" id="id56064"></td>
	<td class="chcchd" id="id58064"></td>
	<td class="chcchd" id="id60064"></td>
	<td class="chcchd" id="id62064"></td>
</tr>

<tr>
	<td class="tbborder">66</td>
	<td class="chcchd" id="id24066"></td>
	<td class="chcchd" id="id26066"></td>
	<td class="chcchd" id="id28066"></td>
	<td class="chcchd" id="id30066"></td>
	<td class="chcchd" id="id32066"></td>
	<td class="chcchd" id="id34066"></td>
	<td class="chcchd" id="id36066"></td>
	<td class="chcchd" id="id38066"></td>
	<td class="chcchd" id="id40066"></td>
	<td class="chcchd" id="id42066"></td>
	<td class="chcchd" id="id44066"></td>
	<td class="chcchd" id="id46066"></td>
	<td class="chcchd" id="id48066"></td>
	<td class="chcchd" id="id50066"></td>
	<td class="chcchd" id="id52066"></td>
	<td class="chcchd" id="id54066"></td>
	<td class="chcchd" id="id56066"></td>
	<td class="chcchd" id="id58066"></td>
	<td class="chcchd" id="id60066"></td>
	<td class="chcchd" id="id62066"></td>
</tr>

<tr>
	<td class="tbborder">68</td>
	<td class="chcchd" id="id24068"></td>
	<td class="chcchd" id="id26068"></td>
	<td class="chcchd" id="id28068"></td>
	<td class="chcchd" id="id30068"></td>
	<td class="chcchd" id="id32068"></td>
	<td class="chcchd" id="id34068"></td>
	<td class="chcchd" id="id36068"></td>
	<td class="chcchd" id="id38068"></td>
	<td class="chcchd" id="id40068"></td>
	<td class="chcchd" id="id42068"></td>
	<td class="chcchd" id="id44068"></td>
	<td class="chcchd" id="id46068"></td>
	<td class="chcchd" id="id48068"></td>
	<td class="chcchd" id="id50068"></td>
	<td class="chcchd" id="id52068"></td>
	<td class="chcchd" id="id54068"></td>
	<td class="chcchd" id="id56068"></td>
	<td class="chcchd" id="id58068"></td>
	<td class="chcchd" id="id60068"></td>
	<td class="chcchd" id="id62068"></td>
</tr>

<tr>
	<td class="tbborder">70</td>
	<td class="chcchd" id="id24070"></td>
	<td class="chcchd" id="id26070"></td>
	<td class="chcchd" id="id28070"></td>
	<td class="chcchd" id="id30070"></td>
	<td class="chcchd" id="id32070"></td>
	<td class="chcchd" id="id34070"></td>
	<td class="chcchd" id="id36070"></td>
	<td class="chcchd" id="id38070"></td>
	<td class="chcchd" id="id40070"></td>
	<td class="chcchd" id="id42070"></td>
	<td class="chcchd" id="id44070"></td>
	<td class="chcchd" id="id46070"></td>
	<td class="chcchd" id="id48070"></td>
	<td class="chcchd" id="id50070"></td>
	<td class="chcchd" id="id52070"></td>
	<td class="chcchd" id="id54070"></td>
	<td class="chcchd" id="id56070"></td>
	<td class="chcchd" id="id58070"></td>
	<td class="chcchd" id="id60070"></td>
	<td class="chcchd" id="id62070"></td>
</tr>

<tr>
	<td class="tbborder">72</td>
	<td class="chcchd" id="id24072"></td>
	<td class="chcchd" id="id26072"></td>
	<td class="chcchd" id="id28072"></td>
	<td class="chcchd" id="id30072"></td>
	<td class="chcchd" id="id32072"></td>
	<td class="chcchd" id="id34072"></td>
	<td class="chcchd" id="id36072"></td>
	<td class="chcchd" id="id38072"></td>
	<td class="chcchd" id="id40072"></td>
	<td class="chcchd" id="id42072"></td>
	<td class="chcchd" id="id44072"></td>
	<td class="chcchd" id="id46072"></td>
	<td class="chcchd" id="id48072"></td>
	<td class="chcchd" id="id50072"></td>
	<td class="chcchd" id="id52072"></td>
	<td class="chcchd" id="id54072"></td>
	<td class="chcchd" id="id56072"></td>
	<td class="chcchd" id="id58072"></td>
	<td class="chcchd" id="id60072"></td>
	<td class="chcchd" id="id62072"></td>
</tr>

<tr>
	<td class="tbborder">74</td>
	<td class="chcchd" id="id24074"></td>
	<td class="chcchd" id="id26074"></td>
	<td class="chcchd" id="id28074"></td>
	<td class="chcchd" id="id30074"></td>
	<td class="chcchd" id="id32074"></td>
	<td class="chcchd" id="id34074"></td>
	<td class="chcchd" id="id36074"></td>
	<td class="chcchd" id="id38074"></td>
	<td class="chcchd" id="id40074"></td>
	<td class="chcchd" id="id42074"></td>
	<td class="chcchd" id="id44074"></td>
	<td class="chcchd" id="id46074"></td>
	<td class="chcchd" id="id48074"></td>
	<td class="chcchd" id="id50074"></td>
	<td class="chcchd" id="id52074"></td>
	<td class="chcchd" id="id54074"></td>
	<td class="chcchd" id="id56074"></td>
	<td class="chcchd" id="id58074"></td>
	<td class="chcchd" id="id60074"></td>
	<td class="chcchd" id="id62074"></td>
</tr>

<tr>
	<td colspan="22" class="chd">Critical hit damage better by... %</td>
</tr>

</table>

<br />
<br />

</div>

<?php include('../footer.php')?>

<script>

<?php  // retrieve SESSION variables ?>
<?php if(isset($_SESSION['mychc'])){?>if("<?php echo $_SESSION['mychc']?>" != "") { $("input#mychc").val(<?php echo $_SESSION['mychc']?>); }<?php }?>
<?php if(isset($_SESSION['mychd'])){?>if("<?php echo $_SESSION['mychd']?>" != "") { $("input#mychd").val(<?php echo $_SESSION['mychd']?>); }<?php }?>
<?php if(isset($_SESSION['testchc'])){?>if("<?php echo $_SESSION['testchc']?>" != "") { $("input#testchc").val(<?php echo $_SESSION['testchc']?>); }<?php }?>
<?php if(isset($_SESSION['testchd'])){?>if("<?php echo $_SESSION['testchd']?>" != "") { $("input#testchd").val(<?php echo $_SESSION['testchd']?>); }<?php }?>

function calcStats2D(mychc, mychd, testchc, testchd) {
	if((1+((mychc+testchc)/100)*(mychd/100)) > (1+(mychc/100)*((mychd+testchd)/100))) {
		return Math.round((((1+((mychc+testchc)/100)*(mychd/100))-(1+(mychc/100)*((mychd+testchd)/100)))/(1+(mychc/100)*((mychd+testchd)/100)))*10000)/100;
	} else if((1+(mychc/100)*((mychd+testchd)/100)) > (1+((mychc+testchc)/100)*(mychd/100))) {
		return Math.round((((1+(mychc/100)*((mychd+testchd)/100))-(1+((mychc+testchc)/100)*(mychd/100)))/(1+(mychc/100)*((mychd+testchd)/100)))*-10000)/100;
	}
	return 0;
}

function calcStats1D(mychc, mychd, testchc, testchd) {
	if((1+((mychc+testchc)/100)*(mychd/100)) > (1+(mychc/100)*((mychd+testchd)/100))) {
		return Math.round((((1+((mychc+testchc)/100)*(mychd/100))-(1+(mychc/100)*((mychd+testchd)/100)))/(1+(mychc/100)*((mychd+testchd)/100)))*1000)/10;
	} else if((1+(mychc/100)*((mychd+testchd)/100)) > (1+((mychc+testchc)/100)*(mychd/100))) {
		return Math.round((((1+(mychc/100)*((mychd+testchd)/100))-(1+((mychc+testchc)/100)*(mychd/100)))/(1+(mychc/100)*((mychd+testchd)/100)))*-1000)/10;
	}
	return 0;
}

function calcResults() {
	var calc = calcStats2D(parseFloat($('input#mychc').val()), parseInt($('input#mychd').val()), parseFloat($('input#testchc').val()), parseInt($('input#testchd').val()));
	
	if(calc > 0) {
		$('span#winner').text( "CHC" );
		$('span#winnercomment').text( "by: " + calc + "%");
		if($('span#winner').hasClass('chd')) $('span#winner').removeClass('chd');
		if(!$('span#winner').hasClass('chc')) $('span#winner').addClass('chc');
		if($('span#winnercomment').hasClass('chd')) $('span#winnercomment').removeClass('chd');
		if(!$('span#winnercomment').hasClass('chc')) $('span#winnercomment').addClass('chc');
	} else if(calc < 0) {
		$('span#winner').text( "CHD" );
		$('span#winnercomment').text( "by: " + calc*(-1) + "%");
		if($('span#winner').hasClass('chc')) $('span#winner').removeClass('chc');
		if(!$('span#winner').hasClass('chd')) $('span#winner').addClass('chd');
		if($('span#winnercomment').hasClass('chc')) $('span#winnercomment').removeClass('chc');
		if(!$('span#winnercomment').hasClass('chd')) $('span#winnercomment').addClass('chd');
	} else {
		$('span#winner').text( "Both" );
		$('span#winnercomment').text( "0% difference" );
		if($('span#winner').hasClass('chd')) $('span#winner').removeClass('chd');
		if($('span#winnercomment').hasClass('chd')) $('span#winnercomment').removeClass('chd');
		if($('span#winner').hasClass('chc')) $('span#winner').removeClass('chc');
		if($('span#winnercomment').hasClass('chc')) $('span#winnercomment').removeClass('chc');
	}
	
	passValues("mychc", $('input#mychc').val());
	passValues("mychd", $('input#mychd').val());
	passValues("testchc", $('input#testchc').val());
	passValues("testchd", $('input#testchd').val());
	
	$('span#testchc').text( $('input#testchc').val() + "% CHC" );
	$('span#testchd').text( $('input#testchd').val() + "% CHD" );
	
	for(i=30; i<=74; i+=2) {
		for(j=240; j<=620; j+=20) {
			calc = calcStats1D(i, j, parseFloat($('input#testchc').val()), parseInt($('input#testchd').val()));
			if(calc > 0) {
				$('td#id'+j+i).html("<span class='chc'>"+calc+"</span>");
			} else if(calc < 0) {
				$('td#id'+j+i).html("<span class='chd'>"+(calc*(-1))+"</span>");
			} else {
				$('td#id'+j+i).html("<span>0</span>");
			}
		}
	}
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
	$('input#mychc').change( calcResults );
	$('input#mychd').change( calcResults );
	$('input#testchc').change( calcResults );
	$('input#testchd').change( calcResults );
});

$(document).ready(function() {
	$('input#mychc').change();
});
</script>

</body>
</html>
