<?php
namespace Ecomz\Cart;

interface itemable{
    
    public function getProduct();
    public static function factory(array $configItem);
    public function getId();
}