<?php
//Filename: MockeryABetterWayOfMockingTest.php
require_once 'vendor/autoload.php';

class MockeryVersusPHPUnitGetMockTest extends PHPUnit_Framework_TestCase {

    function testCreateAMockedObject() {
        // With PHPUnit
        $phpunitMock = $this->getMock('AClassToBeMocked');

        // With Mockery
        $mockeryMock = \Mockery::mock('AClassToBeMocked');
    }

}

class AClassToBeMocked {

}
