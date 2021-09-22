<?php

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "array/chunk.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "insertMultiple.php";

/**
 * @param \PDO   $dbh
 * @param string $partialInsertSql
 * @param array  $data A 2-d array of data.
 *
 * @param int    $MAX_PARAMS Set to 2000 as the default to match the maximum
 *                           param limit in TSQL.
 *
 * @return void
 * @example insertMultipleChunked($dbh, "INSERT INTO Fruits VALUES (Name, Colour)", [["banana","yellow"], ["lime","green"]]);
 *
 * @see https://docs.microsoft.com/en-us/sql/t-sql/statements/insert-transact-sql?view=sql-server-2017
 * @see https://docs.microsoft.com/en-us/sql/t-sql/queries/table-value-constructor-transact-sql?view=sql-server-2017
 */
function insertMultipleChunked(
    PDO $dbh,
    $partialInsertSql,
    array $data,
    $MAX_PARAMS = 2000
) {
    $valuesPerRow = count($data[0]);
    $valuesTotal = $valuesPerRow * count($data);
    $chunkBy = $MAX_PARAMS / $valuesPerRow;

    if ($valuesTotal > $MAX_PARAMS) {
        foreach (chunk($data, $chunkBy) as $chunk) {
            insertMultiple($dbh, $partialInsertSql, $chunk);
        }
    } else {
        insertMultiple($dbh, $partialInsertSql, $data);
    }
}
