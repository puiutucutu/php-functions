<?php

/**
 * @param array       $rows
 * @param array|null  $columnNames
 * @param string|null $fileName
 *
 * @example
 *
 * writeToCsv(
 *     [["a", "b", "c"], ["d", "e", "f"]],
 *     ["column", "headers", "here"]
 * );
 *
 */
function writeToCsv($rows, $columnNames = [], $fileName = "")
{
    $time = time();
    $fileNameToUse = !!$fileName ? "${fileName}.csv" : "output_${time}.csv";
    $fileStream = fopen($fileNameToUse, "w") or die ("cannot open stream");

    if (count($columnNames)) { // write columns
        fputcsv($fileStream, $columnNames);
    }

    foreach ($rows as $row) { // write rows
        fputcsv($fileStream, $row);
    }

    fclose($fileStream) or die("cannot close file");
}
