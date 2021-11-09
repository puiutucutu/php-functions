<?php

function readDirectoryContentsUsingScanDir($path, $filePathFull = false)
{
    $out = [];
    if (is_dir($path)) {
        $subPaths = array_diff(scandir($path), [".", ".."]);

        foreach ($subPaths as $subPath) {
            $subPathFull = $path . DIRECTORY_SEPARATOR . $subPath;

            if (is_dir($subPathFull)) {
                $out[$subPath] = readDirectoryContentsUsingScanDir($subPathFull, $filePathFull);
            } else {
                if ($filePathFull) {
                    $out[] = $subPathFull;
                } else {
                    $out[] = $subPath;
                }
            }
        }
    }
    return $out;
}
