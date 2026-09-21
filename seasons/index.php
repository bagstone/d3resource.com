<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Diablo 3 Seasons Overview</title>
<link rel="stylesheet" href="main-style.css">
<link rel="stylesheet" href="/_style/d3rheader.css">
<script defer src="seasons-data.js"></script>
<script defer src="seasons.js"></script>
</head>
<body>

<?php include('../d3rheader.php'); ?>

<div id="main">
  <div class="centered"><h2>Diablo 3: Reaper of Souls - Seasons Overview</h2></div>

  <br>

  <span class="subtitle">Choose a season range, or customize the displayed seasons.</span>

  <br><br>

  <div id="range-controls" aria-label="Season range"></div>

  <br><br>

  <div id="view-controls" aria-label="Display format">
    <span>View:</span>
    <button type="button" data-view="cards">Cards</button>
    <button type="button" data-view="table">Table</button>
  </div>

  <br>

  <div id="tablediv"></div>
  <div id="mobile-season-view" aria-live="polite"></div>

  <br><br><br>

  <div id="legend">
    <span>Notes:</span><br>
    <span class="legend">&bull; Sources: <a href="http://www.diablofans.com/" target="_blank">Diablofans</a>, <a href="http://diablo.wikia.com/wiki/Season" target="_blank">Diablo Wiki</a>, <a href="https://www.reddit.com/r/Diablo/wiki/condensedpatchnotes" target="_blank">Reddit</a>, <a href="https://www.reddit.com/r/diablo3/comments/8pazfl/season_14_rewards_and_wings/e09t4ks/">/u/illithidbane's sheet</a>, and various other sources.</span><br>
    <span class="legend">&bull; End lead time is the calendar-day notice before the season ended. Seasons 29&ndash;38 use <a href="https://www.reddit.com/r/diablo3/comments/1w5fvyg/we_may_see_a_season_40_announcement_next_friday/" target="_blank">/u/tbmadduxor's announcement-date research</a>; blank means the announcement date could not be confirmed.</span><br>
    <span class="legend">&bull; For feedback, questions, or any updated data contact <a href="https://www.reddit.com/user/bagstone" target="_blank">me on Reddit</a>.</span>
  </div>

  <br><br><br>

  <button id="customize-button" type="button">Customize</button>

  <div id="customize-modal" class="hidden" role="dialog" aria-modal="true" aria-labelledby="customize-title">
    <div id="customize-panel">
      <button id="customize-close" class="modal-close" type="button" aria-label="Close customize dialog">&times;</button>
      <h3 id="customize-title">Choose seasons to display</h3>
      <div id="season-controls"></div>
      <div class="modal-actions">
        <button id="hide-all" type="button">Hide all</button>
        <button id="show-all" type="button">Show all</button>
      </div>
    </div>
  </div>

<?php include('../footer.php'); ?>

</body>
</html>
