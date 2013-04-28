<?php

namespace JooS\Jenkins;

class SampleClassTest extends \PHPUnit_Framework_TestCase
{
  
  /**
   * Test sum
   * 
   * @return null
   */
  public function testSum()
  {
    $this->assertEquals(5, SampleClass::add(2, 3));
  }
  
}
