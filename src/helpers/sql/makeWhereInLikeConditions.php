<?php

/**
 * Creates LIKE conditions to be used in the WHERE clause of a query. When there
 * are multiple `LIKE` conditions, they will be wraped together with an `AND()`
 * statement.
 *
 * @param string   $columnName
 * @param string[] $words
 * @param integer  $wildcardPosition A value of 1 will prefix the `%`, 2 will suffix the `%`, and 3 will wrap the `%` around the word.
 * @return string
 *
 * @throws \Exception
 *
 * @example makeWhereInLikeConditions("FirstName", ["John","Michael"]); //=> "AND (FirstName LIKE `%John%` OR FirstName LIKE '%Michael%')
 * @example makeWhereInLikeConditions("FirstName", ["John""]); //=> "AND (FirstName LIKE `%John%`)
 */
function makeWhereInLikeConditions($columnName, array $words, $wildcardPosition = 3)
{
    if (!array_intersect([1, 2, 3], [$wildcardPosition])) {
        throw new Exception("Wild card position not specified");
    }

    if (count($words) === 1) {
        $word = $words[0];
        $word = wrapWildcard($word, $wildcardPosition);
        return "AND ($columnName LIKE $word)";
    }

    $conditionals = [];
    foreach ($words as $word) {
        $word = wrapWildcard($word, $wildcardPosition);
        $conditionals[] = "$columnName LIKE $word";
    }
    $ors = implode(" OR ", $conditionals);

    return "AND ($ors)";
}

/**
 * @param string  $term
 * @param integer $wildcardPosition
 * @return string
 */
function wrapWildcard($term, $wildcardPosition)
{
    if ($wildcardPosition === 1) return "'%{$term}'";
    if ($wildcardPosition === 2) return "'{$term}%'";
    if ($wildcardPosition === 3) return "'%{$term}%'";
}
