<?php

/*

$partialSQL = <<<SQL

INSERT INTO Fruits
(
    Name,
    Colour
)

>>>;

$data = [
    ["banana", "yellow"],
    ["lime", "green"],
];

insertMultiple($dbhInstance, $partialSQL, $data);

//
// will generate the following SQL internally
//
// INSERT INTO Fruits
// (
//     Name,
//     Colour
// )
// VALUES
// ("banana", "yellow"),
// ("lime", "green")
//

*/

/**
 * @param \PDO   $dbh
 * @param string $partialInsertSql
 * @param array  $data A 2-d array of data.
 *
 * @return void
 * @example insertMultipleChunked($dbh, "INSERT INTO Fruits (Name, Colour)", [["banana","yellow"], ["lime","green"]]);

 * @see https://docs.microsoft.com/en-us/sql/t-sql/statements/insert-transact-sql?view=sql-server-2017
 * @see https://docs.microsoft.com/en-us/sql/t-sql/queries/table-value-constructor-transact-sql?view=sql-server-2017
 */
function insertMultiple(
    PDO $dbh,
    $partialInsertSql,
    array $data
) {
    $wrapWithParentheses = function($x) {
        return "({$x})";
    };

    $columnsPlaceholders = array_fill(0, count($data[0]), "?");
    $values = [];
    $valuesPlaceholders = [];
    foreach ($data as $item) {
        $valuesPlaceholders[] = $wrapWithParentheses(implode(",", $columnsPlaceholders));
        foreach ($item as $v) {
            $values[] = $v;
        }
    }

    $valuesPlaceholdersStringified = implode("," . PHP_EOL, $valuesPlaceholders);
    $stmt = $dbh->prepare("{$partialInsertSql} VALUES {$valuesPlaceholdersStringified}");
    $stmt->execute($values);
}
