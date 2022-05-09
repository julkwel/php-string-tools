<?php
/**
 * @author <julienrajerison5@gmail.com>
 */

namespace Julkwel\StringTools;

/**
 * Class StrCompare.
 *
 * This class is use to compare a multiple string
 */
class StrCompare
{
    /**
     * @param ...$strings
     *
     * @return bool
     */
    public static function isStringIsEquals(...$strings): bool
    {
        $results = [];
        foreach ($strings as $string) {
            $results[$string] = $string;
        }

        return count($results) === 1;
    }

    /**
     * This will compare a text with specials char for example  têxt will be equals to text
     *
     * @param ...$strings
     *
     * @return bool
     */
    public static function compareCleanedString(...$strings): bool
    {
        $results = [];
        foreach ($strings as $string) {
            $results[StrCleaner::cleanString($string)] = $string;
        }

        return count($results) === 1;
    }
}
