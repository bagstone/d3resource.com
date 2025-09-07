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
<title>Diablo 3 Seasons Overview</title>
<link rel="stylesheet" type="text/css" href="main-style.css" />
<link rel="stylesheet" type="text/css" href="/_style/d3rheader.css" />
<script src="/_script/jquery-3.0.0.min.js"></script>
</head>
<body>

<?php  include('../d3rheader.php'); ?>

<div id="main">

<div class="centered"><h2>Diablo 3: Reaper of Souls - Seasons Overview</h2></div>

<br />

<span class="subtitle">Click "customize" at the bottom to hide certain seasons.</span>

<br /><br /><br />

<div id="tablediv">
<table class="difftable">
	<tr class="difftable">
		<td class="difftable top left">Season</td>
		<td class="difftable top diff col-s01">Season 1</td>
		<td class="difftable top diff col-s02">Season 2</td>
		<td class="difftable top diff col-s03">Season 3</td>
		<td class="difftable top diff col-s04">Season 4</td>
		<td class="difftable top diff col-s05">Season 5</td>
		<td class="difftable top diff col-s06">Season 6</td>
		<td class="difftable top diff col-s07">Season 7</td>
		<td class="difftable top diff col-s08">Season 8</td>
		<td class="difftable top diff col-s09">Season 9</td>
		<td class="difftable top diff col-s10">Season 10</td>
		<td class="difftable top diff col-s11">Season 11</td>
		<td class="difftable top diff col-s12">Season 12</td>
		<td class="difftable top diff col-s13">Season 13</td>
		<td class="difftable top diff col-s14">Season 14</td>
		<td class="difftable top diff col-s15">Season 15</td>
		<td class="difftable top diff col-s16">Season 16</td>
		<td class="difftable top diff col-s17">Season 17</td>
		<td class="difftable top diff col-s18">Season 18</td>
		<td class="difftable top diff col-s19">Season 19</td>
		<td class="difftable top diff col-s20">Season 20</td>
		<td class="difftable top diff col-s21">Season 21</td>
		<td class="difftable top diff col-s22">Season 22</td>
		<td class="difftable top diff col-s23">Season 23</td>
		<td class="difftable top diff col-s24">Season 24</td>
		<td class="difftable top diff col-s25">Season 25</td>
		<td class="difftable top diff col-s26">Season 26</td>
		<td class="difftable top diff col-s27">Season 27</td>
		<td class="difftable top diff col-s28">Season 28</td>
		<td class="difftable top diff col-s29">Season 29</td>
		<td class="difftable top diff col-s30">Season 30</td>
		<td class="difftable top diff col-s31">Season 31</td>
		<td class="difftable top diff col-s32">Season 32</td>
		<td class="difftable top diff col-s33">Season 33</td>
		<td class="difftable top diff col-s34">Season 34</td>
		<td class="difftable top diff col-s35">Season 35</td>
		<td class="difftable top diff col-s36">Season 36</td>
		<td class="difftable top right">Season</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Start date</td>
		<td class="difftable col-s01">29 Aug 2014</td>
		<td class="difftable col-s02">13 Feb 2015</td>
		<td class="difftable col-s03">10 Apr 2015</td>
		<td class="difftable col-s04">28 Aug 2015</td>
		<td class="difftable col-s05">15 Jan 2016</td>
		<td class="difftable col-s06">29 Apr 2016</td>
		<td class="difftable col-s07">05 Aug 2016</td>
		<td class="difftable col-s08">21 Oct 2016</td>
		<td class="difftable col-s09">06 Jan 2017</td>
		<td class="difftable col-s10">31 Mar 2017</td>
		<td class="difftable col-s11">20 Jul 2017</td>
		<td class="difftable col-s12">09 Nov 2017</td>
		<td class="difftable col-s13">23 Feb 2018</td>
		<td class="difftable col-s14">15 Jun 2018</td>
		<td class="difftable col-s15">21 Sep 2018</td>
		<td class="difftable col-s16">18 Jan 2019</td>
		<td class="difftable col-s17">17 May 2019</td>
		<td class="difftable col-s18">23 Aug 2019</td>
		<td class="difftable col-s19">22 Nov 2019</td>
		<td class="difftable col-s20">13 Mar 2020</td>
		<td class="difftable col-s21">03 Jul 2020</td>
		<td class="difftable col-s22">20 Nov 2020</td>
		<td class="difftable col-s23">02 Apr 2021</td>
		<td class="difftable col-s24">23 Jul 2021</td>
		<td class="difftable col-s25">10 Dec 2021</td>
		<td class="difftable col-s26">15 Apr 2022</td>
		<td class="difftable col-s27">26 Aug 2022</td>
		<td class="difftable col-s28">24 Feb 2023</td>
		<td class="difftable col-s29">15 Sep 2023</td>
		<td class="difftable col-s30">12 Jan 2024</td>
		<td class="difftable col-s31">12 Apr 2024</td>
		<td class="difftable col-s32">12 Jul 2024</td>
		<td class="difftable col-s33">25 Oct 2024</td>
		<td class="difftable col-s34">31 Jan 2025</td>
		<td class="difftable col-s35">05 Jun 2025</td>
		<td class="difftable col-s36">12 Sep 2025</td>
		<td class="difftable right">Start date</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">End date</td>
		<td class="difftable col-s01">03 Feb 2015</td>
		<td class="difftable col-s02">05 Apr 2015</td>
		<td class="difftable col-s03">23 Aug 2015</td>
		<td class="difftable col-s04">30 Dec 2015</td>
		<td class="difftable col-s05">15 Apr 2016</td>
		<td class="difftable col-s06">22 Jul 2016</td>
		<td class="difftable col-s07">14 Oct 2016</td>
		<td class="difftable col-s08">30 Dec 2016</td>
		<td class="difftable col-s09">17 Mar 2017</td>
		<td class="difftable col-s10">23 Jun 2017</td>
		<td class="difftable col-s11">20 Oct 2017</td>
		<td class="difftable col-s12">11 Feb 2018</td>
		<td class="difftable col-s13">03 Jun 2018</td>
		<td class="difftable col-s14">16 Sep 2018</td>
		<td class="difftable col-s15">06 Jan 2019</td>
		<td class="difftable col-s16">12 May 2019</td>
		<td class="difftable col-s17">18 Aug 2019</td>
		<td class="difftable col-s18">10 Nov 2019</td>
		<td class="difftable col-s19">01 Mar 2020</td>
		<td class="difftable col-s20">21 Jun 2020</td>
		<td class="difftable col-s21">06 Nov 2020</td>
		<td class="difftable col-s22">28 Mar 2021</td>
		<td class="difftable col-s23">18 Jul 2021</td>
		<td class="difftable col-s24">05 Dec 2021</td>
		<td class="difftable col-s25">10 Apr 2022</td>
		<td class="difftable col-s26">21 Aug 2022</td>
		<td class="difftable col-s27">19 Feb 2023</td>
		<td class="difftable col-s28">10 Sep 2023</td>
		<td class="difftable col-s29">07 Jan 2024</td>
		<td class="difftable col-s30">07 Apr 2024</td>
		<td class="difftable col-s31">07 Jul 2024</td>
		<td class="difftable col-s32">20 Oct 2024</td>
		<td class="difftable col-s33">19 Jan 2025</td>
		<td class="difftable col-s34">01 Jun 2025</td>
		<td class="difftable col-s35">07 Sep 2025</td>
		<td class="difftable col-s36">???</td>
		<td class="difftable right">End date</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Duration</td>
		<td class="difftable col-s01">159 days</td>
		<td class="difftable col-s02">52 days</td>
		<td class="difftable col-s03">136 days</td>
		<td class="difftable col-s04">125 days</td>
		<td class="difftable col-s05">92 days</td>
		<td class="difftable col-s06">85 days</td>
		<td class="difftable col-s07">70 days</td>
		<td class="difftable col-s08">70 days</td>
		<td class="difftable col-s09">70 days</td>
		<td class="difftable col-s10">85 days</td>
		<td class="difftable col-s11">92 days</td>
		<td class="difftable col-s12">94 days</td>
		<td class="difftable col-s13">100 days</td>
		<td class="difftable col-s14">93 days</td>
		<td class="difftable col-s15">107 days</td>
		<td class="difftable col-s16">114 days</td>
		<td class="difftable col-s17">93 days</td>
		<td class="difftable col-s18">79 days</td>
		<td class="difftable col-s19">100 days</td>
		<td class="difftable col-s20">100 days</td>
		<td class="difftable col-s21">126 days</td>
		<td class="difftable col-s22">128 days</td>
		<td class="difftable col-s23">107 days</td>
		<td class="difftable col-s24">135 days</td>
		<td class="difftable col-s25">121 days</td>
		<td class="difftable col-s26">128 days</td>
		<td class="difftable col-s27">177 days</td>
		<td class="difftable col-s28">198 days</td>
		<td class="difftable col-s29">114 days</td>
		<td class="difftable col-s30">86 days</td>
		<td class="difftable col-s31">86 days</td>
		<td class="difftable col-s32">100 days</td>
		<td class="difftable col-s33">86 days</td>
		<td class="difftable col-s34">121 days</td>
		<td class="difftable col-s35">94 days</td>
		<td class="difftable col-s36">???</td>
		<td class="difftable right">Duration</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Patch</td>
		<td class="difftable col-s01"><small><a href="https://us.battle.net/d3/en/blog/15487814/patch-210-now-live-8-26-2014" target="_blank">2.1.0</a>, <a href="https://us.battle.net/d3/en/blog/16043922/patch-211-now-live-9-23-2014" target="_blank">2.1.1</a>, <a href="https://us.battle.net/d3/en/blog/17561388/patch-212-now-live-1-13-2015" target="_blank">2.1.2</a></small></td>
		<td class="difftable col-s02"><a href="https://us.battle.net/d3/en/blog/17561388/patch-212-now-live-1-13-2015" target="_blank">2.1.2</a></td>
		<td class="difftable col-s03"><a href="https://us.battle.net/d3/en/blog/18642492/patch-220-now-live-4-7-2015" target="_blank">2.2.0</a></td>
		<td class="difftable col-s04"><a href="https://us.battle.net/d3/en/blog/19859662/patch-230-now-live-8-25-2015" target="_blank">2.3.0</a></td>
		<td class="difftable col-s05"><a href="https://us.battle.net/d3/en/blog/19998542/patch-240-now-live-1-12-2016" target="_blank">2.4.0</a></td>
		<td class="difftable col-s06"><a href="https://us.battle.net/d3/en/blog/20099649/patch-241-now-live-4-26-2016" target="_blank">2.4.1</a></td>
		<td class="difftable col-s07"><a href="https://us.battle.net/d3/en/blog/20210379/patch-242-now-live-8-2-2016" target="_blank">2.4.2</a></td>
		<td class="difftable col-s08"><a href="https://us.battle.net/d3/en/blog/20210379/patch-242-now-live-8-2-2016" target="_blank">2.4.2</a></td>
		<td class="difftable col-s09"><a href="https://us.battle.net/d3/en/blog/20426802/patch-243-now-live-1-4-2017" target="_blank">2.4.3</a></td>
		<td class="difftable col-s10"><a href="https://us.battle.net/d3/en/blog/20635663/patch-250-now-live-3-21-2017" target="_blank">2.5.0</a></td>
		<td class="difftable col-s11"><a href="https://us.battle.net/d3/en/blog/20845163/patch-260-now-live-6-27-2017" target="_blank">2.6.0</a></td>
		<td class="difftable col-s12"><a href="https://us.battle.net/d3/en/blog/21115840/patch-261-now-live-10-24-2017" target="_blank">2.6.1</a></td>
		<td class="difftable col-s13"><a href="https://us.battle.net/d3/en/blog/21115840/patch-261-now-live-10-24-2017" target="_blank">2.6.1</a></td>
		<td class="difftable col-s14"><a href="https://us.battle.net/d3/en/blog/21115840/patch-261-now-live-10-24-2017" target="_blank">2.6.1</a></td>
		<td class="difftable col-s15"><a href="https://us.battle.net/d3/en/blog/21115840/patch-261-now-live-10-24-2017" target="_blank">2.6.1</a></td>
		<td class="difftable col-s16"><a href="https://us.diablo3.com/en/blog/22863534/patch-264-now-live-1-15-2019" target="_blank">2.6.4</a></td>
		<td class="difftable col-s17"><a href="https://us.diablo3.com/en/blog/22989462/patch-265-now-live-5-14-2019" target="_blank">2.6.5</a></td>
		<td class="difftable col-s18"><a href="https://us.diablo3.com/en/blog/23093788/patch-266-is-now-live-8-20-2019" target="_blank">2.6.6</a></td>
		<td class="difftable col-s19"><a href="https://us.diablo3.com/en/blog/23220967/patch-267-now-live-11-12-2019" target="_blank">2.6.7</a></td>
		<td class="difftable col-s20"><a href="https://us.diablo3.com/en/blog/23319443/patch-268-now-live-3-3-2020" target="_blank">2.6.8</a></td>
		<td class="difftable col-s21"><a href="https://us.diablo3.com/en/blog/23420227/patch-269-ptr-has-ended-5-28-2020" target="_blank">2.6.9</a></td>
		<td class="difftable col-s22"><a href="https://eu.diablo3.com/en-us/blog/23548757/season-22-shades-of-the-nephalem-patch-2610-now-live-11-6-2020" target="_blank">2.6.10</a></td>
		<td class="difftable col-s23"><a href="https://us.diablo3.com/en-us/blog/23623166" target="_blank">2.7.0</a></td>
		<td class="difftable col-s24"><a href="https://eu.diablo3.com/en-us/blog/23695733/season-24-%7C-ethereal-memory-%7C-preview-blog-7-9-2021" target="_blank">2.7.1</a></td>
		<td class="difftable col-s25"><a href="https://news.blizzard.com/en-us/diablo3/23746130/season-25-the-lords-of-hell-ending-soon" target="_blank">2.7.2</a></td>
		<td class="difftable col-s26"><a href="https://news.blizzard.com/en-us/diablo3/23730897/diablo-3-ptr-2-7-2-has-ended" target="_blank">2.7.3</a></td>
		<td class="difftable col-s27"><a href="https://news.blizzard.com/en-us/diablo3/23816414/season-27-light-s-calling-preview" target="_blank">2.7.4</a></td>
		<td class="difftable col-s28"><a href="https://us.diablo3.blizzard.com/en-us/blog/23893119" target="_blank">2.7.5</a></td>
		<td class="difftable col-s29"><a href="https://us.diablo3.blizzard.com/en-us/blog/23987087" target="_blank">2.7.6</a></td>
		<td class="difftable col-s30"><a href="https://us.diablo3.blizzard.com/en-us/blog/24046224/season-30-the-lords-of-hell-preview-1-5-2024" target="_blank">2.7.7</a></td>
		<td class="difftable col-s31"><a href="https://news.blizzard.com/en-us/diablo3/24078323/season-31-season-of-the-forbidden-archives-preview" target="_blank">2.7.7</a></td>
		<td class="difftable col-s32"><a href="https://us.diablo3.blizzard.com/en-us/blog/24104599/season-32-ethereal-memory-preview-6-28-2024" target="_blank">2.7.7</a></td>
		<td class="difftable col-s33"><a href="https://news.blizzard.com/en-us/diablo3/24137819/season-33-shades-of-the-nephalem-preview" target="_blank">2.7.8</a></td>
		<td class="difftable col-s34"><a href="https://news.blizzard.com/en-us/article/24166297/season-34-lights-calling-preview" target="_blank">2.7.8</a></td>
		<td class="difftable col-s35"><a href="https://news.blizzard.com/en-us/article/24191146/season-35-eternal-conflict-preview" target="_blank">2.7.8</a></td>
		<td class="difftable col-s36"><a href="https://news.blizzard.com/en-gb/article/24231417/season-36-the-lords-of-hell-preview" target="_blank">2.7.8</a></td>
		<td class="difftable right">Patch</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Season theme</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">-</td>
		<td class="difftable col-s04">-</td>
		<td class="difftable col-s05">-</td>
		<td class="difftable col-s06">-</td>
		<td class="difftable col-s07">-</td>
		<td class="difftable col-s08">-</td>
		<td class="difftable col-s09">-</td>
		<td class="difftable col-s10">-</td>
		<td class="difftable col-s11">-</td>
		<td class="difftable col-s12">-</td>
		<td class="difftable col-s13">-</td>
		<td class="difftable col-s14">Greed</td>
		<td class="difftable col-s15"><small>Horadrim Boon</small></td>
		<td class="difftable col-s16">Grandeur</td>
		<td class="difftable col-s17">LoN</td>
		<td class="difftable col-s18">Triune</td>
		<td class="difftable col-s19"><small>Eternal Confl.</small></td>
		<td class="difftable col-s20"><small>Forb. Archives</small></td>
		<td class="difftable col-s21"><small>Trials o/t Temp.</small></td>
		<td class="difftable col-s22"><small>Shades o/t Neph.</small></td>
		<td class="difftable col-s23"><small>Disc. of Sanct.</small></td>
		<td class="difftable col-s24"><small>Eth. Memory</small></td>
		<td class="difftable col-s25"><small>Soul Shards</small></td>
		<td class="difftable col-s26"><small>Echoing Nightm.</small></td>
		<td class="difftable col-s27"><small>Light's Calling</small></td>
		<td class="difftable col-s28"><small>Rites of Sanct.</small></td>
		<td class="difftable col-s29"><small>Vis. of Enmity</small></td>
		<td class="difftable col-s30"><small>Lords of Hell</small></td>
		<td class="difftable col-s31"><small>Forb. Archives</small></td>
		<td class="difftable col-s32"><small>Eth. Memory</small></td>
		<td class="difftable col-s33"><small>Shades o/t Neph.</small></td>
		<td class="difftable col-s34"><small>Light's Calling</small></td>
		<td class="difftable col-s35"><small>Eternal Conflict</small></td>
		<td class="difftable col-s36"><small>Lords of Hell</small></td>
		<td class="difftable right">Season theme</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">PTR</td>
		<td class="difftable col-s01">(Multiple)</td>
		<td class="difftable col-s02">(no PTR)</td>
		<td class="difftable col-s03"><a href="http://www.diablofans.com/blizz-tracker/topic/58696-patch-2-2-0-ptr-now-available" target="_blank">26 Feb 2015</a></td>
		<td class="difftable col-s04"><a href="http://www.diablofans.com/news/48457-2-3-0-ptr-patch-notes-are-live" target="_blank">30 Jun 2015</a></td>
		<td class="difftable col-s05"><a href="http://www.diablofans.com/blizz-tracker/topic/60870-patch-2-4-0-ptr-now-available" target="_blank">11 Nov 2015</a></td>
		<td class="difftable col-s06"><a href="http://www.diablofans.com/news/48672-ptr-2-4-1-now-available-patch-notes" target="_blank">8 Mar 2016</a></td>
		<td class="difftable col-s07"><a href="http://www.diablofans.com/news/48765-new-ptr-patch-datamined-2-4-2-build-38044" target="_blank">28 Jun 2016</a></td>
		<td class="difftable col-s08">(no PTR)</td>
		<td class="difftable col-s09"><a href="http://www.diablofans.com/news/48843-ptr-patch-2-4-3-datamined-and-patchnotes" target="_blank">8 Nov 2016</a></td>
		<td class="difftable col-s10"><a href="http://www.diablofans.com/news/48867-patch-2-5-0-ptr-notes-now-live" target="_blank">1 Feb 2017</a></td>
		<td class="difftable col-s11"><a href="http://www.diablofans.com/news/48888-ptr-patch-2-6-0" target="_blank">11 Apr 2017</a></td>
		<td class="difftable col-s12"><a href="http://www.diablofans.com/news/48928-patch-2-6-1-ptr-notes-new-items-and-significant" target="_blank">15 Aug 2017</a></td>
		<td class="difftable col-s13">(no PTR)</td>
		<td class="difftable col-s14">(no PTR)</td>
		<td class="difftable col-s15">(no PTR)</td>
		<td class="difftable col-s16"><a href="https://www.reddit.com/r/diablo3/comments/9z9v4e/264_ptr_is_live_as_of_900am/" target="_blank">22 Nov 2018</a></td>
		<td class="difftable col-s17"><a href="https://www.reddit.com/r/Diablo/comments/b9umxs/patch_265_ptr_is_now_live/" target="_blank">5 Apr 2019</a></td>
		<td class="difftable col-s18"><a href="https://www.diablofans.com/news/49115-patch-2-6-6-ptr-now-available" target="_blank">25 Jul 2019</a></td>
		<td class="difftable col-s19"><a href="https://www.diablofans.com/news/49133-patch-2-6-7-season-19-preview" target="_blank">19 Oct 2019</a></td>
		<td class="difftable col-s20"><a href="https://www.diablofans.com/news/49177-patch-2-6-8-ptr-begins-2-6" target="_blank">06 Feb 2020</a></td>
		<td class="difftable col-s21"><a href="https://www.diablofans.com/news/49206-patch-2-6-9-ptr-begins-5-28" target="_blank">28 May 2020</a></td>
		<td class="difftable col-s22"><a href="https://www.diablofans.com/news/49229-ptr-for-patch-2-6-10-begins-october-1" target="_blank">01 Oct 2020</a></td>
		<td class="difftable col-s23"><a href="https://www.diablofans.com/news/49319-diablo-3-ptr-2-7-0-preview" target="_blank">23 Feb 2021</a></td>
		<td class="difftable col-s24"><a href="https://www.diablofans.com/news/49473-diablo-iii-ptr-2-7-1-preview-blog" target="_blank">10 Jun 2021</a></td>
		<td class="difftable col-s25"><a href="https://www.diablofans.com/news/49753-diablo-3-ptr-2-7-2-updated-november-12th" target="_blank">01 Nov 2021</a></td>
		<td class="difftable col-s26"><a href="https://www.diablofans.com/news/50069-diablo-3-ptr-2-7-3-updated" target="_blank">07 Mar 2022</a></td>
		<td class="difftable col-s27"><a href="https://www.diablofans.com/news/50215-diablo-iii-ptr-2-7-4-preview" target="_blank">12 Jul 2022</a></td>
		<td class="difftable col-s28"><a href="https://www.diablofans.com/news/50431-diablo-iii-ptr-2-7-5-preview" target="_blank">31 Jan 2023</a></td>
		<td class="difftable col-s29"><a href="https://us.diablo3.blizzard.com/en-us/blog/23987087" target="_blank">15 Aug 2023</a></td>
		<td class="difftable col-s30"><a href="https://www.diablofans.com/news/50798-diablo-iii-ptr-2-7-7-now-live" target="_blank">7 Dec 2023</a></td>
		<td class="difftable col-s31">(no PTR)</td>
		<td class="difftable col-s32">(no PTR)</td>
		<td class="difftable col-s33"><a href="https://us.diablo3.blizzard.com/en-us/blog/24135096/diablo-iii-ptr-278-has-concluded-9-13-2024" target="_blank">19 Sep 2024</a></td>
		<td class="difftable col-s34">(no PTR)</td>
		<td class="difftable col-s35">(no PTR)</td>
		<td class="difftable col-s36">(no PTR)</td>
		<td class="difftable right">PTR</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">PTR lead time</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">43 days</td>
		<td class="difftable col-s04">59 days</td>
		<td class="difftable col-s05">65 days</td>
		<td class="difftable col-s06">52 days</td>
		<td class="difftable col-s07">38 days</td>
		<td class="difftable col-s08">-</td>
		<td class="difftable col-s09">59 days</td>
		<td class="difftable col-s10">58 days</td>
		<td class="difftable col-s11">100 days</td>
		<td class="difftable col-s12">86 days</td>
		<td class="difftable col-s13">-</td>
		<td class="difftable col-s14">-</td>
		<td class="difftable col-s15">-</td>
		<td class="difftable col-s16">46 days</td>
		<td class="difftable col-s17">42 days</td>
		<td class="difftable col-s18">29 days</td>
		<td class="difftable col-s19">34 days</td>
		<td class="difftable col-s20">36 days</td>
		<td class="difftable col-s21">36 days</td>
		<td class="difftable col-s22">36 days</td>
		<td class="difftable col-s23">38 days</td>
		<td class="difftable col-s24">43 days</td>
		<td class="difftable col-s25">39 days</td>
		<td class="difftable col-s26">35 days</td>
		<td class="difftable col-s27">45 days</td>
		<td class="difftable col-s28">24 days</td>
		<td class="difftable col-s29">31 days</td>
		<td class="difftable col-s30">36 days</td>
		<td class="difftable col-s31">-</td>
		<td class="difftable col-s32">-</td>
		<td class="difftable col-s33">36 days</td>
		<td class="difftable col-s34">-</td>
		<td class="difftable col-s35">-</td>
		<td class="difftable col-s36">-</td>
		<td class="difftable right">PTR lead time</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Barb. free set</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">-</td>
		<td class="difftable col-s04">-</td>
		<td class="difftable col-s05">Earth</td>
		<td class="difftable col-s06">Raekor</td>
		<td class="difftable col-s07">Wastes</td>
		<td class="difftable col-s08">IK</td>
		<td class="difftable col-s09">Earth</td>
		<td class="difftable col-s10">Raekor</td>
		<td class="difftable col-s11">Wastes</td>
		<td class="difftable col-s12">IK</td>
		<td class="difftable col-s13">Earth</td>
		<td class="difftable col-s14">Raekor</td>
		<td class="difftable col-s15">Wastes</td>
		<td class="difftable col-s16">IK</td>
		<td class="difftable col-s17">Earth</td>
		<td class="difftable col-s18">Raekor</td>
		<td class="difftable col-s19">Wastes</td>
		<td class="difftable col-s20">IK</td>
		<td class="difftable col-s21">Earth</td>
		<td class="difftable col-s22">Savages</td>
		<td class="difftable col-s23">Wastes</td>
		<td class="difftable col-s24">IK</td>
		<td class="difftable col-s25">Earth</td>
		<td class="difftable col-s26">Raekor</td>
		<td class="difftable col-s27">Wastes</td>
		<td class="difftable col-s28">Savages</td>
		<td class="difftable col-s29">Earth</td>
		<td class="difftable col-s30">Raekor</td>
		<td class="difftable col-s31">Wastes</td>
		<td class="difftable col-s32">IK</td>
		<td class="difftable col-s33">Earth</td>
		<td class="difftable col-s34">Savages</td>
		<td class="difftable col-s35">Wastes</td>
		<td class="difftable col-s36">Raekor</td>
		<td class="difftable right">Barb. free set</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Crus. free set</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">-</td>
		<td class="difftable col-s04">-</td>
		<td class="difftable col-s05">Invoker</td>
		<td class="difftable col-s06">Akkhan</td>
		<td class="difftable col-s07">Roland</td>
		<td class="difftable col-s08">Light</td>
		<td class="difftable col-s09">Invoker</td>
		<td class="difftable col-s10">Akkhan</td>
		<td class="difftable col-s11">Roland</td>
		<td class="difftable col-s12">Light</td>
		<td class="difftable col-s13">Invoker</td>
		<td class="difftable col-s14">Akkhan</td>
		<td class="difftable col-s15">Roland</td>
		<td class="difftable col-s16">Light</td>
		<td class="difftable col-s17">Invoker</td>
		<td class="difftable col-s18">Akkhan</td>
		<td class="difftable col-s19">Roland</td>
		<td class="difftable col-s20">Light</td>
		<td class="difftable col-s21">Invoker</td>
		<td class="difftable col-s22">Valor</td>
		<td class="difftable col-s23">Roland</td>
		<td class="difftable col-s24">Light</td>
		<td class="difftable col-s25">Invoker</td>
		<td class="difftable col-s26">Akkhan</td>
		<td class="difftable col-s27">Roland</td>
		<td class="difftable col-s28">Valor</td>
		<td class="difftable col-s29">Invoker</td>
		<td class="difftable col-s30">Akkhan</td>
		<td class="difftable col-s31">Roland</td>
		<td class="difftable col-s32">Light</td>
		<td class="difftable col-s33">Invoker</td>
		<td class="difftable col-s34">Valor</td>
		<td class="difftable col-s35">Roland</td>
		<td class="difftable col-s36">Akkhan</td>
		<td class="difftable right">Crus. free set</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">DH free set</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">-</td>
		<td class="difftable col-s04">-</td>
		<td class="difftable col-s05">Shadow</td>
		<td class="difftable col-s06">Marauder</td>
		<td class="difftable col-s07">UE</td>
		<td class="difftable col-s08">Natalya</td>
		<td class="difftable col-s09">Shadow</td>
		<td class="difftable col-s10">Marauder</td>
		<td class="difftable col-s11">UE</td>
		<td class="difftable col-s12">Natalya</td>
		<td class="difftable col-s13">Shadow</td>
		<td class="difftable col-s14">Marauder</td>
		<td class="difftable col-s15">UE</td>
		<td class="difftable col-s16">Natalya</td>
		<td class="difftable col-s17">Shadow</td>
		<td class="difftable col-s18">Marauder</td>
		<td class="difftable col-s19">UE</td>
		<td class="difftable col-s20">Natalya</td>
		<td class="difftable col-s21">Shadow</td>
		<td class="difftable col-s22">GoD</td>
		<td class="difftable col-s23">UE</td>
		<td class="difftable col-s24">Natalya</td>
		<td class="difftable col-s25">Shadow</td>
		<td class="difftable col-s26">Marauder</td>
		<td class="difftable col-s27">UE</td>
		<td class="difftable col-s28">GoD</td>
		<td class="difftable col-s29">Shadow</td>
		<td class="difftable col-s30">Marauder</td>
		<td class="difftable col-s31">UE</td>
		<td class="difftable col-s32">Natalya</td>
		<td class="difftable col-s33">Shadow</td>
		<td class="difftable col-s34">GoD</td>
		<td class="difftable col-s35">UE</td>
		<td class="difftable col-s36">Marauder</td>
		<td class="difftable right">DH free set</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Monk free set</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">-</td>
		<td class="difftable col-s04">-</td>
		<td class="difftable col-s05">Sunwuko</td>
		<td class="difftable col-s06">Inna</td>
		<td class="difftable col-s07">Raiment</td>
		<td class="difftable col-s08">Uliana</td>
		<td class="difftable col-s09">Sunwuko</td>
		<td class="difftable col-s10">Inna</td>
		<td class="difftable col-s11">Raiment</td>
		<td class="difftable col-s12">Uliana</td>
		<td class="difftable col-s13">Sunwuko</td>
		<td class="difftable col-s14">Inna</td>
		<td class="difftable col-s15">Raiment</td>
		<td class="difftable col-s16">Uliana</td>
		<td class="difftable col-s17">Sunwuko</td>
		<td class="difftable col-s18">Inna</td>
		<td class="difftable col-s19">Raiment</td>
		<td class="difftable col-s20">Uliana</td>
		<td class="difftable col-s21">Sunwuko</td>
		<td class="difftable col-s22">Justice</td>
		<td class="difftable col-s23">Raiment</td>
		<td class="difftable col-s24">Uliana</td>
		<td class="difftable col-s25">Sunwuko</td>
		<td class="difftable col-s26">Inna</td>
		<td class="difftable col-s27">Raiment</td>
		<td class="difftable col-s28">Justice</td>
		<td class="difftable col-s29">Sunwuko</td>
		<td class="difftable col-s30">Inna</td>
		<td class="difftable col-s31">Raiment</td>
		<td class="difftable col-s32">Uliana</td>
		<td class="difftable col-s33">Sunwuko</td>
		<td class="difftable col-s34">Justice</td>
		<td class="difftable col-s35">Raiment</td>
		<td class="difftable col-s36">Inna</td>
		<td class="difftable right">Monk free set</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Necro free set</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">-</td>
		<td class="difftable col-s04">-</td>
		<td class="difftable col-s05">-</td>
		<td class="difftable col-s06">-</td>
		<td class="difftable col-s07">-</td>
		<td class="difftable col-s08">-</td>
		<td class="difftable col-s09">-</td>
		<td class="difftable col-s10">-</td>
		<td class="difftable col-s11">Rathma</td>
		<td class="difftable col-s12">Trag'Oul</td>
		<td class="difftable col-s13">Inarius</td>
		<td class="difftable col-s14">Pest.</td>
		<td class="difftable col-s15">Rathma</td>
		<td class="difftable col-s16">Trag'Oul</td>
		<td class="difftable col-s17">Inarius</td>
		<td class="difftable col-s18">Pest.</td>
		<td class="difftable col-s19">Rathma</td>
		<td class="difftable col-s20">Trag'Oul</td>
		<td class="difftable col-s21">Inarius</td>
		<td class="difftable col-s22">Carnival</td>
		<td class="difftable col-s23">Rathma</td>
		<td class="difftable col-s24">Trag'Oul</td>
		<td class="difftable col-s25">Inarius</td>
		<td class="difftable col-s26">Pest.</td>
		<td class="difftable col-s27">Rathma</td>
		<td class="difftable col-s28">Carnival</td>
		<td class="difftable col-s29">Inarius</td>
		<td class="difftable col-s30">Pest.</td>
		<td class="difftable col-s31">Rathma</td>
		<td class="difftable col-s32">Trag'Oul</td>
		<td class="difftable col-s33">Inarius</td>
		<td class="difftable col-s34">Carnival</td>
		<td class="difftable col-s35">Rathma</td>
		<td class="difftable col-s36">Pest.</td>
		<td class="difftable right">Necro free set</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">WD free set</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">-</td>
		<td class="difftable col-s04">-</td>
		<td class="difftable col-s05">Jade</td>
		<td class="difftable col-s06">Zuni</td>
		<td class="difftable col-s07">Helltooth</td>
		<td class="difftable col-s08">Arachyr</td>
		<td class="difftable col-s09">Jade</td>
		<td class="difftable col-s10">Zuni</td>
		<td class="difftable col-s11">Helltooth</td>
		<td class="difftable col-s12">Arachyr</td>
		<td class="difftable col-s13">Jade</td>
		<td class="difftable col-s14">Zuni</td>
		<td class="difftable col-s15">Helltooth</td>
		<td class="difftable col-s16">Arachyr</td>
		<td class="difftable col-s17">Jade</td>
		<td class="difftable col-s18">Zuni</td>
		<td class="difftable col-s19">Helltooth</td>
		<td class="difftable col-s20">Arachyr</td>
		<td class="difftable col-s21">Jade</td>
		<td class="difftable col-s22">Mundunugu</td>
		<td class="difftable col-s23">Helltooth</td>
		<td class="difftable col-s24">Arachyr</td>
		<td class="difftable col-s25">Jade</td>
		<td class="difftable col-s26">Zuni</td>
		<td class="difftable col-s27">Helltooth</td>
		<td class="difftable col-s28">Mundunugu</td>
		<td class="difftable col-s29">Jade</td>
		<td class="difftable col-s30">Zuni</td>
		<td class="difftable col-s31">Helltooth</td>
		<td class="difftable col-s32">Arachyr</td>
		<td class="difftable col-s33">Jade</td>
		<td class="difftable col-s34">Mundunugu</td>
		<td class="difftable col-s35">Helltooth</td>
		<td class="difftable col-s36">Zuni</td>
		<td class="difftable right">WD free set</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Wizard free set</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">-</td>
		<td class="difftable col-s04">-</td>
		<td class="difftable col-s05">Firebird</td>
		<td class="difftable col-s06">DMO</td>
		<td class="difftable col-s07">Tal Rasha</td>
		<td class="difftable col-s08">Vyr</td>
		<td class="difftable col-s09">Firebird</td>
		<td class="difftable col-s10">DMO</td>
		<td class="difftable col-s11">Tal Rasha</td>
		<td class="difftable col-s12">Vyr</td>
		<td class="difftable col-s13">Firebird</td>
		<td class="difftable col-s14">DMO</td>
		<td class="difftable col-s15">Tal Rasha</td>
		<td class="difftable col-s16">Vyr</td>
		<td class="difftable col-s17">Firebird</td>
		<td class="difftable col-s18">DMO</td>
		<td class="difftable col-s19">Tal Rasha</td>
		<td class="difftable col-s20">Vyr</td>
		<td class="difftable col-s21">Firebird</td>
		<td class="difftable col-s22">Typhon's</td>
		<td class="difftable col-s23">Tal Rasha</td>
		<td class="difftable col-s24">Vyr</td>
		<td class="difftable col-s25">Firebird</td>
		<td class="difftable col-s26">DMO</td>
		<td class="difftable col-s27">Tal Rasha</td>
		<td class="difftable col-s28">Typhon's</td>
		<td class="difftable col-s29">Firebird</td>
		<td class="difftable col-s30">DMO</td>
		<td class="difftable col-s31">Tal Rasha</td>
		<td class="difftable col-s32">Vyr</td>
		<td class="difftable col-s33">Firebird</td>
		<td class="difftable col-s34">Typhon's</td>
		<td class="difftable col-s35">Tal Rasha</td>
		<td class="difftable col-s36">DMO</td>
		<td class="difftable right">Wizard free set</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Conquest 1</td>
		<td class="difftable col-s01">It's A Marathon</td>
		<td class="difftable col-s02"><small>It's A Marathon</small></td>
		<td class="difftable col-s03"><small>On A Good Day</small></td>
		<td class="difftable col-s04"><small>On A Good Day</small></td>
		<td class="difftable col-s05">Avarice</td>
		<td class="difftable col-s06"><small>On A Good Day</small></td>
		<td class="difftable col-s07"><small>On A Good Day</small></td>
		<td class="difftable col-s08">Boss Mode</td>
		<td class="difftable col-s09">Avarice</td>
		<td class="difftable col-s10"><small>On A Good Day</small></td>
		<td class="difftable col-s11">Boss Mode</td>
		<td class="difftable col-s12">Boss Mode</td>
		<td class="difftable col-s13">Divinity</td>
		<td class="difftable col-s14">Avarice</td>
		<td class="difftable col-s15">Avarice</td>
		<td class="difftable col-s16">Boss Mode</td>
		<td class="difftable col-s17">Avarice</td>
		<td class="difftable col-s18"><small>On A Good Day</small></td>
		<td class="difftable col-s19">Avarice</td>
		<td class="difftable col-s20">Boss Mode</td>
		<td class="difftable col-s21">Avarice</td>
		<td class="difftable col-s22"><small>On A Good Day</small></td>
		<td class="difftable col-s23">Boss Mode</td>
		<td class="difftable col-s24">Boss Mode</td>
		<td class="difftable col-s25">Divinity</td>
		<td class="difftable col-s26">Avarice</td>
		<td class="difftable col-s27">Avarice</td>
		<td class="difftable col-s28">Boss Mode</td>
		<td class="difftable col-s29">Avarice</td>
		<td class="difftable col-s30"><small>On A Good Day</small></td>
		<td class="difftable col-s31"><small>On A Good Day</small></td>
		<td class="difftable col-s32">Boss Mode</td>
		<td class="difftable col-s33">Avarice</td>
		<td class="difftable col-s34"><small>On A Good Day</small></td>
		<td class="difftable col-s35">Boss Mode</td>
		<td class="difftable col-s36">Boss Mode</td>
		<td class="difftable right">Conquest 1</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Conquest 2</td>
		<td class="difftable col-s01">Sprinter</td>
		<td class="difftable col-s02">Sprinter</td>
		<td class="difftable col-s03">Sprinter</td>
		<td class="difftable col-s04">Divinity</td>
		<td class="difftable col-s05">Sprinter</td>
		<td class="difftable col-s06">Divinity</td>
		<td class="difftable col-s07">Divinity</td>
		<td class="difftable col-s08">Divinity</td>
		<td class="difftable col-s09">Sprinter</td>
		<td class="difftable col-s10">Sprinter</td>
		<td class="difftable col-s11">Divinity</td>
		<td class="difftable col-s12"><small>On A Good Day</small></td>
		<td class="difftable col-s13">Sprinter</td>
		<td class="difftable col-s14">Divinity</td>
		<td class="difftable col-s15">Sprinter</td>
		<td class="difftable col-s16"><small>On A Good Day</small></td>
		<td class="difftable col-s17">Sprinter</td>
		<td class="difftable col-s18">Divinity</td>
		<td class="difftable col-s19">Sprinter</td>
		<td class="difftable col-s20">Divinity</td>
		<td class="difftable col-s21">Sprinter</td>
		<td class="difftable col-s22">Sprinter</td>
		<td class="difftable col-s23">Divinity</td>
		<td class="difftable col-s24"><small>On A Good Day</small></td>
		<td class="difftable col-s25">Sprinter</td>
		<td class="difftable col-s26"><small>On A Good Day</small></td>
		<td class="difftable col-s27">Sprinter</td>
		<td class="difftable col-s28"><small>On A Good Day</small></td>
		<td class="difftable col-s29">Sprinter</td>
		<td class="difftable col-s30">Divinity</td>
		<td class="difftable col-s31">Divinity</td>
		<td class="difftable col-s32">Divinity</td>
		<td class="difftable col-s33">Sprinter</td>
		<td class="difftable col-s34">Sprinter</td>
		<td class="difftable col-s35">Divinity</td>
		<td class="difftable col-s36"><small>On A Good Day</small></td>
		<td class="difftable right">Conquest 2</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Conquest 3</td>
		<td class="difftable col-s01">Race To The Top</td>
		<td class="difftable col-s02">Avarice</td>
		<td class="difftable col-s03">Avarice</td>
		<td class="difftable col-s04">The Thrill</td>
		<td class="difftable col-s05">The Thrill</td>
		<td class="difftable col-s06">Curses!</td>
		<td class="difftable col-s07">The Thrill</td>
		<td class="difftable col-s08">Curses!</td>
		<td class="difftable col-s09">Curses!</td>
		<td class="difftable col-s10">Boss Mode</td>
		<td class="difftable col-s11">Avarice</td>
		<td class="difftable col-s12">The Thrill</td>
		<td class="difftable col-s13">The Thrill</td>
		<td class="difftable col-s14"><small>On A Good Day</small></td>
		<td class="difftable col-s15">The Thrill</td>
		<td class="difftable col-s16">Curses!</td>
		<td class="difftable col-s17">The Thrill</td>
		<td class="difftable col-s18">Boss Mode</td>
		<td class="difftable col-s19"><small>On A Good Day</small></td>
		<td class="difftable col-s20">Curses!</td>
		<td class="difftable col-s21">The Thrill</td>
		<td class="difftable col-s22">Boss Mode</td>
		<td class="difftable col-s23">Avarice</td>
		<td class="difftable col-s24">The Thrill</td>
		<td class="difftable col-s25">The Thrill</td>
		<td class="difftable col-s26">Divinity</td>
		<td class="difftable col-s27">The Thrill</td>
		<td class="difftable col-s28">Curses!</td>
		<td class="difftable col-s29">The Thrill</td>
		<td class="difftable col-s30">Boss Mode</td>
		<td class="difftable col-s31">Avarice</td>
		<td class="difftable col-s32">Curses!</td>
		<td class="difftable col-s33">Curses!</td>
		<td class="difftable col-s34">Boss Mode</td>
		<td class="difftable col-s35">Avarice</td>
		<td class="difftable col-s36">The Thrill</td>
		<td class="difftable right">Conquest 3</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Conquest 4</td>
		<td class="difftable col-s01"><small>Now You've Done It</small></td>
		<td class="difftable col-s02">Boss Mode</td>
		<td class="difftable col-s03">The Thrill</td>
		<td class="difftable col-s04">Boss Mode</td>
		<td class="difftable col-s05">Years of War</td>
		<td class="difftable col-s06">Boss Mode</td>
		<td class="difftable col-s07">Avarice</td>
		<td class="difftable col-s08">Years of War</td>
		<td class="difftable col-s09">The Thrill</td>
		<td class="difftable col-s10">Years of War</td>
		<td class="difftable col-s11"><small>Speed Demon</small></td>
		<td class="difftable col-s12">Years of War</td>
		<td class="difftable col-s13">Curses!</td>
		<td class="difftable col-s14"><small>Speed Demon</small></td>
		<td class="difftable col-s15">Boss Mode</td>
		<td class="difftable col-s16">Years of War</td>
		<td class="difftable col-s17">Years of War</td>
		<td class="difftable col-s18"><small>Speed Demon</small></td>
		<td class="difftable col-s19">Divinity</td>
		<td class="difftable col-s20">Years of War</td>
		<td class="difftable col-s21"><small>Speed Demon</small></td>
		<td class="difftable col-s22">Years of War</td>
		<td class="difftable col-s23"><small>Speed Demon</small></td>
		<td class="difftable col-s24">Curses!</td>
		<td class="difftable col-s25">Curses!</td>
		<td class="difftable col-s26"><small>Speed Demon</small></td>
		<td class="difftable col-s27">Boss Mode</td>
		<td class="difftable col-s28">Years of War</td>
		<td class="difftable col-s29">Years of War</td>
		<td class="difftable col-s30"><small>Speed Demon</small></td>
		<td class="difftable col-s31">Sprinter</td>
		<td class="difftable col-s32">Years of War</td>
		<td class="difftable col-s33"><small>Speed Demon</small></td>
		<td class="difftable col-s34">Years of War</td>
		<td class="difftable col-s35"><small>Speed Demon</small></td>
		<td class="difftable col-s36">Curses!</td>
		<td class="difftable right">Conquest 4</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Conquest 5</td>
		<td class="difftable col-s01">Death Gets Got</td>
		<td class="difftable col-s02">Language</td>
		<td class="difftable col-s03">Curses!</td>
		<td class="difftable col-s04"><small>Speed Demon</small></td>
		<td class="difftable col-s05"><small>M. of the Univ.</small></td>
		<td class="difftable col-s06"><small>Speed Demon</small></td>
		<td class="difftable col-s07">Sprinter</td>
		<td class="difftable col-s08"><small>M. of the Univ.</small></td>
		<td class="difftable col-s09"><small>Speed Demon</small></td>
		<td class="difftable col-s10"><small>M. of the Univ.</small></td>
		<td class="difftable col-s11"><small>M. of the Univ.</small></td>
		<td class="difftable col-s12">Curses!</td>
		<td class="difftable col-s13"><small>M. of the Univ.</small></td>
		<td class="difftable col-s14">Years of War</td>
		<td class="difftable col-s15"><small>M. of the Univ.</small></td>
		<td class="difftable col-s16"><small>Speed Demon</small></td>
		<td class="difftable col-s17"><small>M. of the Univ.</small></td>
		<td class="difftable col-s18">Curses!</td>
		<td class="difftable col-s19">The Thrill</td>
		<td class="difftable col-s20"><small>M. of the Univ.</small></td>
		<td class="difftable col-s21">Curses!</td>
		<td class="difftable col-s22"><small>M. of the Univ.</small></td>
		<td class="difftable col-s23"><small>M. of the Univ.</small></td>
		<td class="difftable col-s24">Years of War</td>
		<td class="difftable col-s25"><small>M. of the Univ.</small></td>
		<td class="difftable col-s26">Years of War</td>
		<td class="difftable col-s27"><small>M. of the Univ.</small></td>
		<td class="difftable col-s28"><small>Speed Demon</small></td>
		<td class="difftable col-s29"><small>M. of the Univ.</small></td>
		<td class="difftable col-s30">Curses!</td>
		<td class="difftable col-s31">The Thrill</td>
		<td class="difftable col-s32"><small>M. of the Univ.</small></td>
		<td class="difftable col-s33">The Thrill</td>
		<td class="difftable col-s34"><small>M. of the Univ.</small></td>
		<td class="difftable col-s35"><small>M. of the Univ.</small></td>
		<td class="difftable col-s36">Years of War</td>
		<td class="difftable right">Conquest 5</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Reward: Portrait</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">Diablo</td>
		<td class="difftable col-s04"><small>Dragon Heads</small></td>
		<td class="difftable col-s05">Greyhollow</td>
		<td class="difftable col-s06">Blood Shard</td>
		<td class="difftable col-s07">Frost</td>
		<td class="difftable col-s08">Pentagram</td>
		<td class="difftable col-s09"><small>Pandemonium</small></td>
		<td class="difftable col-s10">Soulstone</td>
		<td class="difftable col-s11"><small>Treasure Goblin</small></td>
		<td class="difftable col-s12">Heaven</td>
		<td class="difftable col-s13">Imperius</td>
		<td class="difftable col-s14">Tal Rasha</td>
		<td class="difftable col-s15"><small>Eternal Conflict</small></td>
		<td class="difftable col-s16"><small>Call to Adv.</small></td>
		<td class="difftable col-s17">Greyhollow</td>
		<td class="difftable col-s18"><small>Blood Shard</small></td>
		<td class="difftable col-s19">Valor</td>
		<td class="difftable col-s20">Teganze</td>
		<td class="difftable col-s21">Industrial</td>
		<td class="difftable col-s22">Lost Civ</td>
		<td class="difftable col-s23"><small>Chopping Block</small></td>
		<td class="difftable col-s24"><small>Terror Resurr.</small></td>
		<td class="difftable col-s25"><small>Pane of Tristram</small></td>
		<td class="difftable col-s26"><small>Rakki's Rememb.</small></td>
		<td class="difftable col-s27"><small>Laurels of Knowl.</small></td>
		<td class="difftable col-s28"><small>Primal Hunter</small></td>
		<td class="difftable col-s29"><small>Mad King's Fav.</small></td>
		<td class="difftable col-s30"><small>Blood Shard</small></td>
		<td class="difftable col-s31">Valor</td>
		<td class="difftable col-s32">Teganze</td>
		<td class="difftable col-s33"><small>Pandemonium</small></td>
		<td class="difftable col-s34">Soulstone</td>
		<td class="difftable col-s35"><small>Chopping Block</small></td>
		<td class="difftable col-s36"><small>Terror Resurr.</small></td>
		<td class="difftable right">Reward: Portrait</td>
	</tr>	
	<tr class="difftable">
		<td class="difftable left">Reward:<br />Cosmetic</td>
		<td class="difftable col-s01">Banner:<br />Eye/Teeth</td>
		<td class="difftable col-s02">Banner:<br />Leaves</td>
		<td class="difftable col-s03">Pennant:<br />Diablo 3</td>
		<td class="difftable col-s04">Pet:<br />Frost Hound</td>
		<td class="difftable col-s05">Pet:<br />Old Growth</td>
		<td class="difftable col-s06">Pennant:<br />Samhain</td>
		<td class="difftable col-s07">Pet:<br /><small>Dream or Piers</small></td>
		<td class="difftable col-s08">Wings:<br /><small>Anguish's Grasp</small></td>
		<td class="difftable col-s09">Pet:<br />Rocky</td>
		<td class="difftable col-s10">Pennant:<br />Cain</td>
		<td class="difftable col-s11">Pet:<br /><small>Emerald Serpent</small></td>
		<td class="difftable col-s12">Wings:<br />Fiacla-Géar</td>
		<td class="difftable col-s13">Pet:<br />Blaine's Bear</td>
		<td class="difftable col-s14">Pennant:<br />Tyrael</td>
		<td class="difftable col-s15">Pet:<br />Belphegor</td>
		<td class="difftable col-s16">Wings:<br /><small>W. of Lempo</small></td>
		<td class="difftable col-s17">Wings:<br /><small>Galactic Wings</small></td>
		<td class="difftable col-s18">Pennant:<br />Samhain</td>
		<td class="difftable col-s19">Pet:<br /><small>Angelic Goblin</small></td>
		<td class="difftable col-s20">Pet:<br />Bat</td>
		<td class="difftable col-s21">Pet: Stup.<br />Contraption</td>
		<td class="difftable col-s22">Pet: Book<br />of Cain</td>
		<td class="difftable col-s23">Pet:<br /><small>Lacuni Cub</small></td>
		<td class="difftable col-s24">Pet: Lesser<br /><small>Mummy Pet</small></td>
		<td class="difftable col-s25">Pet: Dark<br />Lordling</td>
		<td class="difftable col-s26">Pet: Tooths.<br />Trooper<</td>
		<td class="difftable col-s27">Pet: Corvus<br />Cadav.</td>
		<td class="difftable col-s28">Pet: Taenin<br />the Tiny</td>
		<td class="difftable col-s29">Pet: Quoth</td>
		<td class="difftable col-s30">-</td>
		<td class="difftable col-s31">Pet:<br /><small>Angelic Goblin</small></td>
		<td class="difftable col-s32">Pet:<br />Bat</td>
		<td class="difftable col-s33">Pet:<br />Rocky</td>
		<td class="difftable col-s34">Pennant:<br />Loremaster</td>
		<td class="difftable col-s35">Pet:<br /><small>Lacuni Cub</small></td>
		<td class="difftable col-s36">Pet: Lesser<br /><small>Mummy Pet</small></td>
		<td class="difftable right">Reward:<br />Cosmetic</td>
	</tr>
	<!--
	<tr class="difftable">
		<td class="difftable left">Top GR: Barb.</td>
		<td class="difftable col-s01">57 (AS)</td>
		<td class="difftable col-s02">56 (NA)</td>
		<td class="difftable col-s03">67 (NA)</td>
		<td class="difftable col-s04">82 (EU)</td>
		<td class="difftable col-s05">92 (AS)</td>
		<td class="difftable col-s06">98 (EU)</td>
		<td class="difftable col-s07">97 (EU)</td>
		<td class="difftable col-s08">99 (NA)</td>
		<td class="difftable col-s09">100 (NA)</td>
		<td class="difftable col-s10">106 (NA)</td>
		<td class="difftable col-s11">107 (NA)</td>
		<td class="difftable col-s12">121 (EU)</td>
		<td class="difftable col-s13">123 (AS)</td>
		<td class="difftable col-s14">122 (EU)</td>
		<td class="difftable col-s15">122 (AS)</td>
		<td class="difftable col-s16">128 (NA)</td>
		<td class="difftable col-s17">128 (AS)</td>
		<td class="difftable col-s18">130 (NA)</td>
		<td class="difftable col-s19">6:19 (AS)</td>
		<td class="difftable col-s20">145 (AS)</td>
		<td class="difftable col-s21">7:50 (NA)</td>
		<td class="difftable col-s22">13:54 (EU)</td>
		<td class="difftable col-s23">145 (AS)</td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">Top GR: Barb.</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Top GR: Crus.</td>
		<td class="difftable col-s01">51 (NA)</td>
		<td class="difftable col-s02">52 (NA)</td>
		<td class="difftable col-s03">64 (EU)</td>
		<td class="difftable col-s04">74 (EU)</td>
		<td class="difftable col-s05">95 (AS)</td>
		<td class="difftable col-s06">102 (EU)</td>
		<td class="difftable col-s07">103 (NA)</td>
		<td class="difftable col-s08">101 (EU)</td>
		<td class="difftable col-s09">107 (NA)</td>
		<td class="difftable col-s10">108 (NA)</td>
		<td class="difftable col-s11">109 (EU)</td>
		<td class="difftable col-s12">123 (AS)</td>
		<td class="difftable col-s13">125 (AS)</td>
		<td class="difftable col-s14">126 (AS)</td>
		<td class="difftable col-s15">127 (AS)</td>
		<td class="difftable col-s16">131 (AS)</td>
		<td class="difftable col-s17">137 (NA)</td>
		<td class="difftable col-s18">136 (NA)</td>
		<td class="difftable col-s19">6:27 (AS)</td>
		<td class="difftable col-s20">13:41 (AS)</td>
		<td class="difftable col-s21">12:24 (AS)</td>
		<td class="difftable col-s22">7:21 (EU)</td>
		<td class="difftable col-s23">148 (AS)</td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">Top GR: Crus.</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Top GR: DH</td>
		<td class="difftable col-s01">55 (NA)</td>
		<td class="difftable col-s02">54 (NA)</td>
		<td class="difftable col-s03">67 (NA)</td>
		<td class="difftable col-s04">76 (NA)</td>
		<td class="difftable col-s05">92 (EU)</td>
		<td class="difftable col-s06">101 (AS)</td>
		<td class="difftable col-s07">98 (NA)</td>
		<td class="difftable col-s08">100 (NA)</td>
		<td class="difftable col-s09">101 (AS)</td>
		<td class="difftable col-s10">104 (NA)</td>
		<td class="difftable col-s11">108 (EU)</td>
		<td class="difftable col-s12">117 (AS)</td>
		<td class="difftable col-s13">119 (AS)</td>
		<td class="difftable col-s14">118 (NA)</td>
		<td class="difftable col-s15">119 (AS)</td>
		<td class="difftable col-s16">131 (AS)</td>
		<td class="difftable col-s17">135 (EU)</td>
		<td class="difftable col-s18">133 (EU)</td>
		<td class="difftable col-s19">10:13 (AS)</td>
		<td class="difftable col-s20">136 (EU)</td>
		<td class="difftable col-s21">9:22 (AS)</td>
		<td class="difftable col-s22">9:58 (EU)</td>
		<td class="difftable col-s23">142 (AS)</td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">Top GR: DH</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Top GR: Monk</td>
		<td class="difftable col-s01">50 (NA)</td>
		<td class="difftable col-s02">55 (NA)</td>
		<td class="difftable col-s03">64 (EU)</td>
		<td class="difftable col-s04">84 (EU)</td>
		<td class="difftable col-s05">94 (EU)</td>
		<td class="difftable col-s06">98 (EU)</td>
		<td class="difftable col-s07">102 (NA)</td>
		<td class="difftable col-s08">102 (EU)</td>
		<td class="difftable col-s09">103 (EU)</td>
		<td class="difftable col-s10">107 (NA)</td>
		<td class="difftable col-s11">105 (EU)</td>
		<td class="difftable col-s12">119 (EU)</td>
		<td class="difftable col-s13">120 (AS)</td>
		<td class="difftable col-s14">120 (EU)</td>
		<td class="difftable col-s15">121 (AS)</td>
		<td class="difftable col-s16">131 (EU)</td>
		<td class="difftable col-s17">131 (AS)</td>
		<td class="difftable col-s18">131 (EU)</td>
		<td class="difftable col-s19">10:12 (NA)</td>
		<td class="difftable col-s20">141 (EU)</td>
		<td class="difftable col-s21">12:03 (NA)</td>
		<td class="difftable col-s22">14:31 (EU)</td>
		<td class="difftable col-s23">142 (EU)</td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">Top GR: Monk</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Top GR: Necro</td>
		<td class="difftable col-s01">-</td>
		<td class="difftable col-s02">-</td>
		<td class="difftable col-s03">-</td>
		<td class="difftable col-s04">-</td>
		<td class="difftable col-s05">-</td>
		<td class="difftable col-s06">-</td>
		<td class="difftable col-s07">-</td>
		<td class="difftable col-s08">-</td>
		<td class="difftable col-s09">-</td>
		<td class="difftable col-s10">-</td>
		<td class="difftable col-s11">120 (AS)</td>
		<td class="difftable col-s12">122 (AS)</td>
		<td class="difftable col-s13">123 (AS)</td>
		<td class="difftable col-s14">124 (AS)</td>
		<td class="difftable col-s15">124 (AS)</td>
		<td class="difftable col-s16">136 (EU)</td>
		<td class="difftable col-s17">143 (AS)</td>
		<td class="difftable col-s18">138 (EU)</td>
		<td class="difftable col-s19">11:53 (AS)</td>
		<td class="difftable col-s20">143 (AS)</td>
		<td class="difftable col-s21">9:23 (AS)</td>
		<td class="difftable col-s22">6:37 (EU)</td>
		<td class="difftable col-s23">11:19 (EU)</td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">Top GR: Necro</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Top GR: WD</td>
		<td class="difftable col-s01">48 (NA)</td>
		<td class="difftable col-s02">50 (NA)</td>
		<td class="difftable col-s03">62 (EU)</td>
		<td class="difftable col-s04">78 (NA)</td>
		<td class="difftable col-s05">92 (EU)</td>
		<td class="difftable col-s06">99 (NA)</td>
		<td class="difftable col-s07">99 (EU)</td>
		<td class="difftable col-s08">101 (AS)</td>
		<td class="difftable col-s09">103 (NA)</td>
		<td class="difftable col-s10">109 (NA)</td>
		<td class="difftable col-s11">112 (EU)</td>
		<td class="difftable col-s12">118 (EU)</td>
		<td class="difftable col-s13">117 (EU)</td>
		<td class="difftable col-s14">117 (EU)</td>
		<td class="difftable col-s15">119 (NA)</td>
		<td class="difftable col-s16">131 (EU)</td>
		<td class="difftable col-s17">137 (NA)</td>
		<td class="difftable col-s18">138 (EU)</td>
		<td class="difftable col-s19">11:53 (AS)</td>
		<td class="difftable col-s20">14:36 (NA)</td>
		<td class="difftable col-s21">12:21 (NA)</td>
		<td class="difftable col-s22">13:10 (EU)</td>
		<td class="difftable col-s23">142 (EU)</td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">Top GR: WD</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Top GR: Wizard</td>
		<td class="difftable col-s01">53 (EU)</td>
		<td class="difftable col-s02">53 (EU)</td>
		<td class="difftable col-s03">66 (EU)</td>
		<td class="difftable col-s04">82 (EU)</td>
		<td class="difftable col-s05">98 (EU)</td>
		<td class="difftable col-s06">111 (EU)</td>
		<td class="difftable col-s07">103 (EU)</td>
		<td class="difftable col-s08">104 (AS)</td>
		<td class="difftable col-s09">111 (EU)</td>
		<td class="difftable col-s10">113 (EU)</td>
		<td class="difftable col-s11">113 (AS)</td>
		<td class="difftable col-s12">123 (EU)</td>
		<td class="difftable col-s13">124 (AS)</td>
		<td class="difftable col-s14">127 (AS)</td>
		<td class="difftable col-s15">128 (NA)</td>
		<td class="difftable col-s16">134 (AS)</td>
		<td class="difftable col-s17">145 (EU)</td>
		<td class="difftable col-s18">145 (EU)</td>
		<td class="difftable col-s19">7:14 (EU)</td>
		<td class="difftable col-s20">144 (NA)</td>
		<td class="difftable col-s21">13:48 (NA)</td>
		<td class="difftable col-s22">8:43 (EU)</td>
		<td class="difftable col-s23">13:15 (AS)</td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">Top GR: Wizard</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Top GR: 2p</td>
		<td class="difftable col-s01">56 (EU)</td>
		<td class="difftable col-s02">59 (EU)</td>
		<td class="difftable col-s03">73 (EU)</td>
		<td class="difftable col-s04">89 (NA)</td>
		<td class="difftable col-s05">102 (EU)</td>
		<td class="difftable col-s06">120 (EU)</td>
		<td class="difftable col-s07">107 (EU)</td>
		<td class="difftable col-s08">107 (EU)</td>
		<td class="difftable col-s09">112 (EU)</td>
		<td class="difftable col-s10">114 (EU)</td>
		<td class="difftable col-s11">120 (AS)</td>
		<td class="difftable col-s12">129 (EU)</td>
		<td class="difftable col-s13">131 (AS)</td>
		<td class="difftable col-s14">130 (EU)</td>
		<td class="difftable col-s15">134 (AS)</td>
		<td class="difftable col-s16">144 (NA)</td>
		<td class="difftable col-s17">13:38 (NA)</td>
		<td class="difftable col-s18">10:34 (EU)</td>
		<td class="difftable col-s19">3:20 (AS)</td>
		<td class="difftable col-s20">4:47 (AS)</td>
		<td class="difftable col-s21">4:35 (EU)</td>
		<td class="difftable col-s22">4:22 (EU)</td>
		<td class="difftable col-s23">8:34 (EU)</td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">Top GR: 2p</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Top GR: 3p</td>
		<td class="difftable col-s01">59 (EU)</td>
		<td class="difftable col-s02">62 (EU)</td>
		<td class="difftable col-s03">76 (NA)</td>
		<td class="difftable col-s04">92 (NA)</td>
		<td class="difftable col-s05">108 (EU)</td>
		<td class="difftable col-s06">123 (EU)</td>
		<td class="difftable col-s07">111 (EU)</td>
		<td class="difftable col-s08">112 (NA)</td>
		<td class="difftable col-s09">115 (AS)</td>
		<td class="difftable col-s10">120 (AS)</td>
		<td class="difftable col-s11">126 (EU)</td>
		<td class="difftable col-s12">136 (EU)</td>
		<td class="difftable col-s13">136 (AS)</td>
		<td class="difftable col-s14">136 (NA)</td>
		<td class="difftable col-s15">139 (AS)</td>
		<td class="difftable col-s16">7:05 (EU)</td>
		<td class="difftable col-s17">8:34 (NA)</td>
		<td class="difftable col-s18">5:53 (EU)</td>
		<td class="difftable col-s19">3:07 (AS)</td>
		<td class="difftable col-s20">3:44 (AS)</td>
		<td class="difftable col-s21">3:53 (AS)</td>
		<td class="difftable col-s22">3:20 (EU)</td>
		<td class="difftable col-s23">6:43 (AS)</td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">Top GR: 3p</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">Top GR: 4p</td>
		<td class="difftable col-s01">62 (AS)</td>
		<td class="difftable col-s02">63 (EU)</td>
		<td class="difftable col-s03">77 (NA)</td>
		<td class="difftable col-s04">94 (AS)</td>
		<td class="difftable col-s05">112 (NA)</td>
		<td class="difftable col-s06">127 (EU)</td>
		<td class="difftable col-s07">116 (AS)</td>
		<td class="difftable col-s08">119 (AS)</td>
		<td class="difftable col-s09">121 (AS)</td>
		<td class="difftable col-s10">129 (AS)</td>
		<td class="difftable col-s11">135 (AS)</td>
		<td class="difftable col-s12">147 (AS)</td>
		<td class="difftable col-s13">148 (AS)</td>
		<td class="difftable col-s14">13:35 (AS)</td>
		<td class="difftable col-s15">11:43 (AS)</td>
		<td class="difftable col-s16">6:56 (AS)</td>
		<td class="difftable col-s17">5:05 (AS)</td>
		<td class="difftable col-s18">4:25 (EU)</td>
		<td class="difftable col-s19">2:22 (AS)</td>
		<td class="difftable col-s20">2:40 (AS)</td>
		<td class="difftable col-s21">3:11 (AS)</td>
		<td class="difftable col-s22">2:19 (EU)</td>
		<td class="difftable col-s23">3:15 (AS)</td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">Top GR: 4p</td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">4 player<br />group meta at<br />season start<sup><small>(1)</small></sup></td>
		<td class="difftable col-s01">Cold DH<br />Fire DH<br />Pull monk<br /><small>Perma-stun WD</small></td>
		<td class="difftable col-s02">Lightning DH<br />Lightning DH<br />Pull crusader<br /><small>Perma-stun WD</small></td>
		<td class="difftable col-s03">Lightning DH<br />Lightning DH<br />Pull crusader<br /><small>Perma-stun WD</small></td>
		<td class="difftable col-s04">HotA barb<br />HotA barb<br />EP monk<br />Heal monk</td>
		<td class="difftable col-s05">DMO wiz<br />LoN crus<br />Impale DH<br />Globes barb</td>
		<td class="difftable col-s06"><small>Tal Twister wiz</small><br />Support WD<br />Globes monk<br />Globes barb<br /></td>
		<td class="difftable col-s07">HT Garg WD<br /><small>AD gen. monk</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s08"><small>Arachyr FB WD</small><br /><small>Fire gen monk</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s09">HT FB WD<br /><small>Cold gen monk</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s10"><small>Arachyr FB WD</small><br />Impale DH<br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s11">LoN SB WD<br />Inarius necro<br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s12"><small>Arachyr FB WD</small><br /><small>Rathma necro</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s13"><small>FB Meteor Wiz</small><br /><small>Pestilancer</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s14"><small>FB Meteor Wiz</small><br /><small>Pestilancer</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s15"><small>FB Meteor Wiz</small><br /><small>Inarius Thorns</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s16"><small>FB Meteor Wiz</small><br /><small>Inarius Thorns</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s17"><small>LoN Meteor Wiz</small><br /><small>LoN Thorns Nec.</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s18"><small>LoN Meteor Wiz</small><br /><small>LoN Thorns Nec.</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s19"><small>LoD meteor wiz</small><br /><small>LoD thorns nec.</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s20"><small>LoD meteor wiz</small><br /><small>LoD thorns nec.</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s21"><small>LoD ess. necro</small><br /><small>AoV Crusader</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s22"><small>LoD necro</small><br /><small>Heal monk</small><br />Pull barb<br />Pull barb</td>
		<td class="difftable col-s23"><small>LoD necro</small><br /><small>Heal monk</small><br />Pull barb<br />Pull barb</td>
		<td class="difftable col-s24"><small>Carnival necro</small><br /><small>Firebird wiz</small><br />Support DH<br />Pull barb</small></td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">4 player<br />group meta at<br />season start<sup><small>(1)</small></sup></td>
	</tr>
	<tr class="difftable">
		<td class="difftable left">4 player<br />group meta at<br />season end<sup><small>(2)</small></sup></td>
		<td class="difftable col-s01">Lightning DH<br />Lightning DH<br />Pull crusader<br /><small>Perma-stun WD</small></td>
		<td class="difftable col-s02">EP monk<br /><small>Grim Reaper DH</small><br />Pull crusader<br /><small>Perma-stun WD</small></td>
		<td class="difftable col-s03">Hydra wizard<br />Hydra wizard<br />Pull crus.<br /><small>Perma-stun WD</small></td>
		<td class="difftable col-s04">SC monk<br />Pull barb<br /><small>Support crus.</small><br />Heal monk</td>
		<td class="difftable col-s05">Twister wiz<br />Support WD<br />Globes monk<br />Globes barb</td>
		<td class="difftable col-s06"><small>zET Twister wiz</small><br />Support WD<br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s07"><small>Arachyr FB WD</small><br /><small>Fire gen monk</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s08">HT FB WD<br /><small>Cold gen monk</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s09"><small>Arachyr FB WD</small><br /><small>Cold gen monk</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s10">LoN SB WD<br />MH wiz<br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s11">LoN SB WD<br />Inarius necro<br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s12"><small>FB meteor wiz</small><br /><small>Pestilancer</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s13"><small>FB meteor wiz</small><br /><small>Pestilancer</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s14"><small>FB meteor wiz</small><br /><small>Inarius thorns</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s15"><small>FB meteor wiz</small><br /><small>Inarius thorns</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s16"><small>LoN meteor wiz</small><br /><small>LoN thorns nec.</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s17"><small>LoN meteor wiz</small><br /><small>LoN thorns nec.</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s18"><small>LoD meteor wiz</small><br /><small>LoD thorns nec.</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s19"><small>LoD neteor wiz</small><br />Heal monk<br />Pull barb<br />Pull barb</td>
		<td class="difftable col-s20"><small>Mund. SB WD</small><br /><small>Supp necro</small><br />Heal monk<br />Pull barb</td>
		<td class="difftable col-s21"><small>LoD necro</small><br /><small>Heal monk</small><br />Pull barb<br />Pull barb</td>
		<td class="difftable col-s22"><small>Carnival necro</small><br /><small>AoV crus</small><br />Support DH<br />Pull barb</small></td>
		<td class="difftable col-s23"><small>Carnival necro</small><br /><small>Firebird wiz</small><br />Support DH<br />Pull barb</small></td>
		<td class="difftable col-s24">???</td>
		<td class="difftable col-s25">???</td>
		<td class="difftable col-s26">???</td>
		<td class="difftable col-s27">???</td>
		<td class="difftable col-s28">???</td>
		<td class="difftable col-s29">???</td>
		<td class="difftable col-s30">???</td>
		<td class="difftable right">4 player<br />group meta at<br />season end<sup><small>(2)</small></sup></td>
	</tr>
	-->
</table>
</div>

<br /><br /><br />

<div id="legend">
	<span>Notes:</span><br />
	<!--
	<span class="legend">&bull; <sup><small>(1)</small></sup> "Season start meta" refers to the commonly assumed meta in the week leading up to the season start, as communicated in public Diablo communities (in-game and elsewhere).</span><br />
	<span class="legend">&bull; <sup><small>(2)</small></sup> "Season end meta" refers to the meta that performed best at the end of the season. Note that both metas refer to high GR pushing, not speed farming.</span><br />
	<span class="legend">&bull; For top GR clears, the highest, fastest GR clear on the seasonal softcore leaderboard was taken (checked in-game on July 7, 2017 for up to Season 10); only NA/EU/Asia regions (no data for China).</span><br />
	<span class="legend">&bull; In case of GR150, the time of fastest clear is posted instead.</span><br />
	-->
	<span class="legend">&bull; Sources: <a href="http://www.diablofans.com/" target="_blank">Diablofans</a>, <a href="http://diablo.wikia.com/wiki/Season" target="_blank">Diablo Wiki</a>, <a href="https://www.reddit.com/r/Diablo/wiki/condensedpatchnotes" target="_blank">Reddit</a>, <a href="https://www.reddit.com/r/diablo3/comments/8pazfl/season_14_rewards_and_wings/e09t4ks/">/u/illithidbane's sheet</a>, and various other sources.</span><br />
	<span class="legend">&bull; For feedback, questions, or any updated data contact <a href="https://www.reddit.com/user/bagstone" target="_blank">me on Reddit</a>.</span>
</div>

<br /><br /><br />

<div id="bottom-box">
<div id="customize-button">
Customize...
</div>
<div id="customize-content" class="hidden">
<h3>Choose seasons to display</h3>
<div class="buttonrow">
	<a href="#" id="hideallseasons">(Hide all)</a>&nbsp;
	<input type="submit" class="yes unhidetoggle unhideseason" id="s01" value="1" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s02" value="2" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s03" value="3" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s04" value="4" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s05" value="5" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s06" value="6" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s07" value="7" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s08" value="8" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s09" value="9" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s10" value="10" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s11" value="11" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s12" value="12" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s13" value="13" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s14" value="14" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s15" value="15" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s16" value="16" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s17" value="17" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s18" value="18" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s19" value="19" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s20" value="20" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s21" value="21" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s22" value="22" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s23" value="23" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s24" value="24" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s25" value="25" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s26" value="26" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s27" value="27" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s28" value="28" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s29" value="29" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s30" value="30" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s31" value="31" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s32" value="32" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s33" value="33" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s34" value="34" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s35" value="35" />
	<input type="submit" class="yes unhidetoggle unhideseason" id="s36" value="36" />
	&nbsp;<a href="#" id="showallseasons">(Show all)</a>
</div>
</div>
</div>

<?php include('../footer.php')?>


<script>

// toggle customize box
$('div#customize-button').click(function(event) {
	$('div#customize-content').toggleClass('hidden');
});

// load initial settings from localstorage
function loadSettings() {
	$.each(localStorage, function(key, value){
		if(value=="no") {
			$('.difftable.col-'+key).addClass('hidden');
			$('input#'+key).removeClass('yes');
			$('input#'+key).addClass('no');
		}
	})
};

// toggle season
$('input.unhidetoggle').click(function(event) {
	if($(event.target).hasClass("yes")) {
		localStorage.setItem(event.target.id, "no");
		$('.difftable.col-'+event.target.id).addClass('hidden');
		$(event.target).removeClass('yes');
		$(event.target).addClass('no');
	} else {
		localStorage.setItem(event.target.id, "yes");
		$('.difftable.col-'+event.target.id).removeClass('hidden');
		$(event.target).removeClass('no');
		$(event.target).addClass('yes');
	}
});

// hide all seasons
$('a#hideallseasons').click(function() {
	$('.difftable[class*=col-]').addClass('hidden');
	$('input.unhideseason').removeClass('yes');
	$('input.unhideseason').addClass('no');
	$('input.unhideseason').each( function() {
		localStorage.setItem(this.id, "no");
	});
});

// show all seasons
$('a#showallseasons').click(function() {
	$('.difftable[class*=col-]').removeClass('hidden');
	$('input.unhideseason').removeClass('no');
	$('input.unhideseason').addClass('yes');
	$('input.unhideseason').each( function() {
		localStorage.setItem(this.id, "yes");
	});
});

$(document).ready(function() {
	loadSettings();
});
</script>

</body>
</html>
