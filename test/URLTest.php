<?php
namespace phpUnitTesting\Test;

use phpUnitTesting\URL;

require_once ('classes/URL.php');

class URLTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Example for dataProvider annotation. Annotation name must be same as the public function name contains test data
    *
    * @param string $originalString String to be sluggified
    * @param string $expectedResult What we expect our slug result to be
    *
    * @dataProvider providerTestSluggifyReturnsSluggifiedString
    */
    public function testSluggifyReturnsSluggifiedString($originalString, $expectedResult)
    {
        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

    /* annotation dataprovider */
    public function providerTestSluggifyReturnsSluggifiedString()
    {
        return array(
            array('This string will be sluggified', 'this-string-will-be-sluggified'),
            array('THIS STRING WILL BE SLUGGIFIED', 'this-string-will-be-sluggified'),
            array('This1 string2 will3 be 44 sluggified10', 'this1-string2-will3-be-44-sluggified10'),
            array('This! @string#$ %$will ()be "sluggified', 'this-string-will-be-sluggified'),
            array("Tänk efter nu – förr'n vi föser dig bort", 'tank-efter-nu-forrn-vi-foser-dig-bort'),
            array('', '')
        );
    }

}
