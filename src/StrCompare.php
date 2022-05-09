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
    public function isStringIsEquals(...$strings)
    {
        $prevString = [];
        foreach ($strings as $string) {
            $prevString[$string] = $string;
        }

        return count($prevString) === 1;
    }
}
