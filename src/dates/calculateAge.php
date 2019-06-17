<?php

/**
 * @param \DateTime $dateOfBirth
 *
 * @return string
 * @throws \Exception
 */
function calculateAge(\DateTime $dateOfBirth)
{
    return $dateOfBirth
        ->diff(new \DateTime("now"))
        ->format("%y");
}