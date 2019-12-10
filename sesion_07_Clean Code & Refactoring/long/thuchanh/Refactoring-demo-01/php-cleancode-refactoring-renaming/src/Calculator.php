<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 25/10/2018
 * Time: 00:02
 */
const ADDITION = "+";
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator
{
    public function calculate($a, $b, $o) {
        switch ($o) {
            case ADDITION:
                return $a + $b;
            case SUBTRACTION:
                return $a - $b;
            case MULTIPLICATION:
                return $a * $b;
            case DIVISION:
                if ($b != 0) {
                    return $a / $b;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
    }
}