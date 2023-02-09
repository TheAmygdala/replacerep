<?php

namespace Pol\Counter;

class LogAnalyzer 
{
    public function __construct () {

    }

    /**
     * Zähle alle (Erst)Zugriffe auf die Seite
     */
    public function countTotalConnections(array $logs): int 
    {
        $firstConnections = 0;
        
        $listLength = count($logs);
        for($i = 0; $i < $listLength; $i++) 
        {
            if (isset($logs[$i]['fromRoute'])) {
                $firstConnections++;
            }
        }
        return $firstConnections;
    }

    /**
     * Zähle alle Zugriffe pro Kapitel
     * @param $logs Struktur: [0] => [[ip]=> "123.123.123.123", [time] => "[02/Feb/2023:11:02:44 +0100]", [toRoute] => "clicked/route/navigated/to", [fromRoute] => "previous/route/coming/from"]
     */
    public function countChapterConnections(array $logs)
    {
        $chapterConnections = $this->prepareArrayFrameForChapterConnections($logs, 'toRoute');
        $listLength = count($logs);

        for($i = 0; $i < $listLength; $i++) 
        {
            if (isset($logs[$i]['toRoute']) && isset($chapterConnections[$logs[$i]['toRoute']])) {
                $chapterConnections[$logs[$i]['toRoute']]++;
            }
        }
        
        return $chapterConnections;
    }

    /**
     * Bereitet den Rahmen des Arrays vor, um pro Route die Klickzahlen messen zu können. Dafür werden Routendubletten gelöscht, als Key verwendet und der Zähler auf 0 gesetzt.
     */
    private function prepareArrayFrameForChapterConnections(array $logs, string $filteredId): array 
    {
        $uniqueRoutes = $this->uniqueMultidimArray($logs, $filteredId);
        $routeIdArray = [];

        // Setze die Routen als Key
        foreach ($uniqueRoutes as $logEntry)
        {
            $this->isArgumentStructureValid($logEntry);
            $routeIdArray[$logEntry['toRoute']] = 0;
        }
        ksort($routeIdArray);
        return $routeIdArray;
    }

    /**
     * Löscht alle doppelten Einträge in einem zweidimensionalem Array, die unter dem Index $key gefunden werden.
     * Vergleichbar mit SQL Distinct für den Wert des Indexes $key.
     * Dient hier dem Vorbereiten eines Arrays mit Routen als Key zu haben, die unique sind.
     */
    private function uniqueMultidimArray($array, $key) 
    {
        $temp_array = array();
        $i = 0;
        $key_array = array();
    
        foreach($array as $val)
        {
            $this->isArgumentStructureValid($val);
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }

    private function isArgumentStructureValid(mixed $singleLog) {
        $isError = false;
        $message = "The array has not the necessary arguments. Reason: ";
        $dataType = gettype($singleLog);

        if ($dataType !== "array") {
            $message .= "Wrong type. Expected array. Found: " . $dataType . "( " . strval($singleLog) . " )";
            throw new \InvalidArgumentException ($message);
        } elseif (!array_key_exists('ip', $singleLog)) {
            $isError = true;
            $message.= " Cannot find: ip in";
        } elseif (!array_key_exists('time', $singleLog)) {
            $isError = true;
            $message.= " Cannot find: time in";
        } elseif (!array_key_exists('toRoute', $singleLog)) {
            $isError = true;
            $message.= " Cannot find: toRoute in";
        } elseif (!array_key_exists('toRoute', $singleLog)) {
            $isError = true;
            $message.= " Cannot find: toRoute in";
        }

        if($isError) {
            $message.= implode(", ", $singleLog);
            throw new \InvalidArgumentException ($message);
        }
    }
}
