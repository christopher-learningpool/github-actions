<?php

use core\Average;
use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase {
    protected $average;

    public function setUp(): void {
        $this->average = new Average();
    }

    public function testCalculationOfMean() {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->average->mean($numbers));
    }

    public function testCalculationOfMedian() {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->average->median($numbers));
    }
}
