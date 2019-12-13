<?php

class Calculator
{
    const Addition = '+';
    const Subtractsion = '-';
    const Multiplication = '*';
    const Division = '/';

    public function calculate($firstOperand, $secondOperand, $operator)
    {
        switch ($operator) {
            case self::Addition:
                return $firstOperand + $secondOperand;
            case self::Subtractsion:
                return $firstOperand - $secondOperand;
            case self::Multiplication:
                return $firstOperand * $secondOperand;
            case self::Division:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo("Unsupported operation");
        }
    }
}