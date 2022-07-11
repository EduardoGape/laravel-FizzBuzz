<?php

namespace Tests\Unit;

use App\FizzBuss;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FizzBussTest extends TestCase
{
    public function test_get_1_when_value_is_1(){
        //Instantiate Class
        $fb = new FizzBuss();
        //List evaluate
        $list = $fb->getList();
        //Problem evaluate
        $this->assertEquals(1, $list[0]);
    }

    public function test_get_fizz_when_value_is_3(){
        $fb = new FizzBuss();
        $list = $fb->getList();
        $this->assertEquals('Fizz', $list[2]);
    }

    public function test_get_buss_when_value_is_5(){
        $fb = new FizzBuss();
        $list = $fb->getList();
        $this->assertEquals('Buss', $list[4]);
    }

    public function test_get_fizzbuss_when_value_is_3_and_5(){
        $fb = new FizzBuss();
        $list = $fb->getList();
        $this->assertEquals('FizzBuss', $list[14]);
    }


    /**
     * @param $number
     * @param $expectedValue
     * @dataProvider numbers
     * @author ofaaoficial
     */
    public function test_correct_values_for_100_numbers($number, $expectedValue){
        $fb = new FizzBuss();
        $list = $fb->getList();
        $this->assertEquals( $expectedValue, $list[$number]);
    }

    public function numbers(){
        return [
            [0, "1"],
            [1, "2"],
            [2, "Fizz"],
            [3, "4"],
            [4, "Buss"],
            [5, "Fizz"],
            [6, "7"],
            [7, "8"],
            [8, "Fizz"],
            [9, "Buss"],
            [10, "11"],
            [11, "Fizz"],
            [12, "13"],
            [13, "14"],
            [14, "FizzBuss"],
            [15, "16"],
            [16, "17"],
            [17, "Fizz"],
            [18, "19"],
            [19, "Buss"],
            [20, "Fizz"],
            [21, "22"],
            [22, "23"],
            [23, "Fizz"],
            [24, "Buss"],
            [25, "26"],
            [26, "Fizz"],
            [27, "28"],
            [28, "29"],
            [29, "FizzBuss"],
            [30, "31"],
            [31, "32"],
            [32, "Fizz"],
            [33, "34"],
            [34, "Buss"],
            [35, "Fizz"],
            [36, "37"],
            [37, "38"],
            [38, "Fizz"],
            [39, "Buss"],
            [40, "41"],
            [41, "Fizz"],
            [42, "43"],
            [43, "44"],
            [44, "FizzBuss"],
            [45, "46"],
            [46, "47"],
            [47, "Fizz"],
            [48, "49"],
            [49, "Buss"],
            [50, "Fizz"],
            [51, "52"],
            [52, "53"],
            [53, "Fizz"],
            [54, "Buss"],
            [55, "56"],
            [56, "Fizz"],
            [57, "58"],
            [58, "59"],
            [59, "FizzBuss"],
            [60, "61"],
            [61, "62"],
            [62, "Fizz"],
            [63, "64"],
            [64, "Buss"],
            [65, "Fizz"],
            [66, "67"],
            [67, "68"],
            [68, "Fizz"],
            [69, "Buss"],
            [70, "71"],
            [71, "Fizz"],
            [72, "73"],
            [73, "74"],
            [74, "FizzBuss"],
            [75, "76"],
            [76, "77"],
            [77, "Fizz"],
            [78, "79"],
            [79, "Buss"],
            [80, "Fizz"],
            [81, "82"],
            [82, "83"],
            [83, "Fizz"],
            [84, "Buss"],
            [85, "86"],
            [86, "Fizz"],
            [87, "88"],
            [88, "89"],
            [89, "FizzBuss"],
            [90, "91"],
            [91, "92"],
            [92, "Fizz"],
            [93, "94"],
            [94, "Buss"],
            [95, "Fizz"],
            [96, "97"],
            [97, "98"],
            [98, "Fizz"],
            [99, "Buss"],
        ];
    }

}