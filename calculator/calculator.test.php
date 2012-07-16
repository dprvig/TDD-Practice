<?php use Calc\Calculator;

require 'calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	protected $calc;

	protected function setUp()
	{
		$this->calc = new Calculator();
	}

	protected function tearDown()
	{
		unset($calc);
	}

	public function test_add()
	{
		$expected = 15;
		$result = $this->calc->add(10, 5);
		$this->assertEquals($expected, $result);
	}

	public function test_subtract()
	{
		$expected = 5;
		$result = $this->calc->subtract(10, 5);

		$this->assertEquals($expected, $result);
	}

	public function test_multiply()
	{
		$expected = 50;
		$result = $this->calc->multiply(10, 5);

		$this->assertEquals($expected, $result);
	}

	public function test_divide()
	{
		$expected = 2;
		$result = $this->calc->divide(10, 5);

		$this->assertEquals($expected, $result);
	}

	public function test_percentage()
	{
		$expected = 80;
		$result = $this->calc->percentage(40, 50);

		$this->assertEquals($expected, $result);
	}
}