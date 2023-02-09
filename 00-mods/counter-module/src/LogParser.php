<?php
declare(strict_types=1);

namespace Pol\Counter;

/**
 * The Logparser is provides the public methods parseArray and parseLine, to read apache logfiles and transform them into a formatted array.
 */
class LogParser 
{

    private static string $pageDomain = "\/bits-prod\/";

    public function __construct() {

    }

    /**
     * Transforms an apache logfile array into another format.
     * @param array $unfilteredLines Array with apaches logfiles
     * @return array Structure: [0] => [[ip]=> "123.123.123.123", [time] => "[02/Feb/2023:11:02:44 +0100]", [toRoute] => "clicked/route/navigated/to", [fromRoute] => "previous/route/coming/from"]
     */
    public function parseArray(array $unfilteredLines): array 
    {
        $filteredArray = [];
        $linesLength = count($unfilteredLines);
        for ($i = 0; $i < $linesLength; $i++)
        {
            $parsedLine = $this->parseLine($unfilteredLines[$i]);
            if ($parsedLine == null)
            {
                continue;
            }
            $filteredArray[] = $parsedLine;

        }
        return $filteredArray;
    }

    /**
     * Transforms a single log entry into a formatted array to extract predefined characteristics of the log entry. If it doesn't find a fitting route of the application, it will return null because only routes of the chosen application are supposed to be considered.
     * @param string $line
     * @return array Structure: [ip]=> "123.123.123.123", [time] => "[02/Feb/2023:11:02:44 +0100]", [toRoute] => "clicked/route/navigated/to", [fromRoute] => "previous/route/coming/from"
     */
    public function parseLine(string $line): array|null
    {
        $toRoutePattern = sprintf(
            "%s%s%s",
                '((?<="GET ', 
                LogParser::$pageDomain,
                ').+(?=\.php HTTP\/1.1"))'
        );

        $toRoute = [];
        preg_match($toRoutePattern, $line, $toRoute);

        if (!isset($toRoute[0])) {
            return null;
        }

        $filteredLine = [];
        $ip = [];
        $time = [];
        $fromRoute = [];
        preg_match('/(\d+\.\d+\.\d+\.\d+)/', $line, $ip);
        preg_match('(\[.+\])', $line, $time);
        preg_match('/http:\/\/.+\/bits-prod\K(.+)(?=.php)/', $line, $fromRoute);
        
        $filteredLine['ip'] = $ip[0]?? null;
        $filteredLine['time'] = $time[0]?? null;
        $filteredLine['toRoute'] = isset($toRoute[0])? $this->cleanRoute($toRoute[0]) : null;
        $filteredLine['fromRoute'] = isset($fromRoute[0])? $this->cleanRoute($fromRoute[0]) : null;
        
        return $filteredLine;
    }

    private function cleanRoute(string $route): string|null
    {
        $resultString = strval(str_replace(' ', '', $route));
        if ($resultString === '') {
            return null;
        }
        return $resultString;
    }
}

?>