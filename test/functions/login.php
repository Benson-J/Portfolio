<?php

require('../../functions/login.php');

use PHPUnit\Framework\TestCase;
const LOGINLIST = ['username' => '$2y$10$i/I2uaPwmad5zPeSdpLSzuJpvgCbxk6YSuHlCjD7sE7BO116JflEW'];

class StackTest extends TestCase {
    public function testverifyPassword_success_correctCredentials() {
        $output = verifyPassword('username', 'password', LOGINLIST);

        $this->assertequals('index.php', $output);
    }
    public function testverifyPassword_success_incorrectCredentials() {
        $output = verifyPassword('wrong', 'wrong', LOGINLIST);

        $this->assertequals('login.php?error=1', $output);
    }
    public function testverifyPassword_malformed_wrongdatatype() {
        $this->expectException(TypeError::class);
        verifyPassword([],[], 1);
    }

    public function testcheckSession_success_loggedIn() {
        $output = checkSession(1);

        $this->assertNull($output);
    }
    public function testcheckSession_success_loggedOut() {
        $output = checkSession(NULL);

        $this->assertEquals('login.php?error=2', $output);
    }
    public function testcheckSession_malformed_wrongdatatype() {
    $output = checkSession([]);

    $this->assertEquals('login.php?error=2', $output);
    }
}