<?php
namespace phpUnitTesting\Test;

use phpUnitTesting\URL;

require_once ('classes/URL.php');

class URLTest extends \PHPUnit_Framework_TestCase
{

	public function testSluggify()
	{
		$originalString = 'This string will be sluggified';
        $expectedResult = 'this-string-will-be-sluggified';

        $url = new URL();

        $res = $url->sluggify($expectedResult);

        $this->assertEquals($expectedResult, $res);

    }

}
