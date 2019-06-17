<?php

/**
 * @return string
 * @throws \Exception
 */
function getDatetimeAsISO8601()
{
    return (new \DateTime())->format(\DateTime::ISO8601);
}
