<?php
const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class CalculatorTest
{
public function calculate($fistOperand, $secondOperand, $operator) {
    switch ($operator) {
        case addition:
            return $fistOperand + $secondOperand;
        case subtraction:
            return $fistOperand - $secondOperand;
        case multiplication:
            return $fistOperand * $secondOperand;
        case division:
            if ($secondOperand != 0) {
                return $fistOperand / $secondOperand;
            } else {
                return 'Khong the chia cho so 0';
            }
        default:
            return 'Erorr';
    }
}
}