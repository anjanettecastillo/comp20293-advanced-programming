<?php
class Program1
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function Modulus($divisor)
    {
        if($divisor > $this->number)
        {
            throw new \InvalidArgumentException('Divisor is greater than the dividend');
        }
        elseif (empty($divisor))
        {
            throw new \InvalidArgumentException('Divisor is empty');
        }
        elseif(!is_numeric($divisor))
        {
            throw new \InvalidArgumentException('Divisor is not a number');
        }
        elseif(!is_int($divisor))
        {
            throw new \InvalidArgumentException('Divisor is not an integer');
        }
       
        return $this->number % $divisor;
    }
}