<?php

namespace Test1;

use PHPUnit\Framework\TestCase;

class TestCase1 extends TestCase {
    public function test() {
        $this->assertEquals(2, 1 + 1);
    }
}
