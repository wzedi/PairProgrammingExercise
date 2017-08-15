<?php
/**
 * Created by PhpStorm.
 * User: wzedi
 * Date: 3/08/2017
 * Time: 6:14 PM
 */

use PHPUnit\Framework\TestCase;

/**
 * Class BaseTest
 *
 */
class BaseTest extends TestCase
{
    protected $numbersToWords = null;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $numbersToWordsService = new \App\Com\Elabor8\Sample\SimpleNumbersToWordsService();
        $this->numbersToWords = new App\Com\Elabor8\Sample\NumbersToWords($numbersToWordsService);
    }

    public function testNumbersToWordsServiceIsAvailable()
    {
        $this->assertNotEmpty($this->numbersToWords->getNumbersToWordsService());
    }

    /**
     * This test asserts that the numbersToWords class is instantiated.
     */
    public function testItMustInstantiate()
    {
        $this->assertNotEmpty($this->numbersToWords);
    }

    public function testItMustSayZero()
    {
        $itSaidWhat = $this->numbersToWords->say(0);
        $this->assertEquals("zero", $itSaidWhat);
    }

    public function testItMustSayNineteen()
    {
        $itSaidWhat = $this->numbersToWords->say(19);
        $this->assertEquals("nineteen", $itSaidWhat);
    }

    public function testItMustSayTwenty()
    {
        $itSaidWhat = $this->numbersToWords->say(20);
        $this->assertEquals("twenty", $itSaidWhat);
    }

    public function testItMustSayThirtySeven()
    {
        try {
            $itSaidWhat = $this->numbersToWords->say(37);
            $this->assertEquals("thirty-seven", $itSaidWhat);
        } catch (\App\Com\Elabor8\Sample\NumberNotInMapException $e) {
            $this->fail("Number 37 not found");
        }
    }


    public function testItMustSayNinetyNine()
    {
        try {
            $itSaidWhat = $this->numbersToWords->say(99);
            $this->assertEquals("ninety-nine", $itSaidWhat);
        } catch (\App\Com\Elabor8\Sample\NumberNotInMapException $e) {
            $this->fail("Number 99 not found");
        }
    }

    public function testItMustFailWithAnException()
    {
        try {
            $itSaidWhat = $this->numbersToWords->say(100);
            $this->fail();
        } catch (\App\Com\Elabor8\Sample\NumberNotInMapException $e) {
            $this->assertNotEmpty($e);
        }
    }

}