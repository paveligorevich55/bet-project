<?php

namespace App\Helpers;

class Helper
{
    /**
     * Class for make helpers function around project
     * There's you can put your functions and use it in all project.
     */

    public static function changeUrlVariable($url, $oldVariable, $newVariable): string {
        $urlParts = parse_url($url);
        $newPath = preg_replace('/'.$oldVariable.'/', $newVariable, $urlParts['path'], 1);
        $newUrl = $urlParts['scheme'] . '://' . $urlParts['host'] . $newPath;

        return $newUrl;
    }
}
