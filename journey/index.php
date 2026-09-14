<?php
/** Data-driven tracker: add journey/data/seasonNN.json; no template edits needed. */
$files = glob(__DIR__ . '/data/season*.json');
$seasons = array();
foreach ($files as $file) {
    if (!preg_match('/^season[0-9]+\\.json$/', basename($file))) continue;
    $data = json_decode(file_get_contents($file), true);
    if (is_array($data) && isset($data['number'], $data['visibleFrom'])) $seasons[] = $data;
}
usort($seasons, function ($a, $b) { return $a['number'] - $b['number']; });
$today = gmdate('Y-m-d');
$season = end($seasons);
foreach ($seasons as $candidate) if ($candidate['visibleFrom'] <= $today) $season = $candidate;
// Useful for preparing/reviewing a future file without waiting for its hand-off.
if (isset($_GET['season']) && ctype_digit($_GET['season'])) {
    foreach ($seasons as $candidate) if ($candidate['number'] == (int)$_GET['season']) $season = $candidate;
}
if (!$season) { http_response_code(500); exit('No journey season data found.'); }
function renderConquests($conquests) {
    echo '<table class="conqtablelayout">';
    foreach ($conquests as $group) {
        echo '<tr><td class="conqlabel">' . htmlspecialchars($group['mode']) . ':</td>';
        foreach ($group['items'] as $i => $item) {
            $id = chr(ord('a') + $i + ($group['mode'] === 'Hardcore' ? 5 : 0));
            echo '<td id="conq-' . $id . '" class="conqitem"><span class="conqtitle">' . htmlspecialchars($item['title']) . '</span><br><span class="conqdesc">' . htmlspecialchars($item['description']) . '</span></td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
function renderJourneyTable($season) {
    echo '<table class="sjtablelayout"><tr class="sjtable">';
    foreach ($season['chapters'] as $i => $title) echo '<th id="th-' . ($i + 1) . '" class="sjtable header">' . htmlspecialchars($title) . '</th>';
    echo '</tr>';
    foreach ($season['journeyRows'] as $rowIndex => $row) {
        $letter = chr(ord('a') + $rowIndex);
        echo '<tr class="sjtable">';
        foreach ($row as $columnIndex => $cell) {
            if ($cell === null) { echo '<td class="sjtable empty"></td>'; continue; }
            $column = $columnIndex + 1;
            echo '<td id="td-sj' . $column . $letter . '" class="cat' . $column . ' sjtable ' . htmlspecialchars($cell['classes']) . '">' . $cell['content'] . '</td>';
        }
        echo '</tr>';
    }
    echo '<tr class="sjtable">';
    for ($i = 1; $i <= count($season['chapters']); $i++) echo '<td id="complete' . $i . '" class="completion' . ($i === 1 ? ' current' : '') . '">' . ($i === 1 ? 'Current' : '') . '</td>';
    echo '</tr></table>';
}
function renderHaedrigSets($sets) {
    foreach ($sets as $i => $set) {
        if ($i && $i % 3 === 0) echo '<br>';
        if ($i % 3) echo ' - ';
        echo htmlspecialchars($set['class']) . ': ';
        if (isset($set['url'])) echo '<a href="' . htmlspecialchars($set['url']) . '" target="_blank">';
        echo htmlspecialchars($set['name']);
        if (isset($set['url'])) echo '</a>';
    }
}
$json = json_encode($season, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
?>
<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8"/><title>Diablo 3: Season <?= (int)$season['number'] ?> Journey Tracker</title>
<script src="/_script/jquery-3.0.0.min.js"></script><script src="jquery-ui-1.12.1/jquery-ui.min.js"></script><script src="functions.js"></script><script src="journey.js" defer></script>
<link rel="stylesheet" href="main-style.css"/><link rel="stylesheet" href="/_style/d3rheader.css"/><link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.min.css"/>
</head><body>
<?php include('../d3rheader.php'); ?>
<div id="maindiv"><h1>Diablo 3: Season <?= (int)$season['number'] ?> Journey Tracker</h1>
<div id="countdowndiv" class="hidden"><div class="countdowndiv">NA/Console:<p class="countdown" id="countdown_na"></p></div><div class="countdowndiv">EU:<p class="countdown" id="countdown_eu"></p></div><div class="countdowndiv">Asia:<p class="countdown" id="countdown_asia"></p></div></div>
<div id="legenddiv"><span class="categories" id="conquests">Conquests</span><span class="categories" id="rift">Rifts</span><span class="categories" id="solo">Solo GRs</span><span class="categories" id="kill">Bosses</span><span class="categories" id="cube">Cube</span><span class="categories" id="artisans">Artisans</span><span class="categories" id="gems">Leg. gems</span><span class="categories" id="ubers">Ubers</span><span class="categories" id="kadala">Kadala</span><span class="categories" id="bounties">Bounties</span><span class="categories" id="setdung">Set dungeons</span><span class="categories" id="misc">Misc</span></div>
<div id="conqdiv" class="hidden"><p>List of conquests in Season <?= (int)$season['number'] ?>:</p><?php renderConquests($season['conquests']); ?></div><?php renderJourneyTable($season); ?>
<br><br><span class="subtitle">Clicking on a column header will check/uncheck the entire chapter.</span><br><br><span class="subtitle">Looking for guides? Check <a href="https://www.reddit.com/r/diablo3/" target="_blank">r/diablo3</a> for season mega-guides and up-to-date starter information, and <a href="https://maxroll.gg/d3" target="_blank">Maxroll</a> for all-around Diablo 3 guides and information.</span>
<div id="bottomdiv">Haedrig's Gift contains the following class sets this season:<br><?php renderHaedrigSets($season['haedrigSets']); ?><br><br><br><span class="button bigger" id="resetall">Reset all</span>&nbsp;&nbsp;&nbsp;<span class="button bigger" id="shareprogress">Share progress</span><br><br><br><?php include('../footer.php')?></div></div>
<div id="resetdialog" title="Confirm reset">Do you really want to reset ALL data? This will erase your current Season Journey data from your local browser storage.</div><div id="sharedialog" title="Share progress">The following link has been copied to your clipboard:<br><br><input type="text" value="http://" id="shareinput"/><br><br>(You can hit ESC to close this window)</div>
<script>window.journeySeason = <?= $json ?>;</script></body></html>
