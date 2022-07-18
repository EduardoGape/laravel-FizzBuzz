<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzbussController extends Controller
{
    public function getList(){
        $arr = [];
        $vetor = [];
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
            array_push($vetor, $i);
        }
        return view('fizzbuss', ['arr'=>$arr, 'vetor'=>$vetor]);
    }
    public function isFizzFor($number){
        return $number % 3 == 0;
    }

    public function isBussFor($number){
        return $number % 7 == 0;
    }

    public function isFizzBussFor($number){
        return $number % 3 == 0 && $number % 7 == 0;
    }
}
