<?php

/*

$partialSQL = <<<SQL

INSERT INTO cars
(
    brand,
    model
)

>>>;

$data = [
    ["BMW", "3 Series"],
    ["Mercedes", "G Klasse"],
];

insertMultiple($dbhInstance, $partialSQL, $data); 

//
// will generate the following SQL internally
// 
// INSERT INTO cars
// (
//     brand,
//     model
// )
// VALUES
// ("BMW", "3 Series"),
// ("Mercedes", "G Klasse")
//

*/

/**
 * @param \PDO   $dbh
 * @param string $partialInsertSql
 * @param array  $data A 2-d array of data.
 *
 * @return void
 * @see https://docs.microsoft.com/en-us/sql/t-sql/statements/insert-transact-sql?view=sql-server-2017
 * @see https://docs.microsoft.com/en-us/sql/t-sql/queries/table-value-constructor-transact-sql?view=sql-server-2017
 */
function insertMultiple(PDO $dbh, $partialInsertSql, array $data)
{
    $wrapWithParentheses = function($x) {
        return "({$x})";
    };

    $columnListPlaceholder = array_fill(0, count($data[0]), "?");
    $columnListPlaceholderString = $wrapWithParentheses(implode(",", $columnListPlaceholder));

    $params = [];
    $valuesListPlaceholders = [];
    foreach ($data as $datum) {
        $valuesListPlaceholders[] = $columnListPlaceholderString;
        foreach ($datum as $k => $v) {
            $params[] = $v;
        }
    }

    $valuesListPlaceholdersStringified = implode("," . PHP_EOL, $valuesListPlaceholders);
    $stmt = $dbh->prepare("{$partialInsertSql} VALUES {$valuesListPlaceholdersStringified}");
    $stmt->execute($params);
}
