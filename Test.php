<?php //-->
/*
 * A Custom Library
 *
 * Copyright and license information can be found at LICENSE
 * distributed with this package.
 */
class TestTest extends PHPUnit_Framework_TestCase
{
	
	public function testRender()
	{
		$this->assertContains('aw', 'aw');
	}
	
}