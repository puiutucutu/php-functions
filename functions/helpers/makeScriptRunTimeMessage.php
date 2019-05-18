<?php

require_once "calculateScriptRuntimeInSecondsToTwoSignificantFigures.php";

/**
 * @return string
 */
function makeScriptRunTimeMessage()
{
    $seconds = calculateScriptRuntimeInSecondsToTwoSignificantFigures();
    return "Script Runtime (seconds): ${seconds} \r\n";
}
