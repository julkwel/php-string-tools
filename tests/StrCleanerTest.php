<?php
/**
 * @author <julienrajerison5@gmail.com>
 */

use Julkwel\StringTools\StrCleaner;
use PHPUnit\Framework\TestCase;

/**
 * String cleaner class testing
 *
 * Class StrCleanerTest.
 */
class StrCleanerTest extends TestCase
{
    /**
     * Test cleaning a phrase
     */
    public function testCleaningAPhrase()
    {
        $textToClean = "ÉÉÊÊÎÎÎî ëŷ we are with spécïal charactêrs and w'ill clean";
        $toResults = "eeeeiiii ey we are with special characters and will clean";
        $this->assertEquals($toResults, StrCleaner::cleanString($textToClean));
    }
}
