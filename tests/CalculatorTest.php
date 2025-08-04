<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    private $calculator;

    protected function setUp(): void {
        $this->calculator = new Calculator();
    }

    public function testAdd() {
        $this->assertEquals(4, $this->calculator->add(2, 2));
        $this->assertEquals(0, $this->calculator->add(-1, 1));
        $this->assertEquals(5.5, $this->calculator->add(2.5, 3));
    }

    public function testSubtract() {
        $this->assertEquals(0, $this->calculator->subtract(2, 2));
        $this->assertEquals(-2, $this->calculator->subtract(2, 4));
        $this->assertEquals(0.5, $this->calculator->subtract(3.5, 3));
    }

    public function testMultiply() {
        $this->assertEquals(4, $this->calculator->multiply(2, 2));
        $this->assertEquals(-6, $this->calculator->multiply(-2, 3));
        $this->assertEquals(7.5, $this->calculator->multiply(2.5, 3));
    }

    public function testDivide() {
        $this->assertEquals(2, $this->calculator->divide(4, 2));
        $this->assertEquals(0.5, $this->calculator->divide(2, 4));
        $this->assertEquals(1.5, $this->calculator->divide(3, 2));
    }

    public function testDivideByZero() {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->divide(5, 0);
    }
}