<?php

/**
 * Abstract generic function for wrapping some string with some character.
 *
 * @param string $wrapCharacter
 *
 * @return \Closure
 */
function wrapWith($wrapCharacter) {
    return function($x) use ($wrapCharacter) {
        return "${wrapCharacter}${x}${wrapCharacter}";
    };
}
