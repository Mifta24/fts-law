<?php
/**
 * POT Generator for FTS Law Theme
 * Run: php generate-pot.php
 * Output: fts-law.pot (full rebuild)
 */

$theme_dir  = __DIR__;
$domain     = 'fts-law';
$output_pot = $theme_dir . '/fts-law.pot';

// ── PHP files to scan ──────────────────────────────────────────────────────
$php_files = [];
$iterator  = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($theme_dir, RecursiveDirectoryIterator::SKIP_DOTS)
);
foreach ($iterator as $file) {
    if ($file->getExtension() === 'php' && $file->getFilename() !== 'generate-pot.php') {
        $php_files[] = $file->getPathname();
    }
}
sort($php_files);

// ── Regex patterns for gettext functions ──────────────────────────────────
// Matches: _e('...', 'domain') | __('...', 'domain') | esc_attr_e('...', 'domain')
// | esc_attr__('...', 'domain') | esc_html__('...', 'domain') | esc_html_e('...', 'domain')
// Supports single-quoted strings with escaped quotes. Double-quoted too.
$pattern = '/(?:_e|__|esc_attr_e|esc_attr__|esc_html__|esc_html_e|_x|_ex|_n|_nx)\s*\(\s*(?:\'((?:[^\'\\\\]|\\\\.)*)\'|"((?:[^"\\\\]|\\\\.)*)")\s*,\s*[\'"]' . preg_quote($domain, '/') . '[\'"]/s';

// ── Collect entries ────────────────────────────────────────────────────────
$entries = []; // msgid => [refs]

foreach ($php_files as $filepath) {
    $rel  = ltrim(str_replace($theme_dir, '', $filepath), DIRECTORY_SEPARATOR . '/\\');
    $rel  = str_replace('\\', '/', $rel);
    $code = file_get_contents($filepath);

    // Find all line positions first
    $lines = explode("\n", $code);
    $line_offsets = [];
    $offset = 0;
    foreach ($lines as $ln => $line) {
        $line_offsets[$offset] = $ln + 1;
        $offset += strlen($line) + 1;
    }

    preg_match_all($pattern, $code, $matches, PREG_OFFSET_CAPTURE);

    foreach ($matches[0] as $i => $match) {
        // Get the string (could be in group 1 or 2 depending on quote type)
        $raw = isset($matches[1][$i][0]) && $matches[1][$i][0] !== ''
            ? $matches[1][$i][0]
            : (isset($matches[2][$i][0]) ? $matches[2][$i][0] : '');

        // Unescape PHP escape sequences
        $msgid = stripslashes($raw);

        // Decode HTML entities that appear literally in source (e.g. &amp; → &amp;)
        // We keep them as-is to match what Loco sees

        // Get line number
        $char_offset = $match[1];
        $line_no     = 1;
        foreach ($line_offsets as $off => $ln) {
            if ($off <= $char_offset) {
                $line_no = $ln;
            } else {
                break;
            }
        }

        $ref = $rel . ':' . $line_no;

        if (!isset($entries[$msgid])) {
            $entries[$msgid] = [];
        }
        if (!in_array($ref, $entries[$msgid])) {
            $entries[$msgid][] = $ref;
        }
    }
}

echo "Found " . count($entries) . " unique strings.\n";

// ── Build POT content ──────────────────────────────────────────────────────
$now = gmdate('Y-m-d H:iO');
$pot = <<<HEADER
# FTS Law – Foreign Legal & Visa Support
# Copyright (C) 2026 FTS Development
# This file is distributed under the same license as the FTS Law plugin.
# FIRST AUTHOR <EMAIL@ADDRESS>, YEAR.
#
#, fuzzy
msgid ""
msgstr ""
"Project-Id-Version: FTS Law\\n"
"Report-Msgid-Bugs-To: \\n"
"POT-Creation-Date: {$now}\\n"
"PO-Revision-Date: YEAR-MO-DA HO:MI+ZONE\\n"
"Last-Translator: FULL NAME <EMAIL@ADDRESS>\\n"
"Language-Team: LANGUAGE <LL@li.org>\\n"
"Language: \\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"X-Generator: FTS POT Builder 1.0\\n"
"X-Domain: fts-law\\n"

HEADER;

foreach ($entries as $msgid => $refs) {
    // Reference comments
    $pot .= '#: ' . implode(' ', $refs) . "\n";

    // Escape msgid for POT format
    $escaped = pot_escape($msgid);

    if (strpos($escaped, "\n") !== false) {
        // Multi-line
        $pot .= "msgid \"\"\n";
        foreach (explode("\n", $escaped) as $line) {
            $pot .= '"' . $line . "\\n\"\n";
        }
    } else {
        $pot .= 'msgid "' . $escaped . '"' . "\n";
    }
    $pot .= 'msgstr ""' . "\n\n";
}

file_put_contents($output_pot, $pot);
echo "POT file written to: fts-law.pot\n";
echo "Total entries: " . count($entries) . "\n";

// ── Helper ────────────────────────────────────────────────────────────────
function pot_escape(string $str): string {
    $str = str_replace('\\', '\\\\', $str);
    $str = str_replace('"',  '\\"',  $str);
    $str = str_replace("\r", '',     $str);
    return $str;
}
