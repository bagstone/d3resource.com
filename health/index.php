<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Diablo 3 Life % vs Vitality Calculator</title>
<link rel="stylesheet" type="text/css" href="main-style.css" />
<link rel="stylesheet" type="text/css" href="/_style/d3rheader.css" />
<script src="/_script/jquery-1.11.0.min.js"></script>
</head>
<body>

<?php  include('../d3rheader.php'); ?>

<div id="main">

<h1>D3: Life % vs Vitality</h1>

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
	<td><input type="number" name="testlife" id="testlife" min="10" max="18" step="1" value="15" /></td>
	<td><span class="life">% life</span</td>

	<td></td>
	
	<td><input type="number" name="mylife" id="mylife" min="10" max="150" step="1" value="25" /></td>
	<td><span class="life">% life</span></td>

	<td></td>
	
	<td><span id="winner"></span></td>
</tr>

<tr>
	<td><input type="number" name="testvit" id="testvit" min="500" max="1000" step="1" value="650" /></td>
	<td><span class="vit">Vitality</span></td>

	<td></td>
	
	<td><input type="number" name="myvit" id="myvit" min="2000" max="25000" step="1" value="4000" /></td>
	<td><span class="vit">Vitality</span></td>

	<td></td>

	<td><span id="winnercomment"></span></td>
</tr>

<tr>
	<td colspan="7" id="tdcomment"><br />For "current stats" include buffs but exclude the stats from the item on the right.</td>
</tr>

</table>

<br />

<h3>Table comparing <span id="testlife"></span> with <span id="testvit"></span></h3>

<table class="center" id="lifevit">

<tr>
	<td colspan="17">Life %</td>
</tr>

<tr>
	<td rowspan="25"><div class="rotated270">Vitality</div></td>
	<td></td>
	<td class="lrborder">10</td>
	<td class="lrborder">20</td>
	<td class="lrborder">30</td>
	<td class="lrborder">40</td>
	<td class="lrborder">50</td>
	<td class="lrborder">60</td>
	<td class="lrborder">70</td>
	<td class="lrborder">80</td>
	<td class="lrborder">90</td>
	<td class="lrborder">100</td>
	<td class="lrborder">110</td>
	<td class="lrborder">120</td>
	<td class="lrborder">130</td>
	<td class="lrborder">140</td>
	<td class="lrborder">150</td>
	<td rowspan="25"><div class="rotated90 vit">Vitality better by... %</div></td>
</tr>

<tr>
	<td class="tbborder">2000</td>
	<td class="lifevit" id="id01002000"></td>
	<td class="lifevit" id="id02002000"></td>
	<td class="lifevit" id="id03002000"></td>
	<td class="lifevit" id="id04002000"></td>
	<td class="lifevit" id="id05002000"></td>
	<td class="lifevit" id="id06002000"></td>
	<td class="lifevit" id="id07002000"></td>
	<td class="lifevit" id="id08002000"></td>
	<td class="lifevit" id="id09002000"></td>
	<td class="lifevit" id="id10002000"></td>
	<td class="lifevit" id="id11002000"></td>
	<td class="lifevit" id="id12002000"></td>
	<td class="lifevit" id="id13002000"></td>
	<td class="lifevit" id="id14002000"></td>
	<td class="lifevit" id="id15002000"></td>
</tr>

<tr>
	<td class="tbborder">3000</td>
	<td class="lifevit" id="id01003000"></td>
	<td class="lifevit" id="id02003000"></td>
	<td class="lifevit" id="id03003000"></td>
	<td class="lifevit" id="id04003000"></td>
	<td class="lifevit" id="id05003000"></td>
	<td class="lifevit" id="id06003000"></td>
	<td class="lifevit" id="id07003000"></td>
	<td class="lifevit" id="id08003000"></td>
	<td class="lifevit" id="id09003000"></td>
	<td class="lifevit" id="id10003000"></td>
	<td class="lifevit" id="id11003000"></td>
	<td class="lifevit" id="id12003000"></td>
	<td class="lifevit" id="id13003000"></td>
	<td class="lifevit" id="id14003000"></td>
	<td class="lifevit" id="id15003000"></td>
</tr>

<tr>
	<td class="tbborder">4000</td>
	<td class="lifevit" id="id01004000"></td>
	<td class="lifevit" id="id02004000"></td>
	<td class="lifevit" id="id03004000"></td>
	<td class="lifevit" id="id04004000"></td>
	<td class="lifevit" id="id05004000"></td>
	<td class="lifevit" id="id06004000"></td>
	<td class="lifevit" id="id07004000"></td>
	<td class="lifevit" id="id08004000"></td>
	<td class="lifevit" id="id09004000"></td>
	<td class="lifevit" id="id10004000"></td>
	<td class="lifevit" id="id11004000"></td>
	<td class="lifevit" id="id12004000"></td>
	<td class="lifevit" id="id13004000"></td>
	<td class="lifevit" id="id14004000"></td>
	<td class="lifevit" id="id15004000"></td>
</tr>

<tr>
	<td class="tbborder">5000</td>
	<td class="lifevit" id="id01005000"></td>
	<td class="lifevit" id="id02005000"></td>
	<td class="lifevit" id="id03005000"></td>
	<td class="lifevit" id="id04005000"></td>
	<td class="lifevit" id="id05005000"></td>
	<td class="lifevit" id="id06005000"></td>
	<td class="lifevit" id="id07005000"></td>
	<td class="lifevit" id="id08005000"></td>
	<td class="lifevit" id="id09005000"></td>
	<td class="lifevit" id="id10005000"></td>
	<td class="lifevit" id="id11005000"></td>
	<td class="lifevit" id="id12005000"></td>
	<td class="lifevit" id="id13005000"></td>
	<td class="lifevit" id="id14005000"></td>
	<td class="lifevit" id="id15005000"></td>
</tr>

<tr>
	<td class="tbborder">6000</td>
	<td class="lifevit" id="id01006000"></td>
	<td class="lifevit" id="id02006000"></td>
	<td class="lifevit" id="id03006000"></td>
	<td class="lifevit" id="id04006000"></td>
	<td class="lifevit" id="id05006000"></td>
	<td class="lifevit" id="id06006000"></td>
	<td class="lifevit" id="id07006000"></td>
	<td class="lifevit" id="id08006000"></td>
	<td class="lifevit" id="id09006000"></td>
	<td class="lifevit" id="id10006000"></td>
	<td class="lifevit" id="id11006000"></td>
	<td class="lifevit" id="id12006000"></td>
	<td class="lifevit" id="id13006000"></td>
	<td class="lifevit" id="id14006000"></td>
	<td class="lifevit" id="id15006000"></td>
</tr>

<tr>
	<td class="tbborder">7000</td>
	<td class="lifevit" id="id01007000"></td>
	<td class="lifevit" id="id02007000"></td>
	<td class="lifevit" id="id03007000"></td>
	<td class="lifevit" id="id04007000"></td>
	<td class="lifevit" id="id05007000"></td>
	<td class="lifevit" id="id06007000"></td>
	<td class="lifevit" id="id07007000"></td>
	<td class="lifevit" id="id08007000"></td>
	<td class="lifevit" id="id09007000"></td>
	<td class="lifevit" id="id10007000"></td>
	<td class="lifevit" id="id11007000"></td>
	<td class="lifevit" id="id12007000"></td>
	<td class="lifevit" id="id13007000"></td>
	<td class="lifevit" id="id14007000"></td>
	<td class="lifevit" id="id15007000"></td>
</tr>

<tr>
	<td class="tbborder">8000</td>
	<td class="lifevit" id="id01008000"></td>
	<td class="lifevit" id="id02008000"></td>
	<td class="lifevit" id="id03008000"></td>
	<td class="lifevit" id="id04008000"></td>
	<td class="lifevit" id="id05008000"></td>
	<td class="lifevit" id="id06008000"></td>
	<td class="lifevit" id="id07008000"></td>
	<td class="lifevit" id="id08008000"></td>
	<td class="lifevit" id="id09008000"></td>
	<td class="lifevit" id="id10008000"></td>
	<td class="lifevit" id="id11008000"></td>
	<td class="lifevit" id="id12008000"></td>
	<td class="lifevit" id="id13008000"></td>
	<td class="lifevit" id="id14008000"></td>
	<td class="lifevit" id="id15008000"></td>
</tr>

<tr>
	<td class="tbborder">9000</td>
	<td class="lifevit" id="id01009000"></td>
	<td class="lifevit" id="id02009000"></td>
	<td class="lifevit" id="id03009000"></td>
	<td class="lifevit" id="id04009000"></td>
	<td class="lifevit" id="id05009000"></td>
	<td class="lifevit" id="id06009000"></td>
	<td class="lifevit" id="id07009000"></td>
	<td class="lifevit" id="id08009000"></td>
	<td class="lifevit" id="id09009000"></td>
	<td class="lifevit" id="id10009000"></td>
	<td class="lifevit" id="id11009000"></td>
	<td class="lifevit" id="id12009000"></td>
	<td class="lifevit" id="id13009000"></td>
	<td class="lifevit" id="id14009000"></td>
	<td class="lifevit" id="id15009000"></td>
</tr>

<tr>
	<td class="tbborder">10000</td>
	<td class="lifevit" id="id01010000"></td>
	<td class="lifevit" id="id02010000"></td>
	<td class="lifevit" id="id03010000"></td>
	<td class="lifevit" id="id04010000"></td>
	<td class="lifevit" id="id05010000"></td>
	<td class="lifevit" id="id06010000"></td>
	<td class="lifevit" id="id07010000"></td>
	<td class="lifevit" id="id08010000"></td>
	<td class="lifevit" id="id09010000"></td>
	<td class="lifevit" id="id10010000"></td>
	<td class="lifevit" id="id11010000"></td>
	<td class="lifevit" id="id12010000"></td>
	<td class="lifevit" id="id13010000"></td>
	<td class="lifevit" id="id14010000"></td>
	<td class="lifevit" id="id15010000"></td>
</tr>

<tr>
	<td class="tbborder">11000</td>
	<td class="lifevit" id="id01011000"></td>
	<td class="lifevit" id="id02011000"></td>
	<td class="lifevit" id="id03011000"></td>
	<td class="lifevit" id="id04011000"></td>
	<td class="lifevit" id="id05011000"></td>
	<td class="lifevit" id="id06011000"></td>
	<td class="lifevit" id="id07011000"></td>
	<td class="lifevit" id="id08011000"></td>
	<td class="lifevit" id="id09011000"></td>
	<td class="lifevit" id="id10011000"></td>
	<td class="lifevit" id="id11011000"></td>
	<td class="lifevit" id="id12011000"></td>
	<td class="lifevit" id="id13011000"></td>
	<td class="lifevit" id="id14011000"></td>
	<td class="lifevit" id="id15011000"></td>
</tr>

<tr>
	<td class="tbborder">12000</td>
	<td class="lifevit" id="id01012000"></td>
	<td class="lifevit" id="id02012000"></td>
	<td class="lifevit" id="id03012000"></td>
	<td class="lifevit" id="id04012000"></td>
	<td class="lifevit" id="id05012000"></td>
	<td class="lifevit" id="id06012000"></td>
	<td class="lifevit" id="id07012000"></td>
	<td class="lifevit" id="id08012000"></td>
	<td class="lifevit" id="id09012000"></td>
	<td class="lifevit" id="id10012000"></td>
	<td class="lifevit" id="id11012000"></td>
	<td class="lifevit" id="id12012000"></td>
	<td class="lifevit" id="id13012000"></td>
	<td class="lifevit" id="id14012000"></td>
	<td class="lifevit" id="id15012000"></td>
</tr>

<tr>
	<td class="tbborder">13000</td>
	<td class="lifevit" id="id01013000"></td>
	<td class="lifevit" id="id02013000"></td>
	<td class="lifevit" id="id03013000"></td>
	<td class="lifevit" id="id04013000"></td>
	<td class="lifevit" id="id05013000"></td>
	<td class="lifevit" id="id06013000"></td>
	<td class="lifevit" id="id07013000"></td>
	<td class="lifevit" id="id08013000"></td>
	<td class="lifevit" id="id09013000"></td>
	<td class="lifevit" id="id10013000"></td>
	<td class="lifevit" id="id11013000"></td>
	<td class="lifevit" id="id12013000"></td>
	<td class="lifevit" id="id13013000"></td>
	<td class="lifevit" id="id14013000"></td>
	<td class="lifevit" id="id15013000"></td>
</tr>

<tr>
	<td class="tbborder">14000</td>
	<td class="lifevit" id="id01014000"></td>
	<td class="lifevit" id="id02014000"></td>
	<td class="lifevit" id="id03014000"></td>
	<td class="lifevit" id="id04014000"></td>
	<td class="lifevit" id="id05014000"></td>
	<td class="lifevit" id="id06014000"></td>
	<td class="lifevit" id="id07014000"></td>
	<td class="lifevit" id="id08014000"></td>
	<td class="lifevit" id="id09014000"></td>
	<td class="lifevit" id="id10014000"></td>
	<td class="lifevit" id="id11014000"></td>
	<td class="lifevit" id="id12014000"></td>
	<td class="lifevit" id="id13014000"></td>
	<td class="lifevit" id="id14014000"></td>
	<td class="lifevit" id="id15014000"></td>
</tr>

<tr>
	<td class="tbborder">15000</td>
	<td class="lifevit" id="id01015000"></td>
	<td class="lifevit" id="id02015000"></td>
	<td class="lifevit" id="id03015000"></td>
	<td class="lifevit" id="id04015000"></td>
	<td class="lifevit" id="id05015000"></td>
	<td class="lifevit" id="id06015000"></td>
	<td class="lifevit" id="id07015000"></td>
	<td class="lifevit" id="id08015000"></td>
	<td class="lifevit" id="id09015000"></td>
	<td class="lifevit" id="id10015000"></td>
	<td class="lifevit" id="id11015000"></td>
	<td class="lifevit" id="id12015000"></td>
	<td class="lifevit" id="id13015000"></td>
	<td class="lifevit" id="id14015000"></td>
	<td class="lifevit" id="id15015000"></td>
</tr>

<tr>
	<td class="tbborder">16000</td>
	<td class="lifevit" id="id01016000"></td>
	<td class="lifevit" id="id02016000"></td>
	<td class="lifevit" id="id03016000"></td>
	<td class="lifevit" id="id04016000"></td>
	<td class="lifevit" id="id05016000"></td>
	<td class="lifevit" id="id06016000"></td>
	<td class="lifevit" id="id07016000"></td>
	<td class="lifevit" id="id08016000"></td>
	<td class="lifevit" id="id09016000"></td>
	<td class="lifevit" id="id10016000"></td>
	<td class="lifevit" id="id11016000"></td>
	<td class="lifevit" id="id12016000"></td>
	<td class="lifevit" id="id13016000"></td>
	<td class="lifevit" id="id14016000"></td>
	<td class="lifevit" id="id15016000"></td>
</tr>

<tr>
	<td class="tbborder">17000</td>
	<td class="lifevit" id="id01017000"></td>
	<td class="lifevit" id="id02017000"></td>
	<td class="lifevit" id="id03017000"></td>
	<td class="lifevit" id="id04017000"></td>
	<td class="lifevit" id="id05017000"></td>
	<td class="lifevit" id="id06017000"></td>
	<td class="lifevit" id="id07017000"></td>
	<td class="lifevit" id="id08017000"></td>
	<td class="lifevit" id="id09017000"></td>
	<td class="lifevit" id="id10017000"></td>
	<td class="lifevit" id="id11017000"></td>
	<td class="lifevit" id="id12017000"></td>
	<td class="lifevit" id="id13017000"></td>
	<td class="lifevit" id="id14017000"></td>
	<td class="lifevit" id="id15017000"></td>
</tr>

<tr>
	<td class="tbborder">18000</td>
	<td class="lifevit" id="id01018000"></td>
	<td class="lifevit" id="id02018000"></td>
	<td class="lifevit" id="id03018000"></td>
	<td class="lifevit" id="id04018000"></td>
	<td class="lifevit" id="id05018000"></td>
	<td class="lifevit" id="id06018000"></td>
	<td class="lifevit" id="id07018000"></td>
	<td class="lifevit" id="id08018000"></td>
	<td class="lifevit" id="id09018000"></td>
	<td class="lifevit" id="id10018000"></td>
	<td class="lifevit" id="id11018000"></td>
	<td class="lifevit" id="id12018000"></td>
	<td class="lifevit" id="id13018000"></td>
	<td class="lifevit" id="id14018000"></td>
	<td class="lifevit" id="id15018000"></td>
</tr>

<tr>
	<td class="tbborder">19000</td>
	<td class="lifevit" id="id01019000"></td>
	<td class="lifevit" id="id02019000"></td>
	<td class="lifevit" id="id03019000"></td>
	<td class="lifevit" id="id04019000"></td>
	<td class="lifevit" id="id05019000"></td>
	<td class="lifevit" id="id06019000"></td>
	<td class="lifevit" id="id07019000"></td>
	<td class="lifevit" id="id08019000"></td>
	<td class="lifevit" id="id09019000"></td>
	<td class="lifevit" id="id10019000"></td>
	<td class="lifevit" id="id11019000"></td>
	<td class="lifevit" id="id12019000"></td>
	<td class="lifevit" id="id13019000"></td>
	<td class="lifevit" id="id14019000"></td>
	<td class="lifevit" id="id15019000"></td>
</tr>

<tr>
	<td class="tbborder">20000</td>
	<td class="lifevit" id="id01020000"></td>
	<td class="lifevit" id="id02020000"></td>
	<td class="lifevit" id="id03020000"></td>
	<td class="lifevit" id="id04020000"></td>
	<td class="lifevit" id="id05020000"></td>
	<td class="lifevit" id="id06020000"></td>
	<td class="lifevit" id="id07020000"></td>
	<td class="lifevit" id="id08020000"></td>
	<td class="lifevit" id="id09020000"></td>
	<td class="lifevit" id="id10020000"></td>
	<td class="lifevit" id="id11020000"></td>
	<td class="lifevit" id="id12020000"></td>
	<td class="lifevit" id="id13020000"></td>
	<td class="lifevit" id="id14020000"></td>
	<td class="lifevit" id="id15020000"></td>
</tr>

<tr>
	<td class="tbborder">21000</td>
	<td class="lifevit" id="id01021000"></td>
	<td class="lifevit" id="id02021000"></td>
	<td class="lifevit" id="id03021000"></td>
	<td class="lifevit" id="id04021000"></td>
	<td class="lifevit" id="id05021000"></td>
	<td class="lifevit" id="id06021000"></td>
	<td class="lifevit" id="id07021000"></td>
	<td class="lifevit" id="id08021000"></td>
	<td class="lifevit" id="id09021000"></td>
	<td class="lifevit" id="id10021000"></td>
	<td class="lifevit" id="id11021000"></td>
	<td class="lifevit" id="id12021000"></td>
	<td class="lifevit" id="id13021000"></td>
	<td class="lifevit" id="id14021000"></td>
	<td class="lifevit" id="id15021000"></td>
</tr>

<tr>
	<td class="tbborder">22000</td>
	<td class="lifevit" id="id01022000"></td>
	<td class="lifevit" id="id02022000"></td>
	<td class="lifevit" id="id03022000"></td>
	<td class="lifevit" id="id04022000"></td>
	<td class="lifevit" id="id05022000"></td>
	<td class="lifevit" id="id06022000"></td>
	<td class="lifevit" id="id07022000"></td>
	<td class="lifevit" id="id08022000"></td>
	<td class="lifevit" id="id09022000"></td>
	<td class="lifevit" id="id10022000"></td>
	<td class="lifevit" id="id11022000"></td>
	<td class="lifevit" id="id12022000"></td>
	<td class="lifevit" id="id13022000"></td>
	<td class="lifevit" id="id14022000"></td>
	<td class="lifevit" id="id15022000"></td>
</tr>

<tr>
	<td class="tbborder">23000</td>
	<td class="lifevit" id="id01023000"></td>
	<td class="lifevit" id="id02023000"></td>
	<td class="lifevit" id="id03023000"></td>
	<td class="lifevit" id="id04023000"></td>
	<td class="lifevit" id="id05023000"></td>
	<td class="lifevit" id="id06023000"></td>
	<td class="lifevit" id="id07023000"></td>
	<td class="lifevit" id="id08023000"></td>
	<td class="lifevit" id="id09023000"></td>
	<td class="lifevit" id="id10023000"></td>
	<td class="lifevit" id="id11023000"></td>
	<td class="lifevit" id="id12023000"></td>
	<td class="lifevit" id="id13023000"></td>
	<td class="lifevit" id="id14023000"></td>
	<td class="lifevit" id="id15023000"></td>
</tr>

<tr>
	<td class="tbborder">24000</td>
	<td class="lifevit" id="id01024000"></td>
	<td class="lifevit" id="id02024000"></td>
	<td class="lifevit" id="id03024000"></td>
	<td class="lifevit" id="id04024000"></td>
	<td class="lifevit" id="id05024000"></td>
	<td class="lifevit" id="id06024000"></td>
	<td class="lifevit" id="id07024000"></td>
	<td class="lifevit" id="id08024000"></td>
	<td class="lifevit" id="id09024000"></td>
	<td class="lifevit" id="id10024000"></td>
	<td class="lifevit" id="id11024000"></td>
	<td class="lifevit" id="id12024000"></td>
	<td class="lifevit" id="id13024000"></td>
	<td class="lifevit" id="id14024000"></td>
	<td class="lifevit" id="id15024000"></td>
</tr>

<tr>
	<td class="tbborder">25000</td>
	<td class="lifevit" id="id01025000"></td>
	<td class="lifevit" id="id02025000"></td>
	<td class="lifevit" id="id03025000"></td>
	<td class="lifevit" id="id04025000"></td>
	<td class="lifevit" id="id05025000"></td>
	<td class="lifevit" id="id06025000"></td>
	<td class="lifevit" id="id07025000"></td>
	<td class="lifevit" id="id08025000"></td>
	<td class="lifevit" id="id09025000"></td>
	<td class="lifevit" id="id10025000"></td>
	<td class="lifevit" id="id11025000"></td>
	<td class="lifevit" id="id12025000"></td>
	<td class="lifevit" id="id13025000"></td>
	<td class="lifevit" id="id14025000"></td>
	<td class="lifevit" id="id15025000"></td>
</tr>

<tr>
	<td colspan="17" class="life">Life % better by... %</td>
</tr>

</table>

<br />
<br />

<div id="footer">The purpose of this app is to quickly compare whether life % or vit is the desired stat on an item of your choice.<br />For feedback contact me at <a href="http://www.diablofans.com/user/87517-bagstone/">Diablofans</a>.</div>

</div>

<script>

<?php  // retrieve SESSION variables ?>
<?php if(isset($_SESSION['mylife'])){?>if("<?php echo $_SESSION['mylife']?>" != "") { $("input#mylife").val(<?php echo $_SESSION['mylife']?>); }<?php }?>
<?php if(isset($_SESSION['myvit'])){?>if("<?php echo $_SESSION['myvit']?>" != "") { $("input#myvit").val(<?php echo $_SESSION['myvit']?>); }<?php }?>
<?php if(isset($_SESSION['testlife'])){?>if("<?php echo $_SESSION['testlife']?>" != "") { $("input#testlife").val(<?php echo $_SESSION['testlife']?>); }<?php }?>
<?php if(isset($_SESSION['testvit'])){?>if("<?php echo $_SESSION['testvit']?>" != "") { $("input#testvit").val(<?php echo $_SESSION['testvit']?>); }<?php }?>

function calcStats(mylife, myvit, testlife, testvit) {
	var oldvit = 316+(myvit*100);
	var newvit = 316+((testvit+myvit)*100);
	var oldlife = 1+(mylife/100);
	var newlife = 1+((testlife+mylife)/100);
	if(newlife*oldvit > oldlife*newvit) {
		return Math.round(((newlife*oldvit-oldlife*newvit)/(oldvit*newlife))*10000);
	} else if(oldlife*newvit > newlife*oldvit) {
		return Math.round(((oldlife*newvit-newlife*oldvit)/(oldlife*newvit))*-10000);
	}
	return 0;
}

function calcResults() {
	var calc = calcStats(parseFloat($('input#mylife').val()), parseInt($('input#myvit').val()), parseFloat($('input#testlife').val()), parseInt($('input#testvit').val()))/100;
	
	if(calc > 0) {
		$('span#winner').text( "% life" );
		$('span#winnercomment').text( "by: " + calc + "%");
		if($('span#winner').hasClass('vit')) $('span#winner').removeClass('vit');
		if(!$('span#winner').hasClass('life')) $('span#winner').addClass('life');
		if($('span#winnercomment').hasClass('vit')) $('span#winnercomment').removeClass('vit');
		if(!$('span#winnercomment').hasClass('life')) $('span#winnercomment').addClass('life');
	} else if(calc < 0) {
		$('span#winner').text( "Vitality" );
		$('span#winnercomment').text( "by: " + calc*(-1) + "%");
		if($('span#winner').hasClass('life')) $('span#winner').removeClass('life');
		if(!$('span#winner').hasClass('vit')) $('span#winner').addClass('vit');
		if($('span#winnercomment').hasClass('life')) $('span#winnercomment').removeClass('life');
		if(!$('span#winnercomment').hasClass('vit')) $('span#winnercomment').addClass('vit');
	} else {
		$('span#winner').text( "Both" );
		$('span#winnercomment').text( "0% difference" );
		if($('span#winner').hasClass('vit')) $('span#winner').removeClass('vit');
		if($('span#winnercomment').hasClass('vit')) $('span#winnercomment').removeClass('vit');
		if($('span#winner').hasClass('life')) $('span#winner').removeClass('life');
		if($('span#winnercomment').hasClass('life')) $('span#winnercomment').removeClass('life');
	}
	
	passValues("mylife", $('input#mylife').val());
	passValues("myvit", $('input#myvit').val());
	passValues("testlife", $('input#testlife').val());
	passValues("testvit", $('input#testvit').val());
	
	$('span#testlife').text( $('input#testlife').val() + "% life" );
	$('span#testvit').text( $('input#testvit').val() + " vitality" );
	
	for(i=2000; i<=25000; i+=1000) {
		for(j=10; j<=150; j+=10) {
			calc = calcStats(j, i, parseFloat($('input#testlife').val()), parseInt($('input#testvit').val()))/100;
			if(calc > 0) {
				$('td#id'+zeroPad(j, 3)+zeroPad(i, 5)).html("<span class='life'>"+calc+"</span>");
			} else if(calc < 0) {
				$('td#id'+zeroPad(j, 3)+zeroPad(i, 5)).html("<span class='vit'>"+(calc*(-1))+"</span>");
			} else {
				$('td#id'+zeroPad(j, 3)+zeroPad(i, 5)).html("<span>0</span>");
			}
		}
	}
}

function zeroPad(num, size) {
	var s = num+"";
	while (s.length < size) s = "0" + s;
	return s;
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
	$('input#mylife').change( calcResults );
	$('input#myvit').change( calcResults );
	$('input#testlife').change( calcResults );
	$('input#testvit').change( calcResults );
});

$(document).ready(function() {
	$('input#mylife').change();
});
</script>

</body>
</html>
