<?php

function issetOr($condition, $showValue)
{
    if (isset($condition)) {
        return $condition;
    }

    return $showValue;
}
