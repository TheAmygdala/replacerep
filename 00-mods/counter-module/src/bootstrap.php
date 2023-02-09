<?php
declare(strict_types=1);

namespace Pol\Counter;

include('LogParser.php');
include('LogAnalyzer.php');

$lines = file('00-mods\counter-module\assets\access.log', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$parser = new LogParser();
$analyzer = new LogAnalyzer();

$filteredLines = $parser->parseArray($lines);
print_r($filteredLines);

$analyzedTotalLogs = $analyzer->countTotalConnections($filteredLines);
print_r("Insgesamte Erstverbindungen: " . $analyzedTotalLogs);
print_r("+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++");
$analyzedChapterLogs = $analyzer->countChapterConnections($filteredLines);
print_r($analyzedChapterLogs);
die();

?>