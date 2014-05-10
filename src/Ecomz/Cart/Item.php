<?php

namespace Ecomz\Cart;

class Item implements itemable
{
    private $config;

    private function __construct(array $configItem)
    {
        $this->config = $configItem;
    }

    public static function factory(array $configItem)
    {
        return new self($configItem);
    }

    public function getId()
    {
        return $this->config['id'];
    }

    public function getProduct()
    {
        return $this->config['product'];
    }
    public function getValue()
    {
        return $this->config['product']['value'] * $this->config['quantity'];
    }
}