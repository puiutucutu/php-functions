<?php

function issetKeyOnObjectOtherwiseNull($key, $object) {
    return isset($object[$key]) ? $object[$key] : null;
}
