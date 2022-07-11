<?php

namespace App;


class FizzBuss
{
    public function getList(){
        $arr = [];
        for($i = 1; $i <= 100; $i++){
            if($this->isFizzBussFor($i)) {
                array_push($arr, 'FizzBuss');
            }else if($this->isFizzFor($i)){
                array_push($arr, 'Fizz');
            }else if($this->isBussFor($i)) {
                array_push($arr, 'Buss');
            }else{
                array_push($arr, $i);
            }
        }
        return $arr;
    }


//    Refactorizacion
    public function isFizzFor($number){
        return $number % 3 == 0;
    }

    public function isBussFor($number){
        return $number % 5 == 0;
    }

    public function isFizzBussFor($number){
        return $number % 3 == 0 && $number % 5 == 0;
    }
}