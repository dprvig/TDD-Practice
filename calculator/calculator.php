<?php namespace Calc;

class Calculator
{
	public function add($a, $b)
	{
		return $a + $b;
	}

	public function subtract($a, $b)
	{
		return $a - $b;
	}

	public function multiply($a, $b)
	{
		return $a * $b;
	}

	public function divide($a, $b)
	{
		return $a / $b;
	}

	public function percentage($a, $b)
	{
		return $this->multiply($this->divide($a, $b), 100);
	}
}