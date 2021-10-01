<?php

/**
 * @param string $filename
 *
 * @return string|false
 */
function getMimeType($filename)
{
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    return finfo_file($finfo, $filename);
}
