<?php
use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    public function testMergeOfBarDidNotHappen()
    {
        //$foo = $this->getMockBuilder('Foo')->getMock();
        $bar = $this->getMockBuilder('Bar')->getMock();
        $bar->expects($this->any())
        ->method('getStatus')
        ->will($this->returnValue(true));

        $this->assertTrue($bar->getStatus());
    }
}
?>
