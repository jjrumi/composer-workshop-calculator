<?php

namespace Emmetog\Calculator;

class Calculator
{
	public function addify( $firstNumber, $secondNumber )
	{
		return $firstNumber + $secondNumber;
	}
	
	public function minus( $minuend, $subtrahend )
	{
		return $minuend - $subtrahend;
	}
	
	public function multiply( $firstFactor, $secondFactor )
	{
		return $firstFactor * $secondFactor;
	}
	
	public function devide( $numerator, $denominator )
	{
		return $numerator / $denominator;
	}
	
}

?>
