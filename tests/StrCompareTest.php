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
        $this->assertFalse(StrCompare::isStringIsEquals("z", "x"));
    }

    /**
     * this test should succeed
     */
    public function testSuccessComparison()
    {
        $this->assertTrue(StrCompare::isStringIsEquals("test", "test"));
    }

    /**
     * testing special comparison
     */
    public function testWithSpecialChar()
    {
        $this->assertTrue(StrCompare::compareCleanedString("SPÊCÏAL CHAR'S", "special chars"));
    }
}
