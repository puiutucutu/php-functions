<?php

/**
 * @return float
 */
function calculateScriptRuntimeInSecondsToTwoSignificantFigures()
{
    return round(calculateScriptRuntimeInSeconds(), 2);
}
