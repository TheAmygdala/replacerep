<?php
declare(strict_types=1);

namespace Pol\Counter;

//include("./../services/LogAnalyzer.php");
//include('./../data/LogParser.php');
include($_SERVER['DOCUMENT_ROOT'] . "/bits-prod/00-mods/counter-module/src/services/LogAnalyzer.php");
include($_SERVER['DOCUMENT_ROOT'] . "/bits-prod/00-mods/counter-module/src/data/LogParser.php");

class CounterController {

    private LogParser $cParser;
    private LogAnalyzer $cAnalyzer;
    private static string $logPath = '00-mods\counter-module\src\data\access.log';

    public function __construct()
    {
        $this->cParser = new LogParser();
        $this->cAnalyzer = new LogAnalyzer();
    }

    public function getTotalConnections(): int
    {
        $filteredArray = $this->cParser->parseFile($this->logPath);
        return $this->cAnalyzer->countTotalConnections($filteredArray);
    }
}

?>