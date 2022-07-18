<?php

namespace App;


class FizzBuzz
{
    public function getList(){
        $arr = [];
        for($i = 1; $i <= 100; $i++){
            if($this->isFizzBuzzFor($i)) {
                array_push($arr, 'FizzBuzz');
            }else if($this->isFizzFor($i)){
                array_push($arr, 'Fizz');
            }else if($this->isBuzzFor($i)) {
                array_push($arr, 'Buzz');
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

    public function isBuzzFor($number){
        return $number % 7 == 0;
    }

    public function isFizzBuzzFor($number){
        return $number % 3 == 0 && $number % 7 == 0;
    }
}
