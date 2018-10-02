<?php

require('../../admin/dbDisplay.php');

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase {
    public function testdisplayTitle_success() {
        $db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $output = displayTitle($db, 'about');
        $this->assertInternalType('string', $output);
}