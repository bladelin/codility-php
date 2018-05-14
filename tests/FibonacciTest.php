<?php
namespace Tests;

use App\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function setUp()
    {
        $this->fibonacci = new Fibonacci();
    }

    /**
    * @dataProvider provider
    */
    public function testShift($value, $expect)
    {
        foreach ($value as $key => $val) {
            $this->assertEquals($this->fibonacci->shift($val), $expect[$key]);
        }
    }

    /**
    * @dataProvider provider
    */
    public function testRecursion($value, $expect)
    {
        foreach ($value as $key => $val) {
            $this->assertEquals($this->fibonacci->recursion($val), $expect[$key]);
        }
    }

    public function provider()
    {
        return array(
          array(array(1, 2, 3, 4, 5, 6), array(1, 1, 2, 3, 5, 8)),
        );
    }
}
