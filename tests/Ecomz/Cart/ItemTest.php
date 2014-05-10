<?php

namespace Ecomz\Cart;

class ItemTest extends \PHPUnit_Framework_TestCase{

    public function testDactorydataProvider()
    {
        return array(
          array(array('id'=>1, 'product'=>array('id'=>5551,'name'=>'GosthBuster plasm weapon','value'=>150.33)),1)  
        );
    }
    /**
    * @dataProvider testDactorydataProvider
    */
    public function testFactory($itemConfig, $expectedId)
    {
        $item = \Ecomz\Cart\Item::factory($itemConfig);
        $this->assertEquals($expectedId, $item->getId());
    }
}