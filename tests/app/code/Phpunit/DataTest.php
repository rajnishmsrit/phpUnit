<?php

use \App\Code\Phpunit\Data;

Class DataTest extends PHPUnit_Framework_TestCase
{
  public function testGetTotal(){
    $data = new Data;
    $this->assertTrue($data->getTotal());
    //$this->assertFalse($data->getTotal());
  }
}
