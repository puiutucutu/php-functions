<?php

function getMemoryUsedInMb()
{
    return memory_get_peak_usage() / 1e6;
}
