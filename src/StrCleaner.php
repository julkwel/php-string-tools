<?php
/**
 * @author <julienrajerison5@gmail.com>
 */

namespace Julkwel\StringTools;

/**
 * Class StrCleaner.
 */
class StrCleaner
{
    /**
     * Clean special char and convert it to lowercase.
     * Param should be a valid string
     *
     * ref : https://stackoverflow.com/a/14114443/10462455
     *
     * @param string $stringToClean
     *
     * @return string
     */
    public static function cleanString(string $stringToClean): string
    {
        $utf8 = [
            '/[áàâãªä]/u' => 'a',
            '/[ÁÀÂÃÄ]/u' => 'A',
            '/[ÍÌÎÏ]/u' => 'I',
            '/[íìîï]/u' => 'i',
            '/[éèêë]/u' => 'e',
            '/[ÉÈÊË]/u' => 'E',
            '/[óòôõºö]/u' => 'o',
            '/[ÓÒÔÕÖ]/u' => 'O',
            '/[úùûü]/u' => 'u',
            '/[ÚÙÛÜ]/u' => 'U',
            '/[ŶŸ]/u' => 'Y',
            '/[ŷÿ]/u' => 'y',
            '/ç/' => 'c',
            '/Ç/' => 'C',
            '/ñ/' => 'n',
            '/Ñ/' => 'N',
            '/–/' => '-', // UTF-8 hyphen to "normal" hyphen
            "/[’‘'‹›‚]/u" => '', // Literally a single quote
            '/["“”«»„]/u' => '', // Double quote
            '/ /' => ' ', // non-breaking space (equiv. to 0x160)
        ];

        return mb_strtolower(preg_replace(array_keys($utf8), array_values($utf8), $stringToClean));
    }
}
