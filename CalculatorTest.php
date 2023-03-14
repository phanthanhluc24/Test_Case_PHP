<?php
    include "./Calculator.php";
    use PHPUnit\Framework\TestCase;
    class CalculatorTest extends TestCase
    {
        public function testAddition()
        {
            $calculator = new Calculator();
            $result = $calculator->add(4, 3);
            $this->assertEquals(10, $result);
        }

        public function testAddition1()
        {
            $calculator1 = new Calculator();
            $result = $calculator1->add(4, 3);
            $this->assertEquals(10, $result);
        }
    }
?>