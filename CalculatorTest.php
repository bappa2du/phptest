<?php
/**
 * Created by PhpStorm.
 * User: BAPPA
 * Date: 8/12/14
 * Time: 9:45 PM
 */

require_once 'calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {


    public function test_add()
    {
        $this->assertEquals($this->Calculator->add(1, 2), 3);
    }
}
 