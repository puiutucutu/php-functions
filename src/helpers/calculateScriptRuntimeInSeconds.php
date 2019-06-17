<?php

/**
 * @return float
 */
function calculateScriptRuntimeInSeconds()
{
    return microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
}
