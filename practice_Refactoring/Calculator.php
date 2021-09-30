<?php

class Calculator {
    public function calculator($fistOperand, $secondOperand, $opertator) {
        switch ($opertator) {
            case '+' :
                return $fistOperand + $secondOperand;
            case '-' :
                return $fistOperand - $secondOperand;
            case  '*' :
                return $fistOperand * $secondOperand;
            case '/' :
                if ($secondOperand != 0) {
                    return $fistOperand / $secondOperand;
                } else {
                    return 'Khong the chia cho 0';
                }
            default:
                return 'Erorr';
        }
    }
}
