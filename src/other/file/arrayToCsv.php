<?php

/**
 * @param string $fileName
 * @param array  $dataset
 */
function arrayToCsv($fileName, array $dataset)
{
    $fp = fopen("{$fileName}.csv", "wb");
    foreach ($dataset as $line) {
        fputcsv($fp, $line);
    }
    fclose($fp);
}
