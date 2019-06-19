<?php

/**
 * Create a string for parameter placeholders filled up to the # of params,
 * note that there needs to be one less comma than the count of items.
 *
 * @param array $xs
 *
 * @return string Given an array of three items, returns `(?),(?),(?)`
 * @example
 *
 *   $boundPlaceholders = createBoundPlaceholders($names);
 *
 *   $sql = <<<SQL
 *
 *   SELECT *
 *   FROM addresses
 *   WHERE city = ? AND companyName IN ($boundPlaceholders)
 *
 *   SQL;
 *
 *   $stmt = $this->dbh->prepare($sql);
 *   $stmt->execute(array_merge(["New York"], $names));
 *   $rows = $stmt->fetchAll();
 *
 */
function createBoundPlaceholders(array $xs)
{
    return str_repeat("(?),", count($xs) - 1) . "(?)";
}
