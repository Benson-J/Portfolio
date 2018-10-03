<?php

require('../../admin/dbDisplay.php');

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase {
    public function testdisplayPortfolio_success() {
        $data = [[[],[],[],[],[],[]],[[],[],[],[],[],[]],[[],[],[],[],[],[]]]; // 1 containing 3 containing 6 each

        $output = displayPortfolio($data);

        $this->assertInternalType('string', $output);
    }

    public function testdisplayPortfolio_failure_wrongSubarrayCount() {
        $data = [[],[],[]];

        $output = displayPortfolio($data);

        $this->assertequals('Invalid array passed', $output);
    }

    public function testdisplayPortfolio_malformed_wrongdatatype() {

        $this->expectException(TypeError::class);
        $output = displayPortfolio('x');
    }
}