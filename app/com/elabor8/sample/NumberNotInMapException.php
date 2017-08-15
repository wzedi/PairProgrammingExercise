<?php
/**
 * Created by PhpStorm.
 * User: wzedi
 * Date: 3/08/2017
 * Time: 7:46 PM
 */

namespace App\Com\Elabor8\Sample;


class NumberNotInMapException extends \Exception
{
    protected $number;

    public function __construct($number)
    {
        $this->number = $number;
    }
}