<?php
/** A small public view of the same locally-overridable schedule used by Journey. */
$scheduleFile = __DIR__ . '/../journey/data/schedule.json';
$schedule = json_decode(file_get_contents($scheduleFile), true);
if (!is_array($schedule)) { http_response_code(500); exit('Invalid journey schedule data.'); }

$overrides = array();
$envFile = __DIR__ . '/../journey/.env';
if (is_readable($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || $line[0] === '#' || strpos($line, '=') === false) continue;
        list($name, $value) = explode('=', $line, 2);
        $overrides[trim($name)] = trim($value);
    }
}
function countdownDate($value, $field) {
    if ($value === null || $value === '') return null;
    if (!is_string($value) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $value)) {
        http_response_code(500); exit('Invalid ' . htmlspecialchars($field, ENT_QUOTES, 'UTF-8') . ' in journey schedule.');
    }
    return $value;
}

$seasons = array();
foreach ($schedule as $number => $entry) {
    if (!ctype_digit((string)$number) || !is_array($entry)) continue;
    $number = (int)$number;
    $startKey = 'S' . $number . '_START';
    $endKey = 'S' . $number . '_END';
    $seasons[] = array(
        'number' => $number,
        'startDate' => countdownDate(array_key_exists($startKey, $overrides) ? $overrides[$startKey] : (isset($entry['startDate']) ? $entry['startDate'] : null), $startKey),
        'endDate' => countdownDate(array_key_exists($endKey, $overrides) ? $overrides[$endKey] : (isset($entry['endDate']) ? $entry['endDate'] : null), $endKey),
        'endTimeZone' => isset($entry['endTimeZone']) ? $entry['endTimeZone'] : 'America/Los_Angeles'
    );
}
usort($seasons, function ($a, $b) { return $a['number'] <=> $b['number']; });

$today = new DateTimeImmutable('today', new DateTimeZone('UTC'));
$current = null;
foreach ($seasons as $season) {
    if ($season['startDate'] !== null && $season['startDate'] <= $today->format('Y-m-d')) $current = $season;
}
if ($current === null) { http_response_code(404); exit('No current Diablo 3 season is scheduled yet.'); }
$next = null;
foreach ($seasons as $season) if ($season['number'] === $current['number'] + 1) { $next = $season; break; }

$age = null;
if ($current['startDate']) $age = $today->diff(new DateTimeImmutable($current['startDate'], new DateTimeZone('UTC')))->days;
$estimates = array();
if ($current['endDate'] === null && $age !== null) {
    // These are deliberately conservative maintenance-era ranges. Once a season is
    // 85 days old, favour the longer end of the observed range rather than a date imminently due.
    $offsets = $age >= 85 ? array(114, 121) : ($age >= 73 ? array(93, 100) : array(86, 93));
    foreach ($offsets as $offset) $estimates[] = (new DateTimeImmutable($current['startDate'], new DateTimeZone('UTC')))->modify('+' . $offset . ' days');
}
$pageData = json_encode(array('current' => $current, 'next' => $next), JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);

// The small stream-overlay pages are routed here by their individual index files.
$plainType = isset($_GET['_plain']) ? $_GET['_plain'] : null;
if ($plainType !== null) {
    $plainTimer = null;
    if ($plainType === 'end' && $current['endDate'] !== null) {
        $plainTimer = array('kind' => 'end', 'date' => $current['endDate'], 'zone' => $current['endTimeZone']);
    } elseif ($next !== null && $next['startDate'] !== null) {
        $plainZones = array('start-na' => 'America/Los_Angeles', 'start-console' => 'America/Los_Angeles', 'start-eu' => 'Europe/Paris', 'start-asia' => 'Asia/Seoul');
        if (isset($plainZones[$plainType])) $plainTimer = array('kind' => 'start', 'date' => $next['startDate'], 'zone' => $plainZones[$plainType]);
    }
    if ($plainTimer === null) { http_response_code(404); exit('This countdown is not available yet.'); }
    ?>
    <!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Diablo 3 Countdown</title><link rel="stylesheet" href="/journey/main-style.css"><link rel="stylesheet" href="/countdown/countdown.css"></head><body class="plain-page"><strong class="timer" data-kind="<?= $plainTimer['kind'] ?>" data-date="<?= htmlspecialchars($plainTimer['date']) ?>" data-zone="<?= htmlspecialchars($plainTimer['zone']) ?>"></strong><script src="/countdown/countdown.js"></script></body></html>
    <?php exit;
}
?>
<!doctype html>
<html lang="en"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Diablo 3 Season Countdown</title>
<link rel="stylesheet" href="/journey/main-style.css">
<link rel="stylesheet" href="/countdown/countdown.css">
</head><body>
<main>
  <h1>Diablo 3 Season Countdown</h1>
  <p class="lead">We are in Diablo Season <?= (int)$current['number'] ?>.</p>
  <?php if ($age !== null): ?><p>The season is <?= $age ?> day<?= $age === 1 ? '' : 's' ?> old.</p><?php endif; ?>

  <?php if ($current['endDate'] === null): ?>
    <p class="unknown">Season <?= (int)$current['number'] ?> end date<?= $next ? ' and Season ' . (int)$next['number'] . ' start date' : '' ?> are unknown.</p>
  <?php endif; ?>

  <?php if ($current['endDate'] !== null): ?><section class="countdown-card end-card"><h2>Season <?= (int)$current['number'] ?> ends</h2><time datetime="<?= htmlspecialchars($current['endDate']) ?>" class="date"><?= htmlspecialchars((new DateTimeImmutable($current['endDate']))->format('l, j F Y')) ?></time><strong class="timer" data-kind="end" data-date="<?= htmlspecialchars($current['endDate']) ?>" data-zone="<?= htmlspecialchars($current['endTimeZone']) ?>"></strong><a class="plain-link" href="/countdown/end">Plain view</a></section><?php endif; ?>
  <?php if ($next && $next['startDate'] !== null): ?><div class="countdown-row">
    <?php foreach (array('console' => 'Console', 'na' => 'NA', 'eu' => 'EU', 'asia' => 'Asia') as $region => $label): $zone = $region === 'eu' ? 'Europe/Paris' : ($region === 'asia' ? 'Asia/Seoul' : 'America/Los_Angeles'); ?><section class="countdown-card"><h2>Season <?= (int)$next['number'] ?>: <?= $label ?></h2><time datetime="<?= htmlspecialchars($next['startDate']) ?>" class="date"><?= htmlspecialchars((new DateTimeImmutable($next['startDate']))->format('l, j F Y')) ?>, 5 PM</time><strong class="timer" data-kind="start" data-date="<?= htmlspecialchars($next['startDate']) ?>" data-zone="<?= $zone ?>"></strong><a class="plain-link" href="/countdown/start-<?= $region ?>">Plain view</a></section><?php endforeach; ?>
  </div><?php endif; ?>

  <?php if ($current['endDate'] === null): ?>
    <p class="note">Since Diablo 3 went into maintenance mode with Season 30, seasons lasted between <a href="https://d3resource.com/seasons/index.php">79 and 121 days</a>, and seasons usually end on a Sunday. We usually receive two weeks’ notice on <a href="https://news.blizzard.com/en-us/feed/diablo-3">the Diablo 3 news feed</a>.</p>
    <?php if ($estimates): ?><p class="estimate">Based on this, the most likely estimated end dates are <strong><?= htmlspecialchars($estimates[0]->format('j F Y')) ?></strong> or <strong><?= htmlspecialchars($estimates[1]->format('j F Y')) ?></strong>.</p><?php endif; ?>
  <?php endif; ?>
</main>
<script>window.countdownData = <?= $pageData ?>;</script><script src="/countdown/countdown.js"></script>
</body></html>
