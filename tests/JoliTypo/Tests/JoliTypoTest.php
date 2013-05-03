<?php
namespace JoliTypo\Tests;

class JoliTypoTest extends \PHPUnit_Framework_TestCase
{
    public function testRegisterProvider()
    {
        $fixer = new \JoliTypo\Fixer();
        $this->assertInstanceOf('JoliTypo\Fixer', $fixer);

        $this->assertEquals("Coucou&#8230;", $fixer->fix("Coucou..."));
    }
}
