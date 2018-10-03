<?php

require('../../admin/dbDisplay.php');

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase {
    public function testdisplayPortfolio_success() {
        $db = new PDO('mysql:dbname=testPortfolioJames;host=127.0.0.1', 'root');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $stmtPortfolio = $db->query('SELECT `id`,`title`,`link`,`github`,`image`,`description` FROM `portfolio`;');
        $dataPortfolio = $stmtPortfolio->fetchAll();

        $output = displayPortfolio($dataPortfolio);

        $this->assertInternalType('string', $output);
    }

    public function testdisplayPortfolio_failure_wrongSubarrayCount() {
        $dataPortfolio = [[],[],[]];

        $output = displayPortfolio($dataPortfolio);

        $this->assertequals('Invalid array passed', $output);
    }

    public function testdisplayPortfolio_malformed() {

        $this->expectException(TypeError::class);
        $output = displayPortfolio('x');
    }
}