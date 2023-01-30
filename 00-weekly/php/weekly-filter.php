<?php

/**
 * This method filters the navigation tree, which gets provided in each template as a argument. This method is a public method to use for each template to decide what routes are available in what week for the user.
 * @access public
 * @param string $fullNavTree Unfiltered navigation tree. 
 * @return string Returns the filtered navigation tree as a string.
 */
function filterNavTree(string $fullNavTree): string 
{
    $navTree = loadHtmlWithUTF8($fullNavTree);
    $listItems = $navTree->getElementsByTagName('li');

    /** @var DomNodeList $listItems */
    for ($i = 0; $i < $listItems->length; $i++) {
        /** @var DomElement $node */
        $node = $listItems->item($i);
        $unfilteredHref = $node->getAttribute("data-nav-id");
        $courseDigits = filterCourseHrefToInt($unfilteredHref, 1, 2);
        $isWeekValid = isWeekValid($courseDigits);

        if (!$isWeekValid)
        {
            $node->parentNode->removeChild($node);
            $i--;
        }
    }
    return $navTree->saveHTML();
}

/**
 * This method filters the navigation arrow, which gets provided in each template as a argument. This method is a public method to use for each template to decide if the next course should be available
 * @access public
 * @param string $nodeWithRef Unfiltered navigation arrow.
 * @param string $hrefAttribute Tag name which is supposed to be selected.
 * @return string Returns the filtered navigation arrow as a string.
 */
function filterSingleNodeHref(string $nodeWithHref, string $hrefAttribute = "href"): string
{
    /** @var \DOMElement $nodeItem */
    $node = loadHtmlWithUTF8($nodeWithHref);
    $itemNode = $node->getElementsByTagName('a')->item(0);
    $unfilteredHref = $itemNode->getAttribute($hrefAttribute);
    $courseDigits = filterCourseHrefToInt($unfilteredHref, 3, 4);
    $isWeekValid = isWeekValid($courseDigits);

    if (!$isWeekValid)
    {
        $itemNode->parentNode->removeChild($itemNode);
    }

    return $node->saveHTML();
} 

/**
 * This method load UTF-8 encoded html nodes correctly.
 * @access private
 * @param string $html 
 * @return \DOMDocument Returns the properly loaded utf-8 encoded DOMDocument.
 */
function loadHtmlWithUTF8(string $html): \DOMDocument
{
    $node = new \DOMDocument("1.0", "UTF-8");
    $node->loadHTML(
        mb_convert_encoding(
            $html, "HTML-ENTITIES", "UTF-8"
        ), LIBXML_HTML_NOIMPLIED|LIBXML_HTML_NODEFDTD
    );
    return $node;
}

/**
 * This helper method calculates the calender week to provide other methods (like filterNavTree) a simple integer to calculate what modules are available for the user.
 * @access private
 * @return int Returns the calculated calender week as an integer
 */
function getCurrentCalenderWeek(): int
{
    $date = time();
    return intval(date("W", $date)); 
}

/**
 * This method decides what week checks what courses are available for the given course number in the argument. 
 * @access private
 * @param int $courseNumber
 * @return bool Returns a boolean to decide if a week is valid.
 */
function isWeekValid(int $courseDigits): bool
{
    $startCw = 4;
    $currentCw = getCurrentCalenderWeek();
    $validationWeek = $currentCw - $startCw;

    // If a string is casted into 0 by inval() because the href has no course number as leading figures, the list item should still be rendered.
    // That way <li> "introduction" and "contact" is always rendered. 
    if ($courseDigits == 0)
    {
        return true;
    }

    return $courseDigits <= $validationWeek;
}

/**
 * 
 * @access private
 * @param string $courseHref
 * @param int $beginning
 * @param int $end
 */
function filterCourseHrefToInt(string $courseHref, int $beginning, int $end)
{
    return intval(
        substr($courseHref, $beginning, $end)
    );
}

?>