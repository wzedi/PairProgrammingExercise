<?php
/**
 * Created by PhpStorm.
 * User: wzedi
 * Date: 3/08/2017
 * Time: 7:09 PM
 */

namespace App\Com\Elabor8\Sample;

/**
 * Class NumbersToWords
 * @package App\Com\Elabor8\Sample
 */
class NumbersToWords
{
    protected $numbersToWordsService;

    /**
     * NumbersToWords constructor.
     */
    public function __construct($numbersToWordsService)
    {
        $this->numbersToWordsService = $numbersToWordsService;
    }

    public function say($valueToSay)
    {
        $words = $this->numbersToWordsService->getWordsForNumber($valueToSay);
        return $words;
    }

    public function getNumbersToWordsService()
    {
        return $this->numbersToWordsService;
    }
}