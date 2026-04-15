<?php
$theme = __DIR__;
$files = glob($theme . '/*.php');
sort($files);

$skip = ['generate-pot.php', 'check-i18n.php'];

echo str_pad("FILE", 40) . " | STATUS  | LINES\n";
echo str_repeat("-", 60) . "\n";

foreach ($files as $f) {
    $name = basename($f);
    if (in_array($name, $skip)) continue;

    $code   = file_get_contents($f);
    $has_e  = (bool) preg_match('/_e\s*\(/', $code);
    $has__  = (bool) preg_match('/\b__\s*\(/', $code);
    $lines  = substr_count($code, "\n");
    $status = ($has_e || $has__) ? 'OK    ' : '!! MISSING';

    echo str_pad($name, 40) . " | " . $status . " | " . $lines . "\n";
}
