<?php

namespace Tests\Unit;

use App\FizzBuss;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use PHPUnit\Framework\TestCase;

class FizzBussTest extends TestCase
{
    public function test_get_1_when_value_is_1(){
        //Instantiate Class
        $fb = new Fizzbuss();
        //List evaluate
        $list = $fb->getList();
        //Problem evaluate
        $this->assertEquals(1, $list[0]);
    }

    public function test_get_fizz_when_value_is_3(){
        $fb = new Fizzbuss();
        $list = $fb->getList();
        $this->assertEquals('Fizz', $list[2]);
    }

    public function test_get_buss_when_value_is_7(){
        $fb = new Fizzbuss();
        $list = $fb->getList();
        $this->assertEquals('Buss', $list[6]);
    }

    public function test_get_fizzbuss_when_value_is_3_and_7(){
        $fb = new Fizzbuss();
        $list = $fb->getList();
        $this->assertNotEquals('FizzBuss', $list[20], "FizzBuss");
    }
}
