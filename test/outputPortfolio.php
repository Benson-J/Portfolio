<?php

require('../outputPortfolio.php');

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase {
    public function testoutputPortfolio_success() {
        $data = [[[],[],[],[],[]],[[],[],[],[],[]],[[],[],[],[],[]]]; // 1 containing 3 containing 5 each

        $output = outputPortfolio($data);

        $this->assertInternalType('string', $output);
    }

    public function testoutputPortfolio_failure_wrongSubarrayCount() {
        $data = [[],[],[]];

        $output = outputPortfolio($data);

        $this->assertequals('Invalid array passed', $output);
    }

    public function testoutputPortfolio_malformed_wrongdatatype() {

        $this->expectException(TypeError::class);
        $output = outputPortfolio('x');
    }
}