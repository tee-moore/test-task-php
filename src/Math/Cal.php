<?php

namespace BazuTest\Math;

class Cal
{
    public $result = 0;

    /**
     * @param $number
     * @return float
     */
    public function plus($number): float
    {
        return $this->result += $number;
    }

    /**
     * @param $number
     * @return float
     */
    public function minus($number): float
    {
        return $this->result -= $number;
    }

    /**
     * @param $number
     * @return float
     */
    public function multiply($number): float
    {
        return $this->result *= $number;
    }

    /**
     * @param $number
     * @return float
     */
    public function divide($number): float
    {
        if ($number != 0) {
            return $this->result /= $number;
        } else {
            die('Error: division by zero');
        }
    }

    /**
     * @return float
     */
    public function round(): float
    {
        return $this->result = round($this->result);
    }
}
