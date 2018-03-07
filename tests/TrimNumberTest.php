<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TrimNumberTest extends TestCase
{

	private function parseIt($a) : string
	{
		return preg_replace('/\.?[0,\s]*$/', '', $a);
	}

	/**
     * @dataProvider additionProvider
     * @return void
     */
    public function testBasicTest($a, $expected)
    {
       $this->assertSame($this->parseIt($a), $expected);
    }

	public function additionProvider ()
	{
		return [
			['55.100', '55.1'],
			['55.01', '55.01'],
			['50.001', '50.001'],
			['50.0010', '50.001'],
			['50.0010 ', '50.001'],
			['50.0010, ', '50.001'],
			['55.00', '55']
		];
	}
}
