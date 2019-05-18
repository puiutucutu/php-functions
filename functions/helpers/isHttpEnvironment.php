<?php

/**
 * @return bool
 */
function isHttpEnvironment()
{
    return http_response_code() !== false;
}
