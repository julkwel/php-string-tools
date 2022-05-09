<?php
/**
 * @author <julienrajerison5@gmail.com>
 */

use Julkwel\StringTools\StrCompare;
use PHPUnit\Framework\TestCase;

/**
 * Class StrCompareTest for testing strcompare
 */
class StrCompareTest extends TestCase
{
    /**
     * this test should return false
     */
    public function testFailingComparison()
    {
        $strCompare = new StrCompare();
        $this->assertFalse($strCompare->isStringIsEquals("z", "x"));
    }

    /**
     * this test should succeed
     */
    public function testSuccessComparison()
    {
        $strCompare = new StrCompare();
        $this->assertTrue($strCompare->isStringIsEquals("test", "test"));
    }
}
