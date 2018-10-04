<?php

require('../../functions/db.php');

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase {
    public function testcheckArrayCount_success_correctArray() {
        $array = [[],[]];
        $count = 2;
        $output = checkArrayCount($array, $count);

        $this->assertNull($output);
    }
    public function testcheckArrayCount_success_incorrectArray() {
        $array = [[],[]];
        $count = 3;
        $output = checkArrayCount($array, $count);

        $this->assertequals('Invalid array passed', $output);
    }


    public function testshowProjects_success() {
        $data = [[[],[],[],[],[]],[[],[],[],[],[]],[[],[],[],[],[]]]; // 1 containing 3 containing 5 each

        $output = showProjects($data);

        $this->assertInternalType('string', $output);
    }
    public function testshowProjects_malformed_wrongdatatype() {

        $this->expectException(TypeError::class);
        $output = showProjects('x');
    }

    public function testdisplayPortfolio_success() {
        $data = [[[],[],[],[],[],[]],[[],[],[],[],[],[]],[[],[],[],[],[],[]]]; // 1 containing 3 containing 6 each

        $output = displayPortfolio($data);

        $this->assertInternalType('string', $output);
    }
    public function testdisplayPortfolio_malformed_wrongdatatype() {

        $this->expectException(TypeError::class);
        $output = displayPortfolio('x');
    }
}