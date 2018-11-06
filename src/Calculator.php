<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 25/10/2018
 * Time: 00:02
 */
const ADDITION = '+';

const SUBTRACTION = '-';

const MULTIPLICATION = '*';

const DIVISION = '/';
class Calculator
{
    public function calculate($afirstOperand, $secondOperand, $operator)
    {
        switch ($operator) {
            case ADDITION
            :
                return $afirstOperand + $secondOperand;
            case SUBTRACTION:
                return $afirstOperand - $secondOperand;
            case MULTIPLICATION:
                return $afirstOperand * $secondOperand;
            case DIVISION:
                if ($secondOperand != 0) {
                    return $afirstOperand / $secondOperand;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo("Unsupported operation");
        }
    }
}