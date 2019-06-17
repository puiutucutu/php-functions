<?php

/**
 * @return string
 * @throws \Exception
 */
function getDateTimeAsATOM()
{
    return (new \DateTime())->format(\DateTime::ATOM);
}
