<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzbuzzController extends Controller
{
    public function getList(){
        $arr = [];
        $vetor = [];
        for($i = 1; $i <= 100; $i++){
            if($this->isFizzBuzzFor($i)) {
                array_push($arr, 'FizzBuss');
            }else if($this->isFizzFor($i)){
                array_push($arr, 'Fizz');
            }else if($this->isBuzzFor($i)) {
                array_push($arr, 'Buss');
            }else{
                array_push($arr, $i);
            }
            array_push($vetor, $i);
        }
        return view('fizzbuzz', ['arr'=>$arr, 'vetor'=>$vetor]);
    }
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
