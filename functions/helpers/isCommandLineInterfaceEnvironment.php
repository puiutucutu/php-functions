<?php

require_once "isHttpEnvironment.php";

/**
 * @return bool
 */
function isCommandLineInterfaceEnvironment()
{
    return !isHttpEnvironment();
}
