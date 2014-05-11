<?php

namespace Ecomz\Cart;

class ItemCollectionTest extends \PHPUnit_Framework_TestCase{

    public function testCannotAcceptNonItemItems()
    {
        $this->markTestIncomplete('Não pode aceitar itens que não sejam itens validos');
    }
    public function testCannotAcceptDuplicatedItems()
    {
        $this->markTestIncomplete('Não pode ter itens duplicados');
    }
    public function testIfProductExistInSomeItemNeedCanChooseReplaceItAndAggregateItemValues()
    {
        $this->markTestIncomplete('Se um produto ja esta num item, deve poder escolher atualizar o produto com a nova informacao e atualizar os valores do item, como valor total.');
    }
    public function testIfProductExistInSomeItemNeedCanChooseMaintainItAndAggregateItemValues()
    {
        $this->markTestIncomplete('Se um produto ja esta num item, deve poder escolher não atualizar o produto.');
    }
    public function testCanGetATotalValue()
    {
        $this->markTestIncomplete('poder saber o valor total.');
    }
    public function testCountItems()
    {
        $this->markTestIncomplete('poder saber o numero de itens.');
    }
    public function testCanSaveIt()
    {
        $this->markTestIncomplete('poder salvar a colecao, ou seja, não ter resources e poder ser serializado.');
    }
    public function testRemoveAnItem()
    {
        $this->markTestIncomplete('poder remover um item especifico');
    }
    public function testKnowIfAProductIsOnItemCollection()
    {
        $this->markTestIncomplete('Poder saber se um produto ja existe dentro da colecao, em algum item');
    }
    public function testCanLoadItFromSaved()
    {
        $this->markTestIncomplete('Poder recriar a colecao atraves do dado gravado.');        
    }
    public function testCheckForUpdateProductItems()
    {
        $this->markTestIncomplete('Verificar se os produtos dos itens estao desatualizados');        
    }
    public function testCanUpdateProductItems()
    {
        $this->markTestIncomplete('Poder atualizar os produtos');        
    }
}