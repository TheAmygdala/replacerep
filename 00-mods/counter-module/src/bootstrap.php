<?php
declare(strict_types=1);

namespace Pol\Counter;

include('LogParser.php');

$lines = file('00-mods\counter-module\assets\access.log', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$parser = new LogParser();

$filteredLines = $parser->parseArray($lines);

print_r($filteredLines);
die();
?>