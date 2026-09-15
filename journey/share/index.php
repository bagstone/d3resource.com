<?php
/**
 * Read the compact legacy share URL:
 * /journey/share/abc/1a2b3c
 *
 * It intentionally does not write to local storage; this is a read-only view
 * of the sender's progress using the current season's data.
 */
$path = parse_url(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '', PHP_URL_PATH);
$parts = array_values(array_filter(explode('/', (string)$path), 'strlen'));
$shareAt = array_search('share', $parts, true);
$conquestPart = $shareAt === false ? '' : (isset($parts[$shareAt + 1]) ? $parts[$shareAt + 1] : '');
$itemPart = $shareAt === false ? '' : (isset($parts[$shareAt + 2]) ? $parts[$shareAt + 2] : '');

$sharedProgress = array('conquests' => array(), 'items' => array());
foreach (str_split($conquestPart) as $id) {
    if ($id >= 'a' && $id <= 'j') $sharedProgress['conquests'][] = 'conq-' . $id;
}
foreach (str_split($itemPart, 2) as $id) {
    if (preg_match('/^[1-9][a-m]$/', $id)) $sharedProgress['items'][] = 'td-sj' . $id;
}

require dirname(__DIR__) . '/index.php';
