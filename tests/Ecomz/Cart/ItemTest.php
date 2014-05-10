<?php

namespace Ecomz\Cart;

class ItemTest extends \PHPUnit_Framework_TestCase{

    public function setUp()
    {
        
    }
    public function testDactorydataProvider()
    {
        return array(
            array(array('id'=>1, 'product'=>array('id'=>5551,'name'=>'GosthBuster plasm weapon','value'=>150.33),'quantity'=>1),1,150.33),             array(array('id'=>2, 'product'=>array('id'=>'AAAAA32','name'=>'Batman Belt','value'=>42),'quantity'=>4),2,168)  
        );
    }
    /**
    * @dataProvider testDactorydataProvider
    */
    public function testFactory($itemConfig, $expectedId, $expectedValue)
    {
        $item = \Ecomz\Cart\Item::factory($itemConfig);
        $this->assertEquals($expectedId, $item->getId());
        $this->assertTrue(is_array($item->getProduct()));
        $this->assertEquals($expectedValue, $item->getValue());
    }
}