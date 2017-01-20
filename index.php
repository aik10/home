<?php
    class money {
        public $value = null;
        public $maxValue = null;
        public $curValue = null;

        public function __construct($v,$mV, $cV) {
            $this->value = $v;
            $this->maxValue = $mV;
            $this->curValue = $cV; 
        }

        public function getValue() {
            return $this->value;
        }

        public function getMoney() {
            return $this->value * $this->curValue;
        }

        public function setCurValue($curVal) {
            $this->curValue = $curVal;
        }

        public function setStatr() {
            $this->curValue = 0;
        }
    }

//входные параметры, строка - слагаемых и сумма - число Х
    $str = '1,2,3';
    $x = 5;

//слагаемые в объект Money - в массив объектов $moneyArr
    $strArr = explode(',', $str);
    $moneyArr = array();

    foreach ($strArr as $key => $value) {
        array_push($moneyArr, new money($value, (int)($x / $value), 0));
    }


    foreach ($moneyArr as $key => $value) {
        //для каждой монетки
        for ($i = $value->curValue; $i < $value->maxValue; $i++) { 
            
            foreach ($variable as $key1 => $moneyVal) {
                if ($value->value == $moneyVal->value) {
                    break;
                } else {
                    for ($j = $moneyVal->curValue; $j < $moneyVal->maxValue; $j++) {
                        //здесь типа всех бы обойти - НО!!!
                        
                        $moneyVal->setCurValue($j);
                    }

                    $moneyVal->setStatr();
                }
            }

            $value->setCurValue($i);
        }

        $value->setStatr();
    }

    print_r($moneyArr[1]->getMoney());



s?>



