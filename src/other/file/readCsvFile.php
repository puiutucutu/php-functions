<?php

/**
 * @param string   $filePath
 * @param bool     $isFirstLineColumnNames
 * @param int|null $numberOfLinesToRead
 *
 * @return array
 */
function readCsvFile(
    $filePath,
    $isFirstLineColumnNames = true,
    $numberOfLinesToRead = null
) {
    $fileHandle = fopen($filePath, "r");

    $columnHeaders = [];
    if ($isFirstLineColumnNames) {
        $line = fgets($fileHandle);
        $line = explode(",", $line);
        foreach ($line as &$value) {
            $value = trim($value);
        }
        $columnHeaders = $line;
    }

    $i = 0;
    $data = [];
    while ($lineBuffer = fgets($fileHandle))
    {
        if ($i === $numberOfLinesToRead) {
            break;
        }

        $lineParsed = explode(",", $lineBuffer);
        foreach ($lineParsed as &$value) {
            $value = trim($value);
        }

        $data[] = array_combine($columnHeaders, $lineParsed);

        $i++;
    }

    fclose($fileHandle);

    return $data;
}
