<?php

use PHPUnit\Framework\TestCase;

require_once '../../vendor/autoload.php';

class mockeryTest extends TestCase {
    /**
     * [testCreateAMockedObject description]
     * @return [type] [description]
     */
    function testCreateAMockedObject() {
        // With PHPUnit
     //   $phpunitMock = $this->getMock('AClassToBeMocked');

        // With Mockery
        $mockeryMock = \Mockery::mock('AClassToBeMocked');
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    function testDemonstratePHPUnitCallIndexingOnTheSameClass() {
        //$someObject = new SomeClass();
        $firstValue = 'first value';
        $secondValue = 'second value';

        // With PHPUnit
        $phpunitMock = $this->getMock('AClassToBeMocked');
        $phpunitMock->expects($this->at(0))->method('someMethod')->will($this->returnValue($firstValue));
        $phpunitMock->expects($this->at(1))->method('someMethod')->will($this->returnValue($secondValue));
        // Expect the returned value
        $this->assertEquals('first value second value', $someObject->concatenate($phpunitMock));
        $this->assertEquals('first value second value', $someObject->concatenate($phpunitMock));

    }

}

 ?>
